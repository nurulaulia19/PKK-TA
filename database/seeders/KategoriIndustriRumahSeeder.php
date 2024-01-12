<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriIndustriRumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create tabel kategori_industri_rumah
        DB::table('kategori_industri_rumah')->insert([

            [
                'nama_kategori'=>'Pangan',
            ],
            [
                'nama_kategori'=>'Sandang',
            ],
            [
                'nama_kategori'=>'Konveksi',
            ],
            [
                'nama_kategori'=>'Jasa',
            ],
            [
                'nama_kategori'=>'Lain-lain',
            ]
        ]);
    }
}