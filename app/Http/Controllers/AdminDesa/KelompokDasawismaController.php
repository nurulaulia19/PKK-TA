<?php

namespace App\Http\Controllers\AdminDesa;
use App\Http\Controllers\Controller;
use App\Models\Data_Desa;
use App\Models\DataKecamatan;
use App\Models\DataKelompokDasawisma;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class KelompokDasawismaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman form data dasawisma
        $dasawisma = DataKelompokDasawisma::all();

        return view('admin_desa.data_kelompok_dasawisma', compact('dasawisma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // halaman create dasawisma
        $desa = Data_Desa::all();
        $kec = DataKecamatan::all();
        return view('admin_desa.form.create_dasawisma', compact('desa', 'kec'));
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
            'nama_dasawisma' => 'required',
            'alamat_dasawisma' => 'required',
            'dusun' => 'required',
            'status' => 'required',
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'rt' => 'required',
            'rw' => 'required'
        ], [
            'nama_dasawisma.required' => 'Masukkan Nama Dasawisma',
            'alamat_dasawisma.required' => 'Masukkan Alamat Dasawisma',
            'dusun.required' => 'Masukkan Dusun Dasawisma',
            'status.required' => 'Pilih Status',
        ]);

        $dawis = new DataKelompokDasawisma;
        $dawis->nama_dasawisma = $request->nama_dasawisma;
        $dawis->alamat_dasawisma = $request->alamat_dasawisma;
        $dawis->dusun = $request->dusun;
        $dawis->status = $request->status;
        $dawis->rt = $request->rt;
        $dawis->rw = $request->rw;
        $dawis->id_desa = auth()->user()->id_desa;
        $dawis->id_kecamatan = auth()->user()->id_kecamatan;
        $dawis->periode = $request->periode;


        $dawis->save();
        // dd($dawis);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');

        return redirect('/data_dasawisma');
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
    public function edit(DataKelompokDasawisma $data_dasawisma)
    {
        //
        return view('admin_desa.form.edit_dasawisma', compact('data_dasawisma'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKelompokDasawisma $data_dasawisma)
    {
        $request->validate([
            'nama_dasawisma' => 'required',
            'alamat_dasawisma' => 'required',
            'dusun' => 'required',
            'status' => 'required',
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'rt' => 'required',
            'rw' => 'required'
        ], [
            'nama_dasawisma.required' => 'Masukkan Nama Dasawisma',
            'alamat_dasawisma.required' => 'Masukkan Alamat Dasawisma',
            'dusun.required' => 'Masukkan Dusun Dasawisma',
            'status.required' => 'Pilih Status',
        ]);

        $data_dasawisma->nama_dasawisma = $request->nama_dasawisma;
        $data_dasawisma->alamat_dasawisma = $request->alamat_dasawisma;
        $data_dasawisma->dusun = $request->dusun;
        $data_dasawisma->rt = $request->rt;
        $data_dasawisma->rw = $request->rw;
        $data_dasawisma->status = $request->status;
        $data_dasawisma->id_desa = auth()->user()->id_desa;
        $data_dasawisma->id_kecamatan = auth()->user()->id_kecamatan;

        $data_dasawisma->update();
        Alert::success('Berhasil', 'Data berhasil di Ubah');

        return redirect('/data_dasawisma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_dasawisma, DataKelompokDasawisma $dawis)
    {
        //temukan id dawis
        $dawis::find($data_dasawisma)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_dasawisma')->with('status', 'sukses');
    }
}
