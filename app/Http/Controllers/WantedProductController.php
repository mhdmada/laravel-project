<?php

namespace App\Http\Controllers;


use App\WantedProduct;
use Auth;
use Input;
use Carbon;

use Illuminate\Http\Request;

class WantedProductController extends Controller
{

        public function index()
        {
            $categories = \App\Category::groupBy('kategori')->orderBy('kategori','asc')->get();
            $user = Auth::user()->id;

            $limithari = WantedProduct::select('limit_hari')->first();   
    
            return view('products.tambahwantedlistproduct',compact('categories','limithari'));
        }

        public function index2()
    	{

            $query = WantedProduct::query();

            if(Input::has('kategori')) {

                $query->where('kategori', Input::get('kategori'));
            }

            if(Input::has('kategori1')) {
                $query->where('kategori1', Input::get('kategori1'));
            }

            if(Input::has('kategori2')) {
                $query->where('kategori2', Input::get('kategori2'));
            }

            $today = Carbon::now();

            $wantedproducts = $query->where('tanggal_expired','>=', $today)->latest()->paginate(24);  #menampilkan produk 

            $categories = \App\Category::groupBy('kategori')->orderBy('kategori','asc')->get();
           
            return view('products.wantedlistproduct',compact('categories','wantedproducts'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

        }

        
        public function store(Request $request)
        {
           request()->validate([
            
                'nama_produk' => 'required',
                'kategori' => 'required|not_in:0',
            ],[
                'nama_produk.required' => 'Nama produk harus diisi',
                'kategori.required' => 'Kategori harus diisi',
                ]);

            $data = $request->all();         

            WantedProduct::create($data);


            return redirect('wantedlistproduct')->with('success','Anda telah berhasil menambahkan produk');
        }


         public function updatehari(Request $request)
        { 

            $wanted = WantedProduct::where('id',4);

            $wanted->limit_hari = $request->input('limit_hari');
          
            $wanted->update(['limit_hari' => $request->limit_hari]);


            return redirect()->back();
        }
}
