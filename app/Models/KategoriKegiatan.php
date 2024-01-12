<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKegiatan extends Model
{
    use HasFactory;
    protected $table = "kategori_kegiatan";
    protected $primaryKey = 'id';

    protected $fillable = [
       'nama_kegiatan'
    ];

    public function kegiatan(){
        return $this->hasMany(DataKegiatanWarga::class);
    }

    public function keterangan_kegiatan(){
        return $this->hasMany(KeteranganKegiatan::class);
    }

}
