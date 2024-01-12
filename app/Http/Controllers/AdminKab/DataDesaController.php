<?php

namespace App\Http\Controllers\AdminKab;
use App\Http\Controllers\Controller;
use App\Models\Data_Desa;
use App\Models\DataKecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // halaman data desa
        $desa = Data_Desa::all();
        // $desa = Data_Desa::paginate(20);
        return view('admin_kab.data_desa', compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman tambah data desa
        // ngambil data kecamatan
        $kec = DB::table('data_kecamatan')->get();

        return view('admin_kab.form.create_desa', compact('kec'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data wilayah/desa
        $request->validate([
            'id_kecamatan' => 'required',
            'kode_desa' => 'required',
            'nama_desa' => 'required',

        ], [
                'id_kecamatan.required' => 'Lengkapi Id Kecamatan',
                'kode_desa.required' => 'Lengkapi Kode Desa',
                'nama_desa.required' => 'Lengkapi Nama Desa',

        ]);

        // cara 1
        $desa = new Data_Desa;
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->kode_desa = $request->kode_desa;
        $desa->nama_desa = $request->nama_desa;
        $desa->save();


        Alert::success('Berhasil', 'Data berhasil di tambahkan');
        // dd($desa);
        // Data_Desa::create($request->all());
        // return redirect()->route('data_desa.index')
        //                 ->with('success','Student created successfully.');


        return redirect('/data_desa');


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
    public function edit(Data_Desa $data_desa)
    {
        // halaman edit data desa
        // dd($desa);
        // $kec = DB::table('data_kecamatan')->get();
        $kec = Data_Desa::with('kecamatan')->first();
        $kecamatans = DataKecamatan::all();

        return view('admin_kab.form.edit_desa', compact('data_desa', 'kec', 'kecamatans'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data_Desa $data_desa)
    {
        //halaman proses edit data desa
        $request->validate([
            'id_kecamatan' => 'required',
            'kode_desa' => 'required',
            'nama_desa' => 'required',
        ]);
        // $kec = DB::table('data_kecamatan')->get();

        $data_desa->update($request->all());
        Alert::success('Berhasil', 'Data berhasil di ubah');

        return redirect('/data_desa');
        // return view('admin_kab.data_wilayah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data_desa, Data_Desa $desa)
    {
        //temukan id desa
        $desa::find($data_desa)->delete();
        Alert::success('Berhasil', 'Data berhasil di hapus');

        return redirect('/data_desa')->with('status', 'sukses');

    }
}