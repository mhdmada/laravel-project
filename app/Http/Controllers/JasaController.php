<?php

namespace App\Http\Controllers;
use Input;
use App\Jasa;
use App\Category;  #mada yang nambahin

use Illuminate\Http\Request;

use DB;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategori_toko = Jasa::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get();  #variabel Query builder untuk menampilkan kategori toko di home product

         $jasas = Jasa::latest()->paginate(4); #menampilkan produk

         $jumlah  =  Jasa::count();

       


        return view('jasa.index',compact('jasas','kategori_toko','jumlah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
        
            'photo' => 'required',
            'kategori' => 'required|not_in:0',
            'harga' => 'required',
        ],[
            'photo.required' => 'Gambar Produk harus diisi',
            'kategori.required' => 'Kategori harus diisi',
            'harga.required' => 'Harga produk harus diisi',
          

            ]);

        $data = $request->all();

        $photo = $request->file('photo')->getClientOriginalName();

        $destination = base_path() . '/public/uploads';

        $request->file('photo')->move($destination, $photo);


        if ($request->hasFile('photo2')) {

        
        $photo2 = $request->file('photo2')->getClientOriginalName();
       
        $destination = base_path() . '/public/uploads';
      
        $request->file('photo2')->move($destination, $photo2);
        
        $data['photo2'] = $photo2;

        }   


        if ($request->hasFile('photo3')) {

        
        $photo3 = $request->file('photo3')->getClientOriginalName();
       
        $destination = base_path() . '/public/uploads';
      
        $request->file('photo3')->move($destination, $photo3);
        
        $data['photo3'] = $photo3;

        }   

         if ($request->hasFile('photo4')) {

        
        $photo4 = $request->file('photo4')->getClientOriginalName();
       
        $destination = base_path() . '/public/uploads';
      
        $request->file('photo4')->move($destination, $photo4);
        
        $data['photo4'] = $photo4;

        }   
     

 
        $data['photo'] = $photo;
       
       

        Jasa::create($data);


        return redirect()->route('jasa.index')
                        ->with('success','Anda telah berhasil menambahkan jasa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Jasa $jasa)
    {
        $jasa->delete();


        return redirect()->route('jasa.index')
                        ->with('delete','Anda telah berhasil menghapus jasa');
    }


    //fungsi buat jasa

     function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('jasa_categories')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Pilih '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }



}
