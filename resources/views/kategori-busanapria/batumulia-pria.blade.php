@extends('layouts.app')

@section('content')

    {{-- diatas adalah kodingan header --}}

  <body class="bg-light">

       <div class="container-fluid" style="padding-top: 30px;" >
        <div class="row">
          <div id="kontenkategori" class="col-md-2">
            <h3 class="text-center mb-4">PRODUK</h3>
            <div id="accordion" role="tablist">
                 <busana-pria :atasanprias="atasanprias" :sepatuprias="sepatuprias" :celanaprias="celanaprias" :outwearprias="outwearprias" :jamtanganprias="jamtanganprias" :tasprias="tasprias" :batikprias="batikprias" :aksesorisprias="aksesorisprias" :pakaiandalamprias="pakaiandalamprias" :perhiasanfashionprias="perhiasanfashionprias" :bajutidurprias="bajutidurprias" ></busana-pria>

                 <busana-wanita :atasanwanitas="atasanwanitas" :celanawanitas="celanawanitas" :rokwanitas="rokwanitas" :dresswanitas="dresswanitas" :outwearwanitas="outwearwanitas" :batikwanitas="batikwanitas" :pakaiandalamwanitas="pakaiandalamwanitas"   :taswanitas="taswanitas"  :sepatuwanitas="sepatuwanitas"   :jamtanganwanitas="jamtanganwanitas"  :perhiasanwanitas="perhiasanwanitas" :aksesoriswanitas="aksesoriswanitas"  :aksesorisrambutwanitas="aksesorisrambutwanitas" :couplewanitas="couplewanitas" :bajutidurwanitas="bajutidurwanitas"  :perlengkapanjahit="perlengkapanjahit" ></busana-wanita>

                 <smartphone-tablet :aksesorishandphone="aksesorishandphone" :aksesoristablet="aksesoristablet" :memorycard="memorycard"></smartphone-tablet>

                 <laptop :aksesorislaptop="aksesorislaptop"></laptop>

                 <komputer :harddisks="harddisks" :vgacards="vgacards" :printers="printers" :peripherals="peripherals" :networkings="networkings" :komponenkomputers="komponenkomputers" :opticaldrives="opticaldrives"></komputer>

                 <elektronik :vaporizers="vaporizers" :audios="audios" :tvs="tvs" :kamerapengintais="kamerapengintais" :mediaplayers="mediaplayers" :telepons="telepons" :pencahayaans="pencahayaans"
                 :peralatanlistriks="peralatanlistriks" :perangkatelektroniklainnyas="perangkatelektroniklainnyas"></elektronik>

                 <kamera :kameradigitals="kameradigitals" :kameravideos="kameravideos" :kameraanalogs="kameraanalogs" :lensaaksesoriss="lensaaksesoriss" :flashaksesoriss="flashaksesoriss" :bateraikameras="bateraikameras" :cleanerkameras="cleanerkameras" :framekameras="framekameras" :aksesoriskameras="aksesoriskameras"></kamera>

                 <gaming :gameconsoles="gameconsoles" :cdgames="cdgames" :pcgamings="pcgamings"></gaming>

                 <busana-muslim :atasanmuslims="atasanmuslims" :bawahanmuslims="bawahanmuslims" :dressmuslims="dressmuslims" :outwearmuslims="outwearmuslims" :scarfs="scarfs" :aksesorisjilbabs="aksesorisjilbabs"
                 :perlengkapanibadahs="perlengkapanibadahs"></busana-muslim>

                 <busana-anak :aksesorisrambutanaks="aksesorisrambutanaks" :tasanaks="tasanaks" :perhiasananaks="perhiasananaks" :aksesorisanaks="aksesorisanaks" :sepatuanaklakis="sepatuanaklakis" :sepatuanakperempuans="sepatuanakperempuans" :pakaiananaklakis="pakaiananaklakis" :pakaiananakperempuans=" pakaiananakperempuans"></busana-anak>

                 <kecantikan :stylingrambutwanitas="stylingrambutwanitas" :makeupmatas="makeupmatas" :makeupwajahs="makeupwajahs" :handnailarts="handnailarts" :eyebrowkits="eyebrowkits" :alatmakeups="alatmakeups" :perawatankulits="perawatankulits" :lipcolors="lipcolors" :perawatanwajahs="perawatanwajahs"></kecantikan>

                 <produk-kesehatan :obatobatans="obatobatans" :maternitys="maternitys" :alatbantukesehatans="alatbantukesehatans" :kesehatanwanitas="kesehatanwanitas" :dietvitamins="dietvitamins" :perlengkapanmediss="perlengkapanmediss"></produk-kesehatan>

                 <perawatan-tubuh :groomings="groomings" :parfums="parfums" :telingas="telingas" :produkkewanitaans="produkkewanitaans" :perawatanrambuts="perawatanrambuts" :perawatanmatas="perawatanmatas" :mandis="mandis" :perawatankakis="perawatankakis" :kesehatangigis="kesehatangigis"></perawatan-tubuh>

                 <perlengkapan-ibuanakbayi :popokdiapers="popokdiapers" :makanansusubayis="makanansusubayis" :makanansusuibus="makanansusuibus" :bajusepatubayis="bajusepatubayis" :perawatanbayis="perawatanbayis" :perlengkapanmakanbayis="perlengkapanmakanbayis" :perlengkapanmandibayis="perlengkapanmandibayis" :strollerbayis="strollerbayis" :perlengkapantidurbayis="perlengkapantidurbayis" :aksesorisbayis="aksesorisbayis" :bajuhamils="bajuhamils"></perlengkapan-ibuanakbayi>

            </div>
          </div>{{--  end div md-2 --}}


            <div class="col-md-10">
              <nav aria-label="breadcrumb" class="col-md-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Busana Pria</a></li>
                      <li class="breadcrumb-item"><a href="#">Perhiasan Fashion</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Batu Mulia</li>
                    </ol>
              </nav>


              @if(count($products) == 0)
                      <div class="col-md-10  mb-4">
                         <div class="empty-icon-container">
                            <div class="animation-container">
                              <div class="bounce"></div>
                              <div class="pebble1"></div>
                              <div class="pebble2"></div>
                              <div class="pebble3"></div>
                            </div>
                            <div>
                              <h2 class="mt-5">Maaf hasil pencarian produk tidak ditemukan</h2>
                              <p class="mt-2">Silahkan melakukan pencarian kembali dengan menggunakan kata kunci lain.</p>

                              <a href="{!! url('/kategori-pakaianpria'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan semua produk</button></a>
                            </div>

                          </div>
                      </div>

                     @else

                      <div class="row ml-3"> 
                       @foreach ($products as $product)
                        {{-- produk --}}
                      
                        <div class="col-md-1.5 mb-4" style="margin-right: 10px;">
                          <div class="card">
                            <div class="ukuran">  <img src="uploads/{{ $product->photo }}"  class="card-img-top" alt="Card image cap"> </div>
                              <div class="card-body">
                                <p class="card-title">{{ $product->nama_produk }}</p>
                                <h6 class="card-text text-danger">Rp.{{ number_format ($product->harga,0,',','.')}} </h6>
                              </div>
                              <div class="card-footer" style="background-color: #DC3179; height: 110px;">
                                {{-- <p class="text-light" style="font-size: 15px; margin: 2px;"></p> <img v-if="entry.premium === 'true' " src="https://img.icons8.com/color/96/000000/filled-star.png" width="16px;">  --}}
                                <p class="text-light" style="font-size: 15px; margin: 2px; margin-bottom:8px;"><i class="fas fa-store"></i> {{ $product->nama_supplier }} </p>
                                <a href="/detail/{{ $product->id }}"><button class="btn btn-primary btn-sm">Detail</button></a>
                              </div>
                          </div>
                        </div>

                       @endforeach
                     </div>

            @endif


          </div>


        </div>{{--  end row --}}









          <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
      @include('includes.footer')


    </div>






@endsection
