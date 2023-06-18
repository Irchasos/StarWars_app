<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CharacterStarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'character_starship',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->UnsignedBiginteger('character_id');
                $table->UnsignedBiginteger('starship_id');
                $table->foreign('character_id')->references('id')->on('characters');
                $table->foreign('starship_id')->references('id')->on('starships');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('character_starship');
    }
}
