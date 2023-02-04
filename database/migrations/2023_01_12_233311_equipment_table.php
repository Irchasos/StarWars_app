<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'equipment', function (Blueprint $table) {
            $table->text('Name');
            $table->text('Group');
            $table->string('Price');
            $table->string('Rarity');
            $table->text('Type');
            $table->bigIncrements('Id');
            $table->integer('Storage');




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
        //
    }
}
