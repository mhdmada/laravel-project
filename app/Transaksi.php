<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

	use \Venturecraft\Revisionable\RevisionableTrait; // making history of data

    protected $primaryKey = 'kode'; // or null

    public $incrementing = false;


	protected $keepRevisionOf = array(
    	'lokasi'
	);


     protected $fillable = [
        'photo','kode','name','harga','jumlah','biayakirim','bank','pesan','alamat','subtotal','asuransi','bantuan','total','status','dibatalkan','photo_transfer','verifikasi_transfer','no_resi','photo_resi','nama_kurir',
        'id_kurir','lokasi','lokasi_delivery','pembeli','toko'
    ];

    public static function boot()
    {
        parent::boot();
    }
   


}
