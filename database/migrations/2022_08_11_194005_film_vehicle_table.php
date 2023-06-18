<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'film_vehicle',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->UnsignedBiginteger('film_id');
                $table->UnsignedBiginteger('vehicle_id');
                $table->foreign('film_id')->references('id')->on('films');
                $table->foreign('vehicle_id')->references('id')->on('vehicles');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('film_vehicle');
    }
}
