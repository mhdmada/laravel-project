
@extends('layouts.app')

@section('content')




  <body class="bg-light">

       <div class="container" style="padding-top: 30px;" >
        <h2 class="text-center mb-4">WANTED JASA</h2>

        <form action="{!! url('/wantedlistjasa'); !!}" method="GET" >
        <div class="row">

            <div class="col-md-1"></div>

            <div class="col-md-8" id="jasacategories"></div>

            <div class="col-md-2" style="padding-left: 30px;">
                <div class="mb-3" style="padding-top: 30px;">
                  <button type="submit" class="btn btn-success" style="width: 100px;"><span data-feather="filter"></span>   Filter</button>
                </div>
            </div>

            <div class="col-md-1"></div>

        </form>

        </div>


        <div class="row">           
              
          <div class="col-md-4" style="padding-bottom: 23px;">
                <a style="font-size: 13px;" href="{!! url('/wantedlistjasa'); !!}" class=" btn btn-primary btn-block"><span data-feather="list"></span> Tampilkan Semua Wanted Jasa</a>
          </div>
          <div class="col-md-4">
                <a style="font-size: 13px;" href="{!! url('/inputwantedjasa'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="plus"></span> Tambah Wanted list Jasa</a>
          </div>
          <div class="col-md-4">
                <a style="font-size: 13px;" href="{!! url('/wantedlistproduct'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="eye"></span> Lihat Wanted List Produk</a>
          </div>
           

          <div class="col-md-12">
                      <div class="row">
                       @if(count($wantedjasas) == 0)
                              <div class="col-md-12 mb-4">
                                 <div class="empty-icon-container">
                                    <div class="animation-container">
                                        <div class="bounce"></div>
                                        <div class="pebble1"></div>
                                        <div class="pebble2"></div>
                                        <div class="pebble3"></div>
                                    </div>
                                    <div>
                                      <h2 class="mt-5">Maaf hasil pencarian jasa tidak ditemukan</h2>
                                      <p class="mt-2">Silahkan melakukan pencarian kembali dengan menggunakan kata kunci lain.</p>

                                      <a href="{!! url('/wantedlistproduct'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan Wanted Jasa</button></a>
                                    </div>
                                  </div>
                              </div>
                        @else
                          @foreach ($wantedjasas as $jasa)
                        {{-- produk --}}


                        <div class="col-md-1.5  mb-4" style="margin-right: 10px;">
                         <div class="card"  onclick="location.href='{{ url('detail/'.$jasa->id) }}'">
                              <div class="card-body" style="width: 250px; height: 250px;">
                                <p class="card-title">{{ $jasa->nama_jasa }}</p>
                                <h6 class="card-text text-danger">Deskripsi : {{ $jasa->deskripsi }}</h6>
                              </div>
                              <div class="card-footer" style="background-color: #DC3179; height: 150px;">
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $jasa->kategori }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $jasa->kategori1 }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $jasa->kategori2 }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;"><i class="fas fa-store"></i>  {{ $jasa->nama_supplier }}</p>
                              </div>
                          </div>
                        </div>



                        @endforeach
                        @endif
                      </div>
                  {{ $wantedjasas->links() }}

          </div>


        </div>{{--  end row --}}



      @include('includes.footer')


    </div>


  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


@endsection
