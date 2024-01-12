<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use App\Models\Data_Desa;
use App\Models\DataKecamatan;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman tampil data tabel user
        $users = User::whereIn('user_type', ['superadmin', 'admin_desa', 'admin_kelurahan', 'admin_kecamatan', 'admin_kabupaten'])
        ->get();
        $desa = Data_Desa::all();
        $kec = DataKecamatan::all();

        // $users = User::with('desa','kecamatan')->get();
        // $desa = Data_Desa::with('kecamatan')->get();
// dd($desa);

        return view('super_admin.data_pengguna_super', compact('users', 'desa', 'kec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}