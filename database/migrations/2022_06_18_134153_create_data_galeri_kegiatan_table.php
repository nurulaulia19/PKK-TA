<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_galeri_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gambar');
            $table->string('nama_kegiatan');
            $table->string('gambar');
            $table->date('tgl_publish');
            $table->string('pengirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_galeri_kegiatan');
    }
};