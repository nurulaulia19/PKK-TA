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
        Schema::create('data_dasawisma', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desa')->unsigned();
            // $table->foreignID('id_desa');
            $table->foreign('id_desa')->references('id')->on('data_desa');
            $table->bigInteger('id_kecamatan')->unsigned();
            // $table->foreignID('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan');

            $table->string('nama_dasawisma');
            $table->string('alamat_dasawisma');
            $table->string('status');
            $table->string('dusun');
            $table->integer('rt');
            $table->integer('rw');
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
        Schema::dropIfExists('data_dasawisma');
    }
};
