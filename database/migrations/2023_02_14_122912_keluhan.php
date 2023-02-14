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
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('icd10_id');
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('obat_id');
            $table->unsignedBigInteger('poli_id');
            $table->string('tindakan');
            $table->foreign('poli_id')
              ->references('id')->on('polis')->onDelete('cascade');
            $table->foreign('pasien_id')
                ->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('icd10_id')
                ->references('id')->on('icd10s')->onDelete('cascade');
            $table->foreign('dokter_id')
                ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('obat_id')
                ->references('id')->on('obats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhans');
    }
};
