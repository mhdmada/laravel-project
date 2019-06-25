<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('nama_paket');
            $table->string('kategori');
            $table->string('kategori1');
            $table->string('kategori2');
            $table->string('spesialisasi')->nullable();
            $table->string('bidang_spesialisasi')->nullable();
            $table->string('izin_praktik')->nullable();
            $table->string('konsultasi')->nullable();
            $table->string('khusus_layanan')->nullable();
            $table->string('obat')->nullable();
            $table->string('hari_kerja')->nullable();
            $table->string('hari_libur')->nullable();
            $table->time('jam_buka')->nullable();
            $table->string('zona_waktu_buka')->nullable();
            $table->time('jam_tutup')->nullable();
            $table->string('zona_waktu_tutup')->nullable();
            $table->string('gelar_pendidikan')->nullable();
            $table->string('nama_universitas')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('lama_pengalaman')->nullable();
            $table->string('waktu_lama_pengalaman')->nullable();
            $table->string('usia')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('deskripsi_pelayanan')->nullable();
            $table->string('jumlah_paket')->nullable();
            $table->string('value')->nullable();
            $table->integer('harga');
            $table->string('waktu');
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
        Schema::dropIfExists('jasas');
    }
}
