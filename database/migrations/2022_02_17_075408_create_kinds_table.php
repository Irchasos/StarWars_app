<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'kinds',
            function (Blueprint $table) {
                $table->id();
                $table->text('name');
                $table->text('classification');
                $table->text('designation');
                $table->text('average_height');
                $table->text('skin_colors');
                $table->text('hair_colors');
                $table->text('eye_colors');
                $table->text('average_lifespan');
                $table->text('language');
                $table->text('url');
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
        Schema::dropIfExists('kinds');
    }
}
