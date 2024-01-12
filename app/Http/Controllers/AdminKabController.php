<?php

namespace App\Http\Controllers;

use App\Exports\RekapKelompokKabupatenExport;
use App\Exports\RekapKelompokKecamatanExport;
use App\Models\BeritaKab;
use App\Models\Data_Desa;
use App\Models\DataAgenda;
use App\Models\DataGaleri;
use App\Models\DataKecamatan;
use App\Models\DataRekapDesa;
use App\Models\DataRekapKecamatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminKabController extends Controller
{
    // halaman dashboard
    public function dashboard_kab(){
        $berita = BeritaKab::count();
        $desa = Data_Desa::count();
        $kecamatan = DataKecamatan::count();
        $user = User::count();
        $agenda = DataAgenda::count();
        $galeri = DataGaleri::count();
        // $kecamatan = DataKecamatan::count();
        // $user = User::count();
        return view('admin_kab.dashboard_kab', compact('berita', 'desa', 'kecamatan', 'user', 'agenda', 'galeri'));
    }

    // halaman login admin kabupaten
    public function login()
    {
        return view('admin_kab.login');
    }

    // // halaman pengiriman data login admin kabupaten
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');
        $credentials['user_type'] = 'admin_kabupaten';
        $remember = $request->get('remember');

        $attempt = Auth::attempt($credentials, $remember);
// dd($attempt);

        if ($attempt) {
            return redirect('/dashboard_kab');
        } else {
            return back()->withErrors(['email' => ['Incorrect email / password.']]);
        }
    }

    // pengiriman data logout admin kabupaten
    public function logoutPost()
    {
        Auth::logout();

        return redirect()->route('admin_kabupaten.login');
    }

    // data catatan data dan kegiatan warga kelompok tp pkk kecamatan
    public function data_kelompok_pkk_kec()
    {
        /** @var User */
        $user = Auth::user();

        $kecamatan = DB::table('data_keluarga')
        ->join('data_kecamatan', 'data_keluarga.id_kecamatan', '=', 'data_kecamatan.id')
        ->select('nama_kecamatan', 'periode')
        // ->where('id_kecamatan', $user->user_type)
        ->distinct()
        ->get();

        return view('admin_kab.data_rekap.data_kelompok_pkk_kec', compact('kecamatan'));
    }
    // rekap catatan data dan keluarga dan kegiatan warga admin kec
    public function rekap_pkk_kec(Request $request)
    {
        $user = Auth::user();
        $desa = $request->query('nama_desa');
        $nama_kecamatan = $request->query('nama_kecamatan');
        $dasa_wisma = $request->query('dasa_wisma');
        $rt = $request->query('rt');
        $rw = $request->query('rw');
        $dusun = $request->query('dusun');
        $periode = $request->query('periode');
        $kecamatan = DataKecamatan::where('nama_kecamatan', $nama_kecamatan)->firstOrFail();

        $desas = DataRekapDesa::getDesa($dusun, $rw,$rt, $periode, $kecamatan->id);
        // dd($desa);
        return view('admin_kab.data_rekap.data_rekap_pkk_kec', compact(
            'desas',
            'kecamatan',
            'nama_kecamatan',
            'rw',
            'periode',
            'desa',

        ));
    }

    // export rekap kecamatan
    public function export_rekap_kec(Request $request)
    {
        /** @var User */
        $user = Auth::user();
        $desa = $user->desa;
        $nama_kecamatan = $request->query('nama_kecamatan');
        $dasa_wisma = $request->query('dasa_wisma');
        $rt = $request->query('rt');
        $rw = $request->query('rw');
        $dusun = $request->query('dusun');
        $periode = $request->query('periode');
        $kecamatan = DataKecamatan::where('nama_kecamatan', $nama_kecamatan)->firstOrFail();

        $desas = DataRekapDesa::getDesa($dusun, $rw,$rt, $periode, $kecamatan->id);

        $export = new RekapKelompokKecamatanExport(compact(
            'desas',
            'kecamatan',
            'nama_kecamatan',
            'rw',
            'periode',
            'desa',
        ));

        return Excel::download($export, 'rekap-kelompok-kecamatan.xlsx');
    }


    public function data_kelompok_pkk_kab()
    {
        /** @var User */
        $user = Auth::user();

        $kabupaten = DB::table('data_keluarga')
        ->join('data_kecamatan', 'data_keluarga.id_kecamatan', '=', 'data_kecamatan.id')
        ->select('periode')
        ->distinct()
        ->get();

        return view('admin_kab.data_rekap.data_kelompok_pkk_kab', compact('kabupaten'));
    }
    // rekap catatan data dan keluarga dan kegiatan warga admin kec
    public function rekap_pkk_kab(Request $request)
    {
        $user = Auth::user();
        $desa = $user->desa;
        $kecamatan = $request->query('nama_kecamatan');
        $dasa_wisma = $request->query('dasa_wisma');
        $rt = $request->query('rt');
        $rw = $request->query('rw');
        $dusun = $request->query('dusun');
        $periode = $request->query('periode');

        $kecamatans = DataRekapKecamatan::getKecamatan($dusun, $rw,$rt, $periode);
        // dd($kecamatans);
        return view('admin_kab.data_rekap.data_rekap_pkk_kab', compact(
            'kecamatans',
            'kecamatan',
            'rw',
            'periode',
            'desa',

        ));
    }

    // export rekap kecamatan
    public function export_rekap_kab(Request $request)
    {
        /** @var User */
        $user = Auth::user();
        $desa = $user->desa;
        $kecamatan = $request->query('nama_kecamatan');
        $dasa_wisma = $request->query('dasa_wisma');
        $rt = $request->query('rt');
        $rw = $request->query('rw');
        $dusun = $request->query('dusun');
        $periode = $request->query('periode');

        $kecamatans = DataRekapKecamatan::getKecamatan($dusun, $rw,$rt, $periode);

        $export = new RekapKelompokKabupatenExport(compact(
            'kecamatans',
            'kecamatan',
            'rw',
            'periode',
            'desa',
        ));

        return Excel::download($export, 'rekap-kelompok-kabupaten.xlsx');
    }

}