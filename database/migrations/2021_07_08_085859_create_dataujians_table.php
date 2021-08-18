<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataujians', function (Blueprint $table) {
            $table->increments('No');
            $table->string('Nama');
            $table->date('Tanggaldaftar');
            $table->string('Ujian',32);
            $table->date('Tanggalujian');
            $table->integer('Sesi'11);
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
        Schema::dropIfExists('dataujians');
    }
}
