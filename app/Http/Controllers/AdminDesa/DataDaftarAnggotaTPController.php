<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\DataAnggotaTP;
use RealRashid\SweetAletempat_lahir\Facades\Aletempat_lahir;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataDaftarAnggotaTPController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //halaman form daftar anggota tp pkk
        $anggotas = DataAnggotaTP::all()->where('id_desa', $user->id_desa);
        return view('admin_desa.data_anggota_tp_pkk', compact('anggotas'));
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

     $anggota = DataAnggotaTP::all();

    //  dd($kad);
     return view('admin_desa.form.create_daftar_anggota_tp', compact('kad', 'kec', 'desas', 'anggota'));

    }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data anggota tp pkk
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
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
            'id_desa.required' => 'Lengkapi Alamat Desa Anggota TP PKK',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Anggota TP PKK',
            'nama.required' => 'Lengkapi Nama Anggota TP PKK',
            'jenis_kelamin.required' => 'Lengkapi Jenis Kelamin Anggota TP PKK',
            'jabatan.required' => 'Lengkapi Jabatan Anggota TP PKK',
            'pendidikan.required' => 'Lengkapi Pendidikan Anggota TP PKK',
            'tempat_lahir.required' => 'Lengkapi Tempat Lahir Anggota TP PKK',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir Anggota TP PKK',
            'umur.required' => 'Lengkapi Umur Anggota TP PKK',
            'alamat.required' => 'Lengkapi Alamat Anggota TP PKK',
            'pekerjaan.required' => 'Lengkapi Pekerjaan Anggota TP PKK',
            'status.required' => 'Pilih Status Anggota',
            'periode.required' => 'Pilih Periode Anggota TP PKK',

        ]);
        // $insert=DB::table('data_daftar_anggota_tp_pkk')->where('jabatan', $request->jabatan)->first();
        // if ($insert != null) {
        //     Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. No.KTP Sudah Ada ');

        //     return redirect('/data_anggota_tp');
        // }
        // else {
        //cara 1

            $anggota = new DataAnggotaTP;
            $anggota->id_desa = $request->id_desa;
            $anggota->id_kecamatan = $request->id_kecamatan;
            $anggota->nama = $request->nama;
            $anggota->jenis_kelamin = $request->jenis_kelamin;
            $anggota->jabatan = $request->jabatan;
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

            return redirect('/data_anggota_tp');
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
    public function edit(DataAnggotaTP $data_anggota_tp)
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
        //halaman edit data anggota tp pkk
        $anggota = DataAnggotaTP::all();

        // dd($keg);

        return view('admin_desa.form.edit_daftar_anggota_tp', compact('data_anggota_tp', 'anggota', 'desas', 'kec', 'kad'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataAnggotaTP $data_anggota_tp)
    {
        // proses mengubah untuk data keluarga
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
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
        ],
        [
            'id_desa.required' => 'Lengkapi Alamat Desa Anggota TP PKK',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Anggota TP PKK',
            'nama.required' => 'Lengkapi Nama Anggota TP PKK',
            'jenis_kelamin.required' => 'Lengkapi Jenis Kelamin Anggota TP PKK',
            'jabatan.required' => 'Lengkapi Jabatan Anggota TP PKK',
            'pendidikan.required' => 'Lengkapi Pendidikan Anggota TP PKK',
            'tempat_lahir.required' => 'Lengkapi Tempat Lahir Anggota TP PKK',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir Anggota TP PKK',
            'umur.required' => 'Lengkapi Umur Anggota TP PKK',
            'alamat.required' => 'Lengkapi Alamat Anggota TP PKK',
            'status.required' => 'Pilih Status Anggota',
            'periode.required' => 'Pilih Periode Anggota TP PKK',
        ]);
        // $update=DB::table('data_anggota_tp')->where('jabatan', $request->jabatan);
        // if ($update != null) {
        //     Aletempat_lahir::error('Gagal', 'Data Tidak Berhasil Di Ubah, Hanya Bisa Menggunakan Satu kali Periode. Periode Sudah Ada ');

        //     return redirect('/data_anggota_tp');
        // }
        // else{
            $data_anggota_tp->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            return redirect('/data_anggota_tp');
        // }

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_anggota_tp, DataAnggotaTP $ang)
    {
        //temukan id data anggota tp pkk
        $ang::find($data_anggota_tp)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_anggota_tp');



    }
}