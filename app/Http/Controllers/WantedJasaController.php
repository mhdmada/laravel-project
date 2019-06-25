<?php

namespace App\Http\Controllers;


use App\WantedJasa;
use App\JasaCategory;
use Auth;
use Carbon;

use Input;
use Illuminate\Http\Request;

class WantedJasaController extends Controller
{

	    public function index()
        {
            $categories = \App\JasaCategory::groupBy('kategori')->get();
            
			return view('jasa.tambahwantedlistjasa',compact('categories'));
        }

	    
	    public function index2()
    	{

            $query = WantedJasa::query();

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

            $wantedjasas = $query->where('tanggal_expired','>=', $today)->latest()->paginate(24);  #menampilkan jasa 

            $categories = \App\JasaCategory::groupBy('kategori')->orderBy('kategori','asc')->get();
            
            return view('jasa.wantedlistjasa',compact('categories','wantedjasas'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

        }


	    public function store(Request $request)
        {
           request()->validate([
                'nama_jasa' => 'required',
                'kategori' => 'required|not_in:0',
            ],[
                'nama_jasa.required' => 'Nama jasa harus diisi',
                'kategori.required' => 'Kategori harus diisi',
            ]);

            $data = $request->all();         

            WantedJasa::create($data);


            return redirect('wantedlistjasa')->with('success','Anda telah berhasil menambahkan jasa');
        }
}
