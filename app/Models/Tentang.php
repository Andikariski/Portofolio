<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $table = "tentang";
    protected $fillable = ['nama', 'lokasi', 'email', 'telephone', 'ttl', 'website'];
}
