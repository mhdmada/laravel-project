<?php

namespace App\Http\Controllers;
use App\Jasa;
use App\Comment;
use App\JasaCategory;

use Illuminate\Http\Request;



class HomeJasaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $jasa = Jasa::latest()->paginate(12); #menampilkan produk

         //kesehatan
        $tradisional = JasaCategory::where('kategori1', 'LIKE', 'Tradisional' )->get();
        $modern = JasaCategory::where('kategori1', 'LIKE', 'Modern' )->get();



       	//kecantikan
        $salon = JasaCategory::where('kategori1', 'LIKE', 'Salon' )->get();
        $tatarias = JasaCategory::where('kategori1', 'LIKE', 'Tata Rias' )->get();
        $pangkasrambut = JasaCategory::where('kategori1', 'LIKE', 'Pangkas Rambut' )->get();
        $barbershop = JasaCategory::where('kategori1', 'LIKE', 'Barbershop' )->get();

        //reparasi
        $rumah = JasaCategory::where('kategori1', 'LIKE', 'Rumah' )->get();
        $mobil = JasaCategory::where('kategori1', 'LIKE', 'Mobil' )->get();
        $motor = JasaCategory::where('kategori1', 'LIKE', 'Motor' )->get();
        $listrik = JasaCategory::where('kategori1', 'LIKE', 'Listrik' )->get();
        $tambalban = JasaCategory::where('kategori1', 'LIKE', 'Tambal Ban' )->get();
        $las = JasaCategory::where('kategori1', 'LIKE', 'Las' )->get();
        $elektronik = JasaCategory::where('kategori1', 'LIKE', 'Elektronik' )->get();
        $handphone = JasaCategory::where('kategori1', 'LIKE', 'Handphone' )->get();


        //kebersihan
        $dalamrumah = JasaCategory::where('kategori1', 'LIKE', 'Dalam Rumah' )->get();
        $luarrumah = JasaCategory::where('kategori1', 'LIKE', 'Luar Rumah' )->get();
        $cucikendaraan = JasaCategory::where('kategori1', 'LIKE', 'Cuci Kendaraan' )->get();

        //tenaga pendukung
        $asisten = JasaCategory::where('kategori1', 'LIKE', 'Asisten Rumah Tangga' )->get();
        $babysister = JasaCategory::where('kategori1', 'LIKE', 'Baby Sister' )->get();
        $satpam = JasaCategory::where('kategori1', 'LIKE', 'Satpam' )->get();
        $driver = JasaCategory::where('kategori1', 'LIKE', 'Driver' )->get();
        $tukangmasak = JasaCategory::where('kategori1', 'LIKE', 'Tukang Masak' )->get();

        //kursus
        $menjahit = JasaCategory::where('kategori1', 'LIKE', 'Menjahit' )->get();
        $musik = JasaCategory::where('kategori1', 'LIKE', 'Musik' )->get();
        $memasak = JasaCategory::where('kategori1', 'LIKE', 'Memasak' )->get();
        $beladiri = JasaCategory::where('kategori1', 'LIKE', 'Beladiri' )->get();
        $programkomputer = JasaCategory::where('kategori1', 'LIKE', 'Program Komputer' )->get();
        $menari = JasaCategory::where('kategori1', 'LIKE', 'Menari' )->get();
        $otomotif = JasaCategory::where('kategori1', 'LIKE', 'Otomotif' )->get();
        $bimbel = JasaCategory::where('kategori1', 'LIKE', 'Bimbingan Belajar' )->get();

        //tour
         $luarnegeri = JasaCategory::where('kategori1', 'LIKE', 'Luar Negeri' )->get();
          $dalamnegeri = JasaCategory::where('kategori1', 'LIKE', 'Dalam Negeri' )->get();










        return view('home-jasa',compact('jasa','tradisional','modern','salon','tatarias','pangkasrambut','barbershop','rumah','mobil','motor','listrik','tambalban','las','elektronik','handphone','dalamrumah','luarrumah',
        								'asisten','babysister','satpam','driver','tukangmasak',
        								'menjahit','musik','memasak','beladiri','programkomputer','menari','otomotif','bimbel',
        								'dalamnegeri','luarnegeri','cucikendaraan'



                ))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


     public function show($id)
    {

        $produk = Jasa::findOrFail($id);

        $komentar = Comment::where('kode', '=', $id)->orderBy('id','desc')->get();

        $jumlah  =  Jasa::count();

        $tanggal = Jasa::whereDate('created_at', '=', date('d-m-Y'));

        return view('detail-jasa',compact('produk','jumlah','tanggal','komentar'));
    }


}
