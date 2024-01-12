<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokKabupatenExport implements FromArray, WithHeadings, WithEvents
{
    protected $periode;
    protected $desa;
    protected $dusun;
    protected $kecamatan;

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    public function __construct(array $data)
    {
        $this->periode = $data['periode'] ?? null;
        $this->desa = $data['desas'] ?? null;
        $this->kecamatan = $data['kecamatans'] ?? [];

    }

    public function array(): array
    {
        $result = [];
        $i = 1;
        $kecamatan = $this->kecamatan;

        foreach ($kecamatan as $keluarga) {
            $data = [
                '_index' => $i,
                'kecamatan' => $keluarga->kecamatan->nama_kecamatan,
                'jumlah_desa' => $keluarga->jumlah_desa ?: '0',
                'jumlah_dusun' => $keluarga->jumlah_dusun ?: '0',
                'jumlah_rw' => $keluarga->jumlah_rw ?: '0',
                'jumlah_rt' => $keluarga->jumlah_rt ?: '0',
                'jumlah_dasa_wisma' => $keluarga->jumlah_dasa_wisma ?: '0',
                'jumlah_KRT' => $keluarga->jumlah_KRT ?: '0',
                'jumlah_KK' => $keluarga->jumlah_KK ?: '0',
                'jumlah_laki' => $keluarga->jumlah_laki_laki ?: '0',
                'jumlah_perempuan' => $keluarga->jumlah_perempuan ?: '0',
                'jumlah_balita_laki' => $keluarga->jumlah_balita_laki ?: '0',
                'jumlah_balita_perempuan' => $keluarga->jumlah_balita_perempuan ?: '0',
                'jumlah_3_buta_laki' => $keluarga->jumlah_3_buta_laki ?: '0',
                'jumlah_3_buta_perempuan' => $keluarga->jumlah_3_buta_perempuan ?: '0',
                'jumlah_PUS' => $keluarga->jumlah_PUS ?: '0',
                'jumlah_WUS' => $keluarga->jumlah_WUS ?: '0',
                'jumlah_ibu_hamil' => $keluarga->jumlah_ibu_hamil ?: '0',
                'jumlah_ibu_menyusui' => $keluarga->jumlah_ibu_menyusui ?: '0',
                'jumlah_lansia' => $keluarga->jumlah_lansia ?: '0',
                'jumlah_kebutuhan_khusus' => $keluarga->jumlah_kebutuhan_khusus ?: '0',
                'sehat_layak_huni' => $keluarga->jumlah_kriteria_rumah_sehat ?: '0',
                'tidak_sehat_layak_huni' => $keluarga->jumlah_kriteria_rumah_tidak_sehat ?: '0',
                'punya_tempat_sampah' => $keluarga->jumlah_punya_tempat_sampah ?: '0',
                'punya_saluran_air' => $keluarga->jumlah_punya_saluran_air ?: '0',
                'tempel_stiker' => $keluarga->jumlah_tempel_stiker ?: '0',
                'sumber_air' => $keluarga->jumlah_sumber_air_pdam ?: '0',
                'sumber_air_2' => $keluarga->jumlah_sumber_air_sumur ?: '0',
                'sumber_air_3' => $keluarga->jumlah_sumber_air_sungai ?: '0',
                'sumber_air_4' => $keluarga->jumlah_sumber_air_dll ?: '0',
                'jumlah_punya_jamban' => $keluarga->jumlah_jamban ?: '0',
                'makanan_pokok' => $keluarga->jumlah_makanan_pokok_beras ?: '0',
                'makanan_pokok_0' => $keluarga->jumlah_makanan_pokok_non_beras ?: '0',
                'aktivitas_UP2K' => $keluarga->jumlah_aktivitas_UP2K ?: '0',
                'pemanfaatan' => $keluarga->jumlah_have_pemanfaatan ?: '0',
                'industri' => $keluarga->jumlah_have_industri ?: '0',
                'kesehatan_lingkungan' => $keluarga->jumlah_have_kegiatan ?: '0',
            ];

            $result[] = $data;
            $i++;
        }

        $result[] = [
            '_index' => 'Jumlah',
            'kecamatan' => null,
            'jumlah_desa' => $kecamatan->sum('jumlah_desa') ?: '0',
            'jumlah_dusun' => $kecamatan->sum('jumlah_dusun') ?: '0',
            'jumlah_rw' => $kecamatan->sum('jumlah_rw') ?: '0',
            'jumlah_rt' => $kecamatan->sum('jumlah_rt') ?: '0',
            'jumlah_dasa_wisma' => $kecamatan->sum('jumlah_dasa_wisma') ?: '0',
            'jumlah_KRT' => $kecamatan->sum('jumlah_KRT') ?: '0',
            'jumlah_KK' => $kecamatan->sum('jumlah_KK') ?: '0',
            'jumlah_laki' => $kecamatan->sum('jumlah_laki_laki') ?: '0',
            'jumlah_perempuan' => $kecamatan->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $kecamatan->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $kecamatan->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta_laki' => $kecamatan->sum('jumlah_3_buta_laki') ?: '0',
            'jumlah_3_buta_perempuan' => $kecamatan->sum('jumlah_3_buta_perempuan') ?: '0',
            'jumlah_PUS' => $kecamatan->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $kecamatan->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $kecamatan->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $kecamatan->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $kecamatan->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $kecamatan->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $kecamatan->sum('jumlah_kriteria_rumah_sehat') ?: '0',
            'tidak_sehat_layak_huni' => $kecamatan->sum('jumlah_kriteria_rumah_tidak_sehat') ?: '0',
            'punya_tempat_sampah' => $kecamatan->sum('jumlah_punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $kecamatan->sum('jumlah_punya_saluran_air') ?: '0',
            'tempel_stiker' => $kecamatan->sum('jumlah_tempel_stiker') ?: '0',
            'sumber_air' => $kecamatan->sum('jumlah_sumber_air_pdam') ?: '0',
            'sumber_air_2' => $kecamatan->sum('jumlah_sumber_air_sumur') ?: '0',
            'sumber_air_3' => $kecamatan->sum('jumlah_sumber_air_sungai') ?: '0',
            'sumber_air_4' => $kecamatan->sum('jumlah_sumber_air_dll') ?: '0',
            'jumlah_jamban' => $kecamatan->sum('jumlah_jamban') ?: '0',
            'makanan_pokok' => $kecamatan->sum('jumlah_makanan_pokok_beras') ?: '0',
            'makanan_pokok_0' => $kecamatan->sum('jumlah_makanan_pokok_non_beras') ?: '0',
            'aktivitas_UP2K' => $kecamatan->sum('jumlah_aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $kecamatan->sum('jumlah_have_pemanfaatan') ?: '0',
            'industri' => $kecamatan->sum('jumlah_have_industri') ?: '0',
            'kesehatan_lingkungan' => $kecamatan->sum('jumlah_have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Kecamatan',
            'Jml. Desa/Kelurahan',
            'Jml. Dusun',
            'Jml. RW',
            'Jml. RT',
            'Jml. Dasawisma',
            'Jml. KRT',
            'Jml. KK',
            'Jumlah Anggota Keluarga',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            'Kriteria Rumah',
            '',
            '',
            '',
            '',
            'Sumber Air Keluarga',
            '',
            '',
            '',
            'Jml. Jamban Keluarga',
            'Makanan Pokok',
            '',
            'Warga Mengikuti Kegiatan',
            '',
            '',
            '',
        ];

        $headings2 = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            'Total L',
            'Total P',
            'Balita L',
            'Balita P',
            '3 Buta L',
            '3 Buta P',
            'PUS',
            'WUS',
            'Ibu Hamil',
            'Ibu Menyusui',
            'Lansia',
            'Berkebutuhan Khusus',
            'Sehat',
            'Tidak Sehat',
            'Memiliki Tmp. Pemb. Sampah',
            'Memiliki SPAL',
            'Menempel Stiker P4K',
            'PDAM',
            'Sumur',
            'Sungai',
            'DLL',
            '',
            'Beras',
            'Non Beras',
            'UP2K',
            'Pemanfaatan dan Pekarangan',
            'Industri Rumah Tangga',
            'Kesehatan Lingkungan',
        ];

        return [
            ['REKAPITULASI'],
            ['CATATAN DATA DAN KEGIATAN WARGA'],
            ['TP PKK KABUPATEN'],
            ['Tahun : ' . $this->periode],
            ['KAB/KOTA : INDRAMAYU'],
            ['PROVINSI : JAWA BARAT'],
            [],
            $headings,
            $headings2,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->mergeCells('A1:AG1');
                $event->sheet->getDelegate()->mergeCells('A2:AG2');
                $event->sheet->getDelegate()->mergeCells('A3:AG3');
                $event->sheet->getDelegate()->mergeCells('A4:AG4');
                $event->sheet->getDelegate()->mergeCells('A5:AG5');
                $event->sheet->getDelegate()->mergeCells('A6:AG6');
                $event->sheet->getDelegate()->mergeCells('A7:AG7');

                $event->sheet->getDelegate()->getStyle('A1:A7')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A8:A9');
                $event->sheet->getDelegate()->mergeCells('B8:B9');
                $event->sheet->getDelegate()->mergeCells('C8:C9');
                $event->sheet->getDelegate()->mergeCells('D8:D9');
                $event->sheet->getDelegate()->mergeCells('E8:E9');
                $event->sheet->getDelegate()->mergeCells('F8:F9');
                $event->sheet->getDelegate()->mergeCells('G8:G9');
                $event->sheet->getDelegate()->mergeCells('H8:H9');
                $event->sheet->getDelegate()->mergeCells('I8:I9');

                $event->sheet->getDelegate()->mergeCells('J8:U8');
                $event->sheet->getDelegate()->mergeCells('V8:Z8');
                $event->sheet->getDelegate()->mergeCells('AA8:AD8');
                $event->sheet->getDelegate()->mergeCells('AE8:AE9');
                $event->sheet->getDelegate()->mergeCells('AF8:AG8');
                $event->sheet->getDelegate()->mergeCells('AH8:AK8');

                $event->sheet->getDelegate()->getStyle('J8:AK8')->getAlignment()->setHorizontal('center');


                $lastRow = count($this->kecamatan) + 10;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}