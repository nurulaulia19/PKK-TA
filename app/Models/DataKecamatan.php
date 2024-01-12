<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKecamatan extends Model
{
    use HasFactory;
    protected $table = "data_kecamatan";
    protected $primaryKey = 'id';

    protected $guarded = ['id'];


    public function desa(){
        return $this->hasMany(Data_Desa::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function warga(){
        return $this->hasMany(DataWarga::class);
    }

    public function pelatihan(){
        return $this->hasMany(DataPelatihanKader::class);
    }

    // data dasawisma
    public function dasawisma(){
        return $this->hasMany(DataKelompokDasawisma::class);
    }

    // bagian admin desa
    public function anggota_kader(){
        return $this->hasMany(DataAnggotaKader::class);
    }
}
