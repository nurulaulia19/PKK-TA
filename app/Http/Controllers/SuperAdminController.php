<?php

namespace App\Http\Controllers;

use App\Models\Data_Desa;
use App\Models\DataKecamatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
            // halaman dashboard
            public function dashboard_super(){


                return view('super_admin.dashboard_super', compact('desa', 'kecamatan', 'user'));
            }

            // halaman data pokja1
            public function data_pokja1_super(){
                return view('super_admin.data_pokja1_super');
            }

            // halaman data pokja2
            public function data_pokja2_super(){
                return view('super_admin.data_pokja2_super');
            }

            // halaman data pokja3
            public function data_pokja3_super(){
                return view('super_admin.data_pokja3_super');
            }

            // halaman data pokja4
            public function data_pokja4_super(){
                return view('super_admin.data_pokja4_super');
            }


            // halaman data pokja4
            public function data_laporan_super(){
                return view('super_admin.data_laporan_super');
            }

            // // halaman data pokja4
            // public function data_pengguna_super(){
            //     return view('super_admin.data_pengguna_super');
            // }

            // halaman data sekretariat
            public function data_sekretariat_super(){
                return view('super_admin.data_sekretariat_super');
            }

            // halaman data koperasi
            public function koperasi_super(){
                return view('super_admin.sub_file_pokja_2.koperasi_super');
            }

            // halaman login super admin
            public function login()
            {
                return view('super_admin.login');
            }

            // halaman pengiriman data login super admin
            public function loginPost(Request $request)
            {
                $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);

                $credentials['email'] = $request->get('email');
                $credentials['password'] = $request->get('password');
                $credentials['user_type'] = 'superadmin';

                $remember = $request->get('remember');

                $attempt = Auth::attempt($credentials, $remember);

                if ($attempt) {
                    return redirect('/dashboard_super');
                } else {
                    return back()->withErrors(['email' => ['Incorrect email / password.']]);
                }
            }

            // pengiriman data logout super admin
            public function logoutPost()
            {
                Auth::logout();

                return redirect()->route('super_admin.login');
            }

            // halaman data laporan pokja dan data umum desa
            public function data_pokja_desa(){
                return view('super_admin.data_pokja_desa');
            }

            // halaman data laporan pokja dan data umum kecamatan
            public function data_pokja_kecamatan(){
                return view('super_admin.data_pokja_kecamatan');
            }

            // halaman data pangan
            public function pangan_super(){
                return view('super_admin.sub_file_pokja_3.pangan_super');
            }

}
