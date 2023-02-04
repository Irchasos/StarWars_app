<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessageToBossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'message_to_boss', function (Blueprint $table) {
            $table->unsignedBigInteger('employer_id')->unsigned();
            $table->unsignedBigInteger('boss_id')->unsigned();
            $table->text('message');
            $table->foreign('employer_id')->references('id')->on('users');
            $table->foreign('boss_id')->references('id')->on('users');
            $table->primary(array('employer_id', 'boss_id'));




        }
        );}
    public function down()
    {
        Schema::table('MessageToBossTable', function (Blueprint $table) {
            //
        });
    }
}
