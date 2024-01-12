<?php

namespace Database\Seeders;

use App\Models\Kader;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create tabel kader
    //     $faker = Faker::create('id_ID');

    // 	for($i = 1; $i <= 5; $i++){

    // 	      // insert data ke table pegawai menggunakan Faker
    // 		DB::table('data_kader')->insert([
    // 			'name' => $faker->name,
    // 			'email' => $faker->email,
    // 			'password' => $faker->password,
    // 		]);
    $kader_desa = Kader::create([
        'name' => 'Agus',
        'email' => 'agus@gmail.com',
        'password' => Hash::make('agus'),
        'user_type' => 'kader_desa',
        'id_kecamatan' => 1,
        'id_desa' => 1,
    ]);

    $kader_desa = Kader::create([
        'name' => 'Atun',
        'email' => 'atun@gmail.com',
        'password' => Hash::make('atun'),
        'user_type' => 'kader_desa',
        'id_kecamatan' => 2,
        'id_desa' => 2,
    ]);

    $kader_kelurahan = Kader::create([
        'name' => 'Amin',
        'email' => 'amin@gmail.com',
        'password' => Hash::make('amin'),
        'user_type' => 'kader_kelurahan',
        'id_kecamatan' => 11,
        'id_desa' => 98,
    ]);

    $kader_kelurahan = Kader::create([
        'name' => 'Bibi',
        'email' => 'bibi@gmail.com',
        'password' => Hash::make('bibi'),
        'user_type' => 'kader_kelurahan',
        'id_kecamatan' => 11,
        'id_desa' => 99,
    ]);

   
}
}