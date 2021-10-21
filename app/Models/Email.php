<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "email";
    protected $fillable = ['nama', 'email', 'subjek', 'pesan'];
    use HasFactory;
}
