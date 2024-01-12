<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokDesaExport implements FromArray, WithHeadings, WithEvents
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
        $this->desa = $data['desa'] ?? null;
        $this->dusun = $data['dusuns'] ?? [];
        $this->kecamatan = $data['kecamatan'] ?? null;

    }

    public function array(): array
    {
        $result = [];
        $i = 1;
        $dusun = $this->dusun;

        foreach ($dusun as $keluarga) {
            $data = [
                '_index' => $i,
                'dusun' => $keluarga->dusun,
                'jumlah_rw' => $keluarga->jumlah_rw ?: '0',
                'jumlah_rt' => $keluarga->jumlah_rt ?: '0',
                'jumlah_dasa_wisma' => $keluarga->jumlah_dasa_wisma ?: '0',
                'jumlah_KRT' => $keluarga->jumlah_KRT ?: '0',
                'jumlah_KK' => $keluarga->jumlah_KK ?: '0',
                'jumlah_laki' => $keluarga->jumlah_laki_laki ?: '0',
                'jumlah_perempuan' => $keluarga->jumlah_perempuan ?: '0',
                'jumlah_balita_laki' => $keluarga->jumlah_balita_laki ?: '0',
                'jumlah_balita_perempuan' => $keluarga->jumlah_balita_perempuan ?: '0',
                'jumlah_3_buta' => $keluarga->jumlah_3_buta ?: '0',
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
                'jumlah_punya_jamban' => $keluarga->punya_jamban ?: '0',
                'tempel_stiker' => $keluarga->jumlah_tempel_stiker ?: '0',
                'sumber_air' => $keluarga->jumlah_sumber_air_pdam ?: '0',
                'sumber_air_2' => $keluarga->jumlah_sumber_air_sumur ?: '0',
                'sumber_air_4' => $keluarga->jumlah_sumber_air_dll ?: '0',
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
            'dusun' => null,
            'jumlah_rw' => $dusun->sum('jumlah_rw') ?: '0',
            'jumlah_rt' => $dusun->sum('jumlah_rt') ?: '0',
            'jumlah_dasa_wisma' => $dusun->sum('jumlah_dasa_wisma') ?: '0',
            'jumlah_KRT' => $dusun->sum('jumlah_KRT') ?: '0',
            'jumlah_KK' => $dusun->sum('jumlah_KK') ?: '0',
            'jumlah_laki' => $dusun->sum('jumlah_laki_laki') ?: '0',
            'jumlah_perempuan' => $dusun->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $dusun->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $dusun->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta' => $dusun->sum('jumlah_3_buta') ?: '0',
            'jumlah_PUS' => $dusun->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $dusun->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $dusun->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $dusun->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $dusun->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $dusun->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $dusun->sum('jumlah_kriteria_rumah_sehat') ?: '0',
            'tidak_sehat_layak_huni' => $dusun->sum('jumlah_kriteria_rumah_tidak_sehat') ?: '0',
            'punya_tempat_sampah' => $dusun->sum('jumlah_punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $dusun->sum('jumlah_punya_saluran_air') ?: '0',
            'jumlah_jamban' => $dusun->sum('punya_jamban') ?: '0',
            'tempel_stiker' => $dusun->sum('jumlah_tempel_stiker') ?: '0',
            'sumber_air' => $dusun->sum('jumlah_sumber_air_pdam') ?: '0',
            'sumber_air_2' => $dusun->sum('jumlah_sumber_air_sumur') ?: '0',
            'sumber_air_4' => $dusun->sum('jumlah_sumber_air_dll') ?: '0',
            'makanan_pokok' => $dusun->sum('jumlah_makanan_pokok_beras') ?: '0',
            'makanan_pokok_0' => $dusun->sum('jumlah_makanan_pokok_non_beras') ?: '0',
            'aktivitas_UP2K' => $dusun->sum('jumlah_aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $dusun->sum('jumlah_have_pemanfaatan') ?: '0',
            'industri' => $dusun->sum('jumlah_have_industri') ?: '0',
            'kesehatan_lingkungan' => $dusun->sum('jumlah_have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Dusun',
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
            'Jumlah Rumah',
            '',
            '',
            '',
            '',
            '',
            'Sumber Air Keluarga',
            '',
            '',
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
            'Total L',
            'Total P',
            'Balita L',
            'Balita P',
            '3 Buta',
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
            'Memiliki Jamban Keluarga',
            'Menempel Stiker P4K',
            'PDAM',
            'Sumur',
            'DLL',
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
            ['TP PKK DESA/KELURAHAN'],
            ['Tahun : ' . $this->periode],
            ['TP PKK Desa/Kelurahan : ' . $this->desa->nama_desa],
            ['Kecamatan : ' . $this->kecamatan->nama_kecamatan],
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
                $event->sheet->getDelegate()->mergeCells('A8:AG8');

                $event->sheet->getDelegate()->getStyle('A1:A8')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A10:A11');
                $event->sheet->getDelegate()->mergeCells('B10:B11');
                $event->sheet->getDelegate()->mergeCells('C10:C11');
                $event->sheet->getDelegate()->mergeCells('D10:D11');
                $event->sheet->getDelegate()->mergeCells('E10:E11');
                $event->sheet->getDelegate()->mergeCells('F10:F11');
                $event->sheet->getDelegate()->mergeCells('G10:G11');

                $event->sheet->getDelegate()->mergeCells('H10:R10');
                $event->sheet->getDelegate()->mergeCells('S10:X10');
                $event->sheet->getDelegate()->mergeCells('Y10:AA10');
                $event->sheet->getDelegate()->mergeCells('AB10:AC10');
                $event->sheet->getDelegate()->mergeCells('AD10:AG10');

                $event->sheet->getDelegate()->getStyle('H10:AG10')->getAlignment()->setHorizontal('center');


                $lastRow = count($this->dusun) + 12;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}