<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeteranganKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create tabel kategori_keterangan
        DB::table('keterangan_kegiatan')->insert([

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Keagamaan ',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'PKBN (Pembinaan Kesadaran Bela Negara)',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Pola Asuh',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Pencegahan KDRT',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Pencegahan Traffocking',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Narkoba',
            ],

            [
                'id_kegiatan' => '1',
                'nama_keterangan' => 'Pencegahan Kejahatan Seksual',
            ],

            [
                'id_kegiatan' => '2',
                'nama_keterangan' => 'Kerja Bakti',
            ],

            [
                'id_kegiatan' => '2',
                'nama_keterangan' => 'Jimpitan ',
            ],

            [
                'id_kegiatan' => '2',
                'nama_keterangan' => ' Arisan',
            ],

            [
                'id_kegiatan' => '2',
                'nama_keterangan' => 'Rukun Kematian',
            ],

            [
                'id_kegiatan' => '2',
                'nama_keterangan' => 'Bakti Sosial',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'BKB (Bina Keluarga Balita)',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'PAUD Sejenis',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'Paket A ',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'Paket B ',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'Paket C',
            ],

            [
                'id_kegiatan' => '3',
                'nama_keterangan' => 'KF (Keaksaraan Fungsionalitas)',
            ],

            [
                'id_kegiatan' => '4',
                'nama_keterangan' => 'UP2K (Usaha Peningkatan Pendapatan Koperasi)',
            ],

            [
                'id_kegiatan' => '4',
                'nama_keterangan' => 'Koperasi',
            ],

            [
                'id_kegiatan' => '5',
                'nama_keterangan' => 'Beras',
            ],
            [
                'id_kegiatan' => '5',
                'nama_keterangan' => 'Non Beras',
            ],
            [
                'id_kegiatan' => '5',
                'nama_keterangan' => 'Pemanfaatan Halaman Pekarangan',
            ],
            [
                'id_kegiatan' => '6',
                'nama_keterangan' => 'Penyuluhan Busana Serasi dan Pantas Pakai',
            ],
            [
                'id_kegiatan' => '6',
                'nama_keterangan' => 'Pelatihan Menjahit',
            ],
            [
                'id_kegiatan' => '6',
                'nama_keterangan' => 'Lomba Busana Tradisional Pada Hari Kartini',
            ],
            [
                'id_kegiatan' => '7',
                'nama_keterangan' => 'Posyandu Balita/Lansia',
            ],
            [
                'id_kegiatan' => '7',
                'nama_keterangan' => 'PHBS (Perilaku Hidup Bersih dan Sehat)',
            ],
            [
                'id_kegiatan' => '8',
                'nama_keterangan' => 'Program KB',
            ],
            [
                'id_kegiatan' => '8',
                'nama_keterangan' => 'Peserta BPJS Kesehatan',
            ],
            [
                'id_kegiatan' => '8',
                'nama_keterangan' => 'Menabung untuk Masa Depan Keluarga',
            ],
         ]);

    }
}