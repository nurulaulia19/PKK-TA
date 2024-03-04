<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     // return view('home');
    //     return view('admin_desa.dashboard');

    // }

    public function index()
{
    // Mendapatkan pengguna yang saat ini masuk
    $user = auth()->user();

    // Pengecekan tipe pengguna dan mengarahkan ke dashboard yang sesuai
    if ($user->user_type === 'admin_kabupaten') {
        return redirect()->route('admin_kabupaten.dashboard');
    } elseif ($user->user_type === 'admin_kecamatan') {
        return redirect()->route('admin_kecamatan.dashboard');
    } elseif ($user->user_type === 'admin_desa') {
        return redirect()->route('admin_desa.dashboard');
    } elseif ($user->user_type === 'kader_dasawisma') {
        return redirect()->route('kader_dasawisma.dashboard');
    }

    // Jika tidak ada tipe pengguna yang cocok, redirect atau tampilkan halaman default
    return abort(404);
}


    public function super()
    {
        // return view('home');
        return view('super_admin.dashboard_super');

    }
}
