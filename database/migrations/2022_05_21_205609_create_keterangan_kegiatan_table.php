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
        Schema::create('keterangan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kegiatan')->unsigned();
            $table->foreign('id_kegiatan')->references('id')->on('kategori_kegiatan');
            $table->string('nama_keterangan');
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
        Schema::dropIfExists('keterangan_kegiatan');
    }
};