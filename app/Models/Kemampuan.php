<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemampuan extends Model
{
    protected $table = "kemampuan";
    protected $fillable = ['bahasa_pemrograman', 'icon', 'deskripsi'];
    use HasFactory;
}
