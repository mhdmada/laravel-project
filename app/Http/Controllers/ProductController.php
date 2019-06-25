<?php

namespace App\Http\Controllers;
use Input;
use App\Product;
use App\Category;  #mada yang nambahin
use Illuminate\Http\Request;
use Auth;
use DB;


use App\Http\Controllers\Controller;

class ProductController extends Controller
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request) 
    {

        $input = Input::get('pencarian'); // search biasa

        $input_kategoritoko = Input::get('kategori'); 
        $minimum = Input::get('minimum');
        $maksimum = Input::get('maksimum');

        $min = Product::min('harga');
        $max = Product::max('harga');

    if ($input){

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get();  #variabel Query builder untuk menampilkan kategori toko di home product

        $lokasi = Product::distinct()->select('alamat')->orderBy('alamat', 'asc')->WhereNull('deleted_at')->get();
       
        $products = Product::where('nama_produk', 'LIKE', '%'.$input.'%' )->WhereNull('deleted_at')->latest()->paginate(8);

        $jumlah  =  Product::count();


        return view('products.index',compact('products','kategori_toko','lokasi','jumlah'));    



    }elseif ($input_kategoritoko && $minimum && $maksimum) {

      

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get(); 

        $products = Product::whereBetween('harga', [$minimum, $maksimum])->WhereNull('deleted_at')->latest()->paginate(8);
        
        // where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->or
        // 
        // $harga        = $products->where('harga', 'BETWEEN','%'.$input_kategoritoko.'%','AND','%'.$input_kategoritoko.'%')->WhereNull('deleted_at')->get();

        $jumlah  =  Product::count();


          return view('products.index',compact('products','kategori_toko','harga','jumlah'));


    }elseif ($input_kategoritoko && $minimum) {

      

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get(); 


        $products = Product::where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->whereBetween('harga', [$minimum,$max ])->WhereNull('deleted_at')->latest()->paginate(8);
        
        // where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->or
        // 
        // $harga        = $products->where('harga', 'BETWEEN','%'.$input_kategoritoko.'%','AND','%'.$input_kategoritoko.'%')->WhereNull('deleted_at')->get();

        $jumlah  =  Product::count();


          return view('products.index',compact('products','kategori_toko','harga','jumlah'));


    }elseif ($input_kategoritoko && $maksimum) {

      

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get(); 


        $products = Product::where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->whereBetween('harga', [$min,$maksimum ])->WhereNull('deleted_at')->latest()->paginate(8);
        
        // where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->or
        // 
        // $harga        = $products->where('harga', 'BETWEEN','%'.$input_kategoritoko.'%','AND','%'.$input_kategoritoko.'%')->WhereNull('deleted_at')->get();

        $jumlah  =  Product::count();


          return view('products.index',compact('products','kategori_toko','harga','jumlah'));



    }elseif ($input_kategoritoko) {

      

        $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get(); 

        $products = Product::where('kategori', 'LIKE', '%'.$input_kategoritoko.'%' )->WhereNull('deleted_at')->latest()->paginate(8);
        
        

        $jumlah  =  Product::count();


          return view('products.index',compact('products','kategori_toko','harga','jumlah'));

    


    }else{

         $kategori_toko = Product::distinct()->select('kategori')->orderBy('kategori', 'asc')->WhereNull('deleted_at')->get();  #variabel Query builder untuk menampilkan kategori toko di home product

         $lokasi = Product::distinct()->select('alamat')->orderBy('alamat', 'asc')->WhereNull('deleted_at')->get();

         $user = Auth::user()->name; 

         $products = Product::where('nama_supplier',$user)->latest()->paginate(8); #menampilkan produk

         $jumlah  =  Product::where('nama_supplier',$user)->count();

         $begin = memory_get_usage();
        

        return view('products.index',compact('products','kategori_toko','lokasi','jumlah','begin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);



        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('products.tambahproduct');

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
            'nama_produk' => 'required',
            'kategori' => 'required|not_in:0',
            'harga' => 'required',
        ],[
            'photo.required' => 'Gambar Produk harus diisi',
            'nama_produk.required' => 'Nama produk harus diisi',
            'kategori.required' => 'Kategori harus diisi',
            'harga.required' => 'Harga produk harus diisi',

            ]);

        $data = $request->all();

        $photo = $request->file('photo')->getClientOriginalName();

        $destination = base_path() . '/../public_html/uploads';

        $request->file('photo')->move($destination, $photo);


        if ($request->hasFile('photo2')) {

        
        $photo2 = $request->file('photo2')->getClientOriginalName();
       
        $destination = base_path() . '/../public_html/uploads';
      
        $request->file('photo2')->move($destination, $photo2);
        
        $data['photo2'] = $photo2;

        }   


        if ($request->hasFile('photo3')) {

        
        $photo3 = $request->file('photo3')->getClientOriginalName();
       
        $destination = base_path() . '/../public_html/uploads';
      
        $request->file('photo3')->move($destination, $photo3);
        
        $data['photo3'] = $photo3;

        }   

         if ($request->hasFile('photo4')) {

        
        $photo4 = $request->file('photo4')->getClientOriginalName();
       
        $destination = base_path() . '/../public_html/uploads';
      
        $request->file('photo4')->move($destination, $photo4);
        
        $data['photo4'] = $photo4;

        }   
     
 
        $data['photo'] = $photo;
       
       

        Product::create($data);


        return redirect()->route('products.index')
                        ->with('success','Anda telah berhasil menambahkan produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       // return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
       request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $product->update($request->all());


        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('delete','Anda telah berhasil menghapus produk');
    }


    // fungsi buat sub kategori pada tambahan produk

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('categories')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="" disabled selected >Pilih '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }


    

}
