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
        Schema::create('data_desa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan');

            $table->string('kode_desa');
            $table->string('nama_desa');
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
        Schema::dropIfExists('data_desa');
    }
};
