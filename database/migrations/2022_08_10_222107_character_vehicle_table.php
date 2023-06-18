<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CharacterVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create(
            'character_vehicle',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->UnsignedBiginteger('character_id');
                $table->UnsignedBiginteger('vehicle_id');
                $table->foreign('character_id')->references('id')->on('characters');
                $table->foreign('vehicle_id')->references('id')->on('vehicles');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('character_vehicle');
    }
}
