<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWantedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanted_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk');
            $table->string('kategori');
            $table->string('kategori1');
            $table->string('kategori2');
            $table->string('kondisi');
            $table->string('deskripsi');
            $table->string('status_barang');
            $table->string('jenis_status_barang');
            $table->string('brand');
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
        Schema::dropIfExists('wanted_products');
    }
}
