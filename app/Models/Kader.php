<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
class Kader extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $guard='kader';
    protected $guarded;
    protected $table = "data_kader";
    protected $primaryKey = 'id';

    protected $fillable = [
       'name', 'email', 'password', 'user_type', 'id_desa', 'id_kecamatan'
    ];

    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa');
    }
    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan');
    }

    public function user(){
        return $this->hasMany(User::class);
    }


}