<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;


class VerifikasiController extends Controller
{


    public function index()
    {

		    $list_transaksi	= Transaksi::distinct()->select('kode','bank','biayakirim','asuransi','bantuan','subtotal','total','status','photo_transfer','verifikasi_transfer')->get();

		    return view('admin.verifikasi',compact('list_transaksi')); 

	}


    public function update(Request $request, $kode)
    { 
        
	    $transaksi = Transaksi::where('kode',$kode);

	    $transaksi->verifikasi_transfer = $request->input('verifikasi_transfer');
	  
	    $transaksi->update(['verifikasi_transfer' => $request->verifikasi_transfer]);


        return redirect()->back();
    }



    public function update2(Request $request, $kode)
    { 
        
	   	$transaksi = Transaksi::where('kode',$kode);

	    $this->validate($request, [
	        
	    ]);

	    $transaksi->lokasi_delivery = $request->input('lokasi_delivery');

        $transaksi->id_kurir = $request->input('id_kurir');

        $transaksi->nama_kurir = $request->input('nama_kurir');
	  
	    $transaksi->update(['lokasi_delivery' => $request->lokasi_delivery, 'id_kurir' => $request->id_kurir, 'nama_kurir' => $request->nama_kurir]);

        return redirect()->back();
    }



}
