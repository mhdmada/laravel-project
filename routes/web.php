<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/policy', function () {

    return view('policy');
});


Route::get('/vue', function () {
    return view('vue');
});


Route::get('/kalkulator', function () {

     $var1 = 10;

    return view('vue-calculator',compact('var1'));
});


Route::get('/messenger', function () {
    return view('chat');

})->middleware('auth');



Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');


Route::get('/apikategori', function ()
{
        $kategori = \App\Category::select(['kategori', 'kategori1', 'kategori2', DB::raw('kategori1->>"$.status.name" as object_status')])->get();


        return response()->json($kategori,200,[],JSON_PRETTY_PRINT);
        
});

Route::get('/apiwantedproducts', function ()
{
         $products = \App\WantedProduct::all();

        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apiproducts', function ()
{       
     
         $products = \App\Product::all();


        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiatasanpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Atasan Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apisepatupria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Sepatu Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apicelanapria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Celana Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apioutwearpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Outwear Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apijamtanganpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Jam Tangan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apitaspria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Tas Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibatikpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Batik Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiaksesorispria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apipakaiandalampria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Pakaian Dalam Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperhiasanfashionpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perhiasan Fashion' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apibajutidurpria', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Baju Tidur Pria' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================busana wanita =================================/

Route::get('/apiatasanwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Atasan Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apicelanawanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Celana Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apirokwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Rok' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apidresswanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Dress' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apioutwearwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Outwear' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apibatikwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Batik Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apipakaiandalamwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Pakaian Dalam Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apitaswanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Tas Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apisepatuwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Sepatu Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apijamtanganwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Jam Tangan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperhiasanwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perhiasan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apiaksesoriswanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiaksesorisrambutwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Rambut' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apicouplewanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Couple' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apibajutidurwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Baju Tidur Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperlengkapanjahit', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Jahit' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================Smartphone=================================/


Route::get('/apiaksesorishandphone', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Handphone' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiaksesoristablet', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Tablet' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apimemorycard', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Memory Card' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================Hewan=================================/

Route::get('/apihewankomsumsi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Hewan Komsumsi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apihewanpeliharaan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Hewan Peliharaan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



//===================Laptop=================================/

Route::get('/apiaksesorislaptop', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Laptop' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================Komputer=================================/

Route::get('/apiharddisks', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Harddisk & Flashdisk' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apivgacards', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'VGA Card' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiprinters', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Printer' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperipherals', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Peripheral & Aksesoris' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apinetworkings', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Networking' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apikomponenkomputers', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Komponen Komputer' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiopticaldrives', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Optical Drive' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================Elektronik=================================/

Route::get('/apivaporizers', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Vaporizer' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiaudios', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Audio' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apitvs', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'TV' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apikamerapengintais', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kamera Pengintai' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimediaplayers', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Media Player' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apitelepons', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Telepon' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apipencahayaans', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Pencahayaan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperalatanlistriks', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Peralatan Listrik' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperangkatelektroniklainnyas', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perangkat Elektronik Lainnya' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================Kamera=================================/


Route::get('/apikameradigital', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kamera Digital' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apikameravideo', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kamera Video' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apikameraanalog', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kamera Analog' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apilensaaksesoris', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Lensa & Aksesoris' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiflashaksesoris', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Flash & Aksesoris' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiaksesoriskamera', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Kamera' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apibateraikamera', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Baterai,Charger & Grip' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apicleanerkamera', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Cleaner & Tool Kit' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiframekamera', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Frame,Album & Roll Film' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================API GAMING=================================/

Route::get('/apigameconsole', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Game Console' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apicdgame', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'CD Game' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apipcgaming', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'PC dan Laptop Gaming' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================BUSANA MUSLIM=================================/

Route::get('/apiatasanmuslim', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Atasan Muslim' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibawahanmuslim', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Bawahan Muslim' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apidressmuslim', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Dress Muslim' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apioutwearmuslim', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Outerwear Muslim' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiscarf', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Scarf' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiaksesorisjilbab', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Jilbab' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperlengkapanibadah', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Ibadah' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================API BUSANA ANAK=================================/

Route::get('/apiaksesorisrambutanak', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Rambut Anak' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apitasanak', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Tas Anak' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperhiasananak', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perhiasan Anak' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiaksesorisanak', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Anak' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apisepatuanaklaki', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Sepatu Anak Laki-Laki' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apisepatuanakperempuan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Sepatu Anak Perempuan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apipakaiananakperempuan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Pakaian Anak Perempuan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apipakaiananaklaki', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Pakaian Anak Laki-Laki' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================API KECANTIKAN=================================/

Route::get('/apistylingrambutwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Styling Rambut Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apimakeupmata', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Make Up Mata' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apimakeupwajah', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Make Up Wajah' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});



Route::get('/apihandnailart', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Hand & Nail Art' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apieyebrowkit', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Eyebrow Kit' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apialatmakeup', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris & Alat Make Up' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperawatankulit', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Kulit' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apilipcolor', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Lip Color & Lip Care' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperawatanwajah', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Wajah' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================KATEGORI KESEHATAN=================================/

Route::get('/apiobatobatan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Obat-Obatan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimaternity', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Maternity' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apialatbantukesehatan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Alat Bantu Kesehatan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apikesehatanwanita', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kesehatan Wanita' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apidietvitamin', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Diet & Vitamin' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperlengkapanmedis', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Medis' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================Perawatan Tubuh=================================/

Route::get('/apigrooming', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Grooming' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiparfum', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Parfum,Cologne, & Fragrance' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apitelinga', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Telinga' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiprodukkewanitaan', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Produk Kewanitaan' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperawatanrambut', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Rambut' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperawatanmata', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Mata' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimandi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Mandi & Perawatan Tubuh' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperawatankaki', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Kaki,Tangan & Kuku' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apikesehatangigi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Kesehatan Gigi & Mulut' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


//===================API Perlengkapan Ibu, Anak & Bayi=================================/

Route::get('/apipopokdiaper', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Popok dan Diaper' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimakanansusubayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Makanan & Susu Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibajusepatubayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Baju & Sepatu Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperawatanbayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perawatan Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperlengkapanmakanbayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Makan Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apiperlengkapanmandibayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Mandi Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apistrollerbayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Stroller dan Alat Bantu Bawa Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiperlengkapantidurbayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Perlengkapan Tidur Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiaksesorisbayi', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Aksesoris Bayi' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibajuhamil', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Baju Hamil' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimakanansusuibu', function ()
{
        $products = \App\Category::where('kategori1', 'LIKE', 'Makanan & Susu Ibu' )->get();
        if(count($products) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($products,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

//===================Kategori1 View Busana Pria=================================

Route::get('/kategori-atasanpria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Atasan Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-atasanpria',compact('products'));
});

Route::get('/kategori-sepatupria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Sepatu Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-sepatupria',compact('products'));
});

Route::get('/kategori-celanapria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Celana Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-celanapria',compact('products'));
});

Route::get('/kategori-outwearpria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Outwear Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-outwearpria',compact('products'));
});

Route::get('/kategori-jamtangan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Jam Tangan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-jamtangan',compact('products'));
});

Route::get('/kategori-taspria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tas Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-taspria',compact('products'));
});

Route::get('/kategori-batikpria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Batik Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-batikpria',compact('products'));
});

Route::get('/kategori-aksesorispria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-aksesorispria',compact('products'));
});

Route::get('/kategori-pakaiandalampria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pakaian Dalam Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-pakaiandalampria',compact('products'));
});

Route::get('/kategori-perhiasanfashionpria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perhiasan Fashion' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-perhiasanfashionpria',compact('products'));
});

Route::get('/kategori-bajutidurpria', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baju Tidur Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kategori-bajutidurpria',compact('products'));
});


//===================Kategori2 View Busana Pria=================================


Route::get('/Kaos Tanpa Lengan Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Tanpa Lengan Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kaos-tanpa-lengan-pria',compact('products'));
});


Route::get('/Kemeja Casual Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Casual Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kemeja-casual-pria',compact('products'));
});

Route::get('/Kaos Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kaos-pria',compact('products'));
});

Route::get('/Polo Shirt Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Polo Shirt Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.polo-shirt-pria',compact('products'));
});

Route::get('/Kemeja Formal Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Formal Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kemeja-formal-pria',compact('products'));
});

Route::get('/Sneakers', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sneakers' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.sneakers-pria',compact('products'));
});

Route::get('/Boots', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Boots' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.boots-pria',compact('products'));
});

Route::get('/Pantofel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pantofel' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.pantofel-pria',compact('products'));
});

Route::get('/Sepatu Sandal', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Sandal' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.sepatu-sandal-pria',compact('products'));
});

Route::get('/Slip On', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Slip On' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.slipon-pria',compact('products'));
});

Route::get('/Kaos Kaki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Kaki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kaoskaki-pria',compact('products'));
});


Route::get('/Perawatan Sepatu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Sepatu' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.perawatansepatu-pria',compact('products'));
});

Route::get('/Sandal', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sandal' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.sandal-pria',compact('products'));
});

Route::get('/Loafers', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Loafers' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.loafers-pria',compact('products'));
});

Route::get('/Loafers', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Loafers' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.loafers-pria',compact('products'));
});

Route::get('/Celana Jeans Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Jeans Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanajeans-pria',compact('products'));
});

Route::get('/Celana Panjang Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Panjang Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanapanjang-pria',compact('products'));
});

Route::get('/Celana Pendek Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Pendek Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanapendek-pria',compact('products'));
});

Route::get('/Jas Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jas Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.jas-pria',compact('products'));
});

Route::get('/Jaket Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jaket Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.jaket-pria',compact('products'));
});

Route::get('/Sweater Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sweater Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.sweater-pria',compact('products'));
});

Route::get('/Vest Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Vest Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.vest-pria',compact('products'));
});


Route::get('/Hoodie Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hoodie Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.hoodie-pria',compact('products'));
});

Route::get('/Coat Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Coat Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.coat-pria',compact('products'));
});

Route::get('/Cardigan Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cardigan Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.cardigan-pria',compact('products'));
});


Route::get('/Jam Tangan Analog', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jam Tangan Analog' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.jamtangan-analog-pria',compact('products'));
});


Route::get('/Jam Tangan LED', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jam Tangan LED' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.jamtangan-led-pria',compact('products'));
});

Route::get('/Jam Tangan Digital', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jam Tangan Digital' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.jamtangan-digital-pria',compact('products'));
});

Route::get('/Strap Jam Tangan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Strap Jam Tangan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.strap-jamtangan-pria',compact('products'));
});

Route::get('/Tas Travel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Travel' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.tastravel-pria',compact('products'));
});

Route::get('/Briefcase', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Briefcase' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.briefcase-pria',compact('products'));
});

Route::get('/Tas selempang', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas selempang' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.tasselempang-pria',compact('products'));
});

Route::get('/Clutch', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Clutch' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.clutch-pria',compact('products'));
});

Route::get('/Waist Bag', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Waist Bag' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.waistbag-pria',compact('products'));
});

Route::get('/Backpack', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Backpack' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.backpack-pria',compact('products'));
});

Route::get('/Kemeja Batik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Batik' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kemejabatik-pria',compact('products'));
});



Route::get('/Celana Batik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Batik' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanabatik-pria',compact('products'));
});

Route::get('/Kacamata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kacamata' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kacamata-pria',compact('products'));
});


Route::get('/Dompet Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dompet Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.dompet-pria',compact('products'));
});

Route::get('/Ikat Pinggang Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ikat Pinggang Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.ikatpinggang-pria',compact('products'));
});

Route::get('/Dasi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dasi' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.dasi-pria',compact('products'));
});


Route::get('/Sarung tangan fashion', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sarung tangan fashion' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.sarungtangan-pria',compact('products'));
});

Route::get('/Topi Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Topi Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.topi-pria',compact('products'));
});

Route::get('/Kacamata Hitam ', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kacamata Hitam    ' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kacamatahitam-pria',compact('products'));
});

Route::get('/Kacamata Hitam ', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kacamata Hitam    ' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kacamatahitam-pria',compact('products'));
});


Route::get('/Boxer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Boxer' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.boxer-pria',compact('products'));
});

Route::get('/Kaos Dalam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Dalam' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kaosdalam-pria',compact('products'));
});


Route::get('/Celana Dalam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Dalam' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanadalam-pria',compact('products'));
});


Route::get('/Gelang', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gelang' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.gelang-pria',compact('products'));
});


Route::get('/Batu Mulia & Batu Alam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Batu Mulia & Batu Alam' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.batumulia-pria',compact('products'));
});


Route::get('/Anting', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Anting' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.anting-pria',compact('products'));
});

Route::get('/Kalung', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kalung' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.kalung-pria',compact('products'));
});


Route::get('/Cincin', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cincin' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.cincin-pria',compact('products'));
});

Route::get('/Celana Tidur', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Tidur' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.celanatidur-pria',compact('products'));
});

Route::get('/Piyama', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Piyama' )->WhereNull('deleted_at')->get();

    return view('kategori-busanapria.piyama-pria',compact('products'));
});



//===================Kategori1 View Atasan Wanita=================================

Route::get('/kategori-atasanwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Atasan Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-atasanwanita',compact('products'));
});

Route::get('/kategori-sepatuwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Sepatu Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-sepatuwanita',compact('products'));
});

Route::get('/kategori-celanawanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Celana Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-celanawanita',compact('products'));
});

Route::get('/kategori-taswanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tas Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-taswanita',compact('products'));
});

Route::get('/kategori-batikwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Batik Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-batikwanita',compact('products'));
});

Route::get('/kategori-aksesoriswanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-aksesoriswanita',compact('products'));
});

Route::get('/kategori-pakaiandalamwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pakaian Dalam Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-pakaiandalamwanita',compact('products'));
});

Route::get('/kategori-perhiasanfashion', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perhiasan Fashion' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-perhiasanfashion',compact('products'));
});

Route::get('/kategori-bajutidurwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baju Tidur Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-bajutidurwanita',compact('products'));
});

Route::get('/kategori-rokwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Rok' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-rokwanita',compact('products'));
});

Route::get('/kategori-dress', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Dress' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-dress',compact('products'));
});

Route::get('/kategori-aksesorisrambut', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-aksesorisrambut',compact('products'));
});

Route::get('/kategori-perlengkapancouple', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Couple' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-perlengkapancouple',compact('products'));
});

Route::get('/kategori-perlengkapanjahit', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Jahit' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-perlengkapanjahit',compact('products'));
});

Route::get('/kategori-outwearwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-outwearwanita',compact('products'));
});

Route::get('/kategori-jamtanganwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Jam Tangan Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-jamtanganwanita',compact('products'));
});

Route::get('/kategori-setelan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Setelan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanawanita.kategori-setelan',compact('products'));
});




//===================Handphone & Tablet=================================/
Route::get('/handphonetablet', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Handphone & Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.handphonetablet',compact('products'));
});

Route::get('/Smartphone', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Smartphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.smartphone',compact('products'));
});

Route::get('/Powerbank', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Powerbank' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.powerbank',compact('products'));
});


Route::get('/Smartwatch', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Smartwatch' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.smartwatch',compact('products'));
});


Route::get('/Tablet', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.tablet',compact('products'));
});

Route::get('/aksesorishandphone', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesorishandphone',compact('products'));
});


Route::get('/Baterai Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.bateraihandphone',compact('products'));
});

Route::get('/Aksesoris Mobil Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Mobil Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesorismobilhandphone',compact('products'));
});


Route::get('/Casing & Cover Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Casing & Cover Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.casingcoverhandphone',compact('products'));
});

Route::get('/Skin Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Skin Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.skinhandphone',compact('products'));
});

Route::get('/Charger Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Charger Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.chargerhandphone',compact('products'));
});

Route::get('/Mount Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mount Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.mounthandphone',compact('products'));
});

Route::get('/Gantungan Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gantungan Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.gantunganhandphone',compact('products'));
});

Route::get('/Spare Part Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spare Part Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.spareparthandphone',compact('products'));
});

Route::get('/Screen Guard Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Screen Guard Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.screenguardhandphone',compact('products'));
});

Route::get('/Docking Handphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Docking Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.dockinghandphone',compact('products'));
});

Route::get('/Aksesoris Handphone Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Handphone Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesorishandphonelainnya',compact('products'));
});


Route::get('/aksesoristablet', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesoristablet',compact('products'));
});

Route::get('/Baterai Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.bateraitablet',compact('products'));
});

Route::get('/Aksesoris Mobil Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Mobil Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesorismobiltablet',compact('products'));
});

Route::get('/Casing & Cover Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Casing & Cover Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.casingcovertablet',compact('products'));
});

Route::get('/Charger Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Charger Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.chargertablet',compact('products'));
});

Route::get('/Mount Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mount Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.mounttablet',compact('products'));
});

Route::get('/Spare Part Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spare Part Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.spareparttablet',compact('products'));
});

Route::get('/Screen Guard Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Screen Guard Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.screenguardtablet',compact('products'));
});

Route::get('/Keyboard Bluetooth Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Keyboard Bluetooth Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.keyboardbluetoothtablet',compact('products'));
});

Route::get('/Connection Kit Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Connection Kit Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.connectionkittablet',compact('products'));
});

Route::get('/Docking Tablet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Docking Tablet' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.dockingtablet',compact('products'));
});

Route::get('/Aksesoris Tablet Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Tablet Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.aksesoristabletlainnya',compact('products'));
});

Route::get('/memorycard', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Memory Card' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.memorycard',compact('products'));
});

Route::get('/Compact Flash', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Compact Flash' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.compactflash',compact('products'));
});

Route::get('/Memory Stick Pro Duo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Stick Pro Duo' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.memorystickproduo',compact('products'));
});

Route::get('/Memory Stick Pro-HG Duo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Stick Pro-HG Duo' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.memorystickprohgduo',compact('products'));
});

Route::get('/Memory Stick Micro M2', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Stick Micro M2' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.memorystickmicrom2',compact('products'));
});

Route::get('/MMC', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MMC' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.mmc',compact('products'));
});

Route::get('/Sd Card', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sd Card' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.sdcard',compact('products'));
});

Route::get('/MiniSD Card', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MiniSD Card' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.minisdcard',compact('products'));
});

Route::get('/MicroSD Card', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MicroSD Card' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.microsdcard',compact('products'));
});

Route::get('/Memory Card Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Card Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.memorycardlainnya',compact('products'));
});




Route::get('/Kabel Data', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kabel Data' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.kabeldata',compact('products'));
});


Route::get('/Kabel & Konektor', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kabel & Konektor' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.kabelkonektor',compact('products'));
});

Route::get('/Headset Bluetooth', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Headset Bluetooth' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.headsetblutooth',compact('products'));
});


Route::get('/Nomor Perdana & Voucher', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Nomor Perdana & Voucher' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.nomorperdana',compact('products'));
});


Route::get('/Stylus', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Stylus' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.stylus',compact('products'));
});


Route::get('/Lensa Handphone', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Lensa Handphone' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.lensahandphone',compact('products'));
});



Route::get('/Tongsis', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tongsis' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.tongsis',compact('products'));
});


Route::get('/Tomsis', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tomsis' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.tomsis',compact('products'));
});


Route::get('/Pelindung Kabel', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pelindung Kabel' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.pelindungkabel',compact('products'));
});


Route::get('/Virtual Reality Glasses', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Virtual Reality Glasses' )->WhereNull('deleted_at')->get();

    return view('kategori-handphone-tablet.virtualreality',compact('products'));
});



//===================Kategori Laptop=================================/
Route::get('/kategorilaptopaksesoris', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Laptop & Aksesoris' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.kategorilaptopaksesoris',compact('products'));
});

Route::get('/Aksesoris Laptop', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.aksesorislaptop',compact('products'));
});

Route::get('/Laptop', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.laptop',compact('products'));
});


Route::get('/Memory RAM', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory RAM' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.ramlaptop',compact('products'));
});

Route::get('/Cooling Pad', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cooling Pad' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.coolingpad',compact('products'));
});

Route::get('/Baterai Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.baterailaptop',compact('products'));
});

Route::get('/Adaptor Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Adaptor Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.adaptorlaptop',compact('products'));
});

Route::get('/Protector', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Protector' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.protectorlaptop',compact('products'));
});

Route::get('/Skin Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Skin Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.skinlaptop',compact('products'));
});


Route::get('/Meja Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Meja Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.mejalaptop',compact('products'));
});

Route::get('/Tas Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.taslaptop',compact('products'));
});

Route::get('/Spare Part Laptop', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spare Part Laptop' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.sparepartlaptop',compact('products'));
});


Route::get('/Aksesoris Laptop Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Laptop Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-laptop.aksesorislaptoplainnya',compact('products'));
});



//===================Komputer=================================/
Route::get('/KomputerDanAksesoris', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Komputer & Aksesoris' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.komputerdanaksesoris',compact('products'));
});


Route::get('/Desktop', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Desktop & Mini PC' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.desktop',compact('products'));
});


Route::get('/HarddiskDanFlashdisk', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Harddisk & Flashdisk' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.harddiskdanflashdisk',compact('products'));
});


Route::get('/VgaCard', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'VGA Card' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.vgacard',compact('products'));
});


Route::get('/Printer', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Printer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.printer',compact('products'));
});


Route::get('/PeripheralDanAksesoris', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Peripheral & Aksesoris' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.peripheraldanaksesoris',compact('products'));
});


Route::get('/Networking', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Networking' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.networking',compact('products'));
});


Route::get('/KomponenKomputer', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Komponen Komputer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.komponenkomputer',compact('products'));
});


Route::get('/OpticalDrive', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Optical Drive' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.opticaldrive',compact('products'));
});



Route::get('/HDD External', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'HDD External' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.hddexternal',compact('products'));
});

Route::get('/HDD Internal', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'HDD Internal' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.hddinternal',compact('products'));
});

Route::get('/SSD', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'SSD' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.ssd',compact('products'));
});

Route::get('/Flash Disk', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Flash Disk' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.flashdisk',compact('products'));
});

Route::get('/HDD Cases & Docking', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'HDD Cases & Docking' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.hddcases',compact('products'));
});

Route::get('/Storage Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Storage Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.storagelainnya',compact('products'));
});


Route::get('/NVIDIA Series - Geforce', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'NVIDIA Series - Geforce' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.nvidia',compact('products'));
});

Route::get('/AMD Series - ATI', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'AMD Series - ATI' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.amd',compact('products'));
});


Route::get('/AGP Series', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'AGP Series' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.agp',compact('products'));
});


Route::get('/All in One', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'All in One' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.allinone',compact('products'));
});

Route::get('/Dot Matrix', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dot Matrix' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.dotmatrix',compact('products'));
});

Route::get('/Ink Jet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ink Jet' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.inkjet',compact('products'));
});


Route::get('/Laser Color', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Laser Color' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.lasercolor',compact('products'));
});

Route::get('/Laser Mono', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Laser Mono' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.lasermono',compact('products'));
});

Route::get('/Point of Sales (POS)', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Point of Sales (POS)' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.pos',compact('products'));
});


Route::get('/Barcode', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Barcode' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.barcode',compact('products'));
});


Route::get('/Tinta Printer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tinta Printer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.tintaprinter',compact('products'));
});

Route::get('/Kertas Printer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kertas Printer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.kertasprinter',compact('products'));
});

Route::get('/Spare Part', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spare Part' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.sparepart',compact('products'));
});

Route::get('/Printer Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Printer Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.printerlainnya',compact('products'));
});



Route::get('/Mouse', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mouse' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.mouse',compact('products'));
});

Route::get('/Keyboard', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Keyboard' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.keyboard',compact('products'));
});

Route::get('/Mouse & Keyboard Bundle', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mouse & Keyboard Bundle' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.mousekeyboard',compact('products'));
});

Route::get('/Mousepad', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mousepad' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.mousepad',compact('products'));
});

Route::get('/Keypad', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Keypad' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.keypad',compact('products'));
});

Route::get('/Card Readers', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Card Readers' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.cardreaders',compact('products'));
});

Route::get('/Joystick & Wheel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Joystick & Wheel' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.joystick',compact('products'));
});

Route::get('/Scanner', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Scanner' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.scanner',compact('products'));
});


Route::get('/USB Hub', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'USB Hub' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.usbhub',compact('products'));
});

Route::get('/Webcam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Webcam' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.webcam',compact('products'));
});

Route::get('/CD & DVD Kosong', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CD & DVD Kosong' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.cdkosong',compact('products'));
});

Route::get('/Proyektor & Perangkat Presentasi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Proyektor & Perangkat Presentasi' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.proyektor',compact('products'));
});

Route::get('/TV Card & Tuner', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'TV Card & Tuner' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.tvcard',compact('products'));
});

Route::get('/Kabel & Konektor', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kabel & Konektor' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.kabeldankonektor',compact('products'));
});

Route::get('/Tools & Kits', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tools & Kits' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.toolkits',compact('products'));
});

Route::get('/Peripheral & Aksesoris Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Peripheral & Aksesoris Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.peripheraldanaksesorislainnya',compact('products'));
});



Route::get('/Modem USB', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Modem USB' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.modemusb',compact('products'));
});


Route::get('/Wireless Router', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Wireless Router' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.wirelessrouter',compact('products'));
});

Route::get('/Wired Router', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Wired Router' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.wiredrouter',compact('products'));
});

Route::get('/Wireless Adapter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Wireless Adapter' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.wirelessadapter',compact('products'));
});

Route::get('/Switch Internet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Switch Internet' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.switchinternet',compact('products'));
});

Route::get('/Power Over Ethernet', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Power Over Ethernet' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.poweroverethernet',compact('products'));
});

Route::get('/Powerline', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Powerline' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.powerline',compact('products'));
});

Route::get('/KVM Switch', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'KVM Switch' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.kvmswitch',compact('products'));
});

Route::get('/Network Transceiver', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Network Transceiver' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.networktransceiver',compact('products'));
});

Route::get('/Network Card', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Network Card' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.networkcard',compact('products'));
});

Route::get('/Print Server', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Print Server' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.printserver',compact('products'));
});

Route::get('/Antena Penguat Sinyal', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Antena Penguat Sinyal' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.antenapenguatsinyal',compact('products'));
});


Route::get('/Kabel & Konektor Networking', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kabel & Konektor Networking' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.kabeldankonektornetworking',compact('products'));
});

Route::get('/Networking Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Networking Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.networkinglainnya',compact('products'));
});

Route::get('/Networking Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Networking Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.networkinglainnya',compact('products'));
});

Route::get('/Processor Intel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Processor Intel' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.processorintel',compact('products'));
});

Route::get('/Processor AMD', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Processor AMD' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.processoramd',compact('products'));
});

Route::get('/Motherboard Intel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Motherboard Intel' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.motherboardintel',compact('products'));
});

Route::get('/Motherboard AMD', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Motherboard AMD' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.motherboardamd',compact('products'));
});

Route::get('/Memory', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.memory',compact('products'));
});

Route::get('/Monitor', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Monitor' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.monitor',compact('products'));
});

Route::get('/Power Supply Unit (PSU)', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Power Supply Unit (PSU)' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.psu',compact('products'));
});

Route::get('/Casing Komputer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Casing Komputer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.casingkomputer',compact('products'));
});

Route::get('/Sound Card', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sound Card' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.soundcard',compact('products'));
});

Route::get('/UPS', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'UPS' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.ups',compact('products'));
});

Route::get('/Stabilizer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Stabilizer' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.stabilizer',compact('products'));
});

Route::get('/CPU Cooler', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CPU Cooler' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.cpucooler',compact('products'));
});

Route::get('/VGA Cooler', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'VGA Cooler' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.vgacooler',compact('products'));
});

Route::get('/Memory Cooler', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Cooler' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.memorycooler',compact('products'));
});

Route::get('/Harddisk Cooler', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Harddisk Cooler' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.harddiskcooler',compact('products'));
});

Route::get('/Fan Case', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Fan Case' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.fancase',compact('products'));
});

Route::get('/Thermal Paste', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Thermal Paste' )->WhereNull('deleted_at')->get();

    return view('kategori-komputer.thermalpaste',compact('products'));
});

//===================Elektronik================================/

Route::get('/kategorielektronik', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Elektronik' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.elektronik',compact('products'));
});

Route::get('/vaporizer', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Vaporizer' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.vaporizer',compact('products'));
});

Route::get('/audio', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Audio' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.audio',compact('products'));
});

Route::get('/tv', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.tv',compact('products'));
});

Route::get('/kamerapengintai', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kamera Pengintai' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kamerapengintai',compact('products'));
});

Route::get('/mediaplayer', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Media Player' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mediaplayer',compact('products'));
});

Route::get('/telepon', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Telepon' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.telepon',compact('products'));
});

Route::get('/toolkit', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tool & Kit' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.toolkit',compact('products'));
});

Route::get('/pencahayaan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pencahayaan' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.pencahayaan',compact('products'));
});

Route::get('/peralatanlistrik', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Peralatan Listrik' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.peralatanlistrik',compact('products'));
});

Route::get('/peralatanelektroniklainnya', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Peralatan Elektronik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.peralatanelektroniklainnya',compact('products'));
});




Route::get('/Kapas Vape', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kapas Vape' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kapasvape',compact('products'));
});

Route::get('/Liquid', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Liquid' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.liquid',compact('products'));
});

Route::get('/Aksesoris Vape', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Vape' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.aksesorisvape',compact('products'));
});


Route::get('/MOD', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MOD' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mod',compact('products'));
});


Route::get('/Atomizer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Atomizer' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.atomizer',compact('products'));
});


Route::get('/Coil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Coil' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.coil',compact('products'));
});



Route::get('/Earphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Earphone' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.earphone',compact('products'));
});

Route::get('/Speaker', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Speaker' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.speaker',compact('products'));
});

Route::get('/Headphone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Headphone' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.headphone',compact('products'));
});

Route::get('/Headset', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Headset' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.headset',compact('products'));
});


Route::get('/LED TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'LED TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.ledtv',compact('products'));
});

Route::get('/LCD TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'LCD TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lcdtv',compact('products'));
});

Route::get('/Plasma TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Plasma TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.plasmatv',compact('products'));
});

Route::get('/Remote TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Remote TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.remotetv',compact('products'));
});

Route::get('/Bracket', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bracket' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.bracket',compact('products'));
});

Route::get('/Antena TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Antena TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.antenatv',compact('products'));
});


Route::get('/Kabel & Konektor TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kabel & Konektor TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kabeldankonektortv',compact('products'));
});


Route::get('/TV Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'TV Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.tvlainnya',compact('products'));
});



Route::get('/Paket Perangkat Keamanan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Paket Perangkat Keamanan' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.paketperangkatkeamanan',compact('products'));
});

Route::get('/Kamera CCTV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera CCTV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kameracctv',compact('products'));
});

Route::get('/IP Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'IP Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.ipcamera',compact('products'));
});

Route::get('/Fake Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Fake Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.fakecamera',compact('products'));
});

Route::get('/Spy Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spy Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.spycamera',compact('products'));
});

Route::get('/Wireless Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Wireless Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.wirelesscamera',compact('products'));
});

Route::get('/DVR', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'DVR' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.dvr',compact('products'));
});

Route::get('/Spare Part Kamera Pengintai', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Spare Part Kamera Pengintai' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.sparepartkamerapengintai',compact('products'));
});

Route::get('/Kamera Pengintai Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Pengintai Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kamerapengintailainnya',compact('products'));
});


Route::get('/MP3 Player', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MP3 Player' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mp3player',compact('products'));
});

Route::get('/MP4 Player', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'MP4 Player' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mp4player',compact('products'));
});


Route::get('/DVD Player', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'DVD Player' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.dvdplayer',compact('products'));
});

Route::get('/Receiver TV', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Receiver TV' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.receivertv',compact('products'));
});

Route::get('/Media Player Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Media Player Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mediaplayerlainnya',compact('products'));
});


Route::get('/Mesin Fax', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mesin Fax' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mesinfax',compact('products'));
});

Route::get('/Telepon Kabel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Telepon Kabel' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.teleponkabel',compact('products'));
});

Route::get('/Telepon Wireless', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Telepon Wireless' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.teleponwireless',compact('products'));
});

Route::get('/Telepon Satelit', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Telepon Satelit' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.teleponsatelit',compact('products'));
});

Route::get('/Telepon Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Telepon Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.teleponlainnya',compact('products'));
});



Route::get('/Bohlam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bohlam' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.bohlam',compact('products'));
});

Route::get('/Senter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Senter' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.senter',compact('products'));
});

Route::get('/Lampu Baca', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Baca' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampubaca',compact('products'));
});

Route::get('/Lampu Meja', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Meja' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampumeja',compact('products'));
});

Route::get('/Lampu Dinding', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Dinding' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampudinding',compact('products'));
});

Route::get('/Lampu Gantung', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Gantung' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampugantung',compact('products'));
});

Route::get('/Lampu Darurat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Darurat' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampudarurat',compact('products'));
});

Route::get('/Lampu Proyektor', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lampu Proyektor' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.lampuproyektor',compact('products'));
});

Route::get('/Pencahayaan Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pencahayaan Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.pencahayaanlainnya',compact('products'));
});

Route::get('/Stop Kontak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Stop Kontak' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.stopkontak',compact('products'));
});

Route::get('/Pengaman Stop Kontak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pengaman Stop Kontak' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.pengamanstopkontak',compact('products'));
});

Route::get('/Saklar', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Saklar' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.saklar',compact('products'));
});

Route::get('/Penghemat Listrik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Penghemat Listrik' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.penghematlistrik',compact('products'));
});

Route::get('/Anti Petir', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Anti Petir' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.antipetir',compact('products'));
});

Route::get('/Alarm', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alarm' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.alarm',compact('products'));
});

Route::get('/Bel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bel' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.bel',compact('products'));
});

Route::get('/Listrik Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Listrik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.listriklainnya',compact('products'));
});

Route::get('/Baterai', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.baterai',compact('products'));
});

Route::get('/Kipas Angin Listrik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kipas Angin Listrik' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kipasanginlistrik',compact('products'));
});

Route::get('/Stun Gun', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Stun Gun' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.stungun',compact('products'));
});

Route::get('/GPS', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'GPS' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.gps',compact('products'));
});

Route::get('/Perangkat Elektronik Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perangkat Elektronik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.perangkatelektroniklainnya',compact('products'));
});

Route::get('/Kulkas', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kulkas' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.kulkas',compact('products'));
});

Route::get('/Air Conditioner (AC)', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Air Conditioner (AC)' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.ac',compact('products'));
});


Route::get('/Mesin Cuci', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mesin Cuci' )->WhereNull('deleted_at')->get();

    return view('kategori-elektronik.mesincuci',compact('products'));
});



//===================Kategori Kamera=================================/

Route::get('/kamera', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kamera',compact('products'));
});

Route::get('/kameradigital', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kamera Digital' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameradigital',compact('products'));
});

Route::get('/kameravideo', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kamera Video' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameravideo',compact('products'));
});

Route::get('/kameraanalog', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kamera Analog' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameraanalog',compact('products'));
});

Route::get('/lensaaksesoris', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Lensa & Aksesoris' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lensaaksesoris',compact('products'));
});

Route::get('/flashaksesoris', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Flash & Aksesoris' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.flashaksesoris',compact('products'));
});

Route::get('/aksesoriskamera', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.aksesoriskamera',compact('products'));
});

Route::get('/bateraichargergrip', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baterai,Charger & Grip' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.bateraichargergrip',compact('products'));
});

Route::get('/cleanertoolkit', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Cleaner & Tool Kit' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.cleanertoolkit',compact('products'));
});

Route::get('/framealbumrollfilm', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Frame,Album & Roll Film' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.framealbumrollfilm',compact('products'));
});



Route::get('/Kamera DSLR', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera DSLR' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameradslr',compact('products'));
});

Route::get('/Kamera Mirrorless', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Mirrorless' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameramirrorless',compact('products'));
});

Route::get('/Action Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Action Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.actioncamera',compact('products'));
});

Route::get('/Kamera Digital lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Digital lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameradigitallainnya',compact('products'));
});

Route::get('/Kamera Pocket - Prosumer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Pocket - Prosumer' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kamerapocket',compact('products'));
});



Route::get('/Kamera Video Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Video Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameravideolainnya',compact('products'));
});

Route::get('/Drone', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Drone' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.drone',compact('products'));
});

Route::get('/Camcorder', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Camcorder' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.camcorder',compact('products'));
});

Route::get('/Lomo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lomo' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lomo',compact('products'));
});


Route::get('/Kamera Analog Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Analog Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kameraanaloglainnya',compact('products'));
});

Route::get('/Kamera Instan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kamera Instan' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kamerainstan',compact('products'));
});


Route::get('/Lensa', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lensa' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lensa',compact('products'));
});

Route::get('/Filter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Filter' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.filter',compact('products'));
});

Route::get('/Cap', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cap' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.cap',compact('products'));
});

Route::get('/Hood', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hood' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.hood',compact('products'));
});

Route::get('/Adapter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Adapter' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.adapter',compact('products'));
});


Route::get('/Converter - Teleconverter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Converter - Teleconverter' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.converter',compact('products'));
});


Route::get('/Lensa & Aksesoris Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lensa & Aksesoris Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lensalainnya',compact('products'));
});

Route::get('/Flash', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Flash' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.flash',compact('products'));
});

Route::get('/Flash Trigger', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Flash Trigger' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.flashtrigger',compact('products'));
});

Route::get('/Diffuser', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Diffuser' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.diffuser',compact('products'));
});

Route::get('/Hot shoe', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hot shoe' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.hotshoe',compact('products'));
});

Route::get('/Flash & Aksesoris Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Flash & Aksesoris Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.flashlainnya',compact('products'));
});

Route::get('/Tripod & Stabillizer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tripod & Stabillizer' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.tripod',compact('products'));
});

Route::get('/Tas & Casing Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas & Casing Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.taskamera',compact('products'));
});

Route::get('/Waterproof Case', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Waterproof Case' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.waterproofcase',compact('products'));
});

Route::get('/Strap Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Strap Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.strapkamera',compact('products'));
});

Route::get('/Lighting & Studio', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lighting & Studio' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lightingstudio',compact('products'));
});

Route::get('/Remote - Wireless', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Remote - Wireless' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.remotewireless',compact('products'));
});

Route::get('/Kabel Konektor Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kabel Konektor Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.kabelkonektorkamera',compact('products'));
});

Route::get('/Memory Card Camera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Card Camera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.memorycardcamera',compact('products'));
});

Route::get('/Aksesoris Kamera Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Kamera Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.aksesoriskameralainnya',compact('products'));
});




Route::get('/Baterai Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.bateraikamera',compact('products'));
});

Route::get('/Charger Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Charger Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.chargerkamera',compact('products'));
});

Route::get('/Battery Grip Kamera', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Battery Grip Kamera' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.batterygripkamera',compact('products'));
});


Route::get('/Baterai,Charger & Grip Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baterai,Charger & Grip Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.batterygripkameralainnya',compact('products'));
});

Route::get('/Cleaning Kit', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cleaning Kit' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.cleaningkit',compact('products'));
});

Route::get('/Lenspen', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lenspen' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.lenspen',compact('products'));
});

Route::get('/Blower', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Blower' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.blower',compact('products'));
});


Route::get('/Cleaning Cloth', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cleaning Cloth' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.cleaningcloth',compact('products'));
});


Route::get('/Dry Box', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dry Box' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.drybox',compact('products'));
});


Route::get('/Silica Gel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Silica Gel' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.silicagel',compact('products'));
});


Route::get('/Cleaner & Tool Kit Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cleaner & Tool Kit Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.cleanerlainnya',compact('products'));
});


Route::get('/Frame Foto', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Frame Foto' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.framefoto',compact('products'));
});

Route::get('/Roll Film', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Roll Film' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.rollfilm',compact('products'));
});

Route::get('/Printer Foto', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Printer Foto' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.printerfoto',compact('products'));
});

Route::get('/Frame Digital', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Frame Digital' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.framedigital',compact('products'));
});

Route::get('/Album', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Album' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.album',compact('products'));
});

Route::get('/DVs', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'DVs' )->WhereNull('deleted_at')->get();

    return view('kategori-kamera.DVs',compact('products'));
});

//============================Game Console =====================================================================//

Route::get('/kategorigaming', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.gaming',compact('products'));
});

Route::get('/gameconsole', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Game Console' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.gameconsole',compact('products'));
});

Route::get('/cdgame', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'CD Game' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.cdgame',compact('products'));
});

Route::get('/pcgaming', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'PC Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.kategoripcgaming',compact('products'));
});


Route::get('/Aksesoris Game Console', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Game Console' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.aksesorisgameconsole',compact('products'));
});

Route::get('/Komponen Game Console', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Komponen Game Console' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.komponengameconsole',compact('products'));
});

Route::get('/Wheels', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Wheels' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.wheels',compact('products'));
});


Route::get('/Game Boy dan Game Retro', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Game Boy dan Game Retro' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.gameboy',compact('products'));
});

Route::get('/Joystick', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Joystick' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.joystick',compact('products'));
});

Route::get('/Nintendo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Nintendo' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.nintendo',compact('products'));
});

Route::get('/PlayStation', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'PlayStation' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.playstation',compact('products'));
});

Route::get('/Memory Card Game Console', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Memory Card Game Console' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.memorycardgameconsole',compact('products'));
});

Route::get('/Xbox', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Xbox' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.xbox',compact('products'));
});

Route::get('/CD Playstation', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CD Playstation' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.cdplaystation',compact('products'));
});

Route::get('/CD Nintendo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CD Nintendo' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.cdnintendo',compact('products'));
});


Route::get('/CD Xbox', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CD Xbox' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.cdxbox',compact('products'));
});

Route::get('/CD PC dan Laptop Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'CD PC dan Laptop Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.cdpcdanlaptopgaming',compact('products'));
});


Route::get('/Komponen Komputer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Komponen Komputer' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.komponenkomputer',compact('products'));
});

Route::get('/Mouse Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mouse Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.mousegaming',compact('products'));
});

Route::get('/Laptop Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Laptop Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.laptopgaming',compact('products'));
});

Route::get('/PC Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'PC Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.pcgaming',compact('products'));
});

Route::get('/Mouse & Keyboard Gaming Bundle', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mouse & Keyboard Gaming Bundle' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.mousekeyboardgamingbundle',compact('products'));
});

Route::get('/Aksesoris PC Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris PC Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.aksesorispcgaming',compact('products'));
});

Route::get('/PC Controller', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'PC Controller' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.pccontroller',compact('products'));
});

Route::get('/Keyboard Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Keyboard Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.keyboardgaming',compact('products'));
});

Route::get('/Virtual Reality Glasses', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Virtual Reality Glasses' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.virtualrealityglasses',compact('products'));
});

Route::get('/Headset Gaming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Headset Gaming' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.headsetgaming',compact('products'));
});

Route::get('/Monitor', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Monitor' )->WhereNull('deleted_at')->get();

    return view('kategori-gaming.monitor',compact('products'));
});


//===================Kategori Busana Muslim=================================/

Route::get('/kategoribusanamuslim', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Busana Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.busanamuslim',compact('products'));
});

Route::get('/atasanmuslim', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Atasan Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.atasanmuslim',compact('products'));
});

Route::get('/bawahanmuslim', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Bawahan Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.bawahanmuslim',compact('products'));
});

Route::get('/dressmuslim', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Dress Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.dressmuslim',compact('products'));
});

Route::get('/outwearmuslim', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Outwear Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.outwearmuslim',compact('products'));
});

Route::get('/scarf', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Scarf' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.scarf',compact('products'));
});

Route::get('/aksesorisjilbab', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Jilbab' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.aksesorisjilbab',compact('products'));
});

Route::get('/perlengkapanibadah', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Ibadah' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.perlengkapanibadah',compact('products'));
});

Route::get('/bajumuslimanak', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baju Muslim Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.bajumuslimanak',compact('products'));
});

Route::get('/setelanmuslim', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Setelan Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.setelanmuslim',compact('products'));
});




Route::get('/Kemeja Muslim', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.kemejamuslim',compact('products'));
});

Route::get('/Blouse Muslim', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Blouse Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.blousemuslim',compact('products'));
});

Route::get('/Baju Koko', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Koko' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.bajukoko',compact('products'));
});


Route::get('/Manset Muslim', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Manset Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.mansetmuslim',compact('products'));
});



Route::get('/Rok Muslim', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Rok Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.rokmuslim',compact('products'));
});

Route::get('/Palazzo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Palazzo' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.palazzo',compact('products'));
});

Route::get('/Legging', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Legging' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.legging',compact('products'));
});

Route::get('/Celana Muslim', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Muslim' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.celanamuslim',compact('products'));
});


Route::get('/Jumpsuit', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jumpsuit' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.jumpsuit',compact('products'));
});

Route::get('/Kaftan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaftan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.kaftan',compact('products'));
});

Route::get('/Gamis', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gamis' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.gamis',compact('products'));
});

Route::get('/Abaya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Abaya' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.abaya',compact('products'));
});


Route::get('/Cape', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cape' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.cape',compact('products'));
});

Route::get('/Coat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Coat' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.coat',compact('products'));
});


Route::get('/Vest', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Vest' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.vest',compact('products'));
});


Route::get('/Cardigan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cardigan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.cardigan',compact('products'));
});


Route::get('/Khimar', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Khimar' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.khimar',compact('products'));
});

Route::get('/Pashmina', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pashmina' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.pashmina',compact('products'));
});

Route::get('/Hijab Segi Empat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hijab Segi Empat' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.hijabsegiempat',compact('products'));
});

Route::get('/Ciput', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ciput' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.ciput',compact('products'));
});

Route::get('/Hijab Instan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hijab Instan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.hijabinstan',compact('products'));
});

Route::get('/Hijab Instan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hijab Instan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.hijabinstan',compact('products'));
});


Route::get('/Brooch', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Brooch' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.brooch',compact('products'));
});

Route::get('/Headpiece', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Headpiece' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.headpiece',compact('products'));
});

Route::get('/Tasbih', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tasbih' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.tasbih',compact('products'));
});

Route::get('/Sajadah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sajadah' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.sajadah',compact('products'));
});

Route::get('/Mukena', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mukena' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.mukena',compact('products'));
});

Route::get('/Peci', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Peci' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.peci',compact('products'));
});

Route::get('/Sarung', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sarung' )->WhereNull('deleted_at')->get();

    return view('kategori-busanamuslim.sarung',compact('products'));
});

//===============================Busana Anak========================================

Route::get('/kategoribusanaanak', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Busana Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kategoribusanaanak',compact('products'));
});

Route::get('/aksesorisrambutanak', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Rambut Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.aksesorisrambutanak',compact('products'));
});

Route::get('/tasanak', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tas Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.tasanak',compact('products'));
});

Route::get('/perhiasananak', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perhiasan Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.perhiasananak',compact('products'));
});

Route::get('/aksesorisanak', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.aksesorisanak',compact('products'));
});

Route::get('/sepatuanaklaki', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Sepatu Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatuanaklaki',compact('products'));
});

Route::get('/sepatuanakperempuan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Sepatu Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatuanakperempuan',compact('products'));
});

Route::get('/pakaiananaklaki', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pakaian Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiananaklaki',compact('products'));
});

Route::get('/pakaiananakperempuan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Pakaian Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiananakperempuan',compact('products'));
});


Route::get('/Bando', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bando' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bando',compact('products'));
});

Route::get('/Ikat Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ikat Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.ikatrambut',compact('products'));
});

Route::get('/Jepitan Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jepitan Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jepitanrambut',compact('products'));
});

Route::get('/Tas Selempang Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Selempang Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.tasselempanganak',compact('products'));
});

Route::get('/Tas Selempang Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Selempang Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.tasselempanganak',compact('products'));
});

Route::get('/Tas Koper Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Koper Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.taskoperanak',compact('products'));
});

Route::get('/Tas Backpack Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Backpack Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.tasbackpackanak',compact('products'));
});


Route::get('/Gelang Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gelang Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.gelanganak',compact('products'));
});

Route::get('/Anting Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Anting Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.antinganak',compact('products'));
});


Route::get('/Kalung Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kalung Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kalunganak',compact('products'));
});


Route::get('/Cincin Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cincin Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.cincinanak',compact('products'));
});


Route::get('/Kacamata Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kacamata Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kacamataanak',compact('products'));
});

Route::get('/Jam Tangan Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jam Tangan Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jamtangananak',compact('products'));
});

Route::get('/Ikat Pinggang Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ikat Pinggang Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.ikatpingganganak',compact('products'));
});

Route::get('/Dompet Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dompet Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.dompetanak',compact('products'));
});

Route::get('/Topi Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Topi Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.topianak',compact('products'));
});

Route::get('/Kaos Kaki Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Kaki Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kaoskakianaklaki',compact('products'));
});

Route::get('/Sandal Jepit Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sandal Jepit Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sandaljepitanaklaki',compact('products'));
});

Route::get('/Sepatu Sandal Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Sandal Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatusandalanaklaki',compact('products'));
});

Route::get('/Boots Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Boots Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bootsanaklaki',compact('products'));
});

Route::get('/Sepatu Kets Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Kets Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatuketsanaklaki',compact('products'));
});

Route::get('/Kaos Kaki Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Kaki Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kaoskakianakperempuan',compact('products'));
});

Route::get('/Sandal Jepit Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sandal Jepit Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sandaljepitanakperempuan',compact('products'));
});

Route::get('/Sepatu Sandal Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Sandal Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatusandalanakperempuan',compact('products'));
});

Route::get('/Boots Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Boots Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bootsanakperempuan',compact('products'));
});

Route::get('/Sepatu Kets Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Kets Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatuketsanakperempuan',compact('products'));
});

Route::get('/Flat Shoes Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Flat Shoes Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.flatshoesanakperempuan',compact('products'));
});

Route::get('/Sepatu Pesta Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu Pesta Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.sepatupestaanakperempuan',compact('products'));
});



Route::get('/Kaos Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kaosanaklaki',compact('products'));
});

Route::get('/Celana Pendek Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Pendek Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanapendekanaklaki',compact('products'));
});

Route::get('/Baju Setelan Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Setelan Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bajusetelananaklaki',compact('products'));
});

Route::get('/Celana Panjang Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Panjang Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanapanjanganaklaki',compact('products'));
});

Route::get('/Hoodies Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hoodies Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.hoodiesanaklaki',compact('products'));
});

Route::get('/Jaket & Blazer Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jaket & Blazer Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jaketblazeranaklaki',compact('products'));
});

Route::get('/Celana Jeans Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Jeans Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanajeansanaklaki',compact('products'));
});

Route::get('/JumpSuits Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'JumpSuits Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jumpsuitsanaklaki',compact('products'));
});

Route::get('/Kemeja Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kemejaanaklaki',compact('products'));
});

Route::get('/Kostum Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kostum Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kostumanaklaki',compact('products'));
});

Route::get('/Pakaian Dalam Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pakaian Dalam Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiandalamanaklaki',compact('products'));
});

Route::get('/Baju Tidur Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Tidur Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bajutiduranaklaki',compact('products'));
});

Route::get('/Seragam Anak Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Seragam Anak Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.seragamanaklaki',compact('products'));
});

Route::get('/Pakaian Anak Laki-Laki Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pakaian Anak Laki-Laki Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiananaklakilainnya',compact('products'));
});



Route::get('/Kaos Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kaos Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kaosanakperempuan',compact('products'));
});

Route::get('/Celana Pendek Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Pendek Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanapendekanakperempuan',compact('products'));
});

Route::get('/Baby Dolls Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baby Dolls Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.babydollsanakperempuan',compact('products'));
});

Route::get('/Baju Setelan Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Setelan Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bajusetelananakperempuan',compact('products'));
});

Route::get('/Blouse Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Blouse Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.blouseanakperempuan',compact('products'));
});

Route::get('/Bolero Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bolero Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.boleroanakperempuan',compact('products'));
});

Route::get('/Cardigan Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cardigan Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.cardigananakperempuan',compact('products'));
});

Route::get('/Celana Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanaanakperempuan',compact('products'));
});

Route::get('/Dress Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dress Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.dressanakperempuan',compact('products'));
});

Route::get('/Hoodies Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hoodies Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.hoodiesanakperempuan',compact('products'));
});

Route::get('/Jaket & Blazer Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jaket & Blazer Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jaketblazeranakperempuan',compact('products'));
});

Route::get('/Celana Jeans Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Jeans Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.celanajeansanakperempuan',compact('products'));
});

Route::get('/JumpSuits Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'JumpSuits Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.jumpsuitsanakperempuan',compact('products'));
});


Route::get('/Kemeja Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemeja Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kemejaanakperempuan',compact('products'));
});

Route::get('/Kostum Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kostum Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.kostumanakperempuan',compact('products'));
});

Route::get('/Legging Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Legging Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.legginganakperempuan',compact('products'));
});

Route::get('/Pakaian Dalam Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pakaian Dalam Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiandalamanakperempuan',compact('products'));
});

Route::get('/Baju Tidur Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Tidur Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.bajutiduranakperempuan',compact('products'));
});

Route::get('/Rok Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Rok Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.rokanakperempuan',compact('products'));
});

Route::get('/Seragam Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Seragam Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.seragamanakperempuan',compact('products'));
});

Route::get('/Tank Top Anak Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tank Top Anak Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.tanktopanakperempuan',compact('products'));
});

Route::get('/Pakaian Anak Perempuan Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pakaian Anak Perempuan Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-busanaanak.pakaiananakperempuanlainnya',compact('products'));
});


//===========================Kategori Kecantikan =======================================================================================//

Route::get('/kategorikecantikan', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Kecantikan' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.kecantikan',compact('products'));
});

Route::get('/stylingrambutwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Styling Rambut Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.stylingrambutwanita',compact('products'));
});

Route::get('/makeupmata', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Make up Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.makeupmata',compact('products'));
});

Route::get('/makeupwajah', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Make Up Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.makeupwajah',compact('products'));
});

Route::get('/handnailart', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Hand & Nail Art' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.handnailart',compact('products'));
});

Route::get('/setpalettemakeup', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Set & Palette Makeup' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.setpalettemakeup',compact('products'));
});

Route::get('/eyebrowkit', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Eyebrow Kit' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyebrowkit',compact('products'));
});

Route::get('/aksesorismakeup', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris & Alat Make Up' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.aksesorismakeup',compact('products'));
});

Route::get('/perawatankulit', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perawatan Kulit' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.perawatankulit',compact('products'));
});

Route::get('/lipcolor', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Lip Color & Lip Care' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipcolor',compact('products'));
});

Route::get('/perawatanwajah', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perawatan Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.perawatanwajah',compact('products'));
});




Route::get('/Alat Potong Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Potong Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.alatpotongrambut',compact('products'));
});


Route::get('/Aksesoris Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Aksesoris Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.aksesorisrambut',compact('products'));
});


Route::get('/Rambut Palsu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Rambut Palsu' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.rambutpalsu',compact('products'));
});

Route::get('/Produk Styling Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Produk Styling Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.produkstylingrambut',compact('products'));
});

Route::get('/Catokan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Catokan' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.catokan',compact('products'));
});

Route::get('/Hair Dryer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hair Dryer' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.hairdryer',compact('products'));
});

Route::get('/Sisir', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sisir' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.sisir',compact('products'));
});

Route::get('/Hair Extension', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hair Extension' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.hairextension',compact('products'));
});


Route::get('/Eye Primer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Eye Primer' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyeprimer',compact('products'));
});


Route::get('/Lem Bulu Mata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lem Bulu Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lembulumata',compact('products'));
});

Route::get('/Bulu Mata Palsu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bulu Mata Palsu' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.bulumatapalsu',compact('products'));
});

Route::get('/Mascara', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mascara' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.mascara',compact('products'));
});

Route::get('/Eye Liner', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Eye Liner' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyeliner',compact('products'));
});

Route::get('/Eyelid Tape', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Eyelid Tape' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyelidtape',compact('products'));
});

Route::get('/Pinset & Penjepit Bulu Mata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pinset & Penjepit Bulu Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pinset',compact('products'));
});

Route::get('/Eyeshadow', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Eyeshadow' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyeshadow',compact('products'));
});


Route::get('/Blush on', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Blush on' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.blushon',compact('products'));
});

Route::get('/BB cream & CC cream,BB cushion', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'BB cream & CC cream,BB cushion' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.bbcream',compact('products'));
});

Route::get('/Bronzer & Highlighter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bronzer & Highlighter' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.bronzer',compact('products'));
});

Route::get('/Setting Spray', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Setting Spray' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.settingspray',compact('products'));
});

Route::get('/Bedak Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bedak Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.bedakwajah',compact('products'));
});

Route::get('/Face Primer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Face Primer' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.faceprimer',compact('products'));
});

Route::get('/Concealer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Concealer' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.concealer',compact('products'));
});

Route::get('/Foundation', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Foundation' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.foundation',compact('products'));
});


Route::get('/Henna', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Henna' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.henna',compact('products'));
});

Route::get('/Stiker Kuku', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Stiker Kuku' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.stikerkuku',compact('products'));
});

Route::get('/Alat & Aksesoris Nail Art', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat & Aksesoris Nail Art' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.alatnailart',compact('products'));
});

Route::get('/Fake Nail', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Fake Nail' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.fakenail',compact('products'));
});

Route::get('/Kutek', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kutek' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.kutek',compact('products'));
});

Route::get('/Portable Nail Dryer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Portable Nail Dryer' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.portablenaildryer',compact('products'));
});

Route::get('/Lem Kuku Palsu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lem Kuku Palsu' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lemkukupalsu',compact('products'));
});

Route::get('/Pensil Alis', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pensil Alis' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pensilalis',compact('products'));
});

Route::get('/Cetakan dan Sisir Alis', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cetakan dan Sisir Alis' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.cetakansisiralis',compact('products'));
});

Route::get('/Eyebrow Powder & Pomade', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Eyebrow Powder & Pomade' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.eyebrowpowder',compact('products'));
});

Route::get('/Pinset dan Cukuran Alis', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pinset dan Cukuran Alis' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pinsetdancukuranalis',compact('products'));
});


Route::get('/Tas Kosmetik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Kosmetik' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.taskosmetik',compact('products'));
});

Route::get('/Set Makeup Brush', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Set Makeup Brush' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.setmakeupbrush',compact('products'));
});

Route::get('/Pembersih Brush Make up', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pembersih Brush Make up' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pembersihbrushmakeup',compact('products'));
});

Route::get('/Pinset Komedo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pinset Komedo' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pinsetkomedo',compact('products'));
});

Route::get('/Laci & Tempat Makeup', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Laci & Tempat Makeup' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lacitempatmakeup',compact('products'));
});

Route::get('/Beauty Sponge', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Beauty Sponge' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.beautysponge',compact('products'));
});

Route::get('/Kemasan Make up', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kemasan Make up' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.kemasanmakeup',compact('products'));
});

Route::get('/Cermin Make Up', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cermin Make Up' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.cerminmakeup',compact('products'));
});

Route::get('/Penghilang Bekas Jerawat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Penghilang Bekas Jerawat' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.penghilangbekasjerawat',compact('products'));
});

Route::get('/Penghilang Bekas Luka', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Penghilang Bekas Luka' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.penghilangbekasluka',compact('products'));
});

Route::get('/Anti Selulit & Stretchmark', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Anti Selulit & Stretchmark' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.antiselulit',compact('products'));
});


Route::get('/Lip Tint', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lip Tint' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.liptint',compact('products'));
});

Route::get('/Lipstik dan Pensil Bibir', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lipstik dan Pensil Bibir' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipstikdanpensilbibir',compact('products'));
});

Route::get('/Lip Balm & Oil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lip Balm & Oil' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipbalmoil',compact('products'));
});

Route::get('/Lipgloss', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lipgloss' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipgloss',compact('products'));
});

Route::get('/Lip Scrub', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lip Scrub' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipscrub',compact('products'));
});

Route::get('/Lip Cream', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lip Cream' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipcream',compact('products'));
});


Route::get('/Lip Cream', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Lip Cream' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.lipcream',compact('products'));
});


Route::get('/Cleanser', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cleanser' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.cleanser',compact('products'));
});

Route::get('/Serum & Masker Mata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Serum & Masker Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.serummata',compact('products'));
});

Route::get('/Krim Mata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Krim Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.krimmata',compact('products'));
});

Route::get('/Skin Care Tools', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Skin Care Tools' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.skincaretools',compact('products'));
});

Route::get('/Serum & Minyak Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Serum & Minyak Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.serumwajah',compact('products'));
});

Route::get('/Masker Bibir', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Masker Bibir' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.maskerbibir',compact('products'));
});

Route::get('/Pembersih Make Up', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pembersih Make Up' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.pembersihmakeup',compact('products'));
});

Route::get('/Scrub & Peeling Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Scrub & Peeling Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.scrubwajah',compact('products'));
});

Route::get('/Krim Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Krim Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.krimwajah',compact('products'));
});

Route::get('/Masker Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Masker Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.maskerwajah',compact('products'));
});

Route::get('/Sunblock Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sunblock Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.sunblockwajah',compact('products'));
});

Route::get('/Toner', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Toner' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.toner',compact('products'));
});

Route::get('/Paket Perawatan Wajah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Paket Perawatan Wajah' )->WhereNull('deleted_at')->get();

    return view('kategori-kecantikan.paketperawatanwajah',compact('products'));
});



//===========================Kategori Kesehatan ==========================================//

Route::get('/kategorikesehatan', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Kesehatan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kesehatan',compact('products'));
});

Route::get('/obatobatan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Obat-Obatan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatobatan',compact('products'));
});

Route::get('/maternity', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Maternity' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.maternity',compact('products'));
});

Route::get('/alatbantukesehatan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Alat Bantu Kesehatan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatbantukesehatan',compact('products'));
});

Route::get('/essentialoil', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Essential Oil' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.essentialoil',compact('products'));
});

Route::get('/kesehatanwanita', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kesehatan Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kesehatanwanita',compact('products'));
});

Route::get('/dietvitamin', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Diet & Vitamin' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.dietvitamin',compact('products'));
});

Route::get('/perlengkapanmedis', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Medis' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.perlengkapanmedis',compact('products'));
});

Route::get('/kesehatanlainnya', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Kesehatan Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kesehatanlainnya',compact('products'));
});






Route::get('/Obat Batuk dan Pilek', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Batuk dan Pilek' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatbatukpilek',compact('products'));
});

Route::get('/Obat Penumbuh Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Penumbuh Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatpenumbuhrambut',compact('products'));
});

Route::get('/Obat Jerawat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Jerawat' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatjerawat',compact('products'));
});

Route::get('/Obat Pencernaan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Pencernaan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatpencernaan',compact('products'));
});

Route::get('/Obat Sakit Kepala', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Sakit Kepala' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatsakitkepala',compact('products'));
});

Route::get('/Obat Diabetes', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Diabetes' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatdiabetes',compact('products'));
});

Route::get('/Obat Generik', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Generik' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatgenerik',compact('products'));
});

Route::get('/Obat Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatlainnya',compact('products'));
});

Route::get('/Koyo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Koyo' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.koyo',compact('products'));
});

Route::get('/Obat herbal', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat herbal' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatherbal',compact('products'));
});

Route::get('/Salep', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Salep' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.salep',compact('products'));
});

Route::get('/Vitamin Ibu Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Vitamin Ibu Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.vitaminibuhamil',compact('products'));
});

Route::get('/Nipple Cream', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Nipple Cream' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.nipplecream',compact('products'));
});

Route::get('/Susu Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Susu Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.susuhamil',compact('products'));
});

Route::get('/Kehamilan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kehamilan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kehamilan',compact('products'));
});

Route::get('/Asi Booster', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Asi Booster' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.asibooster',compact('products'));
});


Route::get('/Alat Pelangsing', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Pelangsing' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatpelangsing',compact('products'));
});

Route::get('/Termometer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Termometer' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.termometer',compact('products'));
});

Route::get('/Behel', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Behel' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.behel',compact('products'));
});

Route::get('/Kacamata Terapi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kacamata Terapi' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kacamataterapi',compact('products'));
});

Route::get('/Alat Bantu Pendengaran', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Bantu Pendengaran' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatbantupendengaran',compact('products'));
});

Route::get('/Peralatan P3k', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Peralatan P3k' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.peralatanp3k',compact('products'));
});

Route::get('/Timbangan Badan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Timbangan Badan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.timbanganbadan',compact('products'));
});

Route::get('/Alat Pijat', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Pijat' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatpijat',compact('products'));
});

Route::get('/Earmuff', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Earmuff' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.earmuff',compact('products'));
});

Route::get('/Obat Menstruasi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Menstruasi' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatmenstruasi',compact('products'));
});

Route::get('/Perawatan Tubuh Wanita', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Tubuh Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.perawatantubuhwanita',compact('products'));
});

Route::get('/Alat Kontrasepsi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Kontrasepsi' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatkontrasepsi',compact('products'));
});

Route::get('/Produk Kesehatan Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Produk Kesehatan Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.produkkesehatanlainnya',compact('products'));
});

Route::get('/Obat Menopause', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Menopause' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatmenopause',compact('products'));
});

Route::get('/Kesehatan Wanita Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kesehatan Wanita Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.kesehatanwanitalainnya',compact('products'));
});

Route::get('/Detox', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Detox' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.detox',compact('products'));
});

Route::get('/Obat Pelangsing', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Pelangsing' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.obatpelangsing',compact('products'));
});

Route::get('/Suplemen Fitness', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Suplemen Fitness' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.suplemenfitness',compact('products'));
});

Route::get('/Vitamin & Nutrisi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Vitamin & Nutrisi' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.vitaminnutrisi',compact('products'));
});

Route::get('/Penambah Berat Badan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Penambah Berat Badan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.penambahberatbadan',compact('products'));
});

Route::get('/Vitamin Daya Tahan Tubuh', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Vitamin Daya Tahan Tubuh' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.vitamindayatahantubuh',compact('products'));
});

Route::get('/Diet & Vitamin Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Diet & Vitamin Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.dietvitaminlainnya',compact('products'));
});


Route::get('/Alat Diagnosa', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Diagnosa' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatdiagnosa',compact('products'));
});

Route::get('/Alat Terapi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Terapi' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatterapi',compact('products'));
});

Route::get('/Alat Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatlainnya',compact('products'));
});

Route::get('/Alat Monitor Kesehatan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Monitor Kesehatan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatmonitorkesehatan',compact('products'));
});

Route::get('/Alat Bantu Jalan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Bantu Jalan' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatbantujalan',compact('products'));
});

Route::get('/Alat Laboratorium', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Laboratorium' )->WhereNull('deleted_at')->get();

    return view('kategori-kesehatan.alatlaboratorium',compact('products'));
});


//==================================Kategori Perawatan Tubuh================================================================================/

Route::get('/kategoriperawatantubuh', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Perawatan Tubuh' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.perawatantubuh',compact('products'));
});

Route::get('/grooming', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Grooming' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.grooming',compact('products'));
});

Route::get('/parfumcologne', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Parfum,Cologne, & Fragrance' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.parfumcologne',compact('products'));
});

Route::get('/telinga', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Telinga' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.telinga',compact('products'));
});

Route::get('/produkkewanitaan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Produk Kewanitaan' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.produkkewanitaan',compact('products'));
});

Route::get('/perawatanrambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.perawatanrambut',compact('products'));
});

Route::get('/perawatanmata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.perawatanmata',compact('products'));
});

Route::get('/mandidanperawatantubuh', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mandi & Perawatan Tubuh' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.mandidanperawatantubuh',compact('products'));
});

Route::get('/perawatankaki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Kaki' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.kategoriperawatankaki',compact('products'));
});

Route::get('/kesehatangigi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kesehatan Gigi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.kesehatangigi',compact('products'));
});




Route::get('/Hair Foam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hair Foam' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.hairfoam',compact('products'));
});

Route::get('/Alat & Krim Cukur', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat & Krim Cukur' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.alatkrimcukur',compact('products'));
});

Route::get('/Sisir Saku', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sisir Saku' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sisirsaku',compact('products'));
});

Route::get('/Hair Wax & Pomade', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hair Wax & Pomade' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.hairwaxpomade',compact('products'));
});


Route::get('/Parfum & Cologne Unisex', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Parfum & Cologne Unisex' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.parfumunisex',compact('products'));
});

Route::get('/Parfum & Cologne Wanita', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Parfum & Cologne Wanita' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.parfumwanita',compact('products'));
});

Route::get('/Parfum & Cologne Anak-Anak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Parfum & Cologne Anak-Anak' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.parfumanakanak',compact('products'));
});

Route::get('/Parfum & Cologne Pria', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Parfum & Cologne Pria' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.parfumpria',compact('products'));
});

Route::get('/Ear Candle', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Ear Candle' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.earcandle',compact('products'));
});

Route::get('/Pembersih Telinga', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pembersih Telinga' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pembersihtelinga',compact('products'));
});


Route::get('/Tampon', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tampon' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.tampon',compact('products'));
});


Route::get('/Sabun Kewanitaan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sabun Kewanitaan' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sabunkewanitaan',compact('products'));
});


Route::get('/Pembalut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pembalut' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pembalut',compact('products'));
});

Route::get('/Shampoo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Shampoo' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.shampoo',compact('products'));
});

Route::get('/Pewarna Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pewarna Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pewarnarambut',compact('products'));
});

Route::get('/Hair tonic', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hair tonic' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.hairtonic',compact('products'));
});

Route::get('/Masker Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Masker Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.maskerrambut',compact('products'));
});

Route::get('/Conditioner', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Conditioner' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.conditioner',compact('products'));
});

Route::get('/Minyak & Serum Rambut', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Minyak & Serum Rambut' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.minyakserumrambut',compact('products'));
});

Route::get('/Dry Shampoo', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dry Shampoo' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.dryshampoo',compact('products'));
});


Route::get('/Tetes Mata', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tetes Mata' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.tetesmata',compact('products'));
});

Route::get('/Softlens', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Softlens' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.softlens',compact('products'));
});

Route::get('/Cairan Pembersih Softlens', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cairan Pembersih Softlens' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.cairanpembersihsoftlens',compact('products'));
});

Route::get('/Pemutih Ketiak', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pemutih Ketiak' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pemutihketiak',compact('products'));
});

Route::get('/Paket Perawatan & Perlengkapan Mandi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Paket Perawatan & Perlengkapan Mandi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.paketperawatanmandi',compact('products'));
});

Route::get('/Sunblock Badan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sunblock Badan' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sunblockbadan',compact('products'));
});

Route::get('/Deodorant', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Deodorant' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.deodorant',compact('products'));
});

Route::get('/Body Lotion', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Body Lotion' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.bodylotion',compact('products'));
});

Route::get('/Body Butter', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Body Butter' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.bodybutter',compact('products'));
});

Route::get('/Sabun Badan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sabun Badan' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sabunbadan',compact('products'));
});

Route::get('/Body Scrub', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Body Scrub' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.bodyscrub',compact('products'));
});

Route::get('/Perontok Bulu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perontok Bulu' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.perontokbulu',compact('products'));
});


Route::get('/Minyak Kutikula Kuku', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Minyak Kutikula Kuku' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.minyakkutikulakuku',compact('products'));
});

Route::get('/Hand Sanitizer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hand Sanitizer' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.handsanitizer',compact('products'));
});

Route::get('/Perawatan Kaki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perawatan Kaki' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.perawatankaki',compact('products'));
});

Route::get('/Sabun Cuci Tangan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sabun Cuci Tangan' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sabuncucitangan',compact('products'));
});

Route::get('/Paket Perawatan Tangan & Kaki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Paket Perawatan Tangan & Kaki' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.paketperawatantangan',compact('products'));
});

Route::get('/Penghilang Cat Kuku', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Penghilang Cat Kuku' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.penghilangcatkuku',compact('products'));
});

Route::get('/Alat Medikur & Pedikur', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Alat Medikur & Pedikur' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.alatmedikur',compact('products'));
});

Route::get('/Gunting Kuku', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gunting Kuku' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.guntingkuku',compact('products'));
});

Route::get('/Hand Cream', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Hand Cream' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.handcream',compact('products'));
});

Route::get('/Pembersih Lidah', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pembersih Lidah' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pembersihlidah',compact('products'));
});

Route::get('/Benang Gigi & Tusuk Gigi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Benang Gigi & Tusuk Gigi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.benanggigi',compact('products'));
});

Route::get('/Obat Kumur', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Obat Kumur' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.obatkumur',compact('products'));
});

Route::get('/Sikat Gigi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sikat Gigi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.sikatgigi',compact('products'));
});

Route::get('/Pasta Gigi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pasta Gigi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pastagigi',compact('products'));
});

Route::get('/Pemutih Gigi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pemutih Gigi' )->WhereNull('deleted_at')->get();

    return view('kategori-perawatantubuh.pemutihgigi',compact('products'));
});


//==================================Kategori Perlengkapan Ibu & Bayi================================================================================/

Route::get('/kategoriperlengkapanibubayi', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Perlengkapan Ibu & Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.kategoriperlengkapanibubayi',compact('products'));
});

Route::get('/popokdiaper', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Popok dan Diaper' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.popokdiaper',compact('products'));
});

Route::get('/makanansusubayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Makanan & Susu Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.makanansusubayi',compact('products'));
});

Route::get('/makanansusuibu', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Makanan & Susu Ibu' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.makanansusuibu',compact('products'));
});

Route::get('/bajubayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baju Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajubayi',compact('products'));
});

Route::get('/perawatanbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perawatan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.perawatanbayi',compact('products'));
});

Route::get('/perlengkapanmakanbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Makan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.perlengkapanmakanbayi',compact('products'));
});

Route::get('/perlengkapanmandibayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Mandi Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.perlengkapanmandibayi',compact('products'));
});

Route::get('/strollerbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Stroller dan Alat Bantu Bawa Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.strollerbayi',compact('products'));
});

Route::get('/tasperlengkapanbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Tas Perlengkapan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.tasperlengkapanbayi',compact('products'));
});

Route::get('/perlengkapantidurbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Perlengkapan Tidur Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.perlengkapantidurbayi',compact('products'));
});

Route::get('/aksesorisbayi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Aksesoris Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.aksesorisbayi',compact('products'));
});

Route::get('/bajuhamil', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Baju Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajuhamil',compact('products'));
});










Route::get('/Diaper', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Diaper' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.diaper',compact('products'));
});

Route::get('/Popok Kain', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Popok Kain' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.popok-kain',compact('products'));
});

Route::get('/Biskuit Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Biskuit Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.biskuit-bayi',compact('products'));
});

Route::get('/Susu Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Susu Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.susu-bayi',compact('products'));
});

Route::get('/Bubur Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bubur Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bubur-bayi',compact('products'));
});

Route::get('/Makanan & Susu Bayi Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Makanan & Susu Bayi Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.makanan-bayilainnya',compact('products'));
});


Route::get('/Susu Ibu Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Susu Ibu Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.susu-ibuhamil',compact('products'));
});

Route::get('/Susu Ibu Menyusui', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Susu Ibu Menyusui' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.susu-ibumenyusui',compact('products'));
});

Route::get('/Jumper Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jumper Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.jumper-bayi',compact('products'));
});

Route::get('/Jaket Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Jaket Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.jaket-bayi',compact('products'));
});

Route::get('/Baju Bayi Perempuan', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Bayi Perempuan' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajubayi-perempuan',compact('products'));
});

Route::get('/Baju Bayi Laki-Laki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Bayi Laki-Laki' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajubayi-laki',compact('products'));
});

Route::get('/Pakaian Bayi Unisex', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pakaian Bayi Unisex' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.pakaianbayi-unisex',compact('products'));
});

Route::get('/Sepatu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sepatu' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.sepatu-bayi',compact('products'));
});

Route::get('/Sarung Tangan & Kaos Kaki', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sarung Tangan & Kaos Kaki' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.sarungtangan-kaoskakibayi',compact('products'));
});

Route::get('/Baju & Sepatu Bayi Lainnya', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju & Sepatu Bayi Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajudansepatu-bayilainnya',compact('products'));
});

Route::get('/Cream Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Cream Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.cream-bayi',compact('products'));
});

Route::get('/Kesehatan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kesehatan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.kesehatan-bayi',compact('products'));
});

Route::get('/Kapas dan Tissue', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kapas dan Tissue' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.kapasdantissue',compact('products'));
});

Route::get('/Bedak Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bedak Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bedak-bayi',compact('products'));
});

Route::get('/Minyak Telon', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Minyak Telon' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.minyak-telon',compact('products'));
});



Route::get('/Botol Susu Sanitizer', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Botol Susu Sanitizer' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.botolsusu-sanitizer',compact('products'));
});

Route::get('/Botol Susu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Botol Susu' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.botolsusu',compact('products'));
});

Route::get('/Kursi Makan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kursi Makan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.kursimakan-bayi',compact('products'));
});

Route::get('/Baby food Maker', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baby food Maker' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.babyfood-maker',compact('products'));
});

Route::get('/Set Peralatan Makan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Set Peralatan Makan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.setperalatanmakan-bayi',compact('products'));
});

Route::get('/Celemek Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celemek Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.celemek-bayi',compact('products'));
});

Route::get('/Dot', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dot' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.dot-bayi',compact('products'));
});


Route::get('/Pelampung', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pelampung' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.pelampung-bayi',compact('products'));
});

Route::get('/Mainan Mandi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Mainan Mandi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.mainan-mandi',compact('products'));
});

Route::get('/Bathub dan Kolam', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bathub dan Kolam' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bathubdankolam',compact('products'));
});

Route::get('/Topi Pelindung Air', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Topi Pelindung Air' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.topipelindung-air',compact('products'));
});

Route::get('/Shampoo Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Shampoo Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.shampoo-bayi',compact('products'));
});

Route::get('/Handuk dan Peralatan Mandi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Handuk dan Peralatan Mandi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.handukdanperalatanmandi-bayi',compact('products'));
});

Route::get('/Sabun Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Sabun Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.sabun-bayi',compact('products'));
});

Route::get('/Pispot', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Pispot' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.pispot-bayi',compact('products'));
});

Route::get('/Gendongan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gendongan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.gendongan-bayi',compact('products'));
});

Route::get('/Dudukan Mobil Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dudukan Mobil Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.dudukanmobil-bayi',compact('products'));
});

Route::get('/Stroller', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Stroller' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.stroller-bayi',compact('products'));
});

Route::get('/Tas Perlengkapan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tas Perlengkapan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.tasperlengkapan-bayi',compact('products'));
});


Route::get('/Tempat Tidur Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Tempat Tidur Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.tempattidur-bayi',compact('products'));
});

Route::get('/Bantal dan Guling', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bantal dan Guling' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bantaldanguling',compact('products'));
});

Route::get('/Baby Monitor', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baby Monitor' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.babymonitor',compact('products'));
});

Route::get('/Selimut dan Bedong', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Selimut dan Bedong' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.selimutdanbedong',compact('products'));
});

Route::get('/Kelambu', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Kelambu' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.kelambu',compact('products'));
});

Route::get('/Perhiasan Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Perhiasan Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.perhiasan-bayi',compact('products'));
});

Route::get('/Headband Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Headband Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.headband-bayi',compact('products'));
});

Route::get('/Topi Bayi', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Topi Bayi' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.topi-bayi',compact('products'));
});

Route::get('/Rok Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Rok Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.rok-hamil',compact('products'));
});

Route::get('/Dress Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Dress Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.dress-hamil',compact('products'));
});

Route::get('/Baju Atasan Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Baju Atasan Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bajuatasan-hamil',compact('products'));
});

Route::get('/Celana Dalam Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Dalam Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.celanadalam-hamil',compact('products'));
});

Route::get('/Korset Ibu Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Korset Ibu Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.korsetibu-hamil',compact('products'));
});

Route::get('/Apron Menyusui', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Apron Menyusui' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.apron-menyusui',compact('products'));
});

Route::get('/Gurita', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Gurita' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.gurita',compact('products'));
});

Route::get('/Bra Menyusui', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Bra Menyusui' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.bra-menyusui',compact('products'));
});

Route::get('/Celana Hamil', function () {

    $products = \App\Product::where('kategori2', 'LIKE', 'Celana Hamil' )->WhereNull('deleted_at')->get();

    return view('kategori-perlengkapanibu&bayi.celana-hamil',compact('products'));
});

//===================Kategori Hewan=================================/


Route::get('/hewan', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Hewan' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.hewan',compact('products'));
});

Route::get('/hewankomsumsi', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Hewan Komsumsi' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.hewankomsumsi',compact('products'));
});

Route::get('/hewanpeliharaan', function () {

    $products = \App\Product::where('kategori1', 'LIKE', 'Hewan Peliharaan' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.hewanpeliharaan',compact('products'));
});

Route::get('/Halal', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Halal' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.halal',compact('products'));
});

Route::get('/Non Halal', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Non Halal' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.nonhalal',compact('products'));
});

Route::get('/Hewan Rumah', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Hewan Rumah' )->WhereNull('deleted_at')->get();

    return view('kategori-hewan.hewanrumah',compact('products'));
});

Route::get('/Hewan Non Rumah', function () {

    $products = \App\Product::where('kategori', 'LIKE', 'Hewan Non Rumah')->WhereNull('deleted_at')->get();

    return view('kategori-hewan.hewannonrumah',compact('products'));
});




//===================Kategori View=================================/


//=====================================================================================JASA========================================================================================================//

Route::get('/apikesehatantradisional', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Tradisional' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apikesehatanmodern', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Modern' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apisalon', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Salon' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apitatarias', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Tata Rias' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apipangkasrambut', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Pangkas Rambut' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apibarbershop', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Barbershop' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apirumah', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Rumah' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimobil', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Mobil' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimotor', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Motor' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apireparasilistrik', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Reparasi Listrik' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apitambalban', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Tambal Ban' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apilas', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Las' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apireparasielektronik', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Reparasi Elektronik' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apireparasihandphone', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Reparasi Handphone' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apidalamrumah', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Dalam Rumah' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiluarrumah', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Luar Rumah' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apicucikendaraan', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Cuci Kendaraan' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiart', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Asisten Rumah Tangga' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apibabysister', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Baby Sister' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apisatpam', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Satpam' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apidriver', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Driver' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apitukangmasak', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Tukang Masak' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});


Route::get('/apimenjahit', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Menjahit' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimusik', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Musik' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimemasak', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Memasak' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibeladiri', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Beladiri' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiprogramkomputer', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Program Komputer' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apimenari', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Menari' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apiotomotif', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Otomotif' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});

Route::get('/apibimbinganbelajar', function ()
{
        $jasas = \App\JasaCategory::where('kategori1', 'LIKE', 'Bimbingan Belajar' )->get();
        if(count($jasas) > 0){ //mengecek apakah data kosong atau tidak
            return response()->json($jasas,200,[],JSON_PRETTY_PRINT);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
});






//===================Kategori View Jasa=============================================================/

//=====================Jasa Kesehatan================================================================

Route::get('/jasakesehatan', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Kesehatan' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.jasakesehatan',compact('jasa'));
});

Route::get('/tradisional', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Tradisional' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.tradisional',compact('jasa'));
});

Route::get('/modern', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Modern' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.modern',compact('jasa'));
});


Route::get('/Akupuntur', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Akupuntur' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.akupuntur',compact('jasa'));
});

Route::get('/Massage & Spa', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Massage & Spa' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.massagespa',compact('jasa'));
});

Route::get('/Tradisional Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tradisional Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.tradisionallainnya',compact('jasa'));
});


Route::get('/Dokter', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Dokter' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.dokter',compact('jasa'));
});


Route::get('/Pembersihan Hama', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Pembersihan Hama' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.pembersihanhama',compact('jasa'));
});


Route::get('/Modern Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Modern Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kesehatan.modernlainnya',compact('jasa'));
});

//========================Jasa Tour & Travel ========================================

Route::get('/jasatourtravel', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Jasa Tour & Travel' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-travel.jasatourtravel',compact('jasa'));
});

Route::get('/Dalam Negeri', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Dalam Negeri' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-travel.dalamnegeri',compact('jasa'));
});

Route::get('/Luar Negeri', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Luar Negeri' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-travel.luarnegeri',compact('jasa'));
});

//========================Jasa Kecantikan========================================

Route::get('/jasakecantikan', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Kecantikan' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.jasakecantikan',compact('jasa'));
});

Route::get('/salon', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Salon' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.salon',compact('jasa'));
});

Route::get('/tatarias', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Tata Rias' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.tatarias',compact('jasa'));
});

Route::get('/pangkasrambut', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Pangkas Rambut' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.pangkasrambut',compact('jasa'));
});

Route::get('/barbershop', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'BarberShop' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.barbershop',compact('jasa'));
});


Route::get('/Salon Pesta', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Salon Pesta' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.salonpesta',compact('jasa'));
});

Route::get('/Salon Formal', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Salon Formal' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.salonformal',compact('jasa'));
});


Route::get('/Salon Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Salon Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.salonlainnya',compact('jasa'));
});


Route::get('/Tata Rias Pesta', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tata Rias Pesta' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.tatariaspesta',compact('jasa'));
});

Route::get('/Tata Rias Formal', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tata Rias Formal' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.tatariasformal',compact('jasa'));
});


Route::get('/Tata Rias Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tata Rias Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.tatariaslainnya',compact('jasa'));
});


Route::get('/Pangkas Rambut AC', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Pangkas Rambut AC' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.pangkasrambutac',compact('jasa'));
});

Route::get('/Pangkas Rambut Kipas Angin', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Pangkas Rambut Kipas Angin' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.pangkasrambutkipasangin',compact('jasa'));
});

Route::get('/Pangkas Rambut Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Pangkas Rambut Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.pangkasrambutlainnya',compact('jasa'));
});

Route::get('/Barbershop AC', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Barbershop AC' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.barbershopac',compact('jasa'));
});

Route::get('/Barbershop Kipas Angin', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Barbershop Kipas Angin' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.barbershopkipasangin',compact('jasa'));
});

Route::get('/Barbershop Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Barbershop Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kecantikan.barbershoplainnya',compact('jasa'));
});

//========================Jasa Reparasi ========================================

Route::get('/jasareparasi', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Reparasi' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.jasareparasi',compact('jasa'));
});

Route::get('/rumah', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.rumah',compact('jasa'));
});

Route::get('/mobil', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Mobil' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.mobil',compact('jasa'));
});

Route::get('/motor', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Motor' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.motor',compact('jasa'));
});

Route::get('/listrik', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Listrik' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.listrik',compact('jasa'));
});

Route::get('/tambalban', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Tambal Ban' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.tambalban',compact('jasa'));
});

Route::get('/las', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Las' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.las',compact('jasa'));
});

Route::get('/elektronik', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Elektronik' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.elektronik',compact('jasa'));
});

Route::get('/reparasihandphone', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Handphone' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasihandphone',compact('jasa'));
});



Route::get('/Reparasi Rumah Sebagian', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Rumah Sebagian' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasirumahsebagian',compact('jasa'));
});

Route::get('/Reparasi Rumah Seluruh', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Rumah Seluruh' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasirumahseluruh',compact('jasa'));
});


Route::get('/Reparasi Rumah Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Rumah Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasirumahlainnya',compact('jasa'));
});


Route::get('/Reparasi Mobil Baru', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Mobil Baru' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimobilbaru',compact('jasa'));
});

Route::get('/Reparasi Mobil Lama', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Mobil Lama' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimobillama',compact('jasa'));
});

Route::get('/Reparasi Mobil Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Mobil Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimobillainnya',compact('jasa'));
});


Route::get('/Reparasi Motor Baru', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Motor Baru' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimotorbaru',compact('jasa'));
});

Route::get('/Reparasi Motor Lama', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Motor Lama' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimotorlama',compact('jasa'));
});

Route::get('/Reparasi Motor Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Motor Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasimotorlainnya',compact('jasa'));
});

Route::get('/Reparasi Listrik Rumah', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Listrik Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasilistrikrumah',compact('jasa'));
});


Route::get('/Reparasi Listrik Pabrik', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Listrik Pabrik' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasilistrikpabrik',compact('jasa'));
});


Route::get('/Reparasi Listrik Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Listrik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasilistriklainnya',compact('jasa'));
});


Route::get('/Tambal Ban Mobil', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tambal Ban Mobil' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.tambalbanmobil',compact('jasa'));
});

Route::get('/Tambal Ban Motor', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tambal Ban Motor' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.tambalbanmotor',compact('jasa'));
});

Route::get('/Tambal Ban Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tambal Ban Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.tambalbanlainnya',compact('jasa'));
});

Route::get('/Las Rumah', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Las Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.lasrumah',compact('jasa'));
});


Route::get('/Las Pabrik', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Las Pabrik' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.laspabrik',compact('jasa'));
});


Route::get('/Las Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Las Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.laslainnya',compact('jasa'));
});


Route::get('/Reparasi Laptop', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Laptop' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasilaptop',compact('jasa'));
});

Route::get('/Reparasi Televisi', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Televisi' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasitelevisi',compact('jasa'));
});

Route::get('/Reparasi AC', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi AC' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasiac',compact('jasa'));
});

Route::get('/Reparasi Kulkas', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Kulkas' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasirefrigator',compact('jasa'));
});

Route::get('/Reparasi Elektronik Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Elektronik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasielektroniklain',compact('jasa'));
});


Route::get('/Reparasi Smartphone', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Smartphone' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasismartphone',compact('jasa'));
});

Route::get('/Reparasi All', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi All' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasiall',compact('jasa'));
});

Route::get('/Reparasi Handphone Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Reparasi Handphone Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-reparasi.reparasihandphonelainnya',compact('jasa'));
});

//========================Jasa Kebersihan ========================================

Route::get('/jasakebersihan', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Kebersihan' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.jasakebersihan',compact('jasa'));
});

Route::get('/dalamrumah', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Dalam Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.dalamrumah',compact('jasa'));
});

Route::get('/luarrumah', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Luar Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.luarrumah',compact('jasa'));
});

Route::get('/cucikendaraan', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Cuci Kendaraan' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.cucikendaraan',compact('jasa'));
});


Route::get('/Bersihkan Rumah', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bersihkan Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.bersihkanrumah',compact('jasa'));
});

Route::get('/Cuci Pakaian', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Cuci Pakaian' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.cucipakaian',compact('jasa'));
});

Route::get('/Setrika', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Setrika' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.setrika',compact('jasa'));
});

Route::get('/Kebersihan Dalam Rumah Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Kebersihan Dalam Rumah Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.kebersihandalamrumahlainnya',compact('jasa'));
});

Route::get('/Bersihkan Luar Rumah', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bersihkan Luar Rumah' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.bersihkanluarrumah',compact('jasa'));
});

Route::get('/Bersihkan Teras', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bersihkan Teras' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.bersihkanteras',compact('jasa'));
});

Route::get('/Bersihkan Perkarangan', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bersihkan Perkarangan' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.bersihkanperkarangan',compact('jasa'));
});

Route::get('/Kebersihan Luar Rumah Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Kebersihan Luar Rumah Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.kebersihanluarrumahlainnya',compact('jasa'));
});

Route::get('/Cuci Mobil', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Cuci Mobil' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.cucimobil',compact('jasa'));
});

Route::get('/Cuci Motor', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Cuci Motor' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.cucimotor',compact('jasa'));
});

Route::get('/Cuci Kendaraan Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Cuci Kendaraan Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kebersihan.cucikendaraanlainnya',compact('jasa'));
});


//========================Jasa Tenaga Pendukung ========================================

Route::get('/jasatenagapendukung', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Tenaga Pendukung' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.jasatenagapendukung',compact('jasa'));
});

Route::get('/asistenrumahtangga', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Asisten Rumah Tangga' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.asistenrumahtangga',compact('jasa'));
});

Route::get('/babysister', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Baby Sister' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.babysister',compact('jasa'));
});

Route::get('/satpam', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Satpam' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.satpam',compact('jasa'));
});

Route::get('/driver', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Driver' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.driver',compact('jasa'));
});

Route::get('/tukangmasak', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Tukang Masak' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.tukangmasak',compact('jasa'));
});


Route::get('/Asisten Rumah Tangga Tetap', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Asisten Rumah Tangga Tetap' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.arttetap',compact('jasa'));
});

Route::get('/Asisten Rumah Tangga Sementara', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Asisten Rumah Tangga Sementara' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.artsementara',compact('jasa'));
});

Route::get('/Asisten Rumah Tangga Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Asisten Rumah Tangga Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.artlainnya',compact('jasa'));
});

Route::get('/Baby Sister Tetap', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Baby Sister Tetap' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.babysistertetap',compact('jasa'));
});

Route::get('/Baby Sister Sementara', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Baby Sister Sementara' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.babysistersementara',compact('jasa'));
});

Route::get('/Baby Sister Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Baby Sister Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.babysisterlainnya',compact('jasa'));
});

Route::get('/Satpam Tetap', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Satpam Tetap' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.satpamtetap',compact('jasa'));
});

Route::get('/Satpam Sementara', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Satpam Sementara' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.satpamsementara',compact('jasa'));
});

Route::get('/Satpam Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Satpam Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.satpamlainnya',compact('jasa'));
});

Route::get('/Driver Tetap', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Driver Tetap' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.drivertetap',compact('jasa'));
});

Route::get('/Driver Sementara', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Driver Sementara' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.driversementara',compact('jasa'));
});

Route::get('/Driver Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Driver Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.driverlainnya',compact('jasa'));
});

Route::get('/Tukang Masak Tetap', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tukang Masak Tetap' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.tukangmasaktetap',compact('jasa'));
});

Route::get('/Tukang Masak Sementara', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tukang Masak Sementara' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.tukangmasaksementara',compact('jasa'));
});

Route::get('/Tukang Masak Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Tukang Masak Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-tenagapendukung.tukangmasaklainnya',compact('jasa'));
});


//============================================Jasa Tenaga Pendukung =================================================

Route::get('/kursus', function () {

    $jasa = \App\Jasa::where('kategori', 'LIKE', 'Kursus' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.kursus',compact('jasa'));
});

Route::get('/menjahit', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Menjahit' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menjahit',compact('jasa'));
});

Route::get('/musik', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Musik' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.musik',compact('jasa'));
});

Route::get('/memasak', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Memasak' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.memasak',compact('jasa'));
});

Route::get('/beladiri', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Beladiri' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.beladiri',compact('jasa'));
});

Route::get('/programkomputer', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Program Komputer' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.programkomputer',compact('jasa'));
});

Route::get('/menari', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Menari' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menari',compact('jasa'));
});

Route::get('/otomotif', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Otomotif' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.otomotif',compact('jasa'));
});


Route::get('/bimbel', function () {

    $jasa = \App\Jasa::where('kategori1', 'LIKE', 'Bimbingan Belajar' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.bimbel',compact('jasa'));
});



Route::get('/Menjahit Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menjahit Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menjahitprivate',compact('jasa'));
});

Route::get('/Menjahit Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menjahit Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menjahitpublic',compact('jasa'));
});

Route::get('/Menjahit Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menjahit Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menjahitlainnya',compact('jasa'));
});


Route::get('/Musik Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Musik Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.musikprivate',compact('jasa'));
});

Route::get('/Musik Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Musik Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.musikpublic',compact('jasa'));
});

Route::get('/Musik Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Musik Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.musiklainnya',compact('jasa'));
});

Route::get('/Memasak Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Memasak Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.memasakprivate',compact('jasa'));
});

Route::get('/Memasak Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Memasak Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.memasakpublic',compact('jasa'));
});

Route::get('/Memasak Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Memasak Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.memasaklainnya',compact('jasa'));
});

Route::get('/Beladiri Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Beladiri Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.beladiriprivate',compact('jasa'));
});

Route::get('/Beladiri Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Beladiri Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.beladiripublic',compact('jasa'));
});

Route::get('/Beladiri Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Beladiri Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.beladirilainnya',compact('jasa'));
});

Route::get('/Program Komputer Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Program Komputer Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.programkomputerprivate',compact('jasa'));
});

Route::get('/Program Komputer Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Program Komputer Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.programkomputerpublic',compact('jasa'));
});

Route::get('/Program Komputer Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Program Komputer Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.programkomputerlainnya',compact('jasa'));
});

Route::get('/Menari Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menari Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menariprivate',compact('jasa'));
});

Route::get('/Menari Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menari Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menaripublic',compact('jasa'));
});

Route::get('/Menari Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Menari Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.menarilainnya',compact('jasa'));
});


Route::get('/Otomotif Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Otomotif Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.otomotifprivate',compact('jasa'));
});

Route::get('/Otomotif Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Otomotif Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.otomotifpublic',compact('jasa'));
});

Route::get('/Otomotif Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Otomotif Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.otomotiflainnya',compact('jasa'));
});

Route::get('/Bimbingan Belajar Private', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bimbingan Belajar Private' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.bimbinganbelajarprivate',compact('jasa'));
});

Route::get('/Bimbingan Belajar Public', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bimbingan Belajar Public' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.bimbinganbelajarpublic',compact('jasa'));
});

Route::get('/Bimbingan Belajar Lainnya', function () {

    $jasa = \App\Jasa::where('kategori2', 'LIKE', 'Bimbingan Belajar Lainnya' )->WhereNull('deleted_at')->get();

    return view('kategorijasa-kursus.bimbinganbelajarlainnya',compact('jasa'));
});


//===================Kategori View=================================/



Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/admincustomer', function () {
    return view('admin-customer');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/sub-forum', function () {
    return view('sub-forum');
});

Route::get('/kategori-forum', function () {
    return view('kategori-forum');
});


Route::get('/faq', function () {
    return view('faq');
});


Route::get('/status', 'TransaksiController@index');

Route::get('/penjualan', 'TransaksiController@index2');

Route::put('transaksi/{kode}' ,'TransaksiController@update')->name('transaksi.update');

Route::get('detail-status/{kode}', 'TransaksiController@show')->name('show');


Route::resource('kategori-handphone','KategoriHandphoneController');

Route::resource('kategori-pakaianpria','KategoriPakaianPriaController');



Route::resource('kategori-pakaianwanita','KategoriPakaianWanitaController');

Route::resource('kategori-kesehatan','KategoriKesehatanController');

Route::resource('products','ProductController'); //aku nambahin middleware auth


Route::get('/inputproduct', function () {

    $categories = \App\Category::groupBy('kategori')->orderBy('kategori','asc')->get();
    $user = Auth::user()->id;
    $daftar_transaksi = \App\Rekening::where('user_id', $user)->orderBy('id','DESC')->get();


    return view('products.tambahproduct',compact('categories','daftar_transaksi'));

})->middleware('auth');


Route::post('inputproduct/fetch', 'ProductController@fetch')->name('productcontroller.fetch');

Route::resource('jasa','JasaController');


Route::get('/inputjasa', function () {

     $categories = \App\JasaCategory::groupBy('kategori')->get();


    return view('jasa.tambahjasa',compact('categories'));
});

Route::post('inputjasa/fetch', 'JasaController@fetch')->name('jasacontroller.fetch');



Route::get('/inputwantedproduct', 'WantedProductController@index')->middleware('auth');

Route::post('/simpanwantedproduct', 'WantedProductController@store');

Route::get('/wantedlistproduct', 'WantedProductController@index2');

Route::put('updatehari' ,'WantedProductController@updatehari')->name('ubahhari.update');



Route::get('/inputwantedjasa', 'WantedJasaController@index')->middleware('auth');

Route::post('/simpanwantedjasa', 'WantedJasaController@store');

Route::get('/wantedlistjasa', 'WantedJasaController@index2');




Route::get('/', 'HomeProductController@index');

Route::get('detail/{id}', 'HomeProductController@show')->name('show');

Route::get('detail-jasa/{id}', 'HomeJasaController@show')->name('show');


Route::get('/kategori-jasa', 'HomeJasaController@index');

Route::get('supplier/{slug}', 'SupplierController@show')->name('show');

Auth::routes();

Route::get('users/{user}', 'UserController@edit')->name('edit');

Route::patch('users/{user}/ubah',  ['as' => 'users.ubah', 'uses' => 'UserController@ubah']);

Route::patch('users/{user}/ubah2',  ['as' => 'users.ubah2', 'uses' => 'UserController@ubah2']);

Route::get('hapus-user/{id}', ['as' => 'hapus-user','uses' => 'UserController@delete']);



Route::get('/rekening', 'RekeningController@index');
Route::post('simpanrek', [
    'as' => 'simpanrek',
    'uses' => 'RekeningController@store'
]);

Route::get('hapus-rekening/{id}', [
    'as' => 'hapus-rekening',
    'uses' => 'RekeningController@destroy'
]);



Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);


Route::post('store', [
    'as' => 'store',
    'uses' => 'CheckoutController@store'
]);

//ini adalah checkout

Route::get('item', [
    'as' => 'item',
    'uses' => 'CheckoutController@item'
]);

Route::post('cart', [
    'as' => 'cart',
    'uses' => 'CheckoutController@cart'
]);

Route::post('cart2', [
    'as' => 'cart2',
    'uses' => 'CheckoutController@cart2'
]);


Route::get('remove-cart/{rowid}', [
    'as' => 'remove-cart',
    'uses' => 'CheckoutController@RemoveCart'
]);


Route::get('checkout', [
    'as' => 'checkout',
    'uses' => 'CheckoutController@checkout'
]);

Route::get('pembayaran', [
    'as' => 'pembayaran',
    'uses' => 'CheckoutController@pembayaran'
]);


Route::post('simpan', [
    'as' => 'simpan',
    'uses' => 'CommentController@store'
]);




//========================================ADMIN=======================================================



Route::get('/admin', 'BankController@index');

Route::post('simpanbank', [
    'as' => 'simpanbank',
    'uses' => 'BankController@store'
]);



Route::get('/verifikasi', 'VerifikasiController@index');

Route::put('verifikasi/{kode}' ,'VerifikasiController@update')->name('verifikasi.update');

Route::put('verifikasikurir/{kode}' ,'VerifikasiController@update2')->name('verifikasikurir.update');




Route::get('/banned-user', 'UserController@index');

Route::put('updatestatus/{id}' ,'UserController@updatestatus')->name('banned.update');

Route::put('updatepremium/{id}' ,'UserController@updatepremium')->name('premium.update');



 

//========================================KURIR=======================================================

Route::get('/kurir', 'KurirController@index');

Route::put('verifikasilokasi/{kode}' ,'KurirController@update')->name('verifikasilokasi.update');

//===========================register=================================

Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');
