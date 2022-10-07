<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbl_produk', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('id_kategori')->unsigned();
        //     $table->integer('user_id')->unsigned();
        //     $table->string('kode_produk');
        //     $table->string('nama_produk');
        //     $table->string('slug_produk');
        //     $table->text('deskripsi_produk');
        //     $table->string('foto')->nullable();//banner produknya
        //     $table->double('qty', 12, 2)->default(0);
        //     $table->string('satuan');
        //     $table->double('harga', 12, 2)->default(0);
        //     $table->string('status');
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('id_kategori')->references('id')->on('tbl_kategori');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produk');
    }
}
