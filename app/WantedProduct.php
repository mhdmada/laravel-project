<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantedProduct extends Model
{
     protected $fillable = [
        'nama_produk',
        'kategori',
        'kategori1',
        'kategori2',
        'kondisi',
        'deskripsi',
        'status_barang',
        'jenis_status_barang',
        'nama_supplier',
        'brand',
        'tanggal_expired',
        'limit_hari',
    ];

}
