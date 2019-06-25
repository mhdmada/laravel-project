<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{

    protected $table = 'products';
	 
    protected $fillable = [
        'photo',
        'photo2',
        'photo3',
        'photo4',
        'nama_produk',
        'kategori',
        'kategori1',
        'kategori2',
        'harga',
        'kondisi',
        'lama_pemakaian',
        'waktu_lama_pemakaian',
        'tahun_pembelian',
        'asal_produk',
        'pembuatan_barang',
        'diameter',
        'size',
        'size_chart',
        'lebar_dada',
        'panjang_lengan',
        'motif',
        'bahan',
        'bahan_tali',
        'warna',
        'memori',
        'tipe_memori',
        'garansi',
        'masa_garansi',
        'jenis',
        'tipe_kartu_sim',
        'tipe_layar',
        'ukuran_layar',
        'kapasitas_harddisk',
        'operating_system',
        'processor',
        'ram',
        'merk',
        'bentuk_produk',
        'kegunaan',
        'jenis_rambut',
        'tahan_air',
        'berat',
        'deskripsi',
        'alamat',
        'nama_supplier',
        'no_rek',
        'status_barang',
        'jenis_status_barang',
        'brand',
        'teknikpengolahan',
        'sex',
        'riwayatkesehatan',
        'usia',
    ];


    use SoftDeletes;
    protected $dates =['deleted_at'];
}

