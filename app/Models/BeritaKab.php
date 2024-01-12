<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $gambar
 */
class BeritaKab extends Model
{
    use HasFactory;
    protected $table = "data_berita";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


}