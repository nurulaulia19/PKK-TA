<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\DataKelompokDasawisma;
use App\Models\Kader;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form data akun kader
        $akun = User::where('user_type', 'kader_dasawisma')
            ->where('id_desa', auth()->user()->id_desa)
            ->get();
        $dasawisma = DataKelompokDasawisma::all();
        return view('admin_desa.data_kader', compact('akun', 'dasawisma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // halaman create kader
        $dasawisma = DataKelompokDasawisma::all();
        // $data['user_type'] = ['kader_desa' => 'Kader Desa', 'kader_keluruhan' => 'Kader Kelurahan'];
        return view('admin_desa.form_kader.create_kader', compact('dasawisma'));
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
            // 'email' => 'required|unique:data_kader',
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

        $kader = new User;
        $kader->name = $request->name;
        $kader->email = $request->email;
        $kader->password = Hash::make($request->password);
        $kader->user_type = $request->user_type;
        $kader->id_desa = auth()->user()->id_desa;
        $kader->id_kecamatan = auth()->user()->id_kecamatan;

        if ($request->hasFile('foto')) {
            if ($kader->foto && Storage::disk('public')->exists($kader->foto)) {
                Storage::disk('public')->delete($kader->foto);
            }

            $destinationPath = 'foto/';
            $image = $request->file('foto');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $result = Storage::disk('public')->putFileAs('foto', $image, $profileImage);
            $kader->foto = $result;
        }
        $kader->save();
        // dd($kader);
        Auth::guard('kader')->login($kader);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');

        return redirect('/data_kader');
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
    public function edit(User $data_kader)
    {
        // halaman edt kader
        $dasawisma = DataKelompokDasawisma::all();
        $data['user_type'] = ['kader_desa' => 'Kader Desa', 'kader_kelurahan' => 'Kader Kelurahan', 'kader_kecamatan' => 'Kader Kecamatan'];
        return view('admin_desa.form_kader.edit_kader', $data, compact('data_kader', 'dasawisma'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $data_kader)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:data_kader',
            'user_type' => 'required',
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
        ], [
            'name.required' => 'Masukkan Nama Pengguna',
            'email.required' => 'Masukkan Email Pengguna',
            'user_type.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',
        ]);

        $data_kader->name = $request->name;
        $data_kader->email = $request->email;
        if ($request->password)
            $data_kader->password = Hash::make($request->password);
        $data_kader->user_type = $request->user_type;
        $data_kader->id_desa = auth()->user()->id_desa;
        $data_kader->id_kecamatan = auth()->user()->id_kecamatan;
        $data_kader->id_dasawisma = $request->id_dasawisma;

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
        // dd($result);
        Alert::success('Berhasil', 'Data berhasil di Ubah');

        return redirect('/data_kader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_kader, User $kader)
    {
        //temukan id kader
        $kader::find($data_kader)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_kader')->with('status', 'sukses');
    }

    public function update_password(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'new_password' => 'required|confirmed|min:8',
        ], [
            'password.required' =>'Konfirmasi Kata Sandi',
        ]);
        $data_kader = User::findOrFail($id);
        $data_kader->password = Hash::make($request->new_password);
        $data_kader->save();

        Alert::success('Berhasil', 'Data berhasil di Ubah');
        return redirect('/data_kader');
    }
}