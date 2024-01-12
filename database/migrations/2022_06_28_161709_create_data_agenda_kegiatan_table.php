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
        Schema::create('data_agenda_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_agenda');
            $table->string('tema');
            $table->string('tempat');
            $table->date('tgl_pelaksana');
            $table->integer('status');
            $table->string('waktu');
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
        Schema::dropIfExists('data_agenda_kegiatan');
    }
};