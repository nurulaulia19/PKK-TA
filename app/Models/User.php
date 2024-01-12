<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id_desa
 * @property-read Data_Desa $desa
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kecamatan(){
        return $this->belongsTo(DataKecamatan::class, 'id_kecamatan', 'id');
    }
    public function desa(){
        return $this->belongsTo(Data_Desa::class, 'id_desa', 'id');
    }

    public function dasawisma(){
        return $this->belongsTo(DataKelompokDasawisma::class, 'id_dasawisma', 'id');
    }

    public function kader_gabung(){
        return $this->hasMany(DataKaderGabung::class);
    }

    public function kader(){
        return $this->hasMany(Kader::class);
    }

    public function warga(){
        return $this->hasMany(DataWarga::class);
    }

    public function keluarga(){
        return $this->hasMany(DataKeluarga::class);
    }

    public function industri(){
        return $this->hasMany(DataIndustriRumah::class);
    }

    public function pemanfaatan(){
        return $this->hasMany(DataPemanfaatanPekarangan::class);
    }

}
