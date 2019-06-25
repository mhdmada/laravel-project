
@extends('layouts.app')

@section('content')




  <body class="bg-light">

       <div class="container-fluid" style="padding-top: 30px;" >
        <div class="row">
          <div id="kontenkategori" class="col-md-2">
            <h3 class="text-center mb-4">PRODUK</h3>
            <div id="accordion" role="tablist">
                 <busana-pria :atasanprias="atasanprias" :sepatuprias="sepatuprias" :celanaprias="celanaprias" :outwearprias="outwearprias" :jamtanganprias="jamtanganprias" :tasprias="tasprias" :batikprias="batikprias" :aksesorisprias="aksesorisprias" :pakaiandalamprias="pakaiandalamprias" :perhiasanfashionprias="perhiasanfashionprias" :bajutidurprias="bajutidurprias" ></busana-pria>

                 <busana-wanita :atasanwanitas="atasanwanitas" :celanawanitas="celanawanitas" :rokwanitas="rokwanitas" :dresswanitas="dresswanitas" :outwearwanitas="outwearwanitas" :batikwanitas="batikwanitas" :pakaiandalamwanitas="pakaiandalamwanitas"   :taswanitas="taswanitas"  :sepatuwanitas="sepatuwanitas"   :jamtanganwanitas="jamtanganwanitas"  :perhiasanwanitas="perhiasanwanitas" :aksesoriswanitas="aksesoriswanitas"  :aksesorisrambutwanitas="aksesorisrambutwanitas" :couplewanitas="couplewanitas" :bajutidurwanitas="bajutidurwanitas"  :perlengkapanjahit="perlengkapanjahit" ></busana-wanita>

                 <smartphone-tablet :aksesorishandphone="aksesorishandphone" :aksesoristablet="aksesoristablet" :memorycard="memorycard"></smartphone-tablet>

                 <hewan :hewanpeliharaans="hewanpeliharaans" :hewankomsumsis="hewankomsumsis"></hewan>


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

                       @if(count($products) == 0)
                              <div class="col-md-10 mb-4">
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

                                      <a href="{!! url('/kategori-handphone'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan semua produk</button></a>
                                    </div>
                                  </div>
                              </div>
                        @else
                        {{--   @foreach ($products as $product) --}}
                        {{-- produk --}}

{{--
                        <div class="col-md-1.5  mb-4" style="margin-right: 10px;">
                         <div class="card"  onclick="location.href='{{ url('detail/'.$product->id) }}'">
                            <div class="ukuran">  <img src="uploads/{{ $product->photo }}" class="card-img-top" alt="Card image cap"> </div>
                              <div class="card-body">
                                <p class="card-title">{{ $product->nama_produk }}</p>
                                <h6 class="card-text text-danger">Rp.{{ number_format ($product->harga,0,',','.')}}</h6>
                              </div>
                              <div class="card-footer" style="background-color: #DC3179; height: 100px;">
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $product->kategori }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;"><i class="fas fa-store"></i>  {{ $product->nama_supplier }}</p>
                              </div>
                          </div>
                        </div> --}}

                        <div id="tes" >

                            
                             <datadisplay></datadisplay>
                        </div>

{{-- 
                        <div id="konten" class="row ml-3">
                            <div v-for="product in products" class="items" v-if="loading">
                              <product-item :id="product.id" :nama_produk="product.nama_produk" :kategori="product.kategori" :photo="product.photo" :nama_supplier="product.nama_supplier"></product-item>
                            </div>
                            <div v-for="fake in fakes" v-if="!loading">
                              <fake-item></fake-item>
                            </div>
                        </div> --}}

                        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>



                        {{-- @endforeach --}}
                        @endif

                  {{-- {{ $products->links() }} --}}

          </div>


        </div>{{--  end row --}}



      @include('includes.footer')


    </div>





@endsection
