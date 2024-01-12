<?php

namespace App\Http\Controllers\PendataanKader;
use App\Http\Controllers\Controller;
use App\Models\DataKeluarga;
use App\Models\DataPemanfaatanPekarangan;
use App\Models\DataWarga;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\KategoriPemanfaatanLahan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataPemanfaatanPekaranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //halaman form data pemanfaatan tanah pekarangan
        $pemanfaatan = DataPemanfaatanPekarangan::all()->where('id_user', $user->id);
        return view('kader.data_kegiatan.data_pemanfaatan', compact('pemanfaatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman form tambah data pemanfaatan tanah
     // nama desa yang login
     $desas = DB::table('data_desa')
     ->where('id', auth()->user()->id_desa)
     ->get();
     // $kec = DB::table('data_kecamatan')->get();
     $kec = DB::table('data_kecamatan')
     ->where('id', auth()->user()->id_kecamatan)
     ->get();

     $kad = DB::table('users')
    ->where('id', auth()->user()->id)
    ->get();

     $kel = DataKeluarga::all(); // pemanggilan tabel data warga pekarangan
    //  $kat = KategoriPemanfaatanLahan::all(); // pemanggilan tabel kategori pemanfaatan tanah
    $data['kategori'] = [
        'Peternakan' => 'Peternakan',
        'Perikanan' => 'Perikanan',
        'Warung Hidup' => 'Warung Hidup',
        'TOGA (Tanaman Obat Keluarga)' => 'TOGA (Tanaman Obat Keluarga)',
        'Tanaman Keras' => 'Tanaman Keras',
        'Lainnya' => 'Lainnya',
    ];
    return view('kader.data_kegiatan.form.create_data_pemanfaatan', $data, compact('kec', 'kel', 'desas', 'kad'));

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
            'id_keluarga' => 'required',
            'nama_kategori' => 'required',
            'komoditi' => 'required',
            'jumlah' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Pilih Alamat Desa Pemanfaatan Tanah Pekarangan Warga',
            'id_kecamatan' => 'Pilih Alamat Kecamatan Pemanfaatan Tanah Pekarangan Warga',

            'id_keluarga.required' => 'Pilih Nama Warga',
            'nama_kategori.required' => 'Pilih Alamat Kategori Pemanfaatan Tanah Pekarangan',
            'komoditi.required' => 'Lengkapi Komoditi Pemanfaatan Tanah Pekarangan',
            'jumlah.required' => 'Lengkapi Jumlah Komoditi Tanah Pekarangan',
            'periode.required' => 'Pilih Periode',

        ]);

        // pengkondisian tabel
        $insert=DB::table('data_pemanfaatan_pekarangan')->where('id_keluarga', $request->id_keluarga)->first();
        if ($insert != null) {
            Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. Keluarga Sudah Ada ');

            return redirect('/data_pemanfaatan');
        }
        else {

            $kegiatans = new DataPemanfaatanPekarangan;
            $kegiatans->id_desa = $request->id_desa;
            $kegiatans->id_kecamatan = $request->id_kecamatan;
            $kegiatans->id_keluarga = $request->id_keluarga;
            $kegiatans->id_user = $request->id_user;
            $kegiatans->nama_kategori = $request->nama_kategori;
            $kegiatans->komoditi = $request->komoditi;
            $kegiatans->jumlah = $request->jumlah;
            $kegiatans->periode = $request->periode;

            // simpan data
            $kegiatans->save();

            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_pemanfaatan');
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
    public function edit(DataPemanfaatanPekarangan $data_pemanfaatan)
    {
        //halaman form edit data pemanfaatan tanah pekarangan
        $kel = DataKeluarga::all();
        // $kat = KategoriPemanfaatanLahan::all();

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
       $data['kategori'] = [
        'Peternakan' => 'Peternakan',
        'Perikanan' => 'Perikanan',
        'Warung Hidup' => 'Warung Hidup',
        'TOGA (Tanaman Obat Keluarga)' => 'TOGA (Tanaman Obat Keluarga)',
        'Tanaman Keras' => 'Tanaman Keras',
        'Lainnya' => 'Lainnya',
    ];

        return view('kader.data_kegiatan.form.edit_data_pemanfaatan',$data, compact('data_pemanfaatan','kel', 'desas', 'kec', 'kad'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataPemanfaatanPekarangan $data_pemanfaatan)
    {
        // proses mengubah untuk tambah data pemanfaatan tanah pekarangan
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'id_keluarga' => 'required',
            'nama_kategori' => 'required',
            'komoditi' => 'required',
            'jumlah' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Pilih Alamat Desa Pemanfaatan Tanah Pekarangan Warga',
            'id_kecamatan' => 'Pilih Alamat Kecamatan Pemanfaatan Tanah Pekarangan Warga',

            'id_keluarga.required' => 'Pilih Nama Warga',
            'nama_kategori.required' => 'Pilih Alamat Kategori Pemanfaatan Tanah Pekarangan',
            'komoditi.required' => 'Lengkapi Komoditi Pemanfaatan Tanah Pekarangan',
            'jumlah.required' => 'Lengkapi Jumlah Komoditi Tanah Pekarangan',
            'periode.required' => 'Pilih Periode',

        ]);
        // update data
            $data_pemanfaatan->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            return redirect('/data_pemanfaatan');

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_pemanfaatan, DataPemanfaatanPekarangan $warg)
    {
        //temukan id pemanfaatan tanah pekarangan
        $warg::find($data_pemanfaatan)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_pemanfaatan');



    }
}