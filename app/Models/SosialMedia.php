<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosialMedia extends Model
{
    protected $table = "sosial_media";
    protected $fillable = ['sosial_media', 'username', 'link'];
    use HasFactory;
}
