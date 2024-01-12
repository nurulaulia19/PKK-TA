<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\DataAnggotaKader;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataDaftarAnggotaKaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //halaman form daftar anggota kader
        $anggotas = DataAnggotaKader::all()->where('id_desa', $user->id_desa);
        return view('admin_desa.data_anggota_kader', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    // nama desa yang login
    $desas = DB::table('data_desa')
    ->where('id', auth()->user()->id_desa)
    ->get();

    $kec = DB::table('data_kecamatan')
    ->where('id', auth()->user()->id_desa)
    ->get();

    $kad = DB::table('users')
    ->where('id', auth()->user()->id)
    ->get();

     $anggota = DataAnggotaKader::all();

    //  dd($kad);
     return view('admin_desa.form.create_daftar_anggota_kader', compact('kad', 'kec', 'desas', 'anggota'));

    }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data anggota tp pkk dan kader
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'no_registrasi' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'fungsi_keanggotaan' => 'required',
            'kader_umum' => 'required',
            'kader_khusus' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Anggota TP PKK dan Kader',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Anggota TP PKK dan Kader',
            'no_registrasi' => 'Lengkapi No.Registrasi Anggota TP PKK dan Kader',
            'nama.required' => 'Lengkapi Nama Anggota TP PKK dan Kader',
            'jenis_kelamin.required' => 'Lengkapi Jenis Kelamin Anggota TP PKK dan Kader',
            'fungsi_keanggotaan.required' => 'Lengkapi Fungsi Keanggotaan Anggota TP PKK dan Kader',
            'kader_umum.required' => 'Lengkapi Kaderu Umum Anggota TP PKK dan Kader',
            'kader_khusus.required' => 'Lengkapi Kader Khusus Anggota TP PKK dan Kader',
            'pendidikan.required' => 'Lengkapi Pendidikan Anggota TP PKK dan Kader',
            'tempat_lahir.required' => 'Lengkapi Tempat Lahir Anggota TP PKK dan Kader',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir Anggota TP PKK dan Kader',
            'umur.required' => 'Lengkapi Umur Anggota TP PKK dan Kader',
            'alamat.required' => 'Lengkapi Alamat Anggota TP PKK dan Kader',
            'pekerjaan.required' => 'Lengkapi Pekerjaan Anggota TP PKK dan Kader',
            'status.required' => 'Pilih Status Anggota',
            'periode.required' => 'Pilih Periode Anggota TP PKK dan Kader',

        ]);
        // $insert=DB::table('data_daftar_anggota_tp_pkk')->where('jabatan', $request->jabatan)->first();
        // if ($insert != null) {
        //     Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. No.KTP Sudah Ada ');

        //     return redirect('/data_anggota_kader');
        // }
        // else {
        //cara 1

            $anggota = new DataAnggotaKader;
            $anggota->id_desa = $request->id_desa;
            $anggota->id_kecamatan = $request->id_kecamatan;
            $anggota->no_registrasi = $request->no_registrasi;
            $anggota->nama = $request->nama;
            $anggota->jenis_kelamin = $request->jenis_kelamin;
            $anggota->fungsi_keanggotaan = $request->fungsi_keanggotaan;
            $anggota->kader_umum = $request->kader_umum;
            $anggota->kader_khusus = $request->kader_khusus;
            $anggota->kota = $request->kota;
            $anggota->provinsi = $request->provinsi;
            $anggota->umur = $request->umur;
            $anggota->pendidikan = $request->pendidikan;
            $anggota->tempat_lahir = $request->tempat_lahir;
            $anggota->tgl_lahir = $request->tgl_lahir;
            $anggota->alamat = $request->alamat;
            $anggota->pekerjaan = $request->pekerjaan;
            $anggota->status = $request->status;
            $anggota->keterangan = $request->keterangan;
            $anggota->periode = $request->periode;
            $anggota->save();
            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_anggota_kader');
        // }
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
    public function edit(DataAnggotaKader $data_anggota_kader)
    {
        // nama desa yang login
        $desas = DB::table('data_desa')
        ->where('id', auth()->user()->id_desa)
        ->get();
        // $kec = DB::table('data_kecamatan')->get();
        $kec = DB::table('data_kecamatan')
        ->where('id', auth()->user()->id_desa)
        ->get();

        $kad = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();
        //halaman edit data anggota tp pkk dan kader
        $anggota = DataAnggotaKader::all();

        // dd($keg);

        return view('admin_desa.form.edit_daftar_anggota_kader', compact('data_anggota_kader', 'anggota', 'desas', 'kec', 'kad'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataAnggotaKader $data_anggota_kader)
    {
        // proses mengubah untuk data anggota tp pkk dan kader
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'no_registrasi' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'fungsi_keanggotaan' => 'required',
            'kader_umum' => 'required',
            'kader_khusus' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Anggota TP PKK dan Kader',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Anggota TP PKK dan Kader',
            'no_registrasi' => 'Lengkapi No.Registrasi Anggota TP PKK dan Kader',
            'nama.required' => 'Lengkapi Nama Anggota TP PKK dan Kader',
            'jenis_kelamin.required' => 'Lengkapi Jenis Kelamin Anggota TP PKK dan Kader',
            'fungsi_keanggotaan.required' => 'Lengkapi Fungsi Keanggotaan Anggota TP PKK dan Kader',
            'kader_umum.required' => 'Lengkapi Kaderu Umum Anggota TP PKK dan Kader',
            'kader_khusus.required' => 'Lengkapi Kader Khusus Anggota TP PKK dan Kader',
            'pendidikan.required' => 'Lengkapi Pendidikan Anggota TP PKK dan Kader',
            'tempat_lahir.required' => 'Lengkapi Tempat Lahir Anggota TP PKK dan Kader',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir Anggota TP PKK dan Kader',
            'umur.required' => 'Lengkapi Umur Anggota TP PKK dan Kader',
            'alamat.required' => 'Lengkapi Alamat Anggota TP PKK dan Kader',
            'pekerjaan.required' => 'Lengkapi Pekerjaan Anggota TP PKK dan Kader',
            'status.required' => 'Pilih Status Anggota',
            'periode.required' => 'Pilih Periode Anggota TP PKK dan Kader',

        ]);
        // $update=DB::table('data_anggota_kader')->where('jabatan', $request->jabatan);
        // if ($update != null) {
        //     Aletempat_lahir::error('Gagal', 'Data Tidak Berhasil Di Ubah, Hanya Bisa Menggunakan Satu kali Periode. Periode Sudah Ada ');

        //     return redirect('/data_anggota_kader');
        // }
        // else{
            $data_anggota_kader->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            return redirect('/data_anggota_kader');
        // }

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_anggota_kader, DataAnggotaKader $ang)
    {
        //temukan id data anggota tp pkk
        $ang::find($data_anggota_kader)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_anggota_kader');



    }
}