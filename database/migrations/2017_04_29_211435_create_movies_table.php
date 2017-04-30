<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->integer('format_id');
            /*$table->foreign('format_id')->references('id')->on('formats');*/
            $table->integer('length');
            $table->integer('year');
            $table->integer('rating_id');
            /*$table->foreign('rating_id')->references('id')->on('ratings');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
