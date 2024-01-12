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
        Schema::create('data_daftar_anggota_tp_pkk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desa')->unsigned();
            $table->foreign('id_desa')->references('id')->on('data_desa');
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan');
            $table->string('provinsi');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->string('kota');
            $table->string('status');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('data_daftar_anggota_tp_pkk');
    }
};