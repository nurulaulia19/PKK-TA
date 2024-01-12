<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPemanfaatanLahan extends Model
{
    use HasFactory;
    protected $table = "kategori_pemanfaatan_lahan";
    protected $primaryKey = 'id';

    protected $fillable = [
       'nama_kategori'
    ];



    public function pemanfaatan(){
        return $this->hasMany(PemanfaatanKarangan::class);
    }

}