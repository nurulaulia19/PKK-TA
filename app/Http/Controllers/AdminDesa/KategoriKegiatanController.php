<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\KategoriKegiatan;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class KategoriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form kategori kegiatan
        $kategori = KategoriKegiatan::all();

        return view('admin_desa.kategori_kegiatan', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // halaman create kategori kegiatan
        return view('admin_desa.form.create_kategori_kegiatan');
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
            'nama_kegiatan' => 'required',
        ], [
            'nama_kegiatan.required' => 'Masukkan Nama Kegiatan',
        ]);

        $kat = new KategoriKegiatan;
        $kat->nama_kegiatan = $request->nama_kegiatan;

        $kat->save();
        // dd($kat);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');

        return redirect('/kategori_kegiatan');
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
    public function edit(KategoriKegiatan $kategori_kegiatan)
    {
        //
        return view('admin_desa.form.edit_kategori_kegiatan', compact('kategori_kegiatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriKegiatan $kategori_kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
        ], [
            'nama_kegiatan.required' => 'Masukkan Nama Kategori Kegiatan',
        ]);

        $kategori_kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kategori_kegiatan->update();
        Alert::success('Berhasil', 'Data berhasil di Ubah');

        return redirect('/kategori_kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kategori_kegiatan, KategoriKegiatan $kat)
    {
        //temukan id kat
        $kat::find($kategori_kegiatan)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/kategori_kegiatan')->with('status', 'sukses');
    }
}