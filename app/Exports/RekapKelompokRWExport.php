<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokRWExport implements FromArray, WithHeadings, WithEvents
{
    protected $rt = [];
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
        $this->rt = $data['rts'] ?? [];
        $this->rw = $data['rw'] ?? null;
        $this->periode = $data['periode'] ?? null;
        $this->desa = $data['desa'] ?? null;
    }

    public function array(): array
    {
        $result = [];
        $i = 1;
        $rt = $this->rt;

        foreach ($rt as $keluarga) {
            $data = [
                '_index' => $i,
                'rt' => $keluarga->rt,
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
                'jumlah_punya_jamban' => $keluarga->punya_jamban ?: '0',
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
            'rt' => null,
            'jumlah_dasa_wisma' => $rt->sum('jumlah_dasa_wisma') ?: '0',
            'jumlah_KRT' => $rt->sum('jumlah_KRT') ?: '0',
            'jumlah_KK' => $rt->sum('jumlah_KK') ?: '0',
            'jumlah_laki' => $rt->sum('jumlah_laki_laki') ?: '0',
            'jumlah_perempuan' => $rt->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $rt->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $rt->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta_laki' => $rt->sum('jumlah_3_buta_laki') ?: '0',
            'jumlah_3_buta_perempuan' => $rt->sum('jumlah_3_buta_perempuan') ?: '0',
            'jumlah_PUS' => $rt->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $rt->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $rt->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $rt->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $rt->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $rt->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $rt->sum('jumlah_kriteria_rumah_sehat') ?: '0',
            'tidak_sehat_layak_huni' => $rt->sum('jumlah_kriteria_rumah_tidak_sehat') ?: '0',
            'punya_tempat_sampah' => $rt->sum('jumlah_punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $rt->sum('jumlah_punya_saluran_air') ?: '0',
            'tempel_stiker' => $rt->sum('jumlah_tempel_stiker') ?: '0',
            'sumber_air' => $rt->sum('jumlah_sumber_air_pdam') ?: '0',
            'sumber_air_2' => $rt->sum('jumlah_sumber_air_sumur') ?: '0',
            'sumber_air_3' => $rt->sum('jumlah_sumber_air_sungai') ?: '0',
            'sumber_air_4' => $rt->sum('jumlah_sumber_air_dll') ?: '0',
            'jumlah_punya_jamban' => $rt->sum('punya_jamban') ?: '0',
            'makanan_pokok' => $rt->sum('jumlah_makanan_pokok_beras') ?: '0',
            'makanan_pokok_0' => $rt->sum('jumlah_makanan_pokok_non_beras') ?: '0',
            'aktivitas_UP2K' => $rt->sum('jumlah_aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $rt->sum('jumlah_have_pemanfaatan') ?: '0',
            'industri' => $rt->sum('jumlah_have_industri') ?: '0',
            'kesehatan_lingkungan' => $rt->sum('jumlah_have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'No. RT',
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
            'Jumlah Rumah',
            '',
            '',
            '',
            '',
            'Sumber Air Keluarga',
            '',
            '',
            '',
            'Jumlah Jamban Keluarga',
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
            'Total L',
            'Total P',
            'Balita L',
            'Balita P',
            '3 Buta Laki-laki',
            '3 Buta Perempuan',
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
            ['KELOMPOK PKK RW'],
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
                $event->sheet->getDelegate()->mergeCells('A1:AH1');
                $event->sheet->getDelegate()->mergeCells('A2:AH2');
                $event->sheet->getDelegate()->mergeCells('A3:AH3');
                $event->sheet->getDelegate()->mergeCells('A4:AH4');
                $event->sheet->getDelegate()->mergeCells('A5:AH5');
                $event->sheet->getDelegate()->mergeCells('A6:AH6');

                $event->sheet->getDelegate()->getStyle('A1:A6')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A8:A9');
                $event->sheet->getDelegate()->mergeCells('B8:B9');
                $event->sheet->getDelegate()->mergeCells('C8:C9');
                $event->sheet->getDelegate()->mergeCells('D8:D9');
                $event->sheet->getDelegate()->mergeCells('E8:E9');

                $event->sheet->getDelegate()->mergeCells('F8:Q8');
                $event->sheet->getDelegate()->mergeCells('R8:V8');
                $event->sheet->getDelegate()->mergeCells('W8:Z8');
                $event->sheet->getDelegate()->mergeCells('AA8:AA9');
                $event->sheet->getDelegate()->mergeCells('AB8:AC8');
                $event->sheet->getDelegate()->mergeCells('AD8:AH8');

                $event->sheet->getDelegate()->getStyle('F8:AH8')->getAlignment()->setHorizontal('center');

                $lastRow = count($this->rt) + 10;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}
