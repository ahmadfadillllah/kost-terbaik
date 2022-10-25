<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriamahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteriamahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kost');
            $table->integer('kode');
            $table->string('nama');
            $table->integer('bobot');
            $table->timestamps();

            $table->foreign('id_kost')->references('id')->on('kost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteriamahasiswa');
    }
}
