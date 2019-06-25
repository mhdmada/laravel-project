<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('nama_produk');
            $table->string('kategori');
            $table->string('subkategori1');
            $table->string('subkategori2');
            $table->integer('harga');
            $table->string('kondisi');
            $table->string('size');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('warna');
            $table->string('deskripsi_produk');
            $table->string('alamat');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
