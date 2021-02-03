<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainHasFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemain_has_film', function (Blueprint $table) {
            $table->unsignedBigInteger('pemain_id')->nullable();
            $table->foreign('pemain_id')->references('id')->on('pemain');

            $table->unsignedBigInteger('film_id')->nullable();
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemain_has_film');
    }
}
