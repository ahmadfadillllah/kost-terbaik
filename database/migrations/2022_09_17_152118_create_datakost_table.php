<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakost', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('namakost');
            $table->string('alamat');
            $table->bigInteger('harga');
            $table->string('fasilitas');
            $table->string('tipekost');
            $table->string('sistemkontrak');
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
        Schema::dropIfExists('datakost');
    }
}
