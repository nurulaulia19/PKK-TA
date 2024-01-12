<?php

namespace App\Http\Controllers\AdminKab;
use App\Http\Controllers\Controller;
use App\Models\Data_Desa;
use App\Models\DataKecamatan;
use App\Models\DataKelompokDasawisma;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman tampil data tabel user
        $users = User::whereIn('user_type', ['superadmin', 'admin_desa', 'admin_kelurahan', 'admin_kecamatan', 'admin_kabupaten', 'kader_dasawisma', 'kader_desa'])
        ->get();
        $desa = Data_Desa::all();
        $kec = DataKecamatan::all();

        // $users = User::with('desa','kecamatan')->get();
        // $desa = Data_Desa::with('kecamatan')->get();
// dd($desa);

        return view('admin_kab.data_pengguna_super', compact('users', 'desa', 'kec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman create kader
        $kec = DataKecamatan::all();
        $data['user_type'] = ['kader_dasawisma' => 'Kader Dasawisma', 'admin_desa' => 'Admin Desa/Kelurahan'];
        return view('admin_kab.form.create_pengguna', compact('kec'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'user_type' => 'required',
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
        ], [
            'name.required' => 'Masukkan Nama Pengguna',
            'email.required' => 'Masukkan Email Pengguna',
            'password.required' => 'Masukkan Password Pengguna',
            'user_type.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',
        ]);



        $pengguna = new User;
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->password = Hash::make($request->password);
        $pengguna->user_type = $request->user_type;
        $pengguna->id_desa = $request->id_desa;
        $pengguna->id_kecamatan = $request->id_kecamatan;

        if ($request->hasFile('foto')) {
            $destinationPath = 'foto/';
            $image = $request->file('foto');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $result = Storage::disk('public')->putFileAs('foto', $image, $profileImage);
            $pengguna->foto = $result;
        }

        $pengguna->save();
        // Auth::guard('user')->login($pengguna);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');

        return redirect('/data_pengguna_super');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $data_pengguna_super)
    {
        //
        $kec = DataKecamatan::all();
        $desa = Data_Desa::all();

        $data['user_type'] = ['kader_dasawisma' => 'Kader Dasawisma', 'admin_desa' => 'Admin Desa/Kelurahan'];
        return view('admin_kab.form.edit_pengguna', $data, compact('data_pengguna_super', 'kec', 'desa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'user_type' => 'required',
            'id_desa' => 'required',
            'id_kecamatan' => 'required',

        ]);

        $data_pengguna_super = User::findOrFail($id);
        $data_pengguna_super->name = $request->name;
        $data_pengguna_super->email = $request->email;

        $data_pengguna_super->user_type = $request->user_type;
        $data_pengguna_super->id_desa = $request->id_desa;
        $data_pengguna_super->id_kecamatan = $request->id_kecamatan;

        if ($request->hasFile('foto')) {
            if ($data_pengguna_super->foto && Storage::disk('public')->exists($data_pengguna_super->foto)) {
                Storage::disk('public')->delete($data_pengguna_super->foto);
            }

            $destinationPath = 'foto/';
            $image = $request->file('foto');
            $profileImage = Str::random(5) . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $result = Storage::disk('public')->putFileAs('foto', $image, $profileImage);
            $data_pengguna_super->foto = $result;
        }

        $data_pengguna_super->save();
        // dd($result);
        Alert::success('Berhasil', 'Data berhasil di Ubah');

        return redirect('/data_pengguna_super');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_pengguna_super, User $pengguna)
    {
        //temukan id gotong_royong
        $pengguna::find($data_pengguna_super)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_pengguna_super');
    }

    public function update_password(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'new_password' => 'required|confirmed|min:8',
        ], [
            'password.required' =>'Konfirmasi Kata Sandi',
        ]);
        $data_pengguna_super = User::findOrFail($id);
        $data_pengguna_super->password = Hash::make($request->new_password);
        $data_pengguna_super->save();

        Alert::success('Berhasil', 'Data berhasil di Ubah');
        return redirect('/data_pengguna_super');
    }
}
