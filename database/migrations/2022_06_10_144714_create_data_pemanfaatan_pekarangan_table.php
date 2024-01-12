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
        Schema::create('data_pemanfaatan_pekarangan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desa')->unsigned();
            $table->foreign('id_desa')->references('id')->on('data_desa')->onUpdate('cascade');
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan')->onUpdate('cascade');
            $table->bigInteger('id_keluarga')->unsigned();
            $table->foreign('id_keluarga')->references('id')->on('data_keluarga');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            $table->string('nama_kategori');
            $table->string('komoditi');
            $table->integer('jumlah');
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
        Schema::dropIfExists('data_pemanfaatan_pekarangan');
    }
};