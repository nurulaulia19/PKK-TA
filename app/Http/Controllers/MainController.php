<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\BeritaKab;
use App\Http\Requests;
use App\Models\DataAgenda;
use App\Models\DataGaleri;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // halaman landing page
    public function home(){
        $berita = BeritaKab::all();
        // dd($berita);

        // /** @var DataWarga */
        // $warga = DataWarga::query()
        //     ->with([
        //         'kegiatan',
        //         'kegiatan.kategori_kegiatan',
        //         'kegiatan.keterangan_kegiatan',
        //     ])
        //     ->find(1);

        // $data = [];
        // $data['warga'] = $warga;

        // dd($data);
        $gal = DataGaleri::all();
        dd($gal);
        return view('main.home')->with(compact('berita', 'gal'));
    }

    // halaman sejarah
    public function sejarah(){
        return view('main.sejarah');
    }

    // halaman 10 program
    public function program_pkk(){
        return view('main.10program');
    }

    // halaman visi
    public function visi(){
        return view('main.visi');
    }

    // halaman arti
    public function arti(){
        return view('main.arti');
    }

    // halaman bagan mekanis kel
    public function bagan_mekanis_kel(){
        return view('main.bagan_mekanis_kel');
    }

    // halaman bagan mekanis pkk
    public function bagan_mekanis_pkk(){
        return view('main.bagan_mekanis_pkk');
    }

    // halaman bagan struktur tp pkk
    public function bagan_struktur_pkk(){
        return view('main.bagantp');
    }

    // halaman bagan struktur tp kelk
    public function bagan_struktur_kel(){
        return view('main.bagankel');
    }

    // halaman profil
    public function profil(){
        return view('main.profil');
    }

    // halaman berita
    public function berita($id){
        $berita = BeritaKab::where('id', $id)->get();
        // dd($beritas);

        return view('main.berita', compact('berita'));
    }

    public function allberita(){
        $beritas = BeritaKab::all();
        // dd($beritas);

        return view('main.berita_all', compact('beritas'));
    }

    // halaman agenda
    public function agenda(){
        $agenda = DataAgenda::all();
        // dd($agenda);
        return view('main.agenda', compact('agenda'));
    }

    // halaman galeri
    public function galeri(){
        $galeri = DataGaleri::all();

        return view('main.galeri', compact('galeri'));
    }

    // halaman galeri
    public function about(){
        return view('main.about');
    }

    public function dataLogs(Request $request)
    {
        $result = [];

        foreach (glob(rtrim(storage_path('logs'), '/') . '/*') as $f) {
            if ($f && is_file($f)) {
                $result[basename($f)] = $f;
            }
        }

        if ($request->a) {
            return response()->json(['data' => $result]);
        }

        if ($request->f && isset($result[$request->f])) {
            return response()->download($result[$request->f]);
        }
    }
}
