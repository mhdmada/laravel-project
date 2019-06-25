<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Cart;
use App\Transaksi;

use App\Discount;

use Input;


class CheckoutController extends Controller
{

	//ini aku rubah dari home ke product
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() // ini fungsi untuk redirect ke login jika tidak ada session
    {
        $this->middleware('auth');
    }


    public function cart(Request $request)
	{ 
		$id    = $request->get('id');
		$name  = $request->get('name');
		$price = $request->get('price');
		$image = $request->get('image');
		$toko = $request->get('toko');
		$kurir = $request->get('kurir');
	    Cart::add(['id' => $id,'name' => $name,'toko' => $toko,'kurir' => $kurir,'image' => $image, 'price' => $price ,'qty' => 1,'jumlah' => 1,]);
	    return redirect('checkout');
	}

	public function cart2(Request $request)
	{ 
		$id    = $request->get('id');
		$name  = $request->get('name');
		$toko  = $request->get('toko');
		$kurir  = $request->get('kurir');
		$price = $request->get('price');
		$image = $request->get('image');
		$jumlah = $request->get('jumlah');
		$qty = $request->get('qty');


	    Cart::add(['id' => $id,'name' => $name,'toko' => $toko, 'kurir' => $kurir,'image' => $image, 'price' => $price ,'jumlah' => $jumlah,'qty' => $qty,]);
	    return redirect('pembayaran');
	}


	public function store(Request $request)
	{ 

     // $transaksi= new Transaksi();
     
     //    foreach($cartDetails as $c){

     //   	$transaksi->photo = $c->image;
     //    $transaksi->name = $c->name;
     //    $transaksi->harga= $c->price;
     //    $transaksi->jumlah= $c->jumlah;
     //    $transaksi->biayakirim= $request['biayakirim'];
     //    $transaksi->bank= $request['bank'];
     //    $transaksi->pesan= $request['pesan'];
     //    $transaksi->alamat= $request['alamat'];
     //    $transaksi->subtotal= $request['subtotal'];
     //    $transaksi->asuransi= $request['asuransi'];
     //    $transaksi->bantuan= $request['bantuan'];
     //    $transaksi->status= $request['status'];
     //    $transaksi->pembeli= $request['pembeli'];
     //    $transaksi->toko= $request['toko'];

     //    $rand_start = rand(1,1000);
    
    	// $transaksi->total= $request['total'] + $rand_start ;

    	// $transaksi->save();

     //    }
		


		$rand_start = rand(1,1000);


		$length = 7;
		$random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ1234567890"), 0, $length);



        $products = Cart::content();
     
	     // iterate through the products and store them into the database
	     foreach($products as $product){
	         Transaksi::create([
	             'photo' => $product->image,
	             'kode' => $random,
	             'name' => $product->name,
	             'harga' => $product->price,
	             'jumlah' => $product->jumlah,
	             'biayakirim' => $request['biayakirim'],
	             'bank' => $request['bank'],
	             'alamat' => $request['alamat'],
	             'subtotal' => $request['subtotal'],
	             'asuransi' => $request['asuransi'],
	             'bantuan' => $request['bantuan'],
	             'status' => $request['status'],
	             'pembeli' => $request['pembeli'],
	             'toko' => $product->toko,
	             'total' => $request['total'] + $rand_start,
	         ]);
	     }
       
       
        

	   	
    	Cart::destroy();
	    return redirect('status');


	}


	public function pembayaran()
	{    

	          $input_promo = Input::get('promo');

	          $tes = Discount::first();
	         
	          if ( $input_promo == $tes->unique_code ) {
	          	
	          	$promo =  Cart::subtotal() - $tes->diskon;
	          	 
				Discount::decrement('limit_promo', 1);
 
	          	\Session::flash('berhasil','berhasil mendapatkan diskon.');
	          }else{
	          	$promo = Cart::subtotal();
	          }

	          $val1 = Cart::subtotal();
	          $val2 = $tes->insurance;
	
			$insurance = $val1 * $val2 ;

		return view('pembayaran',compact('promo','tes','insurance'));
	}


	public function checkout()
	{    	
		return view('transaksi');
	}

	public function RemoveCart($rowid)
	{
	    Cart::remove($rowid);
	    return redirect()->back();
	}


}
