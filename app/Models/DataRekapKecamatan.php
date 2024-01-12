<?php

namespace App\Models;

use App\Entities\Kecamatan;
use Illuminate\Support\Collection;

class DataRekapKecamatan
{
    /**
     * @param int $id_desa
     * @param int $id_kecamatan
     * @param int $rw
     * @param int $rt
     * @param string $dasa_wisma
     * @param string $dusun
     * @param int $periode
     * @return Collection<Kecamatan> $kecamatans
     */
    public static function getKecamatan( $dusun,$rw, $rt, $periode)
    {
        /** @var Collection<Kecamatan> */
        $result = new Collection();

        /** @var Collection<string, Collection<DataKeluarga>> */
        $kecamatans = DataKeluarga::query()
                ->with(['industri', 'pemanfaatan'])
                ->where('periode', $periode)
                ->get()
                ->groupBy('id_kecamatan');
            // dd($desas);
        foreach ($kecamatans as $keluargas) {
            $keluarga = $keluargas->first();
                $kecamatans = new Kecamatan();
                $kecamatans->id = $keluarga->id;
                $kecamatans->id_kecamatan = intval($keluarga->id_kecamatan);
                $kecamatans->id_desa = intval($keluarga->id_desa);
                $kecamatans->kecamatan = $keluarga->kecamatan;
                $desa =  $keluargas->groupBy(function ($item) {
                    return strtolower($item->nama_desa);
                });
                $dusun =  $keluargas->groupBy(function ($item) {
                    return strtolower($item->dusun);
                });
                $rw =  $keluargas->groupBy('rw');
                $rt =  $keluargas->groupBy('rt');
                $dasa_wisma = $keluargas->groupBy('id_dasawisma');

                $kecamatans->jumlah_desa = count($desa);
                $kecamatans->jumlah_dusun = count($dusun);
                $kecamatans->jumlah_rw = count($rw);
                $kecamatans->jumlah_rt = count($rt);
                $kecamatans->jumlah_dasa_wisma = count($dasa_wisma);
                $kecamatans->jumlah_KRT = $keluargas->count('id');
                $kecamatans->jumlah_KK = $keluargas->sum('jumlah_KK');
                $kecamatans->jumlah_laki_laki = $keluargas->sum('jumlah_laki');
                $kecamatans->jumlah_perempuan = $keluargas->sum('jumlah_perempuan');
                $kecamatans->jumlah_balita_laki = $keluargas->sum('jumlah_balita_laki');
                $kecamatans->jumlah_balita_perempuan = $keluargas->sum('jumlah_balita_perempuan');
                $kecamatans->jumlah_3_buta_laki = $keluargas->sum('jumlah_3_buta_laki');
                $kecamatans->jumlah_3_buta_perempuan = $keluargas->sum('jumlah_3_buta_perempuan');
                $kecamatans->jumlah_PUS = $keluargas->sum('jumlah_PUS');
                $kecamatans->jumlah_WUS = $keluargas->sum('jumlah_WUS');
                $kecamatans->jumlah_ibu_hamil = $keluargas->sum('jumlah_ibu_hamil');
                $kecamatans->jumlah_ibu_menyusui = $keluargas->sum('jumlah_ibu_menyusui');
                $kecamatans->jumlah_lansia = $keluargas->sum('jumlah_lansia');
                $kecamatans->jumlah_kebutuhan_khusus = $keluargas->sum('jumlah_kebutuhan_khusus');
                $kecamatans->jumlah_kriteria_rumah_sehat = $keluargas->sum('kriteria_rumah');
                $kecamatans->jumlah_kriteria_rumah_tidak_sehat = $keluargas->count() - $keluargas->sum('kriteria_rumah');
                $kecamatans->jumlah_punya_tempat_sampah = $keluargas->sum('punya_tempat_sampah');
                $kecamatans->jumlah_punya_saluran_air = $keluargas->sum('punya_saluran_air');
                $kecamatans->jumlah_tempel_stiker = $keluargas->sum('tempel_stiker');
                $kecamatans->jumlah_sumber_air_pdam = $keluargas->where('sumber_air', 1)->count();
                $kecamatans->jumlah_sumber_air_sumur = $keluargas->where('sumber_air', 2)->count();
                $kecamatans->jumlah_sumber_air_sungai = $keluargas->where('sumber_air', 3)->count();
                $kecamatans->jumlah_sumber_air_dll = $keluargas->where('sumber_air', 4)->count();
                $kecamatans->punya_jamban = $keluargas->sum('punya_jamban');
                $kecamatans->jumlah_makanan_pokok_beras = $keluargas->where('makanan_pokok', 1)->count();
                $kecamatans->jumlah_makanan_pokok_non_beras = $keluargas->where('makanan_pokok', 0)->count();
                $kecamatans->jumlah_aktivitas_UP2K = $keluargas->sum('aktivitas_UP2K');
                $kecamatans->jumlah_have_pemanfaatan = $keluargas->sum('have_pemanfaatan');
                $kecamatans->jumlah_have_industri = $keluargas->sum('have_industri');
                $kecamatans->jumlah_have_kegiatan = $keluargas->sum('have_kegiatan');

                $result->push($kecamatans);

        }

        return $result;
    }
}