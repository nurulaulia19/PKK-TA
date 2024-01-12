<?php

namespace App\Http\Controllers\AdminKab;

use App\Http\Controllers\Controller;
use App\Models\BeritaKab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman index berita
        $beritaKab = BeritaKab::all();
        return view('admin_kab.berita', compact('beritaKab'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman tambah data berita
        return view('admin_kab.form.create_berita');

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
            'nama_berita' => 'required',
            'desk' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tgl_publish' => 'required',
            'penulis' => 'required',
        ], [
                'nama_berita.required' => 'Lengkapi Judul Berita yang ingin di publish',
                'desk.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',
                'tgl_publish.required' => 'Lengkapi Judul Berita yang ingin di publish',
                'penulis.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',

        ]);
        $input = $request->all();


        // cara 1
        // $berita = new BeritaKab;
        // $berita->nama_berita = $request->nama_berita;
        // $berita->desk = $request->desk;
        // $berita->tgl_publish = $request->tgl_publish;
        // $berita->penulis = $request->penulis;

        if ($image = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        // $berita->save();

        BeritaKab::create($input);
        Alert::success('Berhasil', 'Data berhasil di tambahkan');


        return redirect('/beritaKab');


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
    public function edit(BeritaKab $beritaKab)
    {
        //halaman edit
        // dump($berita);
        return view('admin_kab.form.edit_berita', compact('beritaKab'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaKab $beritaKab)
    {
        // proses penyimpanan untuk tambah data wilayah/desa
        $request->validate([
            'nama_berita' => 'required',
            'desk' => 'required',
            'tgl_publish' => 'required',
            'penulis' => 'required',
        ], [
                'nama_berita.required' => 'Lengkapi Judul Berita yang ingin di publish',
                'desk.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',
                'tgl_publish.required' => 'Lengkapi Judul Berita yang ingin di publish',
                'penulis.required' => 'Lengkapi Deskripsi Berita yang ingin di publish',

        ]);
            $beritaKab->nama_berita = $request->nama_berita;
            $beritaKab->desk = Str::limit($request->desk, 1000);
            $beritaKab->tgl_publish =$request->tgl_publish;
            $beritaKab->penulis = $request->penulis;


        if ($image = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

            $beritaKab->gambar = $profileImage;
        }else{
            unset($beritaKab['gambar']);
        }
        $beritaKab->save();

        Alert::success('Berhasil', 'Data berhasil di ubah');

        return redirect('/beritaKab');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaKab $beritaKab)
    {
        //halaman hapus
        $beritaKab->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/beritaKab')->with('status', 'sukses');

    }
}