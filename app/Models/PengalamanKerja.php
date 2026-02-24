<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan di database
    protected $table = 'pengalaman_kerja';
    
    // Menentukan kolom mana saja yang boleh diisi (mass assignment)
    protected $fillable = ['nama', 'jabatan', 'tahun_masuk', 'tahun_keluar'];

    // Jika di tabelmu tidak ada kolom created_at dan updated_at, 
    // pastikan baris di bawah ini TIDAK dikomentari (aktif):
    public $timestamps = false; 
}