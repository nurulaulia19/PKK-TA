<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokjaController extends Controller
{
    // halaman pokja1
    public function pokja1(){
        return view('pokja.program_pokja1');
    }

    // halaman papan pokja1
    public function papan1(){
        return view('pokja.papan_pokja1');
    }

    // halaman pokja2
    public function pokja2(){
        return view('pokja.program_pokja2');
    }

    // halaman papan pokja2
    public function papan2(){
        return view('pokja.papan_pokja2');
    }

    // halaman pokja3
    public function pokja3(){
        return view('pokja.program_pokja3');
    }

    // halaman papan pokja4
    public function papan3(){
        return view('pokja.papan_pokja3');
    }

    // halaman pokja4
    public function pokja4(){
        return view('pokja.program_pokja4');
    }

    // halaman papan pokja4
    public function papan4(){
        return view('pokja.papan_pokja4');
    }

    // halaman sekretariat
    public function sekretariat(){
        return view('pokja.program_sekre');
    }

    // halaman papan pokja1
    public function data_umum(){
        return view('pokja.papan_sekre');
    }


}