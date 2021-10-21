<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = "pendidikan";
    protected $fillable = ['tingkat_pendidikan', 'tahun_pendidikan', 'alamat_pendidikan', 'deskripsi'];
    use HasFactory;
}
