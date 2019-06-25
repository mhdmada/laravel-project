@extends('layouts.app')


@section('page-style')
    <style media="screen">

    .shadow{
      box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    }

    </style>
@stop

@section('content')

  
    <div class="container-fluid" style="padding-left: 250px; padding-right: 250px;">
      <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-8 mb-5" >


          <div class="row title-supplier shadow" style="padding-top: 25px; background-color: #64297C; padding-bottom: 30px; ">

            <div class="col-md-4">
                <center><img class="rounded-circle" src="../uploads/{{ $supplier->photo }}" alt="..."  width="100px" ><br><br>
                    <a href="" style="text-decoration: none;"><p class="h4" style="font-size: 28px; color: #ffffff;">  {{ $supplier->name }}</p></a>
                </center><br>
               
                  <a href="{{ url('/messenger') }}"><button type="button" class="btn btn-success" style="margin-left: 65px;"><span data-feather="message-circle" style=" width: 20px; height: 20px;"></span> Chat</button></a>

                
            </div>

           

            <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-3 text-center">
                      <p style="font-size: 25px;" class="mb-3"><b style="color:#ffffff;">{{ $jumlah }}</b></p>
                      <p style="color:#ffffff;">Jumlah Produk</p>
                    </div>
                    <div class="col-md-3 text-center">
                      <p style="font-size: 25px;" class="mb-3"><b style="color:#ffffff;">0</b></p>
                      <p style="color:#ffffff;">Followers</p>
                    </div>
                    <div class="col-md-3 text-center">
                      <p style="font-size: 25px;" class="mb-3"><b style="color:#ffffff;">0</b></p>
                      <p style="color:#ffffff;">Following</p>
                    </div>
                    <div class="col-md-3">
                      
                    </div>

                    <div class="col-md-6 mt-4" style="padding-left: 40px;">
                      <b style="font-size: 18px; color:#ffffff; padding-right: 20px;"><i>"{{ $supplier->status }}"</i></b> 
                    </div>


                    <div class="col-md-4"></div>

                    <div class="col-md-10 mt-4" style="padding-left: 40px;">
                     <h5 class="text-light">{{ $supplier->detail_toko }}</h5>
                    </div>




                  </div>
            </div>

          </div>

        </div>
        <div class="col-sm-2"></div>
      

      






        <div class="col-sm-2"> </div>

        <div class="col-sm-8" style="/*background-color:*/ red;" >



                        <div class="container-fluid">
                         


                            <form action="{{-- {!! route('products.index') !!} --}}" method="GET" >
                            <div class="pencarian shadow">
                              <div class="row" style="padding: 10px;">
                                <div class="col-sm-4" style="padding-bottom: 13px; border-right: solid 1px #e5e5e5;">
                                    <h6>Kategori Toko</h6>

                                    <select class="custom-select" name="kategori">
                                        @if(count($products) == 0)
                                          <option value="">Tidak Ada Kategori</option>
                                        @else
                                          @foreach ($kategori_toko as $ini) 
                                              {
                                                <option value="{{ $ini->kategori }}">{{ $ini->kategori }}</option>
                                              }
                                          @endforeach
                                        @endif
                                    </select>

                                </div>
                                 <div class="col-sm-4" style="padding-bottom: 13px;  border-right: solid 1px #e5e5e5;">
                                        <h6>Harga</h6>
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">Rp.</div>
                                          </div>
                                          <input type="text" maxlength="15" class="form-control" id="min" name="minimum" placeholder="Minimum" value="" > 
                                        </div>
                                        <div class="input-group input-group-sm">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">Rp.</div>
                                          </div>
                                          <input type="number" maxlength="15" class="form-control" id="max" name="maksimum" placeholder="Maksimum" value="">
                                        </div>
                                </div>
                                 <div class="col-sm-4" style="padding-bottom: 13px;">
                                {{--       <h6>Lokasi</h6>

                                       @if(count($products) == 0)
                                          gak ada lokasi
                                        @else
                                          @foreach ($lokasi as $ini) 
                                             
                                                 <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" name="{{ $ini->alamat }}" id="{{ $ini->alamat }}">
                                                  <label class="custom-control-label" for="{{ $ini->alamat }}">{{ $ini->alamat }}</label>
                                                </div>
                                              
                                          @endforeach
                                        @endif  --}}

                                      
                                        <button class="custom btn btn-primary " style="margin-top: 40px;" type="submit"><span data-feather="filter" style=" width: 20px; height: 20px;"></span> Filter</button>
                                </div>
                              </div>
                            </div>
                            </form>


                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <form action="{!! route('products.index') !!}" method="GET">
                                  
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Search Product" id="pencarian" name="pencarian">
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary" type="button"><span data-feather="search"></span></button>
                                      </div>
                                    </div>
                                  </form>
                                </div>

                                <div class="col-md-2" >
                                      <a href="{!! url('/products'); !!}" class="custom2 btn btn-success btn-block"><span data-feather="list"></span> Semua Produk</a>
                                </div>
                            </div>

                        </div>






                        <div class="container-fluid">
                                <div class="row">
                                  @if(count($products) == 0)
                                  <div class="col-sm-12" style="padding-bottom: 13px;">
                                  <div class="text-center">
                                          <div class="circular--landscape mt-4">
                                              <img src="kosong.png" width="" >
                                          </div>
                                          <h1 style=" font-size: 22px; font-weight: 500;" class="mt-3" >Tidak Ada Produk</h1>
                                          <p class="text-muted" style="">Silahkan Tambah Produk untuk mulai berjualan</p>
                                      </div>
                                    </div>
                                   @else

                                    @foreach ($products as $product)
                                   <div class="col-md-3  mb-4">
                                    
                                     <div class="card" style="cursor:pointer;">
                                        <div class="ukuran"><img class=""  src="../uploads/{{ $product->photo }}"  alt="Card image cap"></div>
                                          <div class="card-body">
                                            <p class="card-title">{{ $product->nama_produk }}</p>
                                            <h6 class="card-text text-danger">Rp{{ number_format($product->harga, 0, ',', '.')}}</h6>
                                          </div>
                                          
                                          <div class="card-footer" style="background-color: #DC3179; height: 100px;">
                                            <p class="text-light" style="font-size: 15px; margin: 2px;">{{ $product->kategori }}</p>
                                            <p class="text-light" style="font-size: 15px; margin: 2px;"><i class="fas fa-store"></i> {{ $product->nama_supplier }}</p>
                                          </div>

                                             
                                            

                                        </div> {{-- card --}}

                                    </div> {{-- col-md-3 --}}
                                     @endforeach
                                  @endif

                              </div> {{-- row --}}
                        </div>{{-- container --}}

                        
                        
                    </div> {{-- col md 8 --}}

                    <div class="col-sm-2"></div>






              </div> {{-- row --}}

            </div> {{-- container --}}
       

      @include('includes.footer')
   
       <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection