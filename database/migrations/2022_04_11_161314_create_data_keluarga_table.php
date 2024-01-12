<?php

use App\Models\DataWarga;
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
        Schema::create('data_keluarga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_desa')->unsigned();
            $table->foreign('id_desa')->references('id')->on('data_desa');
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan');
            // $table->bigInteger('id_warga')->unsigned();
            // $table->foreign('id_warga')->references('id')->on('data_warga');
            // $table->string('dasa_wisma');
            $table->bigInteger('id_dasawisma')->unsigned()->nullable();
            $table->string('nama_kepala_rumah_tangga');
            $table->string('nik_kepala_keluarga');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('dusun');

            $table->integer('jumlah_anggota_keluarga');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->integer('jumlah_laki')->nullable();
            $table->integer('jumlah_perempuan')->nullable();
            $table->integer('jumlah_KK');
            $table->integer('jumlah_balita')->nullable();
            $table->integer('jumlah_balita_laki')->nullable();
            $table->integer('jumlah_balita_perempuan')->nullable();
            $table->integer('jumlah_PUS')->nullable();
            $table->integer('jumlah_WUS')->nullable();
            $table->integer('jumlah_3_buta')->nullable();
            $table->integer('jumlah_3_buta_laki')->nullable();
            $table->integer('jumlah_3_buta_perempuan')->nullable();
            $table->integer('jumlah_ibu_hamil')->nullable();
            $table->integer('jumlah_ibu_menyusui')->nullable();
            $table->integer('jumlah_lansia')->nullable();
            $table->integer('jumlah_kebutuhan_khusus')->nullable();
            $table->string('makanan_pokok');
            $table->string('punya_jamban');
            $table->integer('jumlah_jamban');
            $table->string('sumber_air');
            $table->string('punya_tempat_sampah');
            $table->string('punya_saluran_air');
            $table->string('tempel_stiker');
            $table->string('kriteria_rumah');
            $table->string('aktivitas_UP2K');
            $table->string('aktivitas_kegiatan_usaha');
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
        Schema::dropIfExists('data_keluarga');
    }
};
