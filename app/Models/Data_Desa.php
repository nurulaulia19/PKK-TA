<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class Data_Desa extends Model
{
    use HasFactory;
    protected $table = "data_desa";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    // admin desa
    public function pelatihan(){
        return $this->hasMany(DataPelatihanKader::class);
    }

    // bagian kader
    // data_warga
    public function warga(){
        return $this->hasMany(DataWarga::class);
    }

    // data_warga
    public function keluarga(){
        return $this->hasMany(DataKeluarga::class);
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