@extends('layouts.app')

@section('content')

    {{-- diatas adalah kodingan header --}}

  <body class="bg-light">

       <div class="container-fluid" style="padding-top: 30px;" >
        <div class="row">
          <div class="col-md-2">

              <h3 class="text-center mb-4">PRODUK</h3>
              @include('kategori-produk')

          </div>{{--  end div md-2 --}}


          <div class="col-md-1">
              <nav aria-label="breadcrumb" class="col-md-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Busana Pria</li>
                    </ol>
              </nav>



               <div class="row">




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
          </div>


        </div>{{--  end row --}}


    
  


  
    


      @include('includes.footer')


    </div>


      

    

@endsection