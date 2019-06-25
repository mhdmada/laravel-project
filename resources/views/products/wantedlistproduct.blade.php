
@extends('layouts.app')

@section('content')




  <body class="bg-light">

       <div class="container" style="padding-top: 30px;" >
        <h2 class="text-center mb-4" >WANTED PRODUCT</h2>

        <form action="{!! url('/wantedlistproduct'); !!}" method="GET" >
        <div class="row">

            <div class="col-md-1"></div>
            
            <div class="col-md-8" id="productcategories"></div>

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
                <a style="font-size: 13px;" href="{!! url('/wantedlistproduct'); !!}" class=" btn btn-primary btn-block"><span data-feather="list"></span> Tampilkan Wanted Product</a>
          </div>
          <div class="col-md-4">
                <a style="font-size: 13px;" href="{!! url('/inputwantedproduct'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="plus"></span> Tambah Wanted List Produk</a>
          </div>
          <div class="col-md-4">
                <a style="font-size: 13px;" href="{!! url('/wantedlistjasa'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="eye"></span> Lihat Wanted list Jasa</a>
          </div>
           

          <div class="col-md-10">
                      <div class="row">
                       @if(count($wantedproducts) == 0)
                              <div class="col-md-12 mb-4">
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

                                      <a href="{!! url('/wantedlistproduct'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan Wanted Product</button></a>
                                    </div>
                                  </div>
                              </div>
                        @else
                          @foreach ($wantedproducts as $product)
                        {{-- produk --}}

                        <div class="col-md-1.5  mb-4" style="margin-right: 10px;">
                         <div class="card"  onclick="location.href='{{ url('detail/'.$product->id) }}'">
                              <div class="card-body" style="width: 250px; height: 250px;">
                                <p class="card-title">{{ $product->nama_produk }}</p>
                                <h6 class="card-text text-danger">Deskripsi : {{ $product->deskripsi }}</h6>
                              </div>
                              <div class="card-footer" style="background-color: #DC3179; height: 150px;">
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $product->kategori }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $product->kategori1 }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $product->kategori2 }}</p>
                                <p class="text-light" style="font-size: 15px; margin: 2px;"><i class="fas fa-store"></i>  {{ $product->nama_supplier }}</p>
                              </div>
                          </div>
                        </div> 

                        @endforeach
                        @endif
                      </div>
                  {{ $wantedproducts->links() }}

          </div>


        </div>{{--  end row --}}



      @include('includes.footer')


    </div>


<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


@endsection
