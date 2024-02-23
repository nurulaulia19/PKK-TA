<?php

namespace App\Http\Controllers;

use App\Models\DataIndustriRumah;
use App\Models\DataKegiatanWarga;
use App\Models\DataKeluarga;
use App\Models\DataPelatihanKader;
use App\Models\DataPemanfaatanPekarangan;
use App\Models\DataWarga;
use App\Models\KategoriKegiatan;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KaderFormController extends Controller
{
    //
    // halaman dashboard
    public function dashboard_kader(){
        $user = Auth::user();
        $keluarga = DataKeluarga::
        where('id_user', $user->id)
        ->get()->count();

        $warga = DataWarga::
        where('id_user', $user->id)
        ->get()->count();

        $kegiatan = DataKegiatanWarga::
        where('id_user', $user->id)
        ->get()->count();

        $pemanfaatan = DataPemanfaatanPekarangan::
        where('id_user', $user->id)
        ->get()->count();

        $industri = DataIndustriRumah::
        where('id_user', $user->id)
        ->get()->count();

        $rekap = DataWarga::with('keluarga')
        ->where('id_user', $user->id)
        ->get()->count();

        return view('kader.dashboard', compact('keluarga', 'warga', 'kegiatan', 'pemanfaatan', 'industri',  'rekap'));
    }

    public function notif()
    {
        $message = Session::flash('sukses','Selamat Datang');
        return view('kader.dashboard', compact('message'));
    }

    // halaman login kader desa pendata
    public function login()
    {
        return view('kader.loginKaderDesa');
    }

    // halaman pengiriman data login kader desa pendata
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');
        $credentials['user_type'] = 'kader_dasawisma';
        $remember = $request->get('remember');

        $attempt = Auth::attempt($credentials, $remember);
// dd($attempt);

        if ($attempt) {
            return redirect('/dashboard_kader');
        } else {
            return back()->withErrors(['email' => ['Incorrect email / password.']]);
        }
    }

    // pengiriman data logout kader desa pendata
    public function logoutPost()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    // ngambil nama kepala keluarga
    public function rekap(){
        $user = Auth::user();

        $warga = DataWarga::with('keluarga')
        ->where('id_user', $user->id)
        ->get();
        // dd($warga);
        return view('kader.rekap', compact('warga'));
    }

     // halaman data rekap data warga pkk
    public function rekap_data_warga($id){
        // $kepala_keluarga = DataWarga::findOrFail($id);
        // dd($kepala_keluarga);
        // $warga =  DataWarga::where('id_keluarga', $id)->get();
        // // dd($warga);
        // $print = DataWarga::where('id_keluarga', $id)
        // ->first();
        // $print_pdf = DataWarga::where('id_keluarga', $id)
        // ->first();
        // Mengambil kepala keluarga
        $kepala_keluarga = DataWarga::findOrFail($id);

        // Mengambil semua data warga untuk keluarga yang sesuai dengan $id_kepala_keluarga
        $warga =  DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->get();

        // Mengambil data print pertama untuk keluarga yang sesuai dengan $id_kepala_keluarga
        $print = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();
        // dd($print);
        // Mengambil data print kedua untuk keluarga yang sesuai dengan $id_kepala_keluarga
        $print_pdf = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();



        return view('kader.data_rekap', compact('warga', 'print','print_pdf','kepala_keluarga'));
    }

     // print halaman data rekap data warga pkk
    //  public function print($id){
    //     // $kepala_keluarga = DataWarga::findOrFail($id)->first();
    //     // dd($kepala_keluarga);
    //     // $warga = DataWarga::where('id_keluarga', $id)
    //     // ->get();
    //     $kepala_keluarga = DataWarga::findOrFail($id);
    //     // dd($kepala_keluarga);
    //     // Mengambil semua data warga untuk keluarga yang sesuai dengan $id_kepala_keluarga
    //     $warga =  DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->get();

    //     return view('kader.print_rekap', compact('warga'));
    // }

     // print halaman data rekap data warga pkk
    //  public function print_pdf($id){
    //     // $kepala_keluarga = DataWarga::findOrFail($id)->first();
    //     // // dd($kepala_keluarga);
    //     // $warga = DataWarga::where('id_keluarga', $id)
    //     // ->get();
    //     // dd($kepala_keluarga);
    //     $kepala_keluarga = DataWarga::findOrFail($id);
    //     // dd($kepala_keluarga);
    //     // Mengambil semua data warga untuk keluarga yang sesuai dengan $id_kepala_keluarga
    //     $warga =  DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->get();

    //     $html= view('kader.print_rekap_pdf', compact('warga'));
    //     // instantiate and use the dompdf class
    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml($html);

    //     // (Optional) Setup the paper size and orientation
    //     $dompdf->setPaper('A4', 'landscape');

    //     // Render the HTML as PDF
    //     $dompdf->render();

    //     // Output the generated PDF to Browser
    //     $dompdf->stream();
    // }

    public function printPDF($id) {
        $kepala_keluarga = DataWarga::findOrFail($id);
        $warga =  DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->get();
        $print = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();
        $print_pdf = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();

        // Render the view into HTML
        $html = view('kader.print_rekap_pdf', compact('warga', 'print', 'print_pdf'));

        // Instantiate Dompdf with our view content
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Set the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF (inline view or download)
        $dompdf->stream("data_rekap.pdf");
    }


    // halaman data catatan keluarga pkk
     public function catatan_keluarga($id)
     {
        // $kepala_keluarga = DataWarga::find($id);
        // // dd($kepala_keluarga);

        // $keluarga = DataKeluarga::first();
        // // dd($keluarga);
        // $catatan_keluarga = DataWarga::query()
        //     ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
        //         'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
        //     ->where('id_keluarga', $id)
        //     ->get();

        $kepala_keluarga = DataWarga::find($id);

        $keluarga = DataKeluarga::where('id', $kepala_keluarga->id_keluarga)->first();

        $catatan_keluarga = DataWarga::query()
            ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
                'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
            ->where('id_keluarga', $kepala_keluarga->id_keluarga)
            ->get();

            // dd($catatan_keluarga);


        $kategori_kegiatans = KategoriKegiatan::query()->where('id', '<=', 8)->get();
        // dd($kategori_kegiatans);

        // $print_cakel = DataWarga::where('id_keluarga', $id)
        // ->first();
        // dd($print_cakel);

        // $print_pdf_cakel = DataWarga::where('id_keluarga', $id)
        // ->first();
        $print_cakel = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();
        // dd($print_cakel);
        // Mengambil data print kedua untuk keluarga yang sesuai dengan $id_kepala_keluarga
        $print_pdf_cakel = DataWarga::where('id_keluarga', $kepala_keluarga->id_keluarga)->first();
        // dd($print_cakel);
        return view('kader.catatan_keluarga', compact('catatan_keluarga', 'keluarga', 'kepala_keluarga', 'kategori_kegiatans', 'print_cakel', 'print_pdf_cakel'));
    }

    // print halaman data rekap catatan data keluarga pkk
    // public function print_cakel($id){
    // //     $kepala_keluarga = DataWarga::find($id)->first();

    // //    $keluarga = DataKeluarga::first();
    // //    $catatan_keluarga = DataWarga::query()
    // //        ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
    // //            'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
    // //        ->where('id_keluarga', $id)
    // //        ->get();
    // //    // dump($catatan_keluarga);
    // $kepala_keluarga = DataWarga::find($id);
    // // dd( $kepala_keluarga );

    // $keluarga = DataKeluarga::where('id', $kepala_keluarga->id_keluarga)->first();

    // $catatan_keluarga = DataWarga::query()
    //     ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
    //         'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
    //     ->where('id_keluarga', $kepala_keluarga->id_keluarga)
    //     ->get();

    //    $kategori_kegiatans = KategoriKegiatan::query()->where('id', '<=', 8)->get();

    //     return view('kader.print_rekap_cakel', compact('catatan_keluarga', 'keluarga', 'kepala_keluarga', 'kategori_kegiatans'));
    // }

     // print halaman data rekap data warga pkk
     public function print_pdf_cakel($id){
        // $kepala_keluarga = DataWarga::find($id)->first();

        // // $keluarga = DataKeluarga::where('id_warga', $kepala_keluarga->id)->first();
        // $keluarga = DataKeluarga::first();
        // $catatan_keluarga = DataWarga::query()
        //     ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
        //         'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
        //     ->where('id_keluarga', $id)
        //     ->get();
        // dump($catatan_keluarga);
        $kepala_keluarga = DataWarga::find($id);
        // dd( $kepala_keluarga );

        $keluarga = DataKeluarga::where('id', $kepala_keluarga->id_keluarga)->first();

        $catatan_keluarga = DataWarga::query()
            ->with(['kegiatan', 'kegiatan.kategori_kegiatan',
                'kegiatan.keterangan_kegiatan', 'keluarga', 'dasawisma'])
            ->where('id_keluarga', $kepala_keluarga->id_keluarga)
            ->get();

        $kategori_kegiatans = KategoriKegiatan::query()->where('id', '<=', 8)->get();

        $html= view('kader.print_pdf_cakel', compact('catatan_keluarga', 'keluarga', 'kepala_keluarga', 'kategori_kegiatans'));
        // // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('a3', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        $pdf = PDF::loadview('kader.catatan_keluarga');
        return $pdf->stream();

    }

    public function profil(){
        $data_kader = Auth::user();

        return view('kader.profil_kader', compact('data_kader'));
    }

    public function update_profil(Request $request, $id = null){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
            // 'user_type' => 'required',
            // 'id_desa' => 'required',
            // 'id_kecamatan' => 'required',

        ]);
        $data_kader = Auth::user();
        $data_kader->name = $request->name;
        $data_kader->email = $request->email;
        if ($request->password) {
            $data_kader->password = Hash::make($request->password);
        }

        if ($request->hasFile('foto')) {
            if ($data_kader->foto && Storage::disk('public')->exists($data_kader->foto)) {
                Storage::disk('public')->delete($data_kader->foto);
            }

            $destinationPath = 'foto/';
            $image = $request->file('foto');
            $profileImage = Str::random(5) . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $result = Storage::disk('public')->putFileAs('foto', $image, $profileImage);
            $data_kader->foto = $result;
        }
        $data_kader->save();
        Alert::success('Berhasil', 'Data berhasil di Ubah');
        return redirect()->back();
    }

    public function update_password(Request $request){
        // dd($request->all());
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed',

        ], [
            'password.required' =>'Masukkan Kata Sandi Salah',
            'new_password.confirmed' => 'Konfirmasi Kata Sandi Baru tidak cocok'
        ]);
        $data_kader = Auth::user();
        if (!Hash::check($request->password, $data_kader->password)) {
            Alert::error('Gagal', 'Kata sandi lama tidak sesuai');
            return redirect()->back();
        }
        $data_kader->password = Hash::make($request->new_password);
        $data_kader->save();

        Alert::success('Berhasil', 'Data berhasil di Ubah');
        return view('kader.profil_kader', compact('data_kader'));
    }


}
