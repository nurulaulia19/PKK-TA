<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelatihanKader extends Model
{
    use HasFactory;
    protected $table = "data_pelatihan_kader";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    // public function kecamatan(){
    //     return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    // }
    // public function desa(){
    //     return $this->belongsTo(Data_Desa::class, 'id_desa');
    // }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kader_gabung(){
        return $this->belongsTo(DataKaderGabung::class, 'id_kader');
    }

}
