<?php

namespace App\Http\Controllers;

use App\Transaksi;

use Illuminate\Http\Request;

use DB;

class KurirController extends Controller
{


    public function index()
    {
    		
    	$daftar_transaksi = Transaksi::whereNotNull('no_resi')->orderBy('id','DESC')->get();

        $tracking = DB::table('revisions')->where('revisionable_type','App\Transaksi')->where('key','lokasi')->whereNotNull('new_value')->orderBy('id', 'asc')->get();  //passing variable to all views

    	return view('kurir.index',compact('daftar_transaksi','tracking')); 

	}



	public function update(Request $request, $kode)
    { 
        
	    $transaksi = Transaksi::find($kode);

	    $transaksi->lokasi = $request->input('lokasi');

	    $transaksi->update(['lokasi' => $request->lokasi ]);


        return redirect()->back();
    }

}
