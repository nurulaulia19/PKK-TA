<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggotaTP extends Model
{
    use HasFactory;
    protected $table = "data_daftar_anggota_tp_pkk";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }

    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }
}
