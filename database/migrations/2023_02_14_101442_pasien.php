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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nKepalaKeluarga');
            $table->string('nIbuKandung');
            $table->string('kode_desa');
            $table->string('nik');
            $table->string('agama');
            $table->date('tglLahir');
            $table->char('jk'); //Jenis Kelamin
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('noTelp');
            $table->string('jenis_asuransi');
            $table->string('no_kartu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
};
