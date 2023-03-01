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
        Schema::create('keluhan_obat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keluhan_id');
            $table->string('nama_obat')->nullable();
            $table->timestamps();
            $table->foreign('keluhan_id')
              ->references('id')->on('keluhans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat_keluhans');
    }
};
