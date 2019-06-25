<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengirimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kurir');
            $table->string('dari_provinsi');
            $table->string('dari_kabupaten_kota');
            $table->string('dari_kecamatan');
            $table->string('dari_kelurahan');
            $table->string('dari_rw');
            $table->string('dari_rt');
            $table->string('ke_provinsi');
            $table->string('ke_kabupaten_kota');
            $table->string('ke_kecamatan');
            $table->string('ke_kelurahan');
            $table->string('ke_rw');
            $table->string('ke_rt');
            $table->string('harga_gram');
            $table->string('harga_dimensi');
            $table->string('total_harga');
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
        Schema::dropIfExists('pengirimen');
    }
}
