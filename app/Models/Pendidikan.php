<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikan'; // <--- KUNCI AGAR TIDAK ERROR LAGI
    protected $fillable = ['nama', 'tingkatan', 'tahun_masuk', 'tahun_keluar'];
}