<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detail_profile', function (Blueprint $table) {
            $table->id(); // atau ->bigIncrements('id') — keduanya benar
            $table->string('address');
            $table->string('nomor_tlp', 15); // batasi panjang nomor telepon
            $table->date('ttl');
            $table->string('foto', 255)->nullable(); // path gambar, maks 255 karakter
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_profile');
    }
};