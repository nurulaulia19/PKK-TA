<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriPemanfaatanLahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create tabel kategori_pemanfaatan_lahan
        DB::table('kategori_pemanfaatan_lahan')->insert([

            [
                'nama_kategori'=>'Peternakan',
            ],
            [
                'nama_kategori'=>'Perikanan',
            ],
            [
                'nama_kategori'=>'Warung Hidup',
            ],
            [
                'nama_kategori'=>'TOGA (Tanaman Obat Keluarga)',
            ],
            [
                'nama_kategori'=>'Tanaman Keras',
            ],
            [
                'nama_kategori'=>'Lainnya',
            ]
        ]);
    }
}