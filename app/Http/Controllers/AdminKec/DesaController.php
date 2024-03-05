<?php

namespace App\Http\Controllers\AdminKec;

use App\Entities\Desa;
use App\Exports\RekapKelompokDesaExport;
use App\Models\User;
use App\Models\BeritaKab;
use App\Models\Data_Desa;
use App\Models\DataAgenda;
use App\Models\DataGaleri;
use Illuminate\Http\Request;
use App\Models\DataKecamatan;
use App\Http\Controllers\Controller;
use App\Models\DataDusun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DesaController extends Controller
{
    public function dashboard_kec(){
        $user = Auth::user();
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

    // public function rekapitulasi($id) {
    //     // Ambil data desa berdasarkan ID
    //     $desa = Data_Desa::find($id);
    //     // dd($desa);
    //     // Lakukan logika untuk menampilkan rekapitulasi desa
    //     // Misalnya, kembalikan view dengan data desa
    //     return view('admin_kec.rekapitulasi_desa', compact('desa'));
    // }

    public function rekapitulasi($id) {
        // Ambil data desa berdasarkan ID
        $desa = Data_Desa::find($id);

        // Ambil data keluarga berdasarkan ID desa
        $keluarga = DB::table('data_keluarga')
            ->where('id_desa', $id)
            ->select('periode')
            ->distinct()
            ->get();

        return view('admin_kec.rekapitulasi_desa', compact('desa', 'keluarga'));
    }

    public function rekap_desa($id, Request $request)
    {
        // Dapatkan data desa berdasarkan ID
        $desa = Data_Desa::findOrFail($id);
        // dd($desa);
        $user = Auth::user();
        $kecamatan = $user->kecamatan;
        // Ambil data dari permintaan
        $dasa_wisma = $request->query('dasa_wisma');
        $rt = $request->query('rt');
        $rw = $request->query('rw');
        $dusun = $request->query('dusun');

        $periode = $request->query('periode');
        // dd($periode);

        // Dapatkan data dusun berdasarkan ID desa dan parameter lainnya
        $dusuns = DataDusun::getDusun($id, $dusun, $rw, $rt, $periode);
        // dd($dusuns);

        // Kirim data ke view
        return view('admin_kec.data_rekap_desa', compact(
            'dusuns',
            'dusun',
            'rw',
            'periode',
            'desa',
            'kecamatan'
        ));
    }

    public function export(Request $request, $id)
        {
            /** @var User */
            $user = Auth::user();
            // dd($user);
            $desa = Data_Desa::findOrFail($id);
            $kecamatan = $user->kecamatan;
            $dasa_wisma = $request->query('dasa_wisma');
            $rt = $request->query('rt');
            $rw = $request->query('rw');
            $dusun = $request->query('dusun');
            $periode = $request->query('periode');

            $dusuns = DataDusun::getDusun($id,$dusun, $rw,$rt, $periode);
            $export = new RekapKelompokDesaExport(compact(
                'dusuns',
                'dusun',
                'kecamatan',
                'rw',
                'periode',
                'desa',
            ));

            return Excel::download($export, 'rekap-kelompok-desa.xlsx');
        }

        public function profilAdminKec(){
            $adminKec = Auth::user();
            // dd($adminKec);
            return view('admin_kec.profil', compact('adminKec'));
        }

        public function update_profilAdminKec(Request $request, $id = null){
            $request->validate([
                'name' => 'required'
            ]);

            $adminKec = Auth::user();
            // dd($adminKec);
            $adminKec->name = $request->name;
            $adminKec->email = $request->email;

            if ($request->has('password')) {
                $adminKec->password = Hash::make($request->password);
            }

            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $profileImage = Str::random(5) . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $result = Storage::disk('public')->putFileAs('foto', $image, $profileImage);
                $adminKec->foto = $result;
            }

            $adminKec->save();

            Alert::success('Berhasil', 'Data berhasil diubah');
            return redirect()->back();
        }

        public function update_passwordAdminKec(Request $request){
            $request->validate([
                'password' => 'required',
                'new_password' => 'required|confirmed',
            ], [
                'password.required' => 'Masukkan Kata Sandi Lama',
                'new_password.confirmed' => 'Konfirmasi Kata Sandi Baru tidak cocok'
            ]);

            $adminKec = Auth::user();
            if (!Hash::check($request->password, $adminKec->password)) {
                Alert::error('Gagal', 'Kata sandi lama tidak sesuai');
                return redirect()->back();
            }

            $adminKec->password = Hash::make($request->new_password);
            $adminKec->save();

            Alert::success('Berhasil', 'Kata sandi berhasil diubah');
            return redirect()->route('profil_adminKec');
        }


}
