<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void

    {
        Schema::create('message_from_bosses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('boss_message');
            $table->unsignedBigInteger('boss_id');

            $table->foreign('boss_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('message_from_bosses');
    }
};