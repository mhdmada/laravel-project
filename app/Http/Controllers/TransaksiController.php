<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

use Input;
use Auth;

class TransaksiController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() // ini fungsi untuk redirect ke login jika tidak ada session
    {
        $this->middleware('auth');
    }



	public function index()
    {
    		$user = Auth::user()->name; 
		    $belum_bayar 	= Transaksi::where('pembeli', $user)->where('status','belum')->distinct()->select('kode','bank','total','created_at')->get();

		    $batal_bayar 	= Transaksi::where('pembeli', $user)->where('status','batal')->distinct()->select('kode','bank','total','dibatalkan','updated_at')->get();
		    
		    $diterima_bayar = Transaksi::where('pembeli', $user)->where('status','sudah bayar')->distinct()->select('kode','bank','total','photo_transfer','updated_at')->get();

		    $pengiriman 	= Transaksi::where('pembeli', $user)->where('status','dikirim')->distinct()->select('kode','bank','total','updated_at')->get();
		    
		    $berhasil	 	= Transaksi::where('pembeli', $user)->where('status','berhasil')->distinct()->select('kode','bank','total','updated_at')->get();

		 	$produk 	= Transaksi::where('pembeli', $user)->orderBy('id','DESC')->cursor();

		    return view('status',compact('belum_bayar','batal_bayar','diterima_bayar','pengiriman','berhasil')); 


	}



	public function index2()
    {
    		$user = Auth::user()->name; 

		    $belum_bayar 	= Transaksi::where('toko', $user)->where('status','belum')->distinct()->select('kode','bank','total','created_at')->get();

		    $batal_bayar 	= Transaksi::where('toko', $user)->where('status','batal')->distinct()->select('kode','bank','total','dibatalkan','updated_at')->get();
		    
		    $diterima_bayar = Transaksi::where('toko', $user)->where('status','sudah bayar')->where('verifikasi_transfer','true')->distinct()->select('kode','bank','total','photo_transfer','updated_at')->get();

		    $pengiriman 	= Transaksi::where('toko', $user)->where('status','dikirim')->distinct()->select('kode','bank','total','photo_resi','no_resi','updated_at')->get();

		    $berhasil	 	= Transaksi::where('toko', $user)->where('status','berhasil')->distinct()->select('kode','bank','total','updated_at')->get();

		    return view('penjualan',compact('belum_bayar','batal_bayar','diterima_bayar','pengiriman','berhasil')); 
	}


	public function show($kode)
	{
	     	$details  = Transaksi::where('kode', $kode)->orderBy('id','DESC')->get();

		    return view('detail-status',compact('details')); 
	}



    public function update(Request $request, $kode)
    { 
        
	    $transaksi = Transaksi::where('kode',$kode);

	    $this->validate($request, [
	        
	    ]);


	    if ($request->hasFile('photo_transfer')) {

	        $photo_transfer = $request->file('photo_transfer')->getClientOriginalName();

	        $destination = base_path() . '/public/uploads';

	        $request->file('photo_transfer')->move($destination, $photo_transfer);

	        $transaksi->photo_transfer = $photo_transfer;

	        $transaksi->update(['photo_transfer' => $photo_transfer]);

        }

        if ($request->hasFile('photo_resi')) {

	        $photo_resi = $request->file('photo_resi')->getClientOriginalName();

	        $destination = base_path() . '/public/uploads';

	        $request->file('photo_resi')->move($destination, $photo_resi);

	        $transaksi->photo_resi = $photo_resi;

	        $transaksi->update(['photo_resi' => $photo_resi]);

        }



	    $transaksi->status = $request->input('status');
	    $transaksi->dibatalkan = $request->input('dibatalkan');
	    $transaksi->no_resi = $request->input('no_resi');

	  
	    $transaksi->update(['status' => $request->status,'dibatalkan' => $request->dibatalkan,'no_resi' => $request->no_resi,]);


        return redirect()->back();
    }



}
