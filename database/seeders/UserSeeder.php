<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $super_admin = User::create([
        //     'name' => 'Super Admin',
        //     'email' => 'superadmin@gmail.com',
        //     'password' => Hash::make('superadmin'),
        //     'user_type' => 'superadmin',
        //     'id_kecamatan' => null,
        //     'id_desa' => null,
        //      'foto' => null
        // ]);
        // $super_admin->assignRole(Role::ROLE_ADMIN);

        $admin_kabupaten = User::create([
            'name' => 'Admin PKK Kabupaten',
            'foto' => null,
            'id_kecamatan' => null,
            'email' => 'adminkabupaten@gmail.com',
            'password' => Hash::make('adminkabupaten'),
            'user_type' => 'admin_kabupaten',
            'id_desa' => null,

        ]);
        $admin_kabupaten->assignRole(Role::ROLE_ADMIN);

        // admin desa anjatan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Anjatan',
            'foto' => null,
            'id_kecamatan' => 1,
            'email' => 'admindesaanjatan@gmail.com',
            'password' => Hash::make('anjatan'),
            'user_type' => 'admin_desa',
            'id_desa' => 1,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Anjatan Baru',
            'foto' => null,
            'id_kecamatan' => 1,
            'email' => 'admindesaanjatanbaru@gmail.com',
            'password' => Hash::make('anjatanbaru'),
            'user_type' => 'admin_desa',
            'id_desa' => 2,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Anjatan Utara',
            'foto' => null,
            'id_kecamatan' => 1,
            'email' => 'admindesaanjatanutara@gmail.com',
            'password' => Hash::make('anjatanutara'),
            'user_type' => 'admin_desa',
            'id_desa' => 3,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bugis',
            'email' => 'admindesabugis@gmail.com',
            'password' => Hash::make('bugis'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 4,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bugis Tua',
            'email' => 'admindesabugistua@gmail.com',
            'password' => Hash::make('bugistua'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 5,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cilandak',
            'email' => 'admindesacilandak@gmail.com',
            'password' => Hash::make('cilandak'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 6,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cilandak Lor',
            'email' => 'admindesacilandaklor@gmail.com',
            'password' => Hash::make('cilandaklor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 7,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedungwungu',
            'email' => 'admindesakedungwunguanjatan@gmail.com',
            'password' => Hash::make('kedungwunguanjatan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 8,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kopyah',
            'email' => 'admindesakopyah@gmail.com',
            'password' => Hash::make('kopyah'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 9,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lempuyang',
            'email' => 'admindesalempuyang@gmail.com',
            'password' => Hash::make('lempuyang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 10,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mangunjaya',
            'email' => 'admindesamangunjaya@gmail.com',
            'password' => Hash::make('mangunjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 11,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Salamdarma',
            'email' => 'admindesasalamdarma@gmail.com',
            'password' => Hash::make('salamdarma'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 12,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wanguk',
            'email' => 'admindesawanguk@gmail.com',
            'password' => Hash::make('wanguk'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 13,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        // admin desa arahan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Arahan Kidul',
            'email' => 'admindesaarahankidul@gmail.com',
            'password' => Hash::make('arahankidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 14,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Arahan Lor',
            'email' => 'admindesaarahanlor@gmail.com',
            'password' => Hash::make('arahanlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 15,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cidempet',
            'email' => 'admindesacidempet@gmail.com',
            'password' => Hash::make('cidempet'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 16,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Linggajati',
            'email' => 'admindesalinggarjati@gmail.com',
            'password' => Hash::make('linggarjati'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 17,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pranggong',
            'email' => 'admindesapranggong@gmail.com',
            'password' => Hash::make('pranggong'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 18,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukadadi',
            'email' => 'admindesasukadadih@gmail.com',
            'password' => Hash::make('sukadadi'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 19,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukasari',
            'email' => 'admindesasukasari@gmail.com',
            'password' => Hash::make('sukasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 20,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tawangsari',
            'email' => 'admindesatawangsari@gmail.com',
            'password' => Hash::make('tawangsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 2,
            'id_desa' => 21,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        // admin desa Balongan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Balongan',
            'email' => 'admindesabalongan@gmail.com',
            'password' => Hash::make('balongan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 22,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gelarmendala',
            'email' => 'admindesagelarmendala@gmail.com',
            'password' => Hash::make('gelarmendala'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 23,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Majakerta',
            'email' => 'admindesamajakerta@gmail.com',
            'password' => Hash::make('majakerta'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 24,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rawadalem',
            'email' => 'admindesarawadalem@gmail.com',
            'password' => Hash::make('rawadalem'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 25,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sudimampir',
            'email' => 'admindesasudimampir@gmail.com',
            'password' => Hash::make('sudimampir'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 27,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sudimampir Lor',
            'email' => 'admindesasudimampirlor@gmail.com',
            'password' => Hash::make('sudimampirlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 27,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukareja',
            'email' => 'admindesasukareja@gmail.com',
            'password' => Hash::make('sukareja'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 28,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukaurip',
            'email' => 'admindesasukaurip@gmail.com',
            'password' => Hash::make('sukaurip'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 29,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegal Sembadra',
            'email' => 'admindesategalsembadra@gmail.com',
            'password' => Hash::make('tegalsembadra'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 30,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegal Urung',
            'email' => 'admindesategalurung@gmail.com',
            'password' => Hash::make('tegalurung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 3,
            'id_desa' => 31,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bangodua',
            'email' => 'admindesabangodua@gmail.com',
            'password' => Hash::make('bangodua'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 32,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Beduyut',
            'email' => 'admindesabeduyut@gmail.com',
            'password' => Hash::make('beduyut'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 33,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karanggetas',
            'email' => 'admindesakaranggetas@gmail.com',
            'password' => Hash::make('karanggetas'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 34,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Malangsari',
            'email' => 'admindesamalangsari@gmail.com',
            'password' => Hash::make('malangsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 35,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mulyasari',
            'email' => 'admindesamulyasari@gmail.com',
            'password' => Hash::make('mulyasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 36,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rancasari',
            'email' => 'admindesarancasari@gmail.com',
            'password' => Hash::make('rancasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 37,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegalgirang',
            'email' => 'admindesategalgirang@gmail.com',
            'password' => Hash::make('tegalgirang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 38,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wanasari',
            'email' => 'admindesawanasari@gmail.com',
            'password' => Hash::make('wanasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 4,
            'id_desa' => 39,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa bongas
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bongas',
            'email' => 'admindesabongas@gmail.com',
            'password' => Hash::make('bongas'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 40,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cipaat',
            'email' => 'admindesacipaat@gmail.com',
            'password' => Hash::make('cipaat'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 41,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cipedang',
            'email' => 'admindesacipedang@gmail.com',
            'password' => Hash::make('cipedang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 42,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kertajaya',
            'email' => 'admindesakertajaya@gmail.com',
            'password' => Hash::make('kertajaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 43,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kertamulya',
            'email' => 'admindesakertamulya@gmail.com',
            'password' => Hash::make('kertamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 44,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Margamulya',
            'email' => 'admindesamargamulya@gmail.com',
            'password' => Hash::make('margamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 45,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Plawangan',
            'email' => 'admindesaplawangan@gmail.com',
            'password' => Hash::make('plawangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 46,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sidamulya',
            'email' => 'admindesasidamulya@gmail.com',
            'password' => Hash::make('sidamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 5,
            'id_desa' => 47,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);



        // admin desa Cangkring
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cangkring',
            'email' => 'admindesacangkring@gmail.com',
            'password' => Hash::make('cangkring'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 48,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cantigi Kulon',
            'email' => 'admindesacantigikulon@gmail.com',
            'password' => Hash::make('cantigikulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 49,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cantigi Wetan',
            'email' => 'admindesacantigiwetan@gmail.com',
            'password' => Hash::make('cantigiwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 50,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lamarantarung',
            'email' => 'admindesalamarantarung@gmail.com',
            'password' => Hash::make('lamarantarung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 51,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Panyingkiran Kidul',
            'email' => 'admindesapanyingkirankidul@gmail.com',
            'password' => Hash::make('panyingkirankidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 52,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Panyingkiran Lor',
            'email' => 'admindesapanyingkiranlor@gmail.com',
            'password' => Hash::make('panyingkiranlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 6,
            'id_desa' => 53,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin amis
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Amis',
            'email' => 'admindesaamis@gmail.com',
            'password' => Hash::make('amis'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 54,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cikedung Lor',
            'email' => 'admindesacikedunglor@gmail.com',
            'password' => Hash::make('cikedunglor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 55,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cikedung Kidul',
            'email' => 'admindesacikedungkidul@gmail.com',
            'password' => Hash::make('cikedungkidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 56,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jambak',
            'email' => 'admindesajambak@gmail.com',
            'password' => Hash::make('jambak'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 57,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatisura',
            'email' => 'admindesajatisura@gmail.com',
            'password' => Hash::make('jatisura'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 58,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Loyang',
            'email' => 'admindesaloyang@gmail.com',
            'password' => Hash::make('loyang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 59,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mundakjaya',
            'email' => 'admindesamundakjaya@gmail.com',
            'password' => Hash::make('mundakjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 7,
            'id_desa' => 60,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Babakan jaya
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Babakan Jaya',
            'email' => 'admindesababakanjaya@gmail.com',
            'password' => Hash::make('babakanjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 61,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Drunten Kulon',
            'email' => 'admindesadruntenkulon@gmail.com',
            'password' => Hash::make('druntenkulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 62,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Drunten Wetan',
            'email' => 'admindesadruntenwetan@gmail.com',
            'password' => Hash::make('druntenwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 63,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gabus Kulon',
            'email' => 'admindesagabuskulon@gmail.com',
            'password' => Hash::make('gabuskulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 64,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gabus Wetan',
            'email' => 'admindesagabuswetan@gmail.com',
            'password' => Hash::make('gabuswetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 65,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedokan Gabus',
            'email' => 'admindesakedokangabus@gmail.com',
            'password' => Hash::make('kedokangabus'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 66,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedung Dawa',
            'email' => 'admindesakedungdawa@gmail.com',
            'password' => Hash::make('kedungdawa'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 67,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rancahan',
            'email' => 'admindesarancahan@gmail.com',
            'password' => Hash::make('rancahan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 68,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rancamulya',
            'email' => 'admindesarancamulya@gmail.com',
            'password' => Hash::make('rancamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 69,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sekar Mulya',
            'email' => 'admindesasekarmulya@gmail.com',
            'password' => Hash::make('sekarmulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 8,
            'id_desa' => 70,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Balereja
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Balereja',
            'email' => 'admindesabaleraja@gmail.com',
            'password' => Hash::make('baleraja'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 71,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bantarwaru',
            'email' => 'admindesabantarwaru@gmail.com',
            'password' => Hash::make('bantarwaru'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 72,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gantar',
            'email' => 'admindesagantar@gmail.com',
            'password' => Hash::make('gantar'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 73,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekarjaya',
            'email' => 'admindesamekarjaya@gmail.com',
            'password' => Hash::make('mekarjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 74,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekarwaru',
            'email' => 'admindesamekarwaru@gmail.com',
            'password' => Hash::make('mekarwaru'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 75,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sanca',
            'email' => 'admindesasanca@gmail.com',
            'password' => Hash::make('sanca'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 76,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Situraja',
            'email' => 'admindesasituraja@gmail.com',
            'password' => Hash::make('situraja'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 9,
            'id_desa' => 77,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa cipancuh
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cipancuh',
            'email' => 'admindesaCipancuh@gmail.com',
            'password' => Hash::make('Cipancuh'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 78,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Haurgeulis',
            'email' => 'admindesahaurgeulis@gmail.com',
            'password' => Hash::make('haurgeulisoyang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 79,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Haurkolot',
            'email' => 'admindesahaurkolot@gmail.com',
            'password' => Hash::make('haurkolot'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 80,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangtumaritis',
            'email' => 'admindesakarangtumaritis@gmail.com',
            'password' => Hash::make('karangtumaritis'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 81,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kertanegara',
            'email' => 'admindesakertanegara@gmail.com',
            'password' => Hash::make('kertanegara'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 82,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekarjati',
            'email' => 'admindesamekarjati@gmail.com',
            'password' => Hash::make('mekarjati'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 83,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sidodadi',
            'email' => 'admindesasidodadi@gmail.com',
            'password' => Hash::make('sidodadi'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 84,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukajati',
            'email' => 'admindesasukajati@gmail.com',
            'password' => Hash::make('sukajati'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 85,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sumbermulya',
            'email' => 'admindesasumbermulya@gmail.com',
            'password' => Hash::make('sumbermulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 86,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wanakaya',
            'email' => 'admindesawanakaya@gmail.com',
            'password' => Hash::make('wanakaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 10,
            'id_desa' => 87,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Dukuh
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dukuh',
            'email' => 'admindesadukuh@gmail.com',
            'password' => Hash::make('dukuh'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 88,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangsong',
            'email' => 'admindesakarangsong@gmail.com',
            'password' => Hash::make('karangsong'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 89,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pabean Udik',
            'email' => 'admindesapabeanudik@gmail.com',
            'password' => Hash::make('pabeanudik'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 90,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pekandangan',
            'email' => 'admindesapekandangan@gmail.com',
            'password' => Hash::make('pekandangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 91,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pekandangan Jaya',
            'email' => 'admindesapekandanganjaya@gmail.com',
            'password' => Hash::make('pekandanganjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 92,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Plumbon',
            'email' => 'admindesaplumbon@gmail.com',
            'password' => Hash::make('plumbon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 93,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Singajaya',
            'email' => 'admindesasingajaya@gmail.com',
            'password' => Hash::make('singajaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 94,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Singaraja',
            'email' => 'admindesasingaraja@gmail.com',
            'password' => Hash::make('singaraja'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 95,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tambak',
            'email' => 'admindesatambak@gmail.com',
            'password' => Hash::make('tambak'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 96,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Telukagung',
            'email' => 'admindesatelukagung@gmail.com',
            'password' => Hash::make('telukagung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 97,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Bojongsari',
            'email' => 'adminkelbojongsari@gmail.com',
            'password' => Hash::make('bojongsari'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 98,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Karanganyar',
            'email' => 'adminkelkaranganya@gmail.com',
            'password' => Hash::make('karanganyar'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 99,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Karangmalang',
            'email' => 'adminkelkarangmalang@gmail.com',
            'password' => Hash::make('karangmalang'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 100,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Kepandean',
            'email' => 'adminkelkepandean@gmail.com',
            'password' => Hash::make('kepandean'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 101,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Lemahabang',
            'email' => 'adminkellemahabang@gmail.com',
            'password' => Hash::make('lemahabang'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 102,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Lemahmekar',
            'email' => 'adminkellemahmekar@gmail.com',
            'password' => Hash::make('lemahmekar'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 103,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Margadadi',
            'email' => 'adminkelmargadadi@gmail.com',
            'password' => Hash::make('margadadi'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 104,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);

        $admin_kelurahan = User::create([
            'name' => 'Admin PKK Kel. Paoman',
            'email' => 'adminkelpaoman@gmail.com',
            'password' => Hash::make('paoman'),
            'user_type' => 'admin_kelurahan',
            'foto' => null,
            'id_kecamatan' => 11,
            'id_desa' => 105,
        ]);
        $admin_kelurahan->assignRole(Role::ROLE_ADMIN);


        // admin desa Bulak
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bulak',
            'email' => 'admindesabulakjtb@gmail.com',
            'password' => Hash::make('bulakjtb'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 106,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bulak Lor',
            'email' => 'admindesabulaklor@gmail.com',
            'password' => Hash::make('bulaklor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 107,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatibarang',
            'email' => 'admindesajatibarang@gmail.com',
            'password' => Hash::make('jatibarang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 108,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatibarang Baru',
            'email' => 'admindesajatibarangbaru@gmail.com',
            'password' => Hash::make('jatibarangbaru'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 109,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatisawit',
            'email' => 'admindesajatisawit@gmail.com',
            'password' => Hash::make('jatisawit'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 110,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatisawit Lor',
            'email' => 'admindesajatisawitlor@gmail.com',
            'password' => Hash::make('jatisawitlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 111,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kalimati',
            'email' => 'admindesakalimati@gmail.com',
            'password' => Hash::make('kalimati'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 112,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kebulen',
            'email' => 'admindesakebulen@gmail.com',
            'password' => Hash::make('kebulen'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 113,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Krasak',
            'email' => 'admindesakrasak@gmail.com',
            'password' => Hash::make('krasak'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 114,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lohbener',
            'email' => 'admindesalohbenerjtb@gmail.com',
            'password' => Hash::make('lohbenerjtb'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 115,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lohbener Lor',
            'email' => 'admindesalohbenerlor@gmail.com',
            'password' => Hash::make('lohbenerlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 116,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Malang Semirang',
            'email' => 'admindesamalangsemirang@gmail.com',
            'password' => Hash::make('malangsemirang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 117,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pawidean',
            'email' => 'admindesapawidean@gmail.com',
            'password' => Hash::make('pawidean'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 118,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pilang Sari',
            'email' => 'admindesapilangsari@gmail.com',
            'password' => Hash::make('pilangsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 119,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukalila',
            'email' => 'admindesasukalila@gmail.com',
            'password' => Hash::make('sukalila'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 12,
            'id_desa' => 120,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa dadap
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dadap',
            'email' => 'admindesadadap@gmail.com',
            'password' => Hash::make('dadap'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 121,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Juntikebon',
            'email' => 'admindesajuntikebon@gmail.com',
            'password' => Hash::make('juntikebon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 122,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Juntikedokan',
            'email' => 'admindesajuntikedokan@gmail.com',
            'password' => Hash::make('juntikedokan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 123,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Juntiweden',
            'email' => 'admindesajuntiweden@gmail.com',
            'password' => Hash::make('juntiweden'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 124,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Juntinyuat',
            'email' => 'admindesajuntinyuat@gmail.com',
            'password' => Hash::make('juntinyuat'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 125,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Limbangan',
            'email' => 'admindesalimbangan@gmailcom',
            'password' => Hash::make('limbangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 126,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lombang',
            'email' => 'admindesalombang@gmail.com',
            'password' => Hash::make('lombang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 127,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pondoh',
            'email' => 'admindesapondoh@gmail.com',
            'password' => Hash::make('pondoh'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 128,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sambirmaya',
            'email' => 'admindesaSambirmaya@gmail.com',
            'password' => Hash::make('Sambirmaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 129,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Segeran',
            'email' => 'admindesasegeran@gmail.com',
            'password' => Hash::make('segeran'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 130,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Segeran Kidul',
            'email' => 'admindesasegerankidul@gmail.com',
            'password' => Hash::make('segerankidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 131,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tinumpuk',
            'email' => 'admindesatinumpuk@gmail.com',
            'password' => Hash::make('tinumpuk'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 13,
            'id_desa' => 132,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        // admin desa Bulak kecamatan kandanghaur
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bulak',
            'email' => 'admindesabulak@gmail.com',
            'password' => Hash::make('bulak'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 133,
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Curug',
            'email' => 'admindesacurug@gmail.com',
            'password' => Hash::make('curug'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 134
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Eretan Kulon',
            'email' => 'admindesaeretankulon@gmail.com',
            'password' => Hash::make('eretankulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 135
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Eretan Wetan',
            'email' => 'admindesaeretanwetan@gmail.com',
            'password' => Hash::make('eretanwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 136
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ilir',
            'email' => 'admindesailir@gmail.com',
            'password' => Hash::make('ilir'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 137
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karang Anyar',
            'email' => 'admindesakaranganyar@gmail.com',
            'password' => Hash::make('karanganyar'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 138
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangmulya',
            'email' => 'admindesakarangmulya@gmail.com',
            'password' => Hash::make('karangmulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 139
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kertawinangun',
            'email' => 'admindesakertawinangun@gmail.com',
            'password' => Hash::make('kertawinangun'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 140
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pareangirang',
            'email' => 'admindesapareangirang@gmail.com',
            'password' => Hash::make('pareangirang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 141
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pranti',
            'email' => 'admindesapranti@gmail.com',
            'password' => Hash::make('pranti'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 142
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Soge',
            'email' => 'admindesasoge@gmail.com',
            'password' => Hash::make('soge'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 143
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wirakanan',
            'email' => 'admindesawirakanan@gmail.com',
            'password' => Hash::make('wirakanan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 144
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wirapanjunan',
            'email' => 'admindesawirapanjunan@gmail.com',
            'password' => Hash::make('wirapanjunan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 14,
            'id_desa' => 145
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa benda
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Benda',
            'email' => 'admindesabenda@gmail.com',
            'password' => Hash::make('benda'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 146
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dukuh Jeruk',
            'email' => 'admindesadukuhjeruk@gmail.com',
            'password' => Hash::make('dukuhjeruk'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 147
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dukuh Tengah',
            'email' => 'admindesadukuhtengah@gmail.com',
            'password' => Hash::make('dukuhtengah'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 148
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kaplongan Lor',
            'email' => 'admindesakaplonganlor@gmail.com',
            'password' => Hash::make('kaplonganlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 149
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangampel',
            'email' => 'admindesakarangampel@gmail.com',
            'password' => Hash::make('karangampel'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 150
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangampel Kidul',
            'email' => 'admindesakarangampelkidul@gmail.com',
            'password' => Hash::make('karangampelkidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 151
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mundu',
            'email' => 'admindesamundu@gmail.com',
            'password' => Hash::make('mundu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 152
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pringgacala',
            'email' => 'admindesapringgacala@gmail.com',
            'password' => Hash::make('pringgacala'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 153
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sendang',
            'email' => 'admindesasendang@gmail.com',
            'password' => Hash::make('sendang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 154
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tanjungpura',
            'email' => 'admindesatanjungpura@gmail.com',
            'password' => Hash::make('tanjungpura'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 155
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tanjungsari',
            'email' => 'admindesatanjungsari@gmail.com',
            'password' => Hash::make('tanjungsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 15,
            'id_desa' => 156
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Cangkingan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cangkingan',
            'email' => 'admindesaCangkingan@gmail.com',
            'password' => Hash::make('Cangkingan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 157
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jayalaksana',
            'email' => 'admindesajayalaksana@gmail.com',
            'password' => Hash::make('jayalaksana'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 158
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jayawinangun',
            'email' => 'admindesajayawinangun@gmail.com',
            'password' => Hash::make('jayawinangun'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 159
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kaplongan',
            'email' => 'admindesakaplongan@gmail.com',
            'password' => Hash::make('kaplongan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 160
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedokan Agung',
            'email' => 'admindesakedokanagung@gmail.com',
            'password' => Hash::make('kedokanagung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 161
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedokanbunder',
            'email' => 'admindesakedokanbunder@gmail.com',
            'password' => Hash::make('kedokanbunder'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 162
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedokanbunderwetan',
            'email' => 'admindesakedokanbunderwetan@gmail.com',
            'password' => Hash::make('kedokanbunderwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 16,
            'id_desa' => 163
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa jambe
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jambe',
            'email' => 'admindesajambe@gmail.com',
            'password' => Hash::make('jambe'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 164
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jengkok',
            'email' => 'admindesajengkok@gmail.com',
            'password' => Hash::make('jengkok'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 165
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kertasemaya',
            'email' => 'admindesakertasemaya@gmail.com',
            'password' => Hash::make('kertasemaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 166
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kliwed',
            'email' => 'admindesakliwed@gmail.com',
            'password' => Hash::make('kliwed'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 167
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Larangan Jambe',
            'email' => 'admindesalaranganjambe@gmail.com',
            'password' => Hash::make('lemahayu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 168
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lemahayu',
            'email' => 'admindesalemahayu@gmail.com',
            'password' => Hash::make('lemahayu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 169
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Manguntara',
            'email' => 'admindesamanguntara@gmail.com',
            'password' => Hash::make('manguntara'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 170
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukawera',
            'email' => 'admindesasukawera@gmail.com',
            'password' => Hash::make('sukawera'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 171
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegal Wirangrong',
            'email' => 'admindesategalwirangrong@gmail.com',
            'password' => Hash::make('tegalwirangrong'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 172
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tenajar',
            'email' => 'admindesatenajar@gmail.com',
            'password' => Hash::make('tenajar'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 173
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tenajar Kidul',
            'email' => 'admindesatenajarkidul@gmail.com',
            'password' => Hash::make('tenajarkidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 174
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tenajar Lor',
            'email' => 'admindesatenajarlor@gmail.com',
            'password' => Hash::make('tenajarlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 175
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tulungagung',
            'email' => 'admindesatulungagung@gmail.com',
            'password' => Hash::make('tulungagung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 17,
            'id_desa' => 176
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Dukuhjati
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dukuhjati',
            'email' => 'admindesadukuhjati@gmail.com',
            'password' => Hash::make('dukuhjati'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 177
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kalianyar',
            'email' => 'admindesakalianyar@gmail.com',
            'password' => Hash::make('kalianyar'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 178
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kapringan',
            'email' => 'admindesakapringan@gmail.com',
            'password' => Hash::make('kapringan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 179
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kedungwungu',
            'email' => 'admindesakedungwungu@gmail.com',
            'password' => Hash::make('kedungwungu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 180
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Krangkeng',
            'email' => 'admindesakrangkeng@gmail.com',
            'password' => Hash::make('krangkeng'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 181
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Luwunggesik',
            'email' => 'admindesaluwunggesik@gmail.com',
            'password' => Hash::make('luwunggesik'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 182
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Purwajaya',
            'email' => 'admindesapurwajaya@gmail.com',
            'password' => Hash::make('purwajaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 183
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Singakerta',
            'email' => 'admindesasingakerta@gmail.com',
            'password' => Hash::make('singakerta'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 184
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Srengseng',
            'email' => 'admindesasrengseng@gmail.com',
            'password' => Hash::make('srengseng'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 185
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tanjakan',
            'email' => 'admindesatanjakan@gmail.com',
            'password' => Hash::make('tanjakan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 186
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegalmulya',
            'email' => 'admindesategalmulya@gmail.com',
            'password' => Hash::make('tegalmulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 18,
            'id_desa' => 187
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Jayamulya
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jayamulya',
            'email' => 'admindesajayamulya@gmail.com',
            'password' => Hash::make('jayamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 188
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kroya',
            'email' => 'admindesakroya@gmail.com',
            'password' => Hash::make('kroya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 189
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Suka Slamet',
            'email' => 'admindesasukaslamet@gmail.com',
            'password' => Hash::make('sukaslamet'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 190
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukamelang',
            'email' => 'admindesasukamelang@gmail.com',
            'password' => Hash::make('sukamelang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 191
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sumberjaya',
            'email' => 'admindesasumberjaya@gmail.com',
            'password' => Hash::make('sumberjaya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 192
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sumbon',
            'email' => 'admindesasumbon@gmail.com',
            'password' => Hash::make('sumbon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 193
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Temiyangsari',
            'email' => 'admindesatemiyangsari@gmail.com',
            'password' => Hash::make('temiyangsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 194
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tanjungngkerta',
            'email' => 'admindesatanjungngkerta@gmail.com',
            'password' => Hash::make('tanjungngkerta'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 195
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Temiyang',
            'email' => 'admindesatemiyang@gmail.com',
            'password' => Hash::make('temiyang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 196
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa cempeh
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cempeh',
            'email' => 'admindesacempeh@gmail.com',
            'password' => Hash::make('cempeh'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 197
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Langgengsari',
            'email' => 'admindesalanggengsari@gmail.com',
            'password' => Hash::make('langgengsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 198
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lelea',
            'email' => 'admindesalelea@gmail.com',
            'password' => Hash::make('lelea'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 199
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Nunuk',
            'email' => 'admindesanunuk@gmail.com',
            'password' => Hash::make('nunuk'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 200
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pangauban',
            'email' => 'admindesapangauban@gmail.com',
            'password' => Hash::make('pangauban'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 201
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tamansari',
            'email' => 'admindesatamansari@gmail.com',
            'password' => Hash::make('tamansari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 202
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tegalasari',
            'email' => 'admindesategalasari@gmail.com',
            'password' => Hash::make('tegalasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 19,
            'id_desa' => 203
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tempel',
            'email' => 'admindesatempel@gmail.com',
            'password' => Hash::make('tempel'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 204
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tempelkulon',
            'email' => 'admindesatempelkulon@gmail.com',
            'password' => Hash::make('tempelkulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 205
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tugu',
            'email' => 'admindesatugu@gmail.com',
            'password' => Hash::make('tugu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 206
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tunggul Payung',
            'email' => 'admindesatunggulpayung@gmail.com',
            'password' => Hash::make('tunggulpayung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 20,
            'id_desa' => 207
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa Bojongslawi
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bojongslawi',
            'email' => 'admindesabojongslawi@gmail.com',
            'password' => Hash::make('bojongslawi'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 208
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kiajaran Kulon',
            'email' => 'admindesakiajarankulon@gmail.com',
            'password' => Hash::make('kiajarankulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 209
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kiajaran Wetan',
            'email' => 'admindesakiajaranwetan@gmail.com',
            'password' => Hash::make('kiajaranwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 210
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Langut',
            'email' => 'admindesalangut@gmail.com',
            'password' => Hash::make('langut'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 211
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lanjan',
            'email' => 'admindesalanjan@gmail.com',
            'password' => Hash::make('lanjan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 212
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Larangan',
            'email' => 'admindesalarangan@gmail.com',
            'password' => Hash::make('larangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 213
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Legok',
            'email' => 'admindesalegok@gmail.com',
            'password' => Hash::make('legok'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 214
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lohbener',
            'email' => 'admindesalohbener@gmail.com',
            'password' => Hash::make('lohbener'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 215
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pamayahan',
            'email' => 'admindesapamayahan@gmail.com',
            'password' => Hash::make('pamayahan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 216
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rambatan Kulon',
            'email' => 'admindesarambatankulon@gmail.com',
            'password' => Hash::make('rambatankulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 217
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sindangkerta',
            'email' => 'admindesasindangkerta@gmail.com',
            'password' => Hash::make('sindangkerta'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 218
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Waru',
            'email' => 'admindesawaru@gmail.com',
            'password' => Hash::make('waru'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 21,
            'id_desa' => 219
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa cemara
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cemara',
            'email' => 'admindesacemara@gmail.com',
            'password' => Hash::make('cemara'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 220
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cemara Kulon',
            'email' => 'admindesacemarakulon@gmail.com',
            'password' => Hash::make('cemarakulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 221
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jangga',
            'email' => 'admindesajangga@gmail.com',
            'password' => Hash::make('jangga'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 222
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jumbleng',
            'email' => 'admindesajumbleng@gmail.com',
            'password' => Hash::make('jumbleng'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 223
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Krimun',
            'email' => 'admindesakrimun@gmail.com',
            'password' => Hash::make('krimun'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 224
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Losarang',
            'email' => 'admindesalosarang@gmail.com',
            'password' => Hash::make('losarang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 225
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Muntur',
            'email' => 'admindesamuntur@gmail.com',
            'password' => Hash::make('muntur'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 226
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pangkalan',
            'email' => 'admindesapangkalan@gmail.com',
            'password' => Hash::make('pangkalan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 227
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pegagan',
            'email' => 'admindesapegagan@gmail.com',
            'password' => Hash::make('pegagan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 228
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Puntang',
            'email' => 'admindesapuntang@gmail.com',
            'password' => Hash::make('puntang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 229
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rajaiyang',
            'email' => 'admindesarajaiyang@gmail.com',
            'password' => Hash::make('rajaiyang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 230
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ranjeng',
            'email' => 'admindesaranjeng@gmail.com',
            'password' => Hash::make('ranjeng'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 231
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Santing',
            'email' => 'admindesasanting@gmail.com',
            'password' => Hash::make('santing'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 22,
            'id_desa' => 232
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa brondong
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Brondong',
            'email' => 'admindesaBrondong@gmail.com',
            'password' => Hash::make('Brondong'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 233
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karanganyar',
            'email' => 'admindesakaranganyarpasekan@gmail.com',
            'password' => Hash::make('karanganyarpasekan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 234
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pabean Ilir',
            'email' => 'admindesapabeanilir@gmail.com',
            'password' => Hash::make('pabeanilir'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 235
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pagirikan',
            'email' => 'admindesapagirikan@gmail.com',
            'password' => Hash::make('pagirikan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 236
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pasekan',
            'email' => 'admindesapasekan@gmail.com',
            'password' => Hash::make('pasekan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 237
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Totoran',
            'email' => 'admindesatotoran@gmail.com',
            'password' => Hash::make('totoran'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 23,
            'id_desa' => 238
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa arjasari
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Arjasari',
            'email' => 'admindesaarjasari@gmail.com',
            'password' => Hash::make('arjasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 239
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bugel',
            'email' => 'admindesabugel@gmail.com',
            'password' => Hash::make('bugel'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 240
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Limpas',
            'email' => 'admindesalimpas@gmail.com',
            'password' => Hash::make('limpas'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 241
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekarsari',
            'email' => 'admindesamekarsaripatrolgmail.com',
            'password' => Hash::make('mekarsaripatrol'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 242
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Patrol',
            'email' => 'admindesapatrol@gmail.com',
            'password' => Hash::make('patrol'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 243
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Patrol Baru',
            'email' => 'admindesapatrolbaru@gmail.com',
            'password' => Hash::make('patrolbaru'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 244
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Patrol Lor',
            'email' => 'admindesapatrollor@gmail.com',
            'password' => Hash::make('patrollor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 245
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukahaji',
            'email' => 'admindesasukahaji@gmail.com',
            'password' => Hash::make('sukahaji'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 24,
            'id_desa' => 246
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa babadan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Babadan',
            'email' => 'admindesababadan@gmail.com',
            'password' => Hash::make('babadan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 247
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Dermayu',
            'email' => 'admindesadermayu@gmail.com',
            'password' => Hash::make('dermayu'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 248
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kenanga',
            'email' => 'admindesakenanga@gmail.com',
            'password' => Hash::make('kenanga'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 249
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Panyindangan Kulon',
            'email' => 'admindesapanyindangankulon@gmail.com',
            'password' => Hash::make('panyindangankulon'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 250
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Panyindangan Wetan',
            'email' => 'admindesapanyindanganwetan@gmail.com',
            'password' => Hash::make('panyindanganwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 251
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Penganjang',
            'email' => 'admindesapenganjang@gmail.com',
            'password' => Hash::make('penganjang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 252
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rambatan Wetan',
            'email' => 'admindesarambatanwetan@gmail.com',
            'password' => Hash::make('rambatanwetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 253
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sindang',
            'email' => 'admindesasindang@gmail.com',
            'password' => Hash::make('sindang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 254
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Terusan',
            'email' => 'admindesaterusan@gmail.com',
            'password' => Hash::make('terusan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 255
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Wawantara',
            'email' => 'admindesawawantara@gmail.com',
            'password' => Hash::make('wawantara'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 25,
            'id_desa' => 256
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa gadingan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gadingan',
            'email' => 'admindesagadingan@gmail.com',
            'password' => Hash::make('gadingan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 257
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Longok',
            'email' => 'admindesalongok@gmail.com',
            'password' => Hash::make('longok'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 258
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Majasari',
            'email' => 'admindesamajasari@gmail.com',
            'password' => Hash::make('majasari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 259
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa majasih
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Majasih',
            'email' => 'admindesamajasih@gmail.com',
            'password' => Hash::make('majasih'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 260
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekargading',
            'email' => 'admindesamekargading@gmail.com',
            'password' => Hash::make('mekargading'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 261
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sleman',
            'email' => 'admindesasleman@gmail.com',
            'password' => Hash::make('sleman'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 262
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sleman Lor',
            'email' => 'admindesaslemanlor@gmail.com',
            'password' => Hash::make('slemanlor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 263
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sliyeg',
            'email' => 'admindesasliyeg@gmail.com',
            'password' => Hash::make('sliyeg'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 264
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sliyeg Lor',
            'email' => 'admindesasliyeglor@gmail.com',
            'password' => Hash::make('sliyeglor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 265
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sudikampiran',
            'email' => 'admindesasudikampiran@gmail.com',
            'password' => Hash::make('sudikampiran'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 266
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tambi',
            'email' => 'admindesatambi@gmail.com',
            'password' => Hash::make('tambi'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 267
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tambi Lor',
            'email' => 'admindesatambilor@gmail.com',
            'password' => Hash::make('tambilor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 268
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tugu',
            'email' => 'admindesatugusliyeg@gmail.com',
            'password' => Hash::make('tugusliyeg'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 269
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tugukidul',
            'email' => 'admindesatugukidul@gmail.com',
            'password' => Hash::make('tugukidul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 270
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bondan',
            'email' => 'admindesabondan@gmail.com',
            'password' => Hash::make('bondan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 26,
            'id_desa' => 271
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa cadang pinggan
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cadang Pinggan',
            'email' => 'admindesacadangpinggan@gmail.com',
            'password' => Hash::make('cadangpinggan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 272
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cibeber',
            'email' => 'admindesacibeber@gmail.com',
            'password' => Hash::make('cibeber'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 273
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gedangan',
            'email' => 'admindesagedangan@gmail.com',
            'password' => Hash::make('gedangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 274
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gunungsari',
            'email' => 'admindesagunungsari@gmail.com',
            'password' => Hash::make('gunungsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 275
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukagumiwang',
            'email' => 'admindesasukagumiwang@gmail.com',
            'password' => Hash::make('sukagumiwang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 276
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tersana',
            'email' => 'admindesatersana@gmail.com',
            'password' => Hash::make('tersana'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 27,
            'id_desa' => 277
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa bogor
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bogor',
            'email' => 'admindesabogor@gmail.com',
            'password' => Hash::make('bogor'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 278
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karang Layung',
            'email' => 'admindesakaranglayung@gmail.com',
            'password' => Hash::make('karanglayung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 279
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukra',
            'email' => 'admindesasukra@gmail.com',
            'password' => Hash::make('sukra'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 280
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukrawetan',
            'email' => 'admindesasukrawetan@gmail.com',
            'password' => Hash::make('sukrawetan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 281
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sumuradem',
            'email' => 'admindesasumuradem@gmail.com',
            'password' => Hash::make('sumuradem'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 282
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sumuradem Timur',
            'email' => 'admindesasumurademtimur@gmail.com',
            'password' => Hash::make('sumurademtimur'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 283
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tagal Taman',
            'email' => 'admindesatagaltaman@gmail.com',
            'password' => Hash::make('tagaltaman'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 284
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ujunggebang',
            'email' => 'admindesaujunggebang@gmail.com',
            'password' => Hash::make('ujunggebang'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 28,
            'id_desa' => 285
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa cibereng
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cibereng',
            'email' => 'admindesacibereng@gmail.com',
            'password' => Hash::make('cibereng'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 286
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cikawung',
            'email' => 'admindesacikawung@gmail.com',
            'password' => Hash::make('cikawung'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 287
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatimulya',
            'email' => 'admindesajatimulya@gmail.com',
            'password' => Hash::make('jatimulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 288
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Jatimunggul',
            'email' => 'admindesajatimunggul@gmail.com',
            'password' => Hash::make('jatimunggul'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 289
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangasem',
            'email' => 'admindesakarangasem@gmail.com',
            'password' => Hash::make('karangasem'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 290
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kendayakan',
            'email' => 'admindesakendayakan@gmail.com',
            'password' => Hash::make('kendayakan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 291
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Manggungan',
            'email' => 'admindesamanggungan@gmail.com',
            'password' => Hash::make('manggungan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 292
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Plosokerep',
            'email' => 'admindesaplosokerep@gmail.com',
            'password' => Hash::make('plosokerep'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 293
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rajasinga',
            'email' => 'admindesarajasinga@gmail.com',
            'password' => Hash::make('rajasinga'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 29,
            'id_desa' => 294
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // admin desa bodas
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bodas',
            'email' => 'admindesabodas@gmail.com',
            'password' => Hash::make('bodas'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 295
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Cangko',
            'email' => 'admindesacangko@gmail.com',
            'password' => Hash::make('cangko'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 296
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Gadel',
            'email' => 'admindesagadel@gmail.com',
            'password' => Hash::make('gadel'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 297
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Karangkerta',
            'email' => 'admindesakarangkerta@gmail.com',
            'password' => Hash::make('karangkerta'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 298
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kerticala',
            'email' => 'admindesakerticala@gmail.com',
            'password' => Hash::make('kerticala'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 299
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Lajer',
            'email' => 'admindesalajer@gmail.com',
            'password' => Hash::make('lajer'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 300
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Mekarsari',
            'email' => 'admindesamekarsari@gmail.com',
            'password' => Hash::make('mekarsari'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 301
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Pagedangan',
            'email' => 'admindesapagedangan@gmail.com',
            'password' => Hash::make('pagedangan'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 302
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Rancajawat',
            'email' => 'admindesarancajawat@gmail.com',
            'password' => Hash::make('rancajawat'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 303
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukadana',
            'email' => 'admindesasukadana@gmail.com',
            'password' => Hash::make('sukadana'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 304
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukamulya',
            'email' => 'admindesasukamulya@gmail.com',
            'password' => Hash::make('sukamulya'),
            'user_type' => 'admin_desa',
            'foto' => null,
            'id_kecamatan' => 30,
            'id_desa' => 305
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Sukaperna',
            'email' => 'admindesasukaperna@gmail.com',
            'password' => Hash::make('sukaperna'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 30,
            'foto' => null,
            'id_desa' => 306
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Tukdana',
            'email' => 'admindesatukdana@gmail.com',
            'password' => Hash::make('tukdana'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 30,
            'foto' => null,
            'id_desa' => 307
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        // admin desa Bangkaloa Ilir
        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bangkaloa Ilir',
            'email' => 'admindesabangkaloailir@gmail.com',
            'password' => Hash::make('Bangkaloa Ilir'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 308
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Bunder',
            'email' => 'admindesabunder@gmail.com',
            'password' => Hash::make('bunder'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 309
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kalensari',
            'email' => 'admindesakalensari@gmail.com',
            'password' => Hash::make('kalensari'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 310
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kasmaran',
            'email' => 'admindesakasmaran@gmail.com',
            'password' => Hash::make('kasmaran'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 311
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Kongsijaya',
            'email' => 'admindesakongsijaya@gmail.com',
            'password' => Hash::make('kongsijaya'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 312
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Leuwigede',
            'email' => 'admindesaleuwigede@gmail.com',
            'password' => Hash::make('leuwigede'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 313
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ujung Pondok Jaya',
            'email' => 'admindesaujungpondokjaya@gmail.com',
            'password' => Hash::make('ujungpondokjaya'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 314
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ujungaris',
            'email' => 'admindesaujungaris@gmail.com',
            'password' => Hash::make('ujungaris'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 315
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Ujungjaya',
            'email' => 'admindesaujungjaya@gmail.com',
            'password' => Hash::make('ujungjaya'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 316
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);

        $admin_desa = User::create([
            'name' => 'Admin PKK Desa Widasari',
            'email' => 'admindesawidasari@gmail.com',
            'password' => Hash::make('widasari'),
            'user_type' => 'admin_desa',
            'id_kecamatan' => 31,
            'foto' => null,
            'id_desa' => 317
        ]);
        $admin_desa->assignRole(Role::ROLE_ADMIN);


        // Admin PKK Kecamatan
        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Anjatan',
        //     'email' => 'adminkecamatananjatan@gmail.com',
        //     'password' => Hash::make('kecamatananjatan'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 1,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Arahan',
        //     'email' => 'adminkecamatanarahan@gmail.com',
        //     'password' => Hash::make('kecamatanarahan'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 2,
        //     'id_desa' => null,
        // ]);
        // $admin_desa->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Balongan',
        //     'email' => 'adminkecamatanbalongan@gmail.com',
        //     'password' => Hash::make('kecamatanbalongan'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 3,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Bangodua',
        //     'email' => 'adminkecamatanbangodua@gmail.com',
        //     'password' => Hash::make('kecamatanbangodua'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 4,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Bongas',
        //     'email' => 'adminkecamatanbongas@gmail.com',
        //     'password' => Hash::make('kecamatanbongas'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 5,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Cantigi',
        //     'email' => 'adminkecamatancantigi@gmail.com',
        //     'password' => Hash::make('kecamatancantigi'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 6,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Cikedung',
        //     'email' => 'adminkecamatancikedung@gmail.com',
        //     'password' => Hash::make('kecamatancikedung'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 7,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Gabuswetan',
        //     'email' => 'adminkecamatangabuswetan@gmail.com',
        //     'password' => Hash::make('kecamatangabuswetan'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 8,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Gantar',
        //     'email' => 'adminkecamatangantar@gmail.com',
        //     'password' => Hash::make('kecamatangantar'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 9,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Haurgeulis',
        //     'email' => 'adminkecamatanhaurgeulis@gmail.com',
        //     'password' => Hash::make('kecamatanhaurgeulis'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 10,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Indramayu',
        //     'email' => 'adminkecamatanindramayu@gmail.com',
        //     'password' => Hash::make('kecamatanindramayu'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 11,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Jatibarang',
        //     'email' => 'adminkecamatanjatibarang@gmail.com',
        //     'password' => Hash::make('kecamatanjatibarang'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 12,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Juntinyuat',
        //     'email' => 'adminkecamatanjuntinyuat@gmail.com',
        //     'password' => Hash::make('kecamatanjuntinyuat'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 13,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Kandanghaur',
        //     'email' => 'adminkecamatankandanghaur@gmail.com',
        //     'password' => Hash::make('kecamatankandanghaur'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 14,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Karangampel',
        //     'email' => 'adminkecamatankarangampel@gmail.com',
        //     'password' => Hash::make('kecamatankarangampel'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 15,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Kedokan Bunder',
        //     'email' => 'adminkecamatankedokanbunder@gmail.com',
        //     'password' => Hash::make('kecamatankedokanbunder'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 16,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Kertasemaya',
        //     'email' => 'adminkecamatankertasemaya@gmail.com',
        //     'password' => Hash::make('kecamatankertasemaya'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 17,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Krangkeng',
        //     'email' => 'adminkecamatankrangkeng@gmail.com',
        //     'password' => Hash::make('kecamatankrangkeng'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 18,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Anjatan',
        //     'email' => 'adminkecamatankroya@gmail.com',
        //     'password' => Hash::make('kecamatankroya'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 19,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Lelea',
        //     'email' => 'adminkecamatanlelea@gmail.com',
        //     'password' => Hash::make('kecamatanlelea'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 20,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Lohbener',
        //     'email' => 'adminkecamatanlohbener@gmail.com',
        //     'password' => Hash::make('kecamatanlohbener'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 21,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Losarang',
        //     'email' => 'adminkecamatanlosarang@gmail.com',
        //     'password' => Hash::make('kecamatanlosarang'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 22,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Pasekan',
        //     'email' => 'adminkecamatanpasekan@gmail.com',
        //     'password' => Hash::make('kecamatanpasekan'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 23,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Patrol',
        //     'email' => 'adminkecamatanpatrol@gmail.com',
        //     'password' => Hash::make('kecamatanpatrol'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 24,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Sindang',
        //     'email' => 'adminkecamatansindang@gmail.com',
        //     'password' => Hash::make('kecamatansindang'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 25,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Sliyeg',
        //     'email' => 'adminkecamatansliyeg@gmail.com',
        //     'password' => Hash::make('kecamatansliyeg'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 26,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Sukagumiwang',
        //     'email' => 'adminkecamatansukagumiwang@gmail.com',
        //     'password' => Hash::make('kecamatansukagumiwang'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 27,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Sukra',
        //     'email' => 'adminkecamatansukra@gmail.com',
        //     'password' => Hash::make('kecamatansukra'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 28,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Trisi',
        //     'email' => 'adminkecamatantrisi@gmail.com',
        //     'password' => Hash::make('kecamatantrisi'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 29,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Tukdana',
        //     'email' => 'adminkecamatantukdana@gmail.com',
        //     'password' => Hash::make('kecamatantukdana'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 30,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // $admin_kecamatan = User::create([
        //     'name' => 'Admin PKK Kecamatan Widasari',
        //     'email' => 'adminkecamatanwidasari@gmail.com',
        //     'password' => Hash::make('kecamatanwidasari'),
        //     'user_type' => 'admin_kecamatan',
        // 'foto' => null,
        //     'id_kecamatan' => 31,
        //     'id_desa' => null,
        // ]);
        // $admin_kecamatan->assignRole(Role::ROLE_ADMIN);

        // AKUN Kader
        $kader_desa = User::create([
            'name' => 'Agus',
            'email' => 'agus@gmail.com',
            'password' => Hash::make('agus'),
            'user_type' => 'kader_dasawisma',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 1,
        ]);

        $kader_desa = User::create([
            'name' => 'Atun',
            'email' => 'atun@gmail.com',
            'password' => Hash::make('atun'),
            'user_type' => 'kader_dasawisma',
            'foto' => null,
            'id_kecamatan' => 1,
            'id_desa' => 2,
        ]);



    }
}