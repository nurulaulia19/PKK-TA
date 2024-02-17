<?php

namespace App\Http\Controllers\AdminKec;

use App\Models\User;
use App\Models\BeritaKab;
use App\Models\Data_Desa;
use App\Models\DataAgenda;
use App\Models\DataGaleri;
use Illuminate\Http\Request;
use App\Models\DataKecamatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DesaController extends Controller
{
    public function dashboard_kec(){
        $user = Auth::user();
        // dd($user);
        // $desaAll = Data_Desa::where('id_kecamatan',$user->id_kecamatan)->get();
        $desaTotal = Data_Desa::where('id_kecamatan',$user->id_kecamatan)->count();

        // dd($desaAll);
        $berita = BeritaKab::count();
        $desa = Data_Desa::count();
        $kecamatan = DataKecamatan::count();
        $user = User::count();
        $agenda = DataAgenda::count();
        $galeri = DataGaleri::count();
        // $kecamatan = DataKecamatan::count();
        // $user = User::count();
        return view('admin_kec.dashboard_kec', compact('desaTotal','berita', 'desa', 'kecamatan', 'user', 'agenda', 'galeri'));
    }

    public function desa(){
        $user = Auth::user();
        // dd($user);
        $desaAll = Data_Desa::where('id_kecamatan',$user->id_kecamatan)->get();
        // dd($desaAll);
        $berita = BeritaKab::count();
        $desa = Data_Desa::count();
        $kecamatan = DataKecamatan::count();
        $user = User::count();
        $agenda = DataAgenda::count();
        $galeri = DataGaleri::count();
        return view('admin_kec.desa', compact('desaAll','berita', 'desa', 'kecamatan', 'user', 'agenda', 'galeri'));

    }
}
