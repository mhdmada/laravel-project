<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

use Input;

class KategoriPakaianWanitaController extends Controller
{
    
    	public function __construct() // ini fungsi untuk redirect ke login jika tidak ada session
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
	{


     //atasan pria
        $atasanpria = Category::where('kategori1', 'LIKE', 'Atasan Pria' )->get();

        $sepatupria = Category::where('kategori1', 'LIKE', 'Sepatu Pria' )->get();

        $celanapria = Category::where('kategori1', 'LIKE', 'Celana Pria' )->get();

        $outwearpria = Category::where('kategori1', 'LIKE', 'Outwear Pria' )->get();

        $jamtanganpria = Category::where('kategori', 'LIKE', 'Busana Pria' )->where('kategori1', 'LIKE', 'Jam Tangan' )->get();

        $taspria = Category::where('kategori1', 'LIKE', 'Tas Pria' )->get();

        $batikpria = Category::where('kategori1', 'LIKE', 'Batik Pria' )->get();

        $aksesorispria = Category::where('kategori1', 'LIKE', 'Aksesoris Pria' )->get();

        $pakaiandalampria = Category::where('kategori1', 'LIKE', 'Pakaian Dalam Pria' )->get();

        $perhiasanpria = Category::where('kategori1', 'LIKE', 'Perhiasan Fashion' )->get();

        $bajutidurpria = Category::where('kategori1', 'LIKE', 'Baju Tidur Pria' )->get();


        //atasan wanita

        $atasanwanita = Category::where('kategori1', 'LIKE', 'Atasan Wanita' )->get(); 

        $celanawanita = Category::where('kategori1', 'LIKE', 'Celana Wanita' )->get(); 

        $rok = Category::where('kategori1', 'LIKE', 'Rok' )->get(); 

        $dress = Category::where('kategori1', 'LIKE', 'Dress' )->get(); 

        $outwearwanita = Category::where('kategori1', 'LIKE', 'Outwear' )->get(); 

        $batikwanita = Category::where('kategori1', 'LIKE', 'Batik Wanita' )->get(); 

        $pakaiandalamwanita = Category::where('kategori1', 'LIKE', 'Pakaian Dalam Wanita' )->get(); 

        $taswanita = Category::where('kategori1', 'LIKE', 'Tas Wanita' )->get(); 

        $sepatuwanita = Category::where('kategori1', 'LIKE', 'Sepatu Wanita' )->get(); 

        $jamtanganwanita = Category::where('kategori', 'LIKE', 'Busana Wanita' )->where('kategori1', 'LIKE', 'Jam Tangan' )->get(); 

        $perhiasanwanita = Category::where('kategori1', 'LIKE', 'Perhiasan' )->get(); 

        $aksesoriswanita = Category::where('kategori1', 'LIKE', 'Aksesoris Wanita' )->get(); 

        $aksesorisrambut = Category::where('kategori1', 'LIKE', 'Aksesoris Rambut' )->get(); 

        $perlengkapancouple = Category::where('kategori1', 'LIKE', 'Perlengkapan Couple' )->get();

        $bajutidurwanita = Category::where('kategori1', 'LIKE', 'Baju Tidur Wanita' )->get(); 

        $perlengkapanjahit = Category::where('kategori1', 'LIKE', 'Perlengkapan Jahit' )->get();


        //handphone & tablet

         $aksesorishandphone = Category::where('kategori1', 'LIKE', 'Aksesoris Handphone' )->get(); 
         $aksesoristablet = Category::where('kategori1', 'LIKE', 'Aksesoris Tablet' )->get(); 
         $memorycard = Category::where('kategori1', 'LIKE', 'Memory Card' )->get(); 

         //laptop
         $aksesorislaptop = Category::where('kategori1', 'LIKE', 'Aksesoris Laptop' )->get(); 

         //komputer

         $harddisk = Category::where('kategori1', 'LIKE', 'Harddisk & Flashdisk' )->get();
         $vgacard = Category::where('kategori1', 'LIKE', 'VGA Card' )->get();
         $printer = Category::where('kategori1', 'LIKE', 'Printer' )->get();
         $peripheral = Category::where('kategori1', 'LIKE', 'Peripheral & Aksesoris' )->get();
         $networking = Category::where('kategori1', 'LIKE', 'Networking' )->get();
         $komponencomputer = Category::where('kategori1', 'LIKE', 'Komponen Komputer' )->get();
         $optical= Category::where('kategori1', 'LIKE', 'Optical Drive' )->get();

         //elektronik

         $vaporizer = Category::where('kategori1', 'LIKE', 'Vaporizer' )->get();
         $audio = Category::where('kategori1', 'LIKE', 'Audio' )->get();
         $tv = Category::where('kategori1', 'LIKE', 'TV' )->get();
         $kamerapengintai = Category::where('kategori1', 'LIKE', 'Kamera Pengintai' )->get();
         $mediaplayer = Category::where('kategori1', 'LIKE', 'Media Player' )->get();
         $telepon = Category::where('kategori1', 'LIKE', 'Telepon' )->get();
         $pencahayaan = Category::where('kategori1', 'LIKE', 'Pencahayaan' )->get();
         $peralatanlistrik = Category::where('kategori1', 'LIKE', 'Peralatan Listrik' )->get();
         $peralatanelektroniklainnya = Category::where('kategori1', 'LIKE', 'Peralatan Elektronik Lainnya' )->get();

         //kamera

         $kameradigital = Category::where('kategori1', 'LIKE', 'Kamera Digital' )->get();
         $kameravideo = Category::where('kategori1', 'LIKE', 'Kamera Video' )->get();
         $kameraanalog = Category::where('kategori1', 'LIKE', 'Kamera Analog' )->get();
         $lensa = Category::where('kategori1', 'LIKE', 'Lensa & Aksesoris' )->get();
         $flash = Category::where('kategori1', 'LIKE', 'Flash & Aksesoris' )->get();
         $aksesoriskamera = Category::where('kategori1', 'LIKE', 'Aksesoris Kamera' )->get();
         $bateraikamera = Category::where('kategori1', 'LIKE', 'Baterai,Charger & Grip' )->get();
         $cleanerkamera = Category::where('kategori1', 'LIKE', 'Cleaner & Tool Kit' )->get();
         $album = Category::where('kategori1', 'LIKE', 'Frame,Album & Roll Film' )->get();

         //gaming
         $gameconsole = Category::where('kategori1', 'LIKE', 'Game Console' )->get();
         $cdgame = Category::where('kategori1', 'LIKE', 'CD Game' )->get();
         $pcgaming = Category::where('kategori1', 'LIKE', 'PC dan Laptop Gaming' )->get();

         //muslim
         $atasanmuslim = Category::where('kategori1', 'LIKE', 'Atasan Muslim' )->get();
         $bawahanmuslim = Category::where('kategori1', 'LIKE', 'Bawahan Muslim' )->get();
         $dressmuslim = Category::where('kategori1', 'LIKE', 'Dress Muslim' )->get();
         $outwearmuslim = Category::where('kategori1', 'LIKE', 'Outerwear  Muslim' )->get();
         $scarfmuslim = Category::where('kategori1', 'LIKE', 'Scarf' )->get();
         $aksesorisjilbab = Category::where('kategori1', 'LIKE', 'Aksesoris Jilbab' )->get();
         $perlengkapanibadah= Category::where('kategori1', 'LIKE', 'Perlengkapan Ibadah' )->get();

         //busana anak
        $aksesorisrambutanak = Category::where('kategori1', 'LIKE', 'Aksesoris Rambut Anak' )->get();
        $tasanak = Category::where('kategori1', 'LIKE', 'Tas Anak' )->get();
        $perhiasananak = Category::where('kategori1', 'LIKE', 'Perhiasan Anak' )->get();
        $aksesorisanak = Category::where('kategori1', 'LIKE', 'Aksesoris Anak' )->get();
        $sepatuanaklaki = Category::where('kategori1', 'LIKE', 'Sepatu Anak Laki-Laki' )->get();
        $sepatuanakperempuan = Category::where('kategori1', 'LIKE', 'Sepatu Anak Perempuan' )->get();
        $pakaiananaklaki = Category::where('kategori1', 'LIKE', 'Pakaian Anak Laki-Laki' )->get();
        $pakaiananakperempuan = Category::where('kategori1', 'LIKE', 'Pakaian Anak Perempuan' )->get();


        //kecantikan
        $stylingrambutwanita =  Category::where('kategori1', 'LIKE', 'Styling Rambut Wanita' )->get();
        $makeupmata =  Category::where('kategori1', 'LIKE', 'Make Up Mata' )->get();
        $makeupwajah =  Category::where('kategori1', 'LIKE', 'Make Up Wajah' )->get();
        $handnailart =  Category::where('kategori1', 'LIKE', 'Hand & Nail Art' )->get();

        $eyebrowkit =  Category::where('kategori1', 'LIKE', 'Eyebrow Kit' )->get();
        $aksesorisalatmakeup =  Category::where('kategori1', 'LIKE', 'Aksesoris & Alat Make Up' )->get();
        $perawatankulit =  Category::where('kategori1', 'LIKE', 'Perawatan Kulit' )->get();
        $lipcolor =  Category::where('kategori1', 'LIKE', 'Lip Color & Lip Care' )->get();
        $perawatanwajah =  Category::where('kategori1', 'LIKE', 'Perawatan Wajah' )->get();

        //kesehatan
        $obat =  Category::where('kategori1', 'LIKE', 'Obat-Obatan' )->get();
        $maternity =  Category::where('kategori1', 'LIKE', 'Maternity' )->get();
        $alatbantukesehatan =  Category::where('kategori1', 'LIKE', 'Alat Bantu Kesehatan' )->get();

        $kesehatanwanita =  Category::where('kategori1', 'LIKE', 'Kesehatan Wanita' )->get();
        $diet =  Category::where('kategori1', 'LIKE', 'Diet & Vitamin' )->get();
        $perlengkapanmedis =  Category::where('kategori1', 'LIKE', 'Perlengkapan Medis' )->get();

        //perawatan tubuh
        $grooming =  Category::where('kategori1', 'LIKE', 'Grooming' )->get();
        $parfum =  Category::where('kategori1', 'LIKE', 'Parfum,Cologne, & Fragrance' )->get();
        $telinga =  Category::where('kategori1', 'LIKE', 'Telinga' )->get();
        $produkkewanitaan =  Category::where('kategori1', 'LIKE', 'Produk Kewanitaan' )->get();
        $perawatanrambut =  Category::where('kategori1', 'LIKE', 'Perawatan Rambut' )->get();
        $perawatanmata =  Category::where('kategori1', 'LIKE', 'Perawatan Mata' )->get();
        $mandi =  Category::where('kategori1', 'LIKE', 'Mandi & Perawatan Tubuh' )->get();
        $perawatankaki =  Category::where('kategori1', 'LIKE', 'Perawatan Kaki,Tangan & Kuku' )->get();
        $kesehatangigi =  Category::where('kategori1', 'LIKE', 'Kesehatan Gigi & Mulut' )->get();

        //perlengkapan ibu bayi
        $popok =  Category::where('kategori1', 'LIKE', 'Popok dan Diaper' )->get();
        $makananbayi =  Category::where('kategori1', 'LIKE', 'Makanan & Susu Bayi' )->get();
        $bajubayi =  Category::where('kategori1', 'LIKE', 'Baju & Sepatu Bayi' )->get();
        $perawatanbayi =  Category::where('kategori1', 'LIKE', 'Perawatan Bayi' )->get();
        $perlengkapanmakananbayi =  Category::where('kategori1', 'LIKE', 'Perlengkapan Makan Bayi' )->get();
        $mandibayi =  Category::where('kategori1', 'LIKE', 'Perlengkapan Mandi Bayi' )->get();
        $stroller =  Category::where('kategori1', 'LIKE', 'Stroller dan Alat Bantu Bawa Bayi' )->get();

        $tidurbayi =  Category::where('kategori1', 'LIKE', 'Perlengkapan Tidur Bayi' )->get();
        $aksesorisbayi =  Category::where('kategori1', 'LIKE', 'Aksesoris Bayi' )->get();
        $bajuhamil =  Category::where('kategori1', 'LIKE', 'Baju Hamil' )->get();




    $query = Product::query();
      if(Input::has('kondisi')) {
          $query->where('kondisi', Input::get('kondisi'));
          echo "<script>console.log( 'kondisi sukses' );</script>";
      }


      if(Input::has('memori')) {

          $query->where('memori', Input::get('memori'));
      }

      if(Input::has('garansi')) {
          $query->where('garansi', Input::get('garansi'));
      }

      if(Input::has('tipe_kartu_sim')) {
          $query->where('tipe_kartu_sim', Input::get('tipe_kartu_sim'));
      }

      if(Input::has('warna')) {
          $query->where('warna', Input::get('warna'));
      }

      if(Input::has('merk')) {
          $query->where('merk', Input::get('merk'));
      }


       if(Input::has('nama_produk')) {

          $input_namaproduk = Input::get('nama_produk');

          $query->where('nama_produk', 'LIKE', '%'.$input_namaproduk.'%' );
      }


      $products = $query->where('kategori', 'LIKE', 'Busana Wanita' )->WhereNull('deleted_at')->get();


      $categories = \App\Category::groupBy('kategori')->orderBy('kategori','asc')->get();
 
        return view('kategori-pakaianwanita',compact('products','categories',
                                                  'atasanpria','sepatupria','celanapria','outwearpria','jamtanganpria','taspria','batikpria','aksesorispria','pakaiandalampria','perhiasanpria','bajutidurpria',
                                                  'atasanwanita','celanawanita','rok','dress','outwearwanita','batikwanita','pakaiandalamwanita','taswanita','sepatuwanita','jamtanganwanita','perhiasanwanita','aksesoriswanita',
                                                  'aksesorisrambut','perlengkapancouple','bajutidurwanita','perlengkapanjahit',

                                                  'aksesorishandphone','aksesoristablet','memorycard','aksesorislaptop',
                                                  'harddisk','vgacard','printer','peripheral','networking','komponencomputer','optical',
                                                  'vaporizer','audio','tv','kamerapengintai','mediaplayer','telepon','pencahayaan','peralatanlistrik','peralatanelektroniklainnya',

                                                  'kameradigital','kameravideo','kameraanalog','lensa','flash','aksesoriskamera','bateraikamera','cleanerkamera','album',
                                                  'gameconsole','cdgame','pcgaming',
                                                  'atasanmuslim','bawahanmuslim','dressmuslim','outwearmuslim','scarfmuslim','aksesorisjilbab','perlengkapanibadah',
                                                  'aksesorisrambutanak','tasanak','perhiasananak','aksesorisanak','sepatuanaklaki','sepatuanakperempuan','pakaiananaklaki','pakaiananakperempuan',
                                                  'stylingrambutwanita','makeupmata','makeupwajah','handnailart','eyebrowkit','aksesorisalatmakeup','perawatankulit','lipcolor','perawatanwajah',
                                                  'obat','maternity','alatbantukesehatan','kesehatanwanita','diet','perlengkapanmedis',
                                                  'grooming','parfum','telinga','produkkewanitaan','perawatanrambut','perawatanmata','mandi','perawatankaki','kesehatangigi',
                                                  'popok','makananbayi','bajubayi','perawatanbayi','perlengkapanmakananbayi','mandibayi','stroller','tidurbayi','aksesorisbayi','bajuhamil'
      ))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }




}
