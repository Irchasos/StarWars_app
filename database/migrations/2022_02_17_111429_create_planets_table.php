<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'planets',
            function (Blueprint $table) {
                $table->id();
                $table->text('name');
                $table->text('rotation_period');
                $table->text('orbital_period');
                $table->text('diameter');
                $table->text('climate');
                $table->text('gravity');
                $table->text('terrain');
                $table->text('surface_water');
                $table->text('population');
                $table->text('url')->nullable();
                //             $table->json('residents')->default(['database','via']);
                //              $table->json('films')->default(['database','via']);
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
        Schema::dropIfExists('planets');
    }
}
