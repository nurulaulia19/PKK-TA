<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DasawismaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_dasawisma')->insert([
            'id_desa' => 1,
            'id_kecamatan' => 1,
            'nama_dasawisma' => 'matahari',
            'alamat_dasawisma' => 'anjatan',
            'status' => 'aktif',
            'rt' => 3,
            'rw' => 8,
            'periode' => 2024,
            'dusun' => 'matahari',
        ]);
    }
}
