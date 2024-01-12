<?php

namespace App\Http\Controllers\AdminKab;
use App\Http\Controllers\Controller;
use App\Models\DataGaleri;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DataGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman index galeri
        $galeri = DataGaleri::all();
        return view('admin_kab.galeri', compact('galeri'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman tambah data galeri
        return view('admin_kab.form.create_galeri');

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
            'nama_gambar' => 'required',
            'nama_kegiatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tgl_publish' => 'required',
            'pengirim' => 'required',
        ], [
                'nama_gambar.required' => 'Lengkapi Nama Galeri yang ingin di publish',
                'nama_kegiatan.required' => 'Lengkapi Nama Kegiatan Galeri yang ingin di publish',
                'tgl_publish.required' => 'Lengkapi Tanggal Galeri yang ingin di publish',
                'pengirim.required' => 'Lengkapi Nama Pengirim Galeri yang ingin di publish',

        ]);
        $input = $request->all();


        // cara 1
        // $galeri = new galeriKab;
        // $galeri->nama_gambar = $request->nama_gambar;
        // $galeri->nama_kegiatan = $request->nama_kegiatan;
        // $galeri->tgl_publish = $request->tgl_publish;
        // $galeri->pengirim = $request->pengirim;

        if ($image = $request->file('gambar')) {
            $destinationPath = 'galeri/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        // $galeri->save();

        $save = DataGaleri::create($input);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');
        // dd($save);

        return redirect('/galeriKeg');


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
    public function edit(DataGaleri $galeriKeg)
    {
        //halaman edit
        return view('admin_kab.form.edit_galeri', compact('galeriKeg'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataGaleri $galeriKeg)
    {
        // proses penyimpanan untuk tambah data wilayah/desa
        $request->validate([
            'nama_gambar' => 'required',
            'nama_kegiatan' => 'required',
            'tgl_publish' => 'required',
            'pengirim' => 'required',
        ], [
                'nama_gambar.required' => 'Lengkapi Judul galeri yang ingin di publish',
                'nama_kegiatan.required' => 'Lengkapi nama_kegiatanripsi galeri yang ingin di publish',
                'tgl_publish.required' => 'Lengkapi Judul galeri yang ingin di publish',
                'pengirim.required' => 'Lengkapi nama_kegiatanripsi galeri yang ingin di publish',

        ]);

            $galeriKeg->nama_gambar = $request->nama_gambar;
            $galeriKeg->nama_kegiatan = $request->nama_kegiatan;
            $galeriKeg->tgl_publish =$request->tgl_publish;
            $galeriKeg->pengirim = $request->pengirim;


        if ($image = $request->file('gambar')) {
            $destinationPath = 'galeri/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

            $galeriKeg->gambar = $profileImage;
        }else{
            unset($galeriKeg['gambar']);
        }
        $galeriKeg->save();

        Alert::success('Berhasil', 'Data berhasil di ubah');

        return redirect('/galeriKeg');

    }

    public function destroy(DataGaleri $galeriKeg)
    {
        //halaman hapus
        $galeriKeg->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/galeriKeg')->with('status', 'sukses');

    }
}