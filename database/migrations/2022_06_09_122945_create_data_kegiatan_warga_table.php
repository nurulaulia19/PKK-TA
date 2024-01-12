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
        Schema::create('data_kegiatan_warga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desa')->unsigned();
            // $table->foreignID('id_desa');
            $table->foreign('id_desa')->references('id')->on('data_desa');
            $table->bigInteger('id_kecamatan')->unsigned();
            // $table->foreignID('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan');

            $table->bigInteger('id_warga')->unsigned();
            // $table->foreignID('id_warga');
            $table->foreign('id_warga')->references('id')->on('data_warga');

            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            // $table->string('nama_kegiatan');
            $table->bigInteger('id_kategori')->unsigned();
            // $table->foreignID('id_kegiatan');
            $table->foreign('id_kategori')->references('id')->on('kategori_kegiatan');

            $table->bigInteger('id_keterangan')->unsigned();
            // $table->foreignID('id_keterangan');
            $table->foreign('id_keterangan')->references('id')->on('keterangan_kegiatan');
            $table->string('aktivitas');


            $table->integer('periode');
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
        Schema::dropIfExists('data_kegiatan_warga');
    }
};
