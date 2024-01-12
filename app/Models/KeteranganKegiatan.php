<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganKegiatan extends Model
{
    use HasFactory;
    protected $table = "keterangan_kegiatan";
    protected $primaryKey = 'id';

    protected $fillable = [
       'id_kegiatan', 'nama_keterangan'
    ];

    public function kategori_kegiatan(){
        return $this->belongsTo(KategoriKegiatan::class, 'id_kegiatan');
    }

    public function kegiatan(){
        return $this->hasMany(DataKegiatanWarga::class);
    }



}
