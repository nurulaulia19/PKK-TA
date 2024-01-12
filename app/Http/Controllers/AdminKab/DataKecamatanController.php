<?php

namespace App\Http\Controllers\AdminKab;
use App\Http\Controllers\Controller;
use App\Models\DataKecamatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DataKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // halaman data Kecamatan
        $kecamatan = DataKecamatan::all();
        return view('admin_kab.data_kecamatan', compact('kecamatan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //halaman tambah data
        return view('admin_kab.form.create_kecamatan');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data kecamatan
        $request->validate([
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required',

        ], [
                'kode_kecamatan.required' => 'Lengkapi Kode Kecamatan',
                'nama_kecamatan.required' => 'Lengkapi Nama Kecamatan',

        ]);

        // cara 1
        $desa = new DataKecamatan();
        $desa->kode_kecamatan = $request->kode_kecamatan;
        $desa->nama_kecamatan = $request->nama_kecamatan;
        $desa->save();


        Alert::success('Berhasil', 'Data berhasil di tambahkan');
        return redirect('/data_kecamatan');

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
    public function edit(DataKecamatan $data_kecamatan)
    {
        //halaman edit data
        return view('admin_kab.form.edit_kecamatan', compact('data_kecamatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKecamatan $data_kecamatan)
    {
        //halaman proses edit data
        $request->validate([
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required',
        ]);
        // $kec = DB::table('data_kecamatan')->get();
        $data_kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $data_kecamatan->nama_kecamatan = $request->nama_kecamatan;

        $data_kecamatan->update($request->all());
        Alert::success('Berhasil', 'Data berhasil di ubah');

        return redirect('/data_kecamatan');
        // return view('admin_kab.data_kecamatan', compact('data_kecamatan'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_kecamatan, DataKecamatan $kecamatan)
    {
        //hapus dengan temukan id kecamatan
        $kecamatan::find($data_kecamatan)->delete();
        Alert::success('Berhasil', 'Data berhasil di hapus');

        return redirect('/data_kecamatan')->with('status', 'sukses');

    }
}
