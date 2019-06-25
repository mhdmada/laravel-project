<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWantedJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanted_jasas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jasa');
            $table->string('kategori');
            $table->string('kategori1');
            $table->string('kategori2');
            $table->string('deskripsi');
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
        Schema::dropIfExists('wanted_jasas');
    }
}
