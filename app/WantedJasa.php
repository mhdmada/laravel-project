<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantedJasa extends Model
{
    protected $fillable = [
        'nama_jasa',
        'kategori',
        'kategori1',
        'kategori2',
        'deskripsi',
        'nama_supplier',
        'tanggal_expired',
    ];
}
