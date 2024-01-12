<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKaderGabung extends Model
{
    use HasFactory;
    protected $table = "data_kader_gabung_pelatihan";
    protected $primaryKey = 'id';

    protected $guarded = ['id'];


    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }
    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pelatihan(){
        return $this->hasMany(DataPelatihanKader::class);
    }

}
