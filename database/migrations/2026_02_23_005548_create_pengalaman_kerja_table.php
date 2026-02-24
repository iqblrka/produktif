<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengalaman_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama');           // Nama perusahaan
            $table->string('jabatan');        // Jabatan
            $table->year('tahun_masuk');      // Tahun masuk
            $table->year('tahun_keluar');     // Tahun keluar
            $table->timestamps();             // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengalaman_kerja');
    }
};