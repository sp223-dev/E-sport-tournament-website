<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_myteams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('image')->nullable();
            $table->string('country');
            $table->string('founded');
            $table->string('ground');
            $table->string('president');
            $table->string('head_coach');
            $table->string('championship');
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('tbl_myteams');
    }
}
