<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuangsampah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buangsampah', function (Blueprint $table) {
            $table->bigIncrements('id_buang');
            $table->string('name');
            $table->string('email');
            $table->string('kapasitas organik');
            $table->string('kapasitas anorganik');
            $table->date('tanggal');
            $table->string('latitude_pengambilan');
            $table->string('longitude_pengambilan');
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
        Schema::dropIfExists('buangsampah');
    }
}
