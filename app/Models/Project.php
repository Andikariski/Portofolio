<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "project";
    protected $fillable = ['judul', 'image', 'deskripsi', 'link_web', 'link_github'];
    use HasFactory;
}
