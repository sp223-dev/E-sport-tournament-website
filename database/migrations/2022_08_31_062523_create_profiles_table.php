<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('image');
            $table->string('kebangsaan');
            $table->date('tanggal_lahir');
            $table->string('negara');
            $table->string('bahasa');
            $table->string('status');
            $table->integer('telp');
            $table->string('game');
            $table->string('hobbi');
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
        Schema::dropIfExists('tbl_profiles');
    }
}
