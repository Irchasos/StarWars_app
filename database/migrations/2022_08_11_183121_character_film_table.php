<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CharacterFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'character_film',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->UnsignedBiginteger('character_id');
                $table->UnsignedBiginteger('film_id');
                $table->foreign('character_id')->references('id')->on('characters') ->onDelete('cascade');;
                $table->foreign('film_id')->references('id')->on('films');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('character_film');
    }
}
