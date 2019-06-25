<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekening;
use App\Bank;

use Input;
use Auth;


class RekeningController extends Controller
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
    		$user = Auth::user()->id; 
		    $daftar_transaksi = Rekening::where('user_id', $user)->orderBy('id','DESC')->get();
		    $daftar_bank = Bank::orderBy('id','DESC')->get();

		    return view('rekening',compact('daftar_transaksi','daftar_bank')); 
	}


	public function store()
    {
    		$this->validate(request(), [
    		'user_id' => 'string|max:255',
            'no_rek' => 'string|max:255',
            'atas_nama' => 'string|max:255',
            'bank' => 'string|max:255',
            'cabang_bank' => 'string|max:255',
	        ]);

    		$rekening = new Rekening;
    		$rekening->user_id = request('user_id');
	        $rekening->no_rek = request('no_rek');
	        $rekening->atas_nama = request('atas_nama');
	        $rekening->bank = request('bank');
	        $rekening->cabang_bank = request('cabang_bank');
	        $rekening->save(['no_rek' => $rekening->no_rek,'atas_nama' => $rekening->atas_nama, 'bank' => $rekening->bank,'cabang_bank' => $rekening->cabang_bank,]);

	        return redirect()->back();
	}

	public function destroy($id)
	{
		$rekening = Rekening::find($id);
     	$rekening->delete();
	    return redirect()->back();
	}



}
