<?php

namespace App\Http\Controllers\PendataanKader;
use App\Http\Controllers\Controller;
use App\Models\DataKaderGabung;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKaderGabungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form data kader gabung pelatihan
        $gabung = DataKaderGabung::all();
        return view('kader.data_kegiatan.data_kader_gabung', compact('gabung'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman form tambah data kader gabung pelatihan
        // nama desa yang login
        $desas = DB::table('data_desa')
        ->where('id', auth()->user()->id_desa)
        ->get();
        // $kec = DB::table('data_kecamatan')->get();
        $kec = DB::table('data_kecamatan')
        ->where('id', auth()->user()->id_kecamatan)
        ->get();

        $kader = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();

        $gabung = DataKaderGabung::all(); // pemanggilan tabel data kader gabung pelatihan kader
        //  dd($keg);
        return view('kader.data_kegiatan.form.create_data_gabung', compact('kec', 'gabung', 'desas', 'kader'));

    }

         /**
          * Store a newly created resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @return \Illuminate\Http\Response
          */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data pemanfaatan tanah
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_registrasi' => 'required',
            'id_user' => 'required',
            'tgl_masuk' => 'required',
            'kedudukan' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Kader Yang Aktif Kegiatan PKK',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Kader Yang Aktif Kegiatan PKK',
            'kota' => 'Lengkapi Alamat Kecamatan Kader Yang Aktif Kegiatan PKK',
            'provinsi' => 'Lengkapi Alamat Kecamatan Kader Yang Aktif Kegiatan PKK',
            'no_registrasi.required' => 'Lengkapi Nomor Registrasi Kader Yang Aktif Kegiatan PKK',
            'id_user.required' => 'Lengkapi Nama Kader Yang Aktif Kegiatan PKK',
            'tgl_masuk.required' => 'Lengkapi Tanggal Masuk Kader Yang Aktif Kegiatan PKK',
            'kedudukan.required' => 'Lengkapi Kedudukan Kader Yang Aktif Kegiatan PKK',
        ]);

        // // pengkondisian tabel
        // $insert=DB::table('data_gabung_kader')->where('no_registrasi', $request->no_registrasi)->first();

        // //dd($insert);
        // if ($insert != null) {
        //     Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. Warga TP PKK Sudah Ada ');

        //     return redirect('/data_gabung');
        // }
        // else {
            //dd($request->validated());
            $pelatihans = new DataKaderGabung;
            $pelatihans->id_desa = $request->id_desa;
            $pelatihans->id_kecamatan = $request->id_kecamatan;
            $pelatihans->kota = $request->kota;
            $pelatihans->provinsi = $request->provinsi;
            $pelatihans->no_registrasi = $request->no_registrasi;
            $pelatihans->id_user = $request->id_user;
            $pelatihans->tgl_masuk = $request->tgl_masuk;
            $pelatihans->kedudukan = $request->kedudukan;
            // simpan data
            $pelatihans->save();

            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_gabung');
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
    public function edit(DataKaderGabung $data_gabung)
    {
        // nama desa yang login
        $desas = DB::table('data_desa')
        ->where('id', auth()->user()->id_desa)
        ->get();
        // $kec = DB::table('data_kecamatan')->get();
        $kec = DB::table('data_kecamatan')
        ->where('id', auth()->user()->id_desa)
        ->get();

        $kader = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();

        //halaman form edit data pemanfaatan tanah pekarangan
        $pelatihan = DataKaderGabung::all();

        return view('kader.data_kegiatan.form.edit_data_gabung', compact('data_gabung','pelatihan', 'desas', 'kec', 'kader'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataKaderGabung $data_gabung)
    {
        // proses mengubah untuk tambah data pemanfaatan tanaha pekarangan
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'no_registrasi' => 'required',
            'id_user' => 'required',
            'tgl_masuk' => 'required',
            'kedudukan' => 'required',

        ]);
        // update data
            $data_gabung->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            return redirect('/data_gabung');

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_gabung, DataKaderGabung $pel)
    {
        //temukan id pemanfaatan tanah pekarangan
        $pel::find($data_gabung)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_gabung');



    }
}
