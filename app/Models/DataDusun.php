<?php

namespace App\Models;

use App\Entities\Dusun;
use Illuminate\Support\Collection;

class DataDusun
{
    /**
     * @param int $id_desa
     * @param int $rw
     * @param int $rt
     * @param string $dasa_wisma
     * @param string $dusun
     * @param int $periode
     * @return Collection<Dusun> $dusuns
     */
    public static function getDusun($id_desa, $dusun,$rw, $rt, $periode)
    {
        /** @var Collection<Dusun> */
        $result = new Collection();

        /** @var Collection<string, Collection<DataKeluarga>> */
        $dusuns = DataKeluarga::query()
                ->with(['industri', 'pemanfaatan'])
                ->where('id_desa', $id_desa)

                ->where('periode', $periode)
                ->get()
                ->groupBy('dusun');
            // dd($dusuns);
        foreach ($dusuns as $keluargas) {

            $keluarga = $keluargas->first();

                $dusun = new Dusun();
                $dusun->id = $keluarga->id;
                $dusun->id_kecamatan = intval($keluarga->id_kecamatan);
                $dusun->id_desa = intval($keluarga->id_desa);
                $dusun->dusun = $keluarga->dusun;
                $dusun->dusun = intval($keluarga->dusun);
                // $dusun->dusun = intval($keluarga->dusun);
                $dusun->nama = $keluarga->nama;
                $dusun->dusun = $keluarga->dusun;
                $rw =  $keluargas->groupBy(function ($item) {
                    return strtolower($item->rw);
                });
                $rt =  $keluargas->groupBy(function ($item) {
                    return strtolower($item->rt);
                });
                $dasa_wisma = $keluargas->groupBy(function ($item) {
                    return strtolower($item->dasa_wisma);
                });

                $dusun->jumlah_rw = count($rw);
                $dusun->jumlah_rt = count($rt);
                $dusun->jumlah_dasa_wisma = count($dasa_wisma);
                $dusun->jumlah_KRT = $keluargas->count('id');
                $dusun->jumlah_KK = $keluargas->sum('jumlah_KK');
                $dusun->jumlah_laki_laki = $keluargas->sum('jumlah_laki');
                $dusun->jumlah_perempuan = $keluargas->sum('jumlah_perempuan');
                $dusun->jumlah_balita_laki = $keluargas->sum('jumlah_balita_laki');
                $dusun->jumlah_balita_perempuan = $keluargas->sum('jumlah_balita_perempuan');
                $dusun->jumlah_3_buta = $keluargas->sum('jumlah_3_buta');
                $dusun->jumlah_PUS = $keluargas->sum('jumlah_PUS');
                $dusun->jumlah_WUS = $keluargas->sum('jumlah_WUS');
                $dusun->jumlah_ibu_hamil = $keluargas->sum('jumlah_ibu_hamil');
                $dusun->jumlah_ibu_menyusui = $keluargas->sum('jumlah_ibu_menyusui');
                $dusun->jumlah_lansia = $keluargas->sum('jumlah_lansia');
                $dusun->jumlah_kebutuhan_khusus = $keluargas->sum('jumlah_kebutuhan_khusus');
                $dusun->jumlah_kriteria_rumah_sehat = $keluargas->sum('kriteria_rumah');
                $dusun->jumlah_kriteria_rumah_tidak_sehat = $keluargas->count() - $keluargas->sum('kriteria_rumah');
                $dusun->jumlah_punya_tempat_sampah = $keluargas->sum('punya_tempat_sampah');
                $dusun->jumlah_punya_saluran_air = $keluargas->sum('punya_saluran_air');
                $dusun->jumlah_tempel_stiker = $keluargas->sum('tempel_stiker');
                $dusun->jumlah_sumber_air_pdam = $keluargas->where('sumber_air', 1)->count();
                $dusun->jumlah_sumber_air_sumur = $keluargas->where('sumber_air', 2)->count();
                $dusun->jumlah_sumber_air_dll = $keluargas->where('sumber_air', 4)->count();
                $dusun->punya_jamban = $keluargas->sum('punya_jamban');
                $dusun->jumlah_makanan_pokok_beras = $keluargas->where('makanan_pokok', 1)->count();
                $dusun->jumlah_makanan_pokok_non_beras = $keluargas->where('makanan_pokok', 0)->count();
                $dusun->jumlah_aktivitas_UP2K = $keluargas->sum('aktivitas_UP2K');
                $dusun->jumlah_have_pemanfaatan = $keluargas->sum('have_pemanfaatan');
                $dusun->jumlah_have_industri = $keluargas->sum('have_industri');
                $dusun->jumlah_have_kegiatan = $keluargas->sum('have_kegiatan');

                $result->push($dusun);

        }

        return $result;
    }
}