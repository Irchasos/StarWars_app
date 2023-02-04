<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('episode_id');
            $table->longText('opening_crawl');
            $table->string('director');
            $table->string('producer');
            $table->string('release_date');
            $table->string('url');


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
        Schema::dropIfExists('films');

    }
}
