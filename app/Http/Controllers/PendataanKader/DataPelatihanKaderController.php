<?php

namespace App\Http\Controllers\PendataanKader;

use App\Http\Controllers\Controller;
use App\Models\DataKaderGabung;
use App\Models\DataPelatihanKader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataPelatihanKaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form data pelatihan kader
        $user = Auth::user();
        $pelatihan = DB::table('data_pelatihan_kader as a')
                                ->join('users as b', 'b.id', '=', 'a.id_user')
                                ->select([
                                    'b.name as nama_kader',
                                    'a.*'
                                ])
                                ->get()->where('id_desa', $user->id_desa);

        return view('kader.data_kegiatan.data_pelatihan', compact('pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman form tambah data pelatihan
        // nama desa yang login
        $gabung = DB::table('data_kader_gabung_pelatihan')
        ->where('id_user', auth()->user()->name)
        ->get();

        $kader = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();

        $pelatihan = DataPelatihanKader::all(); // pemanggilan tabel data pelatihan kader
        $gabung_pelatihan = DataKaderGabung::all(); // pemanggilan tabel data pelatihan kader

        //  dd($gabung);
        return view('kader.data_kegiatan.form.create_data_pelatihan', compact('gabung_pelatihan', 'gabung', 'kader', 'pelatihan'));

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
            'id_user' => 'required',
            'nama_pelatihan' => 'required',
            'kriteria_kader' => 'required',
            'tahun' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',

        ], [
            'id_user' => 'Lengkapi Alamat Kecamatan Kader Yang Aktif Kegiatan PKK',
            'kriteria_kader.required' => 'Lengkapi Kriteria Kader Yang Aktif Kegiatan PKK',
            'nama_pelatihan.required' => 'Lengkapi Nama Pelatihan Yang Diikuti Kader Yang Aktif Kegiatan PKK',
            'tahun.required' => 'Pilih tahun',
            'penyelenggara.required' => 'Lengkapi Penyelenggara Pelatihan Yang Diikuti Kader Yang Aktif Kegiatan PKK',
            'keterangan.required' => 'Lengkapi Keterangan Pelatihan Yang Diikuti Kader Yang Aktif Kegiatan PKK',

        ]);

        // // pengkondisian tabel
        $insert=DB::table('data_pelatihan_kader')->where('nama_pelatihan', $request->nama_pelatihan)->first();

        //dd($insert);
        if ($insert != null) {
            Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. Warga TP PKK Sudah Ada ');

            return redirect('/data_pelatihan');
        }
        else {
            //dd($request->validated());
            $pelatihans = new DataPelatihanKader;
            $pelatihans->id_user = $request->id_user;
            $pelatihans->nama_pelatihan = $request->nama_pelatihan;
            $pelatihans->kriteria_kader = $request->kriteria_kader;
            $pelatihans->tahun = $request->tahun;
            $pelatihans->penyelenggara = $request->penyelenggara;
            $pelatihans->keterangan = $request->keterangan;
            // simpan data
            $pelatihans->save();

            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_pelatihan');
            // }
    }
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
    public function edit(DataPelatihanKader $data_pelatihan)
    {
        // nama desa yang login
        $gabung = DB::table('data_kader_gabung_pelatihan')
        ->where('id', auth()->user()->id)
        ->get();

        // $kader = DB::table('data_pelatihan_kader as a')
        // ->join('users as b', 'b.id', '=', 'a.id_kader')
        // ->select([
        //     'b.name as nama_kader',
        //     'a.*'
        // ])
        // ->get();

        $kader = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();
        //halaman form edit data pemanfaatan tanah pekarangan
        $pelatihan = DataPelatihanKader::all();

        return view('kader.data_kegiatan.form.edit_data_pelatihan', compact('data_pelatihan','pelatihan', 'gabung', 'kader'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataPelatihanKader $data_pelatihan)
    {
        // proses mengubah untuk tambah data pemanfaatan tanaha pekarangan
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_user' => 'required',
            'nama_pelatihan' => 'required',
            'kriteria_kader' => 'required',
            'tahun' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',

        ]);
        // update data
            $data_pelatihan->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            return redirect('/data_pelatihan');

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_pelatihan, DataPelatihanKader $pel)
    {
        //temukan id pemanfaatan tanah pekarangan
        $pel::find($data_pelatihan)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_pelatihan');



    }
}