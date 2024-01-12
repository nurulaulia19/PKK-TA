<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelompokDasawisma extends Model
{
    use HasFactory;
    protected $table = "data_dasawisma";
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }
    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function keluarga(){
        return $this->hasMany(DataKeluarga::class, 'id');
    }

    public function warga(){
        return $this->hasMany(DataWarga::class, 'id');
    }
}
