<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmStarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'film_starship',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->UnsignedBiginteger('film_id');
                $table->UnsignedBiginteger('starship_id');
                $table->foreign('film_id')->references('id')->on('films');
                $table->foreign('starship_id')->references('id')->on('starships');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('film_starship');
    }
}
