<?php

namespace App\Http\Controllers\PendataanKader;
use App\Http\Controllers\Controller;
use App\Models\DataKelompokDasawisma;
use App\Models\DataKeluarga;
use App\Models\DataWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class DataKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //halaman form data keluarga
        $keluarga = DataKeluarga::all()->where('id_user', $user->id);
        $dasawisma = DataKelompokDasawisma::all();
        return view('kader.data_kegiatan.data_keluarga', compact('keluarga', 'dasawisma'));
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

     $keg = DataKeluarga::all();
     $warga = DataWarga::all();
     $dasawisma = DataKelompokDasawisma::all();

    //  dd($kec);
     return view('kader.data_kegiatan.form.create_data_keluarga', compact( 'warga', 'kec', 'desas', 'kad', 'dasawisma'));

    }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
    public function store(Request $request)
    {
        // proses penyimpanan untuk tambah data keluarga
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            // 'dasa_wisma' => 'required',
            'id_dasawisma' => 'required',
            'nik_kepala_keluarga' => 'required|min:16',
            'rt' => 'required',
            'rw' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'dusun' => 'required',
            // 'perempuan' => 'required',
            'jumlah_KK' => 'required',
            // 'jumlah_balita' => 'required',
            'jumlah_anggota_keluarga' => 'required',
            // 'jumlah_WUS' => 'required',
            // 'jumlah_3_buta' => 'required',
            // 'jumlah_ibu_hamil' => 'required',
            // 'jumlah_ibu_menyusui' => 'required',
            // 'jumlah_lansia' => 'required',
            // 'jumlah_kebutuhan' => 'required',
            'makanan_pokok' => 'required',
            'punya_jamban' => 'required',
            // 'jumlah_PUS' => 'required',
            'sumber_air' => 'required',
            'punya_tempat_sampah' => 'required',
            'punya_saluran_air' => 'required',
            'tempel_stiker' => 'required',
            'kriteria_rumah' => 'required',
            'aktivitas_UP2K' => 'required',
            'aktivitas_kegiatan_usaha' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Lengkapi Alamat Desa Kegiatan Warga',
            'id_kecamatan' => 'Lengkapi Alamat Kecamatan Kegiatan Warga',
            'nama_kepala_rumah_tangga.required' => 'Lengkapi Nama Warga Kepala Rumah Tangga',
            'id_dasawisma.required' => 'Lengkapi Nama Dasawisma Yang Diikuti',
            'nik_kepala_keluarga.required' => 'Lengkapi NIK Kepala Rumah Tangga',
            'jumlah_anggota_keluarga.required' => 'Lengkapi Jumlah Anggota Keluarga',
            'rt.required' => 'Lengkapi RT',
            'rw.required' => 'Lengkapi RW',
            'dusun.required' => 'Lengkapi Nama Dusun',
            // 'perempuan.required' => 'Lengkapi Jumlah Perempuan',
            'jumlah_KK.required' => 'Lengkapi Jumlah KK',
            // 'jumlah_PUS.required' => 'Lengkapi Jumlah PUS (Pasangan Usia Subur) dalam Keluarga',
            // 'jumlah_WUS.required' => 'Lengkapi Jumlah WUS (Wanita Usia Subur) dalam Keluarga',
            // 'jumlah_3_buta.required' => 'Lengkapi Jumlah 3 Buta (Buta Tulis, Buta Baca, Buta Hitung) dalam Keluarga',
            // 'jumlah_ibu_hamil.required' => 'Lengkapi Jumlah Ibu Hamil dalam Keluarga',
            // 'jumlah_ibu_menyusui.required' => 'Lengkapi Jumlah Ibu Menyusui dalam Keluarga',
            // 'jumlah_lansia.required' => 'Lengkapi Jumlah Lansia dalam Keluarga',
            // 'jumlah_kebutuhan.required' => 'Lengkapi Jumlah Berkebutuhan Khusus dalam Keluarga',
            'makanan_pokok.required' => 'Lengkapi Makanan Pokok',
            // 'jumlah_balita.required' => 'Lengkapi Jumlah Balita dalam Keluarga',
            'punya_jamban.required' => 'Pilih Mempunyai Jamban dan Jumlah Yang Mempunyai Jamban',
            'sumber_air.required' => 'Pilih Sumber Air dalam Keluarga',
            'punya_tempat_sampah.required' => 'Pilih Yang Mempunyai Tempat Sampah',
            'punya_saluran_air.required' => 'Pilih Yang Mempunyai Saluran Air',
            'tempel_stiker.required' => 'Pilih Rumah Yang Mempunyai Stiker P4K',
            'kriteria_rumah.required' => 'Pilih Kriteria Rumah',
            'aktivitas_UP2K.required' => 'Pilih Aktivitas UP2K',
            'aktivitas_kegiatan_usaha.required' => 'Pilih Aktivitas Kegiatan Usaha',
            'periode.required' => 'Pilih Periode',

        ]);
        $insert=DB::table('data_keluarga')->where('nik_kepala_keluarga', $request->nik_kepala_keluarga)->first();
        if ($insert != null) {
            Alert::error('Gagal', 'Data Tidak Berhasil Di Tambah. No.KTP Sudah Ada ');

            return redirect('/data_keluarga');
        }
        else {
        //cara 1

            $wargas = new DataKeluarga;
            $wargas->id_desa = $request->id_desa;
            $wargas->id_kecamatan = $request->id_kecamatan;
            $wargas->nama_kepala_rumah_tangga = $request->nama_kepala_rumah_tangga;
            $wargas->id_dasawisma = $request->id_dasawisma;
            $wargas->nik_kepala_keluarga = $request->nik_kepala_keluarga;
            $wargas->kabupaten = $request->kabupaten;
            $wargas->provinsi = $request->provinsi;
            $wargas->id_user = $request->id_user;
            $wargas->dusun = $request->dusun;

            $wargas->jumlah_anggota_keluarga = $request->jumlah_anggota_keluarga;
            $wargas->rt = $request->rt;
            $wargas->rw = $request->rw;
            $wargas->jumlah_laki = $request->jumlah_laki;
            $wargas->jumlah_perempuan = $request->jumlah_perempuan;
            $wargas->jumlah_KK = $request->jumlah_KK;
            $wargas->jumlah_balita = $request->jumlah_balita;
            $wargas->jumlah_balita_laki = $request->jumlah_balita_laki;
            $wargas->jumlah_balita_perempuan = $request->jumlah_balita_perempuan;
            $wargas->jumlah_PUS = $request->jumlah_PUS;
            $wargas->jumlah_WUS = $request->jumlah_WUS;
            $wargas->jumlah_3_buta = $request->jumlah_3_buta;
            $wargas->jumlah_3_buta_laki = $request->jumlah_3_buta_laki;
            $wargas->jumlah_3_buta_perempuan = $request->jumlah_3_buta_perempuan;
            $wargas->jumlah_ibu_hamil = $request->jumlah_ibu_hamil;
            $wargas->jumlah_ibu_menyusui = $request->jumlah_ibu_menyusui;
            $wargas->jumlah_lansia = $request->jumlah_lansia;
            $wargas->jumlah_kebutuhan_khusus = $request->jumlah_kebutuhan_khusus;
            $wargas->makanan_pokok = $request->makanan_pokok;
            $wargas->punya_jamban = $request->punya_jamban;
            $wargas->jumlah_jamban = $request->jumlah_jamban;
            $wargas->sumber_air = $request->sumber_air;
            $wargas->punya_tempat_sampah = $request->punya_tempat_sampah;
            $wargas->punya_saluran_air = $request->punya_saluran_air;
            $wargas->tempel_stiker = $request->tempel_stiker;
            $wargas->kriteria_rumah = $request->kriteria_rumah;
            $wargas->aktivitas_UP2K = $request->aktivitas_UP2K;
            $wargas->aktivitas_kegiatan_usaha = $request->aktivitas_kegiatan_usaha;
            $wargas->periode = $request->periode;
            $wargas->save();
            Alert::success('Berhasil', 'Data berhasil di tambahkan');

            return redirect('/data_keluarga');
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
    public function edit(DataKeluarga $data_keluarga)
    {
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
        //halaman edit data keluarga
        $warga = DataWarga::all();
        $kel = DataKeluarga::all();
        $dasawisma = DataKelompokDasawisma::all();

        // dd($keg);

        return view('kader.data_kegiatan.form.edit_data_keluarga', compact('data_keluarga','warga', 'kel', 'desas', 'kec', 'kad', 'dasawisma'));

    }

    /**
     * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DataKeluarga $data_keluarga)
    {
        // proses mengubah untuk data keluarga
        // dd($request->all());

        $request->validate([
            'id_desa' => 'required',
            'id_kecamatan' => 'required',
            // 'id_warga' => 'required',
            'id_dasawisma' => 'required',
            'nik_kepala_keluarga' => 'required|min:16',
            'rt' => 'required',
            'rw' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'dusun' => 'required',
            // 'perempuan' => 'required',
            'jumlah_KK' => 'required',
            // 'jumlah_balita' => 'required',
            'jumlah_anggota_keluarga' => 'required',
            // 'jumlah_WUS' => 'required',
            // 'jumlah_3_buta' => 'required',
            // 'jumlah_ibu_hamil' => 'required',
            // 'jumlah_ibu_menyusui' => 'required',
            // 'jumlah_lansia' => 'required',
            // 'jumlah_kebutuhan' => 'required',
            'makanan_pokok' => 'required',
            'punya_jamban' => 'required',
            // 'jumlah_PUS' => 'required',
            'sumber_air' => 'required',
            'punya_tempat_sampah' => 'required',
            'punya_saluran_air' => 'required',
            'tempel_stiker' => 'required',
            'kriteria_rumah' => 'required',
            'aktivitas_UP2K' => 'required',
            'aktivitas_kegiatan_usaha' => 'required',
            'periode' => 'required',

        ], [
            'id_desa.required' => 'Pilih Alamat Desa Kegiatan Warga',
            'id_kecamatan' => 'Pilih Alamat Kecamatan Kegiatan Warga',
            'id_dasawisma.required' => 'Lengkapi Nama Dasawisma Yang Diikuti',
            'nik_kepala_keluarga.required' => 'Lengkapi NIK Kepala Rumah Tangga',
            'jumlah_anggota_keluarga.required' => 'Lengkapi Jumlah Anggota Keluarga',
            'rt.required' => 'Lengkapi RT',
            'rw.required' => 'Lengkapi RW',
            'dusun.required' => 'Lengkapi Nama Dusun',
            // 'perempuan.required' => 'Lengkapi Jumlah Perempuan',
            'jumlah_KK.required' => 'Lengkapi Jumlah KK',
            // 'jumlah_PUS.required' => 'Lengkapi Jumlah PUS (Pasangan Usia Subur) dalam Keluarga',
            // 'jumlah_WUS.required' => 'Lengkapi Jumlah WUS (Wanita Usia Subur) dalam Keluarga',
            // 'jumlah_3_buta.required' => 'Lengkapi Jumlah 3 Buta (Buta Tulis, Buta Baca, Buta Hitung) dalam Keluarga',
            // 'jumlah_ibu_hamil.required' => 'Lengkapi Jumlah Ibu Hamil dalam Keluarga',
            // 'jumlah_ibu_menyusui.required' => 'Lengkapi Jumlah Ibu Menyusui dalam Keluarga',
            // 'jumlah_lansia.required' => 'Lengkapi Jumlah Lansia dalam Keluarga',
            // 'jumlah_kebutuhan.required' => 'Lengkapi Jumlah Berkebutuhan Khusus dalam Keluarga',
            'makanan_pokok.required' => 'Lengkapi Makanan Pokok',
            // 'jumlah_balita.required' => 'Lengkapi Jumlah Balita dalam Keluarga',
            'punya_jamban.required' => 'Pilih Mempunyai Jamban dan Jumlah Yang Mempunyai Jamban',
            'sumber_air.required' => 'Pilih Sumber Air dalam Keluarga',
            'punya_tempat_sampah.required' => 'Pilih Yang Mempunyai Tempat Sampah',
            'punya_saluran_air.required' => 'Pilih Yang Mempunyai Saluran Air',
            'tempel_stiker.required' => 'Pilih Rumah Yang Mempunyai Stiker P4K',
            'kriteria_rumah.required' => 'Pilih Kriteria Rumah',
            'aktivitas_UP2K.required' => 'Pilih Aktivitas UP2K',
            'aktivitas_kegiatan_usaha.required' => 'Pilih Aktivitas Kegiatan Usaha',
            'periode.required' => 'Pilih Periode',

        ]);
        // $update=DB::table('data_keluarga')->where('nik_kepala_keluarga', $request->nik_kepala_keluarga);
        // if ($update != null) {
        //     Alert::error('Gagal', 'Data Tidak Berhasil Di Ubah, Hanya Bisa Menggunakan Satu kali Periode. Periode Sudah Ada ');

        //     return redirect('/data_keluarga');
        // }
        // else{
            $data_keluarga->update($request->all());
            Alert::success('Berhasil', 'Data berhasil di ubah');
            // dd($jml_kader);
            return redirect('/data_keluarga');
        // }


    }

    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($data_keluarga, DataKeluarga $kel)
    {
        $kel = $kel::find($data_keluarga);

        DB::beginTransaction();

        try {
            //temukan id data keluarga
            $kel->warga()->delete();
            $kel->pemanfaatan()->delete();
            $kel->industri()->delete();
            $kel->delete();

            DB::commit();
            Alert::success('Berhasil', 'Data berhasil di Hapus');

            return redirect('/data_keluarga');
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back();
        }
    }
}