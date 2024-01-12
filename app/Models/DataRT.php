<?php

namespace App\Models;

use App\Entities\RT;
use Illuminate\Support\Collection;

class DataRT
{
    /**
     * @param int $id_desa
     * @param int $rw
     * @param int $rt
     * @param string $dasa_wisma

     * @param int $periode
     * @return Collection<RT> $rts
     */
    public static function getRT($id_desa, $rw, $rt, $periode)
    {
        /** @var Collection<RT> */
        $result = new Collection();

        /** @var Collection<integer, Collection<DataKeluarga>> */
        $rts = DataKeluarga::query()
                ->with(['industri', 'pemanfaatan'])
                ->where('id_desa', $id_desa)
                // ->where('rt', $rt)
                ->where('rw', $rw)
                ->where('periode', $periode)
                ->get()
                ->groupBy('rt');
            // dd($rts);
        foreach ($rts as $keluargas) {
            // $rtIds = explode('-', $keluargas);
            // dd($rtIds);
            // if (count($rtIds) < 5) {
            //     continue;
            // }
            $keluarga = $keluargas->first();
                // dd($keluarga);

                $rt = new RT();
                $rt->id = $keluarga->id;
                $rt->id_kecamatan = intval($keluarga->id_kecamatan);
                $rt->id_desa = intval($keluarga->id_desa);
                $rt->dusun = $keluarga->dusun;
                // dd($keluarga->dusun);

                $rt->rw = intval($keluarga->rw);
                // $rt->rt = intval($keluarga->rt);
                $rt->nama = $keluarga->nama;
                $rt->rt = $keluarga->rt;
                $dasa_wisma = $keluargas->groupBy(function ($item) {
                    return strtolower($item->dasa_wisma);
                });
                $rt->jumlah_dasa_wisma = count($dasa_wisma);

                // dd($keluarga->dasa_wisma);
                $rt->jumlah_KRT = $keluargas->count('id');
                $rt->jumlah_KK = $keluargas->sum('jumlah_KK');
                $rt->jumlah_laki_laki = $keluargas->sum('jumlah_laki');
                $rt->jumlah_perempuan = $keluargas->sum('jumlah_perempuan');
                $rt->jumlah_balita_laki = $keluargas->sum('jumlah_balita_laki');
                $rt->jumlah_balita_perempuan = $keluargas->sum('jumlah_balita_perempuan');
                $rt->jumlah_3_buta_laki = $keluargas->sum('jumlah_3_buta_laki');
                $rt->jumlah_3_buta_perempuan = $keluargas->sum('jumlah_3_buta_perempuan');
                $rt->jumlah_PUS = $keluargas->sum('jumlah_PUS');
                $rt->jumlah_WUS = $keluargas->sum('jumlah_WUS');
                $rt->jumlah_ibu_hamil = $keluargas->sum('jumlah_ibu_hamil');
                $rt->jumlah_ibu_menyusui = $keluargas->sum('jumlah_ibu_menyusui');
                $rt->jumlah_lansia = $keluargas->sum('jumlah_lansia');
                $rt->jumlah_kebutuhan_khusus = $keluargas->sum('jumlah_kebutuhan_khusus');
                $rt->jumlah_kriteria_rumah_sehat = $keluargas->sum('kriteria_rumah');
                $rt->jumlah_kriteria_rumah_tidak_sehat = $keluargas->count() - $keluargas->sum('kriteria_rumah');
                $rt->jumlah_punya_tempat_sampah = $keluargas->sum('punya_tempat_sampah');
                $rt->jumlah_punya_saluran_air = $keluargas->sum('punya_saluran_air');
                $rt->jumlah_tempel_stiker = $keluargas->sum('tempel_stiker');
                $rt->jumlah_sumber_air_pdam = $keluargas->where('sumber_air', 1)->count();
                $rt->jumlah_sumber_air_sumur = $keluargas->where('sumber_air', 2)->count();
                $rt->jumlah_sumber_air_sungai = $keluargas->where('sumber_air', 3)->count();
                $rt->jumlah_sumber_air_dll = $keluargas->where('sumber_air', 4)->count();
                $rt->punya_jamban = $keluargas->sum('punya_jamban');
                $rt->jumlah_makanan_pokok_beras = $keluargas->where('makanan_pokok', 1)->count();
                $rt->jumlah_makanan_pokok_non_beras = $keluargas->where('makanan_pokok', 0)->count();
                $rt->jumlah_aktivitas_UP2K = $keluargas->sum('aktivitas_UP2K');
                $rt->jumlah_have_pemanfaatan = $keluargas->sum('have_pemanfaatan');
                $rt->jumlah_have_industri = $keluargas->sum('have_industri');
                $rt->jumlah_have_kegiatan = $keluargas->sum('have_kegiatan');

                $result->push($rt);

        }

        return $result;
    }
}