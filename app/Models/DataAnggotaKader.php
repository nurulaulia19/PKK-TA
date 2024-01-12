<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggotaKader extends Model
{
    use HasFactory;
    protected $table = "data_daftar_anggota_kader";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }

    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }

}
