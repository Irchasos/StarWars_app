<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmPlanetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'film_planet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBiginteger('film_id');
            $table->UnsignedBiginteger('planet_id');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('planet_id')->references('id')->on('planets');
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('film_planet');
    }
}
