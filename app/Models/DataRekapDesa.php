<?php

namespace App\Models;

use App\Entities\Desa;
use Illuminate\Support\Collection;

class DataRekapDesa
{
    /**
     * @param int $id_desa
     * @param int $id_kecamatan
     * @param int $rw
     * @param int $rt
     * @param string $dasa_wisma
     * @param string $dusun
     * @param int $periode
     * @return Collection<Desa> $desas
     */
    public static function getDesa( $dusun,$rw, $rt, $periode, $id_kecamatan)
    {
        /** @var Collection<Desa> */
        $result = new Collection();

        /** @var Collection<string, Collection<DataKeluarga>> */
        $desas = DataKeluarga::query()
                ->with(['industri', 'pemanfaatan'])
                ->where('periode', $periode)
                ->where('id_kecamatan', $id_kecamatan)
                ->get()
                ->groupBy('dusun_id');
            // dd($desas);
        foreach ($desas as $keluargas) {
            $keluarga = $keluargas->first();
                $desa = new Desa();
                $desa->id = $keluarga->id;
                $desa->id_kecamatan = intval($keluarga->id_kecamatan);
                $desa->id_desa = intval($keluarga->id_desa);
                // $desa->nama = $keluarga->nama;
                $desa->desa = $keluarga->desa;
                $dusun =  $keluargas->groupBy(function ($item) {
                    return strtolower($item->dusun);
                });
                $rw =  $keluargas->groupBy('rw');
                $rt =  $keluargas->groupBy('rt');
                $dasa_wisma = $keluargas->groupBy('id_dasawisma');

                $desa->jumlah_dusun = count($dusun);
                $desa->jumlah_rw = count($rw);
                $desa->jumlah_rt = count($rt);
                $desa->jumlah_dasa_wisma = count($dasa_wisma);
                $desa->jumlah_KRT = $keluargas->count('id');
                $desa->jumlah_KK = $keluargas->sum('jumlah_KK');
                $desa->jumlah_laki_laki = $keluargas->sum('jumlah_laki');
                $desa->jumlah_perempuan = $keluargas->sum('jumlah_perempuan');
                $desa->jumlah_balita_laki = $keluargas->sum('jumlah_balita_laki');
                $desa->jumlah_balita_perempuan = $keluargas->sum('jumlah_balita_perempuan');
                $desa->jumlah_3_buta_laki = $keluargas->sum('jumlah_3_buta_laki');
                $desa->jumlah_3_buta_perempuan = $keluargas->sum('jumlah_3_buta_perempuan');
                $desa->jumlah_PUS = $keluargas->sum('jumlah_PUS');
                $desa->jumlah_WUS = $keluargas->sum('jumlah_WUS');
                $desa->jumlah_ibu_hamil = $keluargas->sum('jumlah_ibu_hamil');
                $desa->jumlah_ibu_menyusui = $keluargas->sum('jumlah_ibu_menyusui');
                $desa->jumlah_lansia = $keluargas->sum('jumlah_lansia');
                $desa->jumlah_kebutuhan_khusus = $keluargas->sum('jumlah_kebutuhan_khusus');
                $desa->jumlah_kriteria_rumah_sehat = $keluargas->sum('kriteria_rumah');
                $desa->jumlah_kriteria_rumah_tidak_sehat = $keluargas->count() - $keluargas->sum('kriteria_rumah');
                $desa->jumlah_punya_tempat_sampah = $keluargas->sum('punya_tempat_sampah');
                $desa->jumlah_punya_saluran_air = $keluargas->sum('punya_saluran_air');
                $desa->jumlah_tempel_stiker = $keluargas->sum('tempel_stiker');
                $desa->jumlah_sumber_air_pdam = $keluargas->where('sumber_air', 1)->count();
                $desa->jumlah_sumber_air_sumur = $keluargas->where('sumber_air', 2)->count();
                $desa->jumlah_sumber_air_sungai = $keluargas->where('sumber_air', 3)->count();
                $desa->jumlah_sumber_air_dll = $keluargas->where('sumber_air', 4)->count();
                $desa->punya_jamban = $keluargas->sum('punya_jamban');
                $desa->jumlah_makanan_pokok_beras = $keluargas->where('makanan_pokok', 1)->count();
                $desa->jumlah_makanan_pokok_non_beras = $keluargas->where('makanan_pokok', 0)->count();
                $desa->jumlah_aktivitas_UP2K = $keluargas->sum('aktivitas_UP2K');
                $desa->jumlah_have_pemanfaatan = $keluargas->sum('have_pemanfaatan');
                $desa->jumlah_have_industri = $keluargas->sum('have_industri');
                $desa->jumlah_have_kegiatan = $keluargas->sum('have_kegiatan');

                $result->push($desa);

        }

        return $result;
    }
}