<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemanfaatanPekarangan extends Model
{
    use HasFactory;
    protected $table = "data_pemanfaatan_pekarangan";
    protected $primaryKey = 'id';

    protected $guarded = ['id'];


    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }
    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }

    public function keluarga(){
        return $this->belongsTo(DataKeluarga::class, 'id_keluarga');
    }

    public function kategori_lahan(){
        return $this->belongsTo(KategoriPemanfaatanLahan::class, 'id_kategori');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}