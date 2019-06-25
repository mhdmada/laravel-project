
@extends('layouts.app')

@section('content')



  <body class="bg-light">


       <div class="container-fluid" style="padding-top: 30px;" >
        <div class="row">
          <div id="kontenkategorijasa" class="col-md-2">
            <h3 class="text-center">JASA</h3>
            <div id="accordion" role="tablist">
                
                <kesehatan :kesehatantradisional="kesehatantradisional" :kesehatanmodern="kesehatanmodern"></kesehatan>

                <tourtravel></tourtravel>

                <jasa-kecantikan :salons="salons" :tatariass="tatariass" :pangkasrambuts="pangkasrambuts" :barbershops="barbershops"></jasa-kecantikan>

                <reparasi :rumahs="rumahs" :mobils="mobils" :motors="motors" :reparasilistriks="reparasilistriks" :tambalbans="tambalbans" :lass="lass" :reparasielektroniks="reparasielektroniks" :reparasihandphones="reparasihandphones" ></reparasi>

                <kebersihan :dalamrumahs="dalamrumahs" :luarrumahs="luarrumahs" :cucikendaraans="cucikendaraans"></kebersihan>

                <tenaga-pendukung :arts="arts" :babysisters="babysisters" :satpams="satpams" :drivers="drivers" :tukangmasaks="tukangmasaks"></tenaga-pendukung>

                <kursus :menjahits="menjahits" :musiks="musiks" :memasaks="memasaks" :beladiris="beladiris" :programkomputers="programkomputers" :menaris="menaris" :otomotifs="otomotifs" :bimbinganbelajars="bimbinganbelajars"></kursus>

           </div> 
          </div>{{--  end div md-2 --}}


          <div class="col-md-10">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tenaga Pendukung</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Baby Sister</li>
                </ol>
              </nav>
              <div class="row">
                      @if(count($jasa) == 0)
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
                                      <a href="{!! url('/kategori-handphone'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan semua produk</button></a>
                                    </div>
                                  </div>
                              </div>
                        @else

                        @foreach ($jasa as $inijasa)
                        {{-- produk --}}
                        <div class="col-md-2  mb-4">
                         <div class="card"  onclick="location.href='{{ url('detail-jasa/'.$inijasa->id) }}'">
                            <div class="ukuran">  <img src="uploads/{{ $inijasa->photo }}" class="card-img-top" alt="Card image cap"> </div>
                              <div class="card-body">
                                <p class="card-title">{{ $inijasa->nama_paket }}</p>
                                <h6 class="card-text text-danger">Rp.{{ number_format ($inijasa->harga,0,',','.')}}</h6>
                              </div>
                              <div class="card-footer" style="background-color: #DC3179;">
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $inijasa->kategori }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i>  {{ $inijasa->provinsi }}</p>
                              </div>
                          </div>
                        </div>
                        @endforeach
                      @endif
              </div>
          </div>


        </div>{{--  end row --}}

  
      @include('includes.footer')


    </div>



<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
 



@endsection