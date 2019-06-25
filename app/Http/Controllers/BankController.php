<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bank;

class BankController extends Controller
{
    
	public function index()
    {
    		
    		$daftar_bank = Bank::orderBy('id','DESC')->get();

    		return view('admin.index',compact('daftar_bank')); 

	}



	public function store(Request $request, Bank $bank)
    {

        	$this->validate(request(), [
            'nama_bank' => 'string|max:255',
	        ]);

	        $bank->nama_bank = request('nama_bank');
	        $bank->save();

	        return redirect()->back()->with('success','Anda telah berhasil menambahkan produk');

        
    }


}
