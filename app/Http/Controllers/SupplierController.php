<?php

namespace App\Http\Controllers;
use App\Supplier;
use App\Product;
use App\User;
use Auth;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
	{

        $amount_paginate = 12; #avoid magic number

        $supplier = Supplier::latest()->paginate($amount_paginate); #menampilkan produk


        return view('home',compact('supplier'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }




    public function show($slug)
    {

    	$supplier = User::where('name',$slug)->first();

        $products = Product::where('nama_supplier', '=', $slug)->get();
        $jumlah  =  Product::where('nama_supplier', '=', $slug)->count();

        $tanggal = Product::whereDate('created_at', '=', date('d-m-Y'));

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get();
        

        return view('supplier',compact('supplier','jumlah','tanggal','products','kategori_toko'));
    }
}
