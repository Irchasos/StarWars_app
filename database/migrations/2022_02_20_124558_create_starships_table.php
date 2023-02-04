<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'starships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('MGLT')->nullable();
            $table->text('cargo_capacity')->nullable();
            $table->text('consumables')->nullable();
            $table->text('cost_in_credits')->nullable();
            $table->text('crew')->nullable();
            $table->text('hyperdrive_rating')->nullable();
            $table->text('length')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('max_atmosphering_speed')->nullable();
            $table->text('model');
            $table->text('name');
            $table->text('starship_class')->nullable();
            $table->text('url')->nullable();
            $table->text('passengers')->nullable();
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
        Schema::dropIfExists('starships');
    }
}
