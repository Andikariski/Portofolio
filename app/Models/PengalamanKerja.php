<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = "pengalaman_kerja";
    protected $fillable = ['divisi', 'tahun_kerja', 'alamat_kerja', 'deskripsi_pekerjaan', 'tempat_kerja'];
    use HasFactory;
}
