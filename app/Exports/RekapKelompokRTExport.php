<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokRTExport implements FromArray, WithHeadings, WithEvents
{
    protected $dasa_wisma = [];
    protected $rt;
    protected $rw;
    protected $periode;
    protected $desa;
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    public function __construct(array $data)
    {
        $this->dasa_wisma = $data['dasaWismas'] ?? [];
        $this->rt = $data['rt'] ?? null;
        $this->rw = $data['rw'] ?? null;
        $this->periode = $data['periode'] ?? null;
        $this->desa = $data['desa'] ?? null;
    }

    /**
    * @return array
    */
    public function array(): array
    {
        $result = [];
        $i = 1;
        $dasa_wisma = $this->dasa_wisma;

        foreach ($dasa_wisma as $keluarga) {
            $data = [
                '_index' => $i,
                'nama' => $keluarga->nama,
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
                'punya_jamban' => $keluarga->jumlah_punya_jamban ?: '0',
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
            'nama' => null,
            'jumlah_KRT' => $dasa_wisma->sum('jumlah_KRT') ?: '0',
            'jumlah_KK' => $dasa_wisma->sum('jumlah_KK') ?: '0',
            'jumlah_laki' => $dasa_wisma->sum('jumlah_laki_laki') ?: '0',
            'jumlah_perempuan' => $dasa_wisma->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $dasa_wisma->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $dasa_wisma->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta' => $dasa_wisma->sum('jumlah_3_buta') ?: '0',
            'jumlah_PUS' => $dasa_wisma->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $dasa_wisma->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $dasa_wisma->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $dasa_wisma->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $dasa_wisma->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $dasa_wisma->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $dasa_wisma->sum('jumlah_kriteria_rumah_sehat') ?: '0',
            'tidak_sehat_layak_huni' => $dasa_wisma->sum('jumlah_kriteria_rumah_tidak_sehat') ?: '0',
            'punya_tempat_sampah' => $dasa_wisma->sum('jumlah_punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $dasa_wisma->sum('jumlah_punya_saluran_air') ?: '0',
            'punya_jamban' => $dasa_wisma->sum('jumlah_punya_jamban') ?: '0',
            'tempel_stiker' => $dasa_wisma->sum('jumlah_tempel_stiker') ?: '0',
            'sumber_air' => $dasa_wisma->sum('jumlah_sumber_air_pdam') ?: '0',
            'sumber_air_2' => $dasa_wisma->sum('jumlah_sumber_air_sungai') ?: '0',
            'sumber_air_4' => $dasa_wisma->sum('jumlah_sumber_air_dll') ?: '0',
            'makanan_pokok' => $dasa_wisma->sum('jumlah_makanan_pokok_beras') ?: '0',
            'makanan_pokok_0' => $dasa_wisma->sum('jumlah_makanan_pokok_non_beras') ?: '0',
            'aktivitas_UP2K' => $dasa_wisma->sum('jumlah_aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $dasa_wisma->sum('jumlah_have_pemanfaatan') ?: '0',
            'industri' => $dasa_wisma->sum('jumlah_have_industri') ?: '0',
            'kesehatan_lingkungan' => $dasa_wisma->sum('jumlah_have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Dasawisma',
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
            'Kriteria Rumah',
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
            ['KELOMPOK PKK RT'],
            ['RT : ' . $this->rt],
            ['RW : ' . $this->rw],
            ['Desa/Kel : ' . $this->desa->nama_desa],
            ['Tahun : ' . $this->periode],
            [],
            $headings,
            $headings2,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->mergeCells('A1:AD1');
                $event->sheet->getDelegate()->mergeCells('A2:AD2');
                $event->sheet->getDelegate()->mergeCells('A3:AD3');
                $event->sheet->getDelegate()->mergeCells('A4:AD4');
                $event->sheet->getDelegate()->mergeCells('A5:AD5');
                $event->sheet->getDelegate()->mergeCells('A6:AD6');
                $event->sheet->getDelegate()->mergeCells('A7:AD7');

                $event->sheet->getDelegate()->getStyle('A1:A7')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A9:A10');
                $event->sheet->getDelegate()->mergeCells('B9:B10');
                $event->sheet->getDelegate()->mergeCells('C9:C10');
                $event->sheet->getDelegate()->mergeCells('D9:D10');

                $event->sheet->getDelegate()->mergeCells('E9:O9');
                $event->sheet->getDelegate()->mergeCells('P9:U9');
                $event->sheet->getDelegate()->mergeCells('V9:X9');
                $event->sheet->getDelegate()->mergeCells('Y9:Z9');
                $event->sheet->getDelegate()->mergeCells('AA9:AD9');

                $event->sheet->getDelegate()->getStyle('E9:AD9')->getAlignment()->setHorizontal('center');

                $lastRow = count($this->dasa_wisma) + 11;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}
