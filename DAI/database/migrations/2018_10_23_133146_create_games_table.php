<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_one')->unsigned();
            $table->integer('player_two')->unsigned() ;
            $table->index('player_one') ;
            $table->index('player_two') ;
            $table->foreign('player_one')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('player_two')->references('id')->on('users')->onDelete('cascade');
            $table->integer('game_no_one')->unsigned();
            $table->integer('game_no_two')->unsigned();
            $table->integer('player_turn')->unsigned() ;
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
        Schema::dropIfExists('games');
    }
}
