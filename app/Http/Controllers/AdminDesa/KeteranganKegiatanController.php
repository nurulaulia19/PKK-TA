<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\KategoriKegiatan;
use App\Models\KeteranganKegiatan;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class KeteranganKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form keterangan kegiatan
        $keterangan = KeteranganKegiatan::all();
        $kategori_kegiatan = KategoriKegiatan::all();
        return view('admin_desa.keterangan_kegiatan', compact('keterangan', 'kategori_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // halaman create keterangan kegiatan
        $kategori_kegiatan = KategoriKegiatan::all();

        return view('admin_desa.form.create_keterangan_kegiatan', compact('kategori_kegiatan'));
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
        $request->validate([
            'id_kegiatan' => 'required',
            'nama_keterangan' => 'required',
        ], [
            'id_kegiatan.required' => 'required',
            'nama_keterangan.required' => 'Masukkan Nama Keterangan',
        ]);

        $kat = new KeteranganKegiatan;
        $kat->id_kegiatan = $request->id_kegiatan;
        $kat->nama_keterangan = $request->nama_keterangan;

        $kat->save();
        // dd($kat);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');

        return redirect('/keterangan_kegiatan');
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
    public function edit(KeteranganKegiatan $keterangan_kegiatan)
    {
        // halaman edit keterangan kegiatan
        $kategori_kegiatan = KategoriKegiatan::all();

        return view('admin_desa.form.edit_keterangan_kegiatan', compact('keterangan_kegiatan', 'kategori_kegiatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeteranganKegiatan $keterangan_kegiatan)
    {
        $request->validate([
            'id_kegiatan' => 'required',
            'nama_keterangan' => 'required',
        ], [
            'id_kegiatan.required' => 'required',
            'nama_keterangan.required' => 'Masukkan Nama Keterangan',
        ]);

        $keterangan_kegiatan->nama_keterangan = $request->nama_keterangan;
        $keterangan_kegiatan->update();
        Alert::success('Berhasil', 'Data berhasil di Ubah');

        return redirect('/keterangan_kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($keterangan_kegiatan, KeteranganKegiatan $kat)
    {
        //temukan id kat
        $kat::find($keterangan_kegiatan)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/keter$keterangan_kegiatan')->with('status', 'sukses');
    }
}