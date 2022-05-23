<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akuns extends Model
{
    protected $fillable = [
        'no_akun',
        'nama_akun'
    ];
    use HasFactory;
}
