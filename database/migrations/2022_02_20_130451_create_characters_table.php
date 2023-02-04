<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();

            $table->unsignedBigInteger('planet_id');
            $table->unsignedBigInteger('kind_id');
            $table->text('birth_year');
            $table->text('eye_color');
            $table->string('gender');
            $table->string('hair_color');
            $table->string('height');
            $table->string('mass');
            $table->string('url')->unique()->nullable();
            $table->text('skin_color');
            $table->text('photo')->nullable();
            // $table->timestamps();
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
