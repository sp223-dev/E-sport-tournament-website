<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->null();
            $table->string('nama');
            $table->string('kebangsaan');
            $table->string('posisi');
            $table->string('umur');
            $table->string('seasons');
            $table->string('games');
            $table->integer('points');
            $table->text('about');
            $table->integer('team_id')->foreign('team_id')->references('id')->on('tbl_myteams');
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
        Schema::dropIfExists('tbl_players');
    }
}
