<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelterjemahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelterjemahs', function (Blueprint $table) {
            $table->id();
            $table->date('TanggalTerjemah',50);
            $table->string('NamaLengkap',50);
            $table->date('TanggalDaftar',50);
            $table->string('Penerjemah',50);
            $table->longtext('TextTerjemahan',5000);
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
        Schema::dropIfExists('tabelterjemahs');
    }
}
