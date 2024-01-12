<?php

namespace App\Models;

use App\Entities\DasaWisma;
use Illuminate\Support\Collection;

class DataDasaWisma
{
    /**
     * @param int $id_desa
     * @param int $rw
     * @param int $rt
     * @param int $periode
     * @return Collection<DasaWisma> $dasaWismas
     */
    public static function getDasaWismas($id_desa, $rw, $rt, $periode)
    {
        /** @var Collection<DasaWisma> */
        $dasaWismas = new Collection();

        /** @var Collection<string, Collection<DataKeluarga>> */
        $dataDasaWismas = DataKeluarga::query()
            ->with(['industri', 'pemanfaatan'])
            ->where('id_desa', $id_desa)
            ->where('rw', $rw)
            ->where('rt', $rt)
            ->where('periode', $periode)
            ->get()
            ->groupBy('dasa_wisma_id');
            // dd($dataDasaWismas);

        foreach ($dataDasaWismas as $dasaWismaId => $keluargas) {
            $dasaWismaIds = explode('-', $dasaWismaId);
            // dd($dasaWismaIds);


            $dasaWisma = new DasaWisma();
            $dasaWisma->id = $dasaWismaId;

            $dasaWisma->id_kecamatan = intval($dasaWismaIds[0]);
            $dasaWisma->id_desa = intval($dasaWismaIds[1]);
            $dasaWisma->dusun = $dasaWismaIds[2];
            $dasaWisma->rw = intval($dasaWismaIds[3]);
            $dasaWisma->rt = intval($dasaWismaIds[4]);
            $dasaWisma->nama = $dasaWismaIds[5];

            $dasaWisma->jumlah_KRT = 0;
            $dasaWisma->jumlah_KK = 0;
            $dasaWisma->jumlah_laki_laki = 0;
            $dasaWisma->jumlah_perempuan = 0;
            $dasaWisma->jumlah_balita_laki = 0;
            $dasaWisma->jumlah_balita_perempuan = 0;
            $dasaWisma->jumlah_3_buta = 0;
            $dasaWisma->jumlah_PUS = 0;
            $dasaWisma->jumlah_WUS = 0;
            $dasaWisma->jumlah_ibu_hamil = 0;
            $dasaWisma->jumlah_ibu_menyusui = 0;
            $dasaWisma->jumlah_lansia = 0;
            $dasaWisma->jumlah_kebutuhan_khusus = 0;
            $dasaWisma->jumlah_kriteria_rumah_sehat = 0;
            $dasaWisma->jumlah_kriteria_rumah_tidak_sehat = 0;
            $dasaWisma->jumlah_punya_tempat_sampah = 0;
            $dasaWisma->jumlah_punya_saluran_air = 0;
            $dasaWisma->jumlah_punya_jamban = 0;
            $dasaWisma->jumlah_tempel_stiker = 0;
            $dasaWisma->jumlah_sumber_air_pdam = 0;
            $dasaWisma->jumlah_sumber_air_sumur = 0;
            $dasaWisma->jumlah_sumber_air_dll = 0;
            $dasaWisma->jumlah_makanan_pokok_beras = 0;
            $dasaWisma->jumlah_makanan_pokok_non_beras = 0;
            $dasaWisma->jumlah_aktivitas_UP2K = 0;
            $dasaWisma->jumlah_have_pemanfaatan = 0;
            $dasaWisma->jumlah_have_industri = 0;
            $dasaWisma->jumlah_have_kegiatan = 0;


            if ($dasaWismas->has($dasaWisma->nama)) {
                $dasaWisma = $dasaWismas->first(function ($item) use ($dasaWisma) {
                    return strtolower($item->nama) === strtolower($dasaWisma->nama ?? '');
                });
            }

            $dasaWisma->jumlah_KRT += $keluargas->count('id');
            $dasaWisma->jumlah_KK += $keluargas->sum('jumlah_KK');
            $dasaWisma->jumlah_laki_laki += $keluargas->sum('jumlah_laki');
            $dasaWisma->jumlah_perempuan += $keluargas->sum('jumlah_perempuan');
            $dasaWisma->jumlah_balita_laki += $keluargas->sum('jumlah_balita_laki');
            $dasaWisma->jumlah_balita_perempuan += $keluargas->sum('jumlah_balita_perempuan');
            $dasaWisma->jumlah_3_buta += $keluargas->sum('jumlah_3_buta');
            $dasaWisma->jumlah_PUS += $keluargas->sum('jumlah_PUS');
            $dasaWisma->jumlah_WUS += $keluargas->sum('jumlah_WUS');
            $dasaWisma->jumlah_ibu_hamil += $keluargas->sum('jumlah_ibu_hamil');
            $dasaWisma->jumlah_ibu_menyusui += $keluargas->sum('jumlah_ibu_menyusui');
            $dasaWisma->jumlah_lansia += $keluargas->sum('jumlah_lansia');
            $dasaWisma->jumlah_kebutuhan_khusus += $keluargas->sum('jumlah_kebutuhan_khusus');
            $dasaWisma->jumlah_kriteria_rumah_sehat += $keluargas->sum('kriteria_rumah');
            $dasaWisma->jumlah_kriteria_rumah_tidak_sehat += $keluargas->count() - $keluargas->sum('kriteria_rumah');
            $dasaWisma->jumlah_punya_tempat_sampah += $keluargas->sum('punya_tempat_sampah');
            $dasaWisma->jumlah_punya_saluran_air += $keluargas->sum('punya_saluran_air');
            $dasaWisma->jumlah_punya_jamban += $keluargas->sum('punya_jamban');
            $dasaWisma->jumlah_tempel_stiker += $keluargas->sum('tempel_stiker');
            $dasaWisma->jumlah_sumber_air_pdam += $keluargas->where('sumber_air', 1)->count();
            $dasaWisma->jumlah_sumber_air_sumur += $keluargas->where('sumber_air', 2)->count();
            $dasaWisma->jumlah_sumber_air_dll += $keluargas->where('sumber_air', 4)->count();
            $dasaWisma->jumlah_makanan_pokok_beras += $keluargas->where('makanan_pokok', 1)->count();
            $dasaWisma->jumlah_makanan_pokok_non_beras += $keluargas->where('makanan_pokok', 0)->count();
            $dasaWisma->jumlah_aktivitas_UP2K += $keluargas->sum('aktivitas_UP2K');
            $dasaWisma->jumlah_have_pemanfaatan += $keluargas->sum('have_pemanfaatan');
            $dasaWisma->jumlah_have_industri += $keluargas->sum('have_industri');
            $dasaWisma->jumlah_have_kegiatan += $keluargas->sum('have_kegiatan');

            $dasaWismas->put($dasaWisma->nama, $dasaWisma);
            // $dasaWismas->push($dasaWisma);
        }

        return $dasaWismas;
    }
}