<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokKecamatanExport implements FromArray, WithHeadings, WithEvents
{
    protected $periode;
    protected $desa;
    protected $dusun;
    protected $kecamatan;
    protected $nama_kecamatan;

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
        $this->desa = $data['desas'] ?? [];
        $this->kecamatan = $data['kecamatan'] ?? null;
        $this->nama_kecamatan = $data['nama_kecamatan'] ?? null;

    }

    public function array(): array
    {
        $result = [];
        $i = 1;
        $desa = $this->desa;

        foreach ($desa as $keluarga) {
            $data = [
                '_index' => $i,
                'desa' => $keluarga->desa->nama_desa,
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
                'jumlah_jamban' => $keluarga->punya_jamban ?: '0',
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
            'desa' => null,
            'jumlah_dusun' => $desa->sum('jumlah_dusun') ?: '0',
            'jumlah_rw' => $desa->sum('jumlah_rw') ?: '0',
            'jumlah_rt' => $desa->sum('jumlah_rt') ?: '0',
            'jumlah_dasa_wisma' => $desa->sum('jumlah_dasa_wisma') ?: '0',
            'jumlah_KRT' => $desa->sum('jumlah_KRT') ?: '0',
            'jumlah_KK' => $desa->sum('jumlah_KK') ?: '0',
            'jumlah_laki' => $desa->sum('jumlah_laki_laki') ?: '0',
            'jumlah_perempuan' => $desa->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $desa->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $desa->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta_laki' => $desa->sum('jumlah_3_buta_laki') ?: '0',
            'jumlah_3_buta_perempuan' => $desa->sum('jumlah_3_buta_perempuan') ?: '0',
            'jumlah_PUS' => $desa->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $desa->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $desa->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $desa->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $desa->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $desa->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $desa->sum('jumlah_kriteria_rumah_sehat') ?: '0',
            'tidak_sehat_layak_huni' => $desa->sum('jumlah_kriteria_rumah_tidak_sehat') ?: '0',
            'punya_tempat_sampah' => $desa->sum('jumlah_punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $desa->sum('jumlah_punya_saluran_air') ?: '0',
            'tempel_stiker' => $desa->sum('jumlah_tempel_stiker') ?: '0',
            'sumber_air' => $desa->sum('jumlah_sumber_air_pdam') ?: '0',
            'sumber_air_2' => $desa->sum('jumlah_sumber_air_sumur') ?: '0',
            'sumber_air_3' => $desa->sum('jumlah_sumber_air_sungai') ?: '0',
            'sumber_air_4' => $desa->sum('jumlah_sumber_air_dll') ?: '0',
            'jumlah_jamban' => $desa->sum('punya_jamban') ?: '0',
            'makanan_pokok' => $desa->sum('jumlah_makanan_pokok_beras') ?: '0',
            'makanan_pokok_0' => $desa->sum('jumlah_makanan_pokok_non_beras') ?: '0',
            'aktivitas_UP2K' => $desa->sum('jumlah_aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $desa->sum('jumlah_have_pemanfaatan') ?: '0',
            'industri' => $desa->sum('jumlah_have_industri') ?: '0',
            'kesehatan_lingkungan' => $desa->sum('jumlah_have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Desa/Kelurahan',
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
            ['TP PKK KECAMATAN'],
            ['Tahun : ' . $this->periode],
            ['Kecamatan : ' . $this->nama_kecamatan],
            ['Kabupaten : Indramayu'],
            ['Provinsi : Jawa Barat'],
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
                $event->sheet->getDelegate()->mergeCells('A7:AG8');

                $event->sheet->getDelegate()->getStyle('A1:A8')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A9:A10');
                $event->sheet->getDelegate()->mergeCells('B9:B10');
                $event->sheet->getDelegate()->mergeCells('C9:C10');
                $event->sheet->getDelegate()->mergeCells('D9:D10');
                $event->sheet->getDelegate()->mergeCells('E9:E10');
                $event->sheet->getDelegate()->mergeCells('F9:F10');
                $event->sheet->getDelegate()->mergeCells('G9:G10');
                $event->sheet->getDelegate()->mergeCells('H9:H10');

                $event->sheet->getDelegate()->mergeCells('I9:T9');
                $event->sheet->getDelegate()->mergeCells('U9:Y9');
                $event->sheet->getDelegate()->mergeCells('Z9:AC9');
                $event->sheet->getDelegate()->mergeCells('AD9:AD10');
                $event->sheet->getDelegate()->mergeCells('AE9:AF9');
                $event->sheet->getDelegate()->mergeCells('AG9:AJ9');

                $event->sheet->getDelegate()->getStyle('I9:AJ9')->getAlignment()->setHorizontal('center');

                $lastRow = count($this->desa) + 11;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}