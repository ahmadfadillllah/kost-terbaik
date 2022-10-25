<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kost', function (Blueprint $table) {
            $table->id();
            $table->integer('kodekost');
            $table->string('namakost');
            $table->string('gambar');
            $table->string('fasilitas');
            $table->bigInteger('hargasewa');
            $table->string('sistemkontrak');
            $table->string('lokasi');
            $table->string('kenyamanan');
            $table->string('keamanan');
            $table->string('luas_kamar');
            $table->string('jarak_dari_kampus');
            $table->string('desain_rumah');
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
        Schema::dropIfExists('kost');
    }
}
