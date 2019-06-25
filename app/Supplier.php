<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	public $primaryKey = 'nama_supplier'; //setting ur own primary key for show in supplier page

	public $incrementing = false; //jika kode ini dihapus makan nama supplier sebagai primary key akan menampilkan data nol


    protected $fillable = [
        'photo','nama_supplier','detail_toko','lokasi','no_tel'
    ];
}
