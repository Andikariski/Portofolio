<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    protected $table = "photographi";
    protected $fillable = ['judul', 'deskripsi', 'image'];
    use HasFactory;
}
