<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatanWarga extends Model
{
    use HasFactory;
    protected $table = "data_kegiatan_warga";
    protected $primaryKey = 'id';

    protected $guarded = ['id'];


    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }
    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }
    public function warga(){
        return $this->belongsTo(DataWarga::class,'id_warga');
    }

    // public function keluarga(){
    //     return $this->belongsTo(DataKeluarga::class,'id_keluarga');
    // }

    public function kategori_kegiatan(){
        return $this->belongsTo(KategoriKegiatan::class, 'id_kategori');
    }

    public function keterangan_kegiatan(){
        return $this->belongsTo(KeteranganKegiatan::class, 'id_keterangan');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
