<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori_kegiatan')->insert([

            [
                'nama_kegiatan'=>'Penghayatan dan Pengamalan Pancasila',
            ],
            [
                'nama_kegiatan'=>'Gotong Royong'
            ],
            [
                'nama_kegiatan'=>'Pendidikan dan Keterampilan',
            ],
            [
                'nama_kegiatan'=>'Pengembangan Kehidupan Berkoperasi',
            ],
            [
                'nama_kegiatan'=>'Pangan',
            ],
            [
                'nama_kegiatan'=>'Sandang',
            ],
            [
                'nama_kegiatan'=>'Persencanaan Sehat',
            ],
            [
                'nama_kegiatan'=>'Kesehatan',
            ],
            [
                'nama_kegiatan'=>'Lain-lain',
            ]
         ]);
    }
}