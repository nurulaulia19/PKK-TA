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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->nullable();
            $table->string('foto')->nullable();
            $table->bigInteger('id_kecamatan')->unsigned()->nullable();
            $table->bigInteger('id_desa')->unsigned()->nullable();
            $table->bigInteger('id_dasawisma')->unsigned()->nullable();
            // $table->foreign('id_desa')->references('id')->on('data_desa');
            // $table->foreignId('id_desa')->constrained('data_desa');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};