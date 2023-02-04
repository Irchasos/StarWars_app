<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmKindTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'film_kind', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBiginteger('film_id');
            $table->UnsignedBiginteger('kind_id');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('kind_id')->references('id')->on('kinds');
        }
        );
    }

    public function down()
    {
        Schema::dropIfExists('film_kind');
    }
}
