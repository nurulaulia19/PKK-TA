<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriIndustriRumah extends Model
{
    use HasFactory;
    protected $table = "kategori_industri_rumah";
    protected $primaryKey = 'id';

    protected $fillable = [
       'nama_kategori'
    ];

    public function industri(){
        return $this->hasMany(DataIndustriRumah::class);
    }
}