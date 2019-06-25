<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('name');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('biayakirim');
            $table->string('bank');
            $table->string('pesan');
            $table->string('alamat');
            $table->string('subtotal');
            $table->string('asuransi');
            $table->string('bantuan');
            $table->string('total');
            $table->string('status');
            $table->string('pembeli');
            $table->string('toko');
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
        Schema::dropIfExists('transaksis');
    }
}
