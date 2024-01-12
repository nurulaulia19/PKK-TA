<?php

namespace App\Http\Controllers\PendataanKader;
use App\Http\Controllers\Controller;
use App\Models\Data_Desa;
use App\Models\DataDasaWisma;
use App\Models\DataKelompokDasawisma;
use App\Models\DataKeluarga;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //halaman data warga
        $warga=DataWarga::all()->where('id_user', $user->id);
        $dasawisma = DataKelompokDasawisma::all();

        return view('kader.data_kegiatan.data_warga', compact('warga', 'dasawisma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     // nama desa yang login
     $desas = DB::table('data_desa')
     ->where('id', auth()->user()->id_desa)
     ->get();

     $kec = DB::table('data_kecamatan')
     ->where('id', auth()->user()->id_kecamatan)
     ->get();

     $kad = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();

     $kel = DataKeluarga::all();
     $dasawisma = DataKelompokDasawisma::all();

     return view('kader.data_kegiatan.form.create_data_warga', compact('desas', 'kec', 'kel', 'kad', 'dasawisma'));

 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data warga
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            // 'dasa_wisma' => 'required',
            'id_dasawisma' => 'required',
            'id_keluarga' => 'required',
            'no_registrasi' => 'required',
            'no_ktp' => 'required|min:16',
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'status_perkawinan' => 'required',
            'status_keluarga' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            // 'rt' => 'required',
            // 'rw' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'akseptor_kb' => 'required',
            'aktif_posyandu' => 'required',
            'ikut_bkb' => 'required',
            'memiliki_tabungan' => 'required',
            'ikut_kelompok_belajar' => 'required',
            'ikut_paud_sejenis' => 'required',
            'ikut_koperasi' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Warga',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Warga',
            'id_dasa_wisma.required' => 'Pilih Nama Dasawisma Yang Diikuti Warga',
            'id_keluarga.required' => 'Lengkapi Nama Kepala Rumah Tangga',
            'no_registrasi.required' => 'Lengkapi No. Registrasi',
            'no_ktp.required' => 'Lengkapi No. KTP/NIK',
            'nama.required' => 'Lengkapi Nama',
            'jabatan.required' => 'Lengkapi Jabatan dalam Struktur TP PKK',
            'jenis_kelamin.required' => 'Pilih Jenis Kelamin',
            'tempat_lahir.required' => 'Lengkapi Jumlah Tempat Lahir',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir',
            'umur.required' => 'Lengkapi Umur',
            'status_perkawinan.required' => 'Pilih Status Perkawinan',
            'status_keluarga.required' => 'Pilih Status Keluarga',
            'agama.required' => 'Pilih Agama',
            'alamat.required' => 'Lengkapi Alamat',
            // 'rt.required' => 'Lengkapi RT',
            // 'rw.required' => 'Lengkapi RW',
            'kabupaten.required' => 'Lengkapi kabupaten',
            'provinsi.required' => 'Lengkapi Provinsi',
            'pendidikan.required' => 'Pilih Riwayat Pendidikan Warga',
            'pekerjaan.required' => 'Pilih Pekerjaan Warga',
            'akseptor_kb.required' => 'Pilih Akseptor KB Yang Diikuti Warga',
            'aktif_posyandu.required' => 'Pilih Kegiatan Aktif Posyandu',
            'ikut_bkb.required' => 'Pilih Kegiatan Mengikuti BKB (Bina Keluarga Balita)',
            'memiliki_tabungan.required' => 'Pilih Memiliki Tabungan Warga',
            'ikut_kelompok_belajar.required' => 'Pilih Kegiatan Kelompok Belajar Yang Diikuti',
            'ikut_paud_sejenis.required' => 'Pilih Kegiatan PAUD/Sejenis Yang Diikuti',
            'ikut_koperasi.required' => 'Pilih Kegiatan Koperasi Yang Diikuti',
            'periode.required' => 'Pilih Periode',

        ]);

        // pengkondisian tabel
        $insert=DB::table('data_warga')->where('no_ktp', $request->no_ktp)->first();
        if ($insert != null) {
            Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. No.KTP Sudah Ada ');

            return redirect('/data_warga');
        }
        else {

            $wargas = new DataWarga;
            $wargas->id_desa = $request->id_desa;
            $wargas->id_kecamatan = $request->id_kecamatan;
            $wargas->id_dasawisma = $request->id_dasawisma;
            $wargas->id_keluarga = $request->id_keluarga;
            // $wargas->nik_kepala_keluarga = $request->nik_kepala_keluarga == $request->no_ktp ? null : $request->nik_kepala_keluarga;
            $wargas->no_registrasi = $request->no_registrasi;
            $wargas->no_ktp = $request->no_ktp;
            $wargas->nama = $request->nama;
            $wargas->jabatan = $request->jabatan;
            $wargas->jenis_kelamin = $request->jenis_kelamin;
            $wargas->tempat_lahir = $request->tempat_lahir;
            $wargas->tgl_lahir = $request->tgl_lahir;
            $wargas->umur = $request->umur;
            $wargas->status_perkawinan = $request->status_perkawinan;
            $wargas->status_keluarga = $request->status_keluarga;
            $wargas->status_anggota_keluarga = $request->status_keluarga == 'kepala keluarga' ? 'kepala keluarga' : $request->status_anggota_keluarga;
            $wargas->agama = $request->agama;
            $wargas->alamat = $request->alamat;
            $wargas->rt = $request->rt;
            $wargas->rw = $request->rw;
            $wargas->kabupaten = $request->kabupaten;
            $wargas->provinsi = $request->provinsi;
            $wargas->pendidikan = $request->pendidikan;
            $wargas->pekerjaan = $request->pekerjaan;
            $wargas->akseptor_kb = $request->akseptor_kb;
            $wargas->aktif_posyandu = $request->aktif_posyandu;
            $wargas->ikut_bkb = $request->ikut_bkb;
            $wargas->memiliki_tabungan = $request->memiliki_tabungan;
            $wargas->ikut_kelompok_belajar = $request->ikut_kelompok_belajar;
            $wargas->ikut_paud_sejenis = $request->ikut_paud_sejenis;
            $wargas->ikut_koperasi = $request->ikut_koperasi;
            $wargas->periode = $request->periode;
            $wargas->id_user = $request->id_user;

            // simpan data
            $wargas->save();
            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_warga');
            }
    }

    /**
     * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(DataWarga $data_warga)
    {
        // menampilkan data warga
        // $warga=DataWarga::all();

        return view('kader.data_kegiatan.show.data_warga_show',compact('data_warga'));

    }

    /**
     * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(DataWarga $data_warga)
    {
        // halaman form edit data warga
        $desa = DataWarga::with('desa')->first(); // pemanggilan tabel data warga
         // nama desa yang login
        // $desas = DB::table('data_desa')->get();
        // $kec = DB::table('data_kecamatan')->get();
        $desas = DB::table('data_desa')
        ->where('id', auth()->user()->id_desa)
        ->get();

        $kec = DB::table('data_kecamatan')
        ->where('id', auth()->user()->id_kecamatan)
        ->get();

        $kad = DB::table('users')
        ->where('id', auth()->user()->id)
        ->get();

        $kel = DataKeluarga::all();
        $dasawisma = DataKelompokDasawisma::all();

        return view('kader.data_kegiatan.form.edit_data_warga', compact('data_warga','desa','desas','kec', 'kel', 'kad', 'dasawisma'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataWarga $data_warga)
    {
        // proses mengubah untuk tambah data pendidikan
        // dd($request->all());
        // validasi data
        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'id_dasawisma' => 'required',
            'id_keluarga' => 'required',
            'no_registrasi' => 'required',
            'no_ktp' => 'required|min:16',
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'status_perkawinan' => 'required',
            'status_keluarga' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'akseptor_kb' => 'required',
            'aktif_posyandu' => 'required',
            'ikut_bkb' => 'required',
            'memiliki_tabungan' => 'required',
            'ikut_kelompok_belajar' => 'required',
            'ikut_paud_sejenis' => 'required',
            'ikut_koperasi' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Warga',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Warga',
            'id_dasawisma.required' => 'Lengkapi Nama Dasawisma Yang Diikuti Warga',
            'id_keluarga.required' => 'Lengkapi Nama Kepala Rumah Tangga',
            'no_registrasi.required' => 'Lengkapi No. Registrasi',
            'no_ktp.required' => 'Lengkapi No. KTP/NIK',
            'nama.required' => 'Lengkapi Nama',
            'jabatan.required' => 'Lengkapi Jabatan dalam Struktur TP PKK',
            'jenis_kelamin.required' => 'Pilih Jenis Kelamin',
            'tempat_lahir.required' => 'Lengkapi Jumlah Tempat Lahir',
            'tgl_lahir.required' => 'Lengkapi Tanggal Lahir',
            'umur.required' => 'Lengkapi Umur',
            'status_perkawinan.required' => 'Pilih Status Perkawinan',
            'status_keluarga.required' => 'Pilih Status Keluarga',
            'agama.required' => 'Pilih Agama',
            'alamat.required' => 'Lengkapi Alamat',
            'rt.required' => 'Lengkapi RT',
            'rw.required' => 'Lengkapi RW',
            'kabupaten.required' => 'Lengkapi kabupaten',
            'provinsi.required' => 'Lengkapi Provinsi',
            'pendidikan.required' => 'Pilih Riwayat Pendidikan Warga',
            'pekerjaan.required' => 'Pilih Pekerjaan Warga',
            'akseptor_kb.required' => 'Pilih Akseptor KB Yang Diikuti Warga',
            'aktif_posyandu.required' => 'Pilih Kegiatan Aktif Posyandu',
            'ikut_bkb.required' => 'Pilih Kegiatan Mengikuti BKB (Bina Keluarga Balita)',
            'memiliki_tabungan.required' => 'Pilih Memiliki Tabungan Warga',
            'ikut_kelompok_belajar.required' => 'Pilih Kegiatan Kelompok Belajar Yang Diikuti',
            'ikut_paud_sejenis.required' => 'Pilih Kegiatan PAUD/Sejenis Yang Diikuti',
            'ikut_koperasi.required' => 'Pilih Kegiatan Koperasi Yang Diikuti',
            'periode.required' => 'Pilih Periode',

        ]);

        // update data
            $data_warga->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            // dd($jml_kader);
            return redirect('/data_warga');

    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_warga, DataWarga $warg)
    {
        //temukan id data warga
        $warg::find($data_warga)->delete();
        Alert::success('Berhasil', 'Data berhasil di Hapus');

        return redirect('/data_warga');

    }
}