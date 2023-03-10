<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_matches', function (Blueprint $table) {
            $table->id();
            $table->time('startTime');
            $table->time('endTime');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->unsignedBigInteger('team1_id')->nullable();
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->unsignedBigInteger('team2_id')->nullable();
            $table->foreign('team2_id')->references('id')->on('teams');
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
        Schema::dropIfExists('game_matches');
    }
};
