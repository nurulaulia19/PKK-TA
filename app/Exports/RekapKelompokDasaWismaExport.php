<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class RekapKelompokDasaWismaExport implements FromArray, WithHeadings, WithEvents
{
    protected $catatan_keluarga = [];
    protected $dasa_wisma;
    protected $nama_dasawisma;
    protected $rt;
    protected $rw;
    protected $periode;
    protected $desa;

    public function __construct(array $data)
    {
        $this->catatan_keluarga = $data['catatan_keluarga'] ?? [];
        $this->dasa_wisma = $data['dasa_wisma'] ?? null;
        $this->nama_dasawisma = $data['nama_dasawisma'] ?? null;
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
        $catatan_keluarga = $this->catatan_keluarga;

        foreach ($catatan_keluarga as $keluarga) {
            $data = [
                '_index' => $i,
                'nama_kepala_rumah_tangga' => $keluarga->nama_kepala_rumah_tangga,
                'jumlah_KK' => $keluarga->jumlah_KK ?: '0',
                'jumlah_laki' => $keluarga->jumlah_laki ?: '0',
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
                'sehat_layak_huni' => $keluarga->kriteria_rumah == '1' ? '1' : '0',
                'tidak_sehat_layak_huni' => $keluarga->kriteria_rumah == '0' ? '1' : '0',
                'punya_tempat_sampah' => $keluarga->punya_tempat_sampah == '1' ? '1' : '0',
                'punya_saluran_air' => $keluarga->punya_saluran_air == '1' ? '1' : '0',
                'punya_jamban' => $keluarga->punya_jamban == '1' ? '1' : '0',
                'tempel_stiker' => $keluarga->tempel_stiker == '1' ? '1' : '0',
                'sumber_air' => $keluarga->sumber_air == '1' ? '1' : '0',
                'sumber_air_2' => $keluarga->sumber_air == '2' ? '1' : '0',
                'sumber_air_4' => $keluarga->sumber_air == '4' ? '1' : '0',
                'makanan_pokok' => $keluarga->makanan_pokok == '1' ? '1' : '0',
                'makanan_pokok_0' => $keluarga->makanan_pokok == '0' ? '1' : '0',
                'aktivitas_UP2K' => $keluarga->aktivitas_UP2K == '1' ? '1' : '0',
                'pemanfaatan' => $keluarga->pemanfaatan->count() > 0 ? '1' : '0',
                'industri' => $keluarga->industri->count() > 0 ? '1' : '0',
                'kerja_bakti' => $keluarga->getKepalaKeluargaKegiatans()->count() > 0 ? '1' : '0',
            ];

            $result[] = $data;
            $i++;
        }

        $result[] = [
            '_index' => 'Jumlah',
            'nama_kepala_rumah_tangga' => null,
            'jumlah_KK' => $catatan_keluarga->count('jumlah_KK') ?: '0',
            'jumlah_laki' => $catatan_keluarga->sum('jumlah_laki') ?: '0',
            'jumlah_perempuan' => $catatan_keluarga->sum('jumlah_perempuan') ?: '0',
            'jumlah_balita_laki' => $catatan_keluarga->sum('jumlah_balita_laki') ?: '0',
            'jumlah_balita_perempuan' => $catatan_keluarga->sum('jumlah_balita_perempuan') ?: '0',
            'jumlah_3_buta' => $catatan_keluarga->sum('jumlah_3_buta') ?: '0',
            'jumlah_PUS' => $catatan_keluarga->sum('jumlah_PUS') ?: '0',
            'jumlah_WUS' => $catatan_keluarga->sum('jumlah_WUS') ?: '0',
            'jumlah_ibu_hamil' => $catatan_keluarga->sum('jumlah_ibu_hamil') ?: '0',
            'jumlah_ibu_menyusui' => $catatan_keluarga->sum('jumlah_ibu_menyusui') ?: '0',
            'jumlah_lansia' => $catatan_keluarga->sum('jumlah_lansia') ?: '0',
            'jumlah_kebutuhan_khusus' => $catatan_keluarga->sum('jumlah_kebutuhan_khusus') ?: '0',
            'sehat_layak_huni' => $catatan_keluarga->sum('kriteria_rumah') ?: '0',
            'tidak_sehat_layak_huni' => $catatan_keluarga->count() - $catatan_keluarga->sum('kriteria_rumah') ?: '0',
            'punya_tempat_sampah' => $catatan_keluarga->sum('punya_tempat_sampah') ?: '0',
            'punya_saluran_air' => $catatan_keluarga->sum('punya_saluran_air') ?: '0',
            'punya_jamban' => $catatan_keluarga->sum('punya_jamban') ?: '0',
            'tempel_stiker' => $catatan_keluarga->sum('tempel_stiker') ?: '0',
            'sumber_air' => $catatan_keluarga->where('sumber_air', 1)->count() ?: '0',
            'sumber_air_2' => $catatan_keluarga->where('sumber_air', 2)->count() ?: '0',
            'sumber_air_4' => $catatan_keluarga->where('sumber_air', 4)->count() ?: '0',
            'makanan_pokok' => $catatan_keluarga->where('makanan_pokok', 1)->count() ?: '0',
            'makanan_pokok_0' => $catatan_keluarga->where('makanan_pokok', 0)->count() ?: '0',
            'aktivitas_UP2K' => $catatan_keluarga->sum('aktivitas_UP2K') ?: '0',
            'pemanfaatan' => $catatan_keluarga->sum('have_pemanfaatan') ?: '0',
            'industri' => $catatan_keluarga->sum('have_industri') ?: '0',
            'kerja_bakti' => $catatan_keluarga->sum('have_kegiatan') ?: '0',
        ];

        return $result;
    }

    public function headings(): array
    {
        $headings = [
            'No',
            'Nama Kepala Rumah Tangga',
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
            'Sehat Layak Huni',
            'Tidak Sehat Layak Huni',
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
            'Kerja Bakti',
        ];

        return [
            ['REKAPITULASI'],
            ['CATATAN DATA DAN KEGIATAN WARGA'],
            ['KELOMPOK DASA WISMA'],
            ['Dasa Wisma : '.ucfirst($this->nama_dasawisma)],
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
                $event->sheet->getDelegate()->mergeCells('A1:AC1');
                $event->sheet->getDelegate()->mergeCells('A2:AC2');
                $event->sheet->getDelegate()->mergeCells('A3:AC3');
                $event->sheet->getDelegate()->mergeCells('A4:AC4');
                $event->sheet->getDelegate()->mergeCells('A5:AC5');
                $event->sheet->getDelegate()->mergeCells('A6:AC6');
                $event->sheet->getDelegate()->mergeCells('A7:AC7');
                $event->sheet->getDelegate()->mergeCells('A8:AC8');

                $event->sheet->getDelegate()->getStyle('A1:A8')->getAlignment()->setHorizontal('center');

                $event->sheet->getDelegate()->mergeCells('A10:A11');
                $event->sheet->getDelegate()->mergeCells('B10:B11');
                $event->sheet->getDelegate()->mergeCells('C10:C11');

                $event->sheet->getDelegate()->mergeCells('D10:N10');
                $event->sheet->getDelegate()->mergeCells('O10:T10');
                $event->sheet->getDelegate()->mergeCells('U10:W10');
                $event->sheet->getDelegate()->mergeCells('X10:Y10');
                $event->sheet->getDelegate()->mergeCells('Z10:AC10');

                $event->sheet->getDelegate()->getStyle('D10:AC10')->getAlignment()->setHorizontal('center');

                $lastRow = count($this->catatan_keluarga) + 12;
                $event->sheet->getDelegate()->mergeCells('A'.$lastRow.':B'.$lastRow);
            },
        ];
    }
}
