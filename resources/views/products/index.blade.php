@extends('layouts.app')



@section('page-style')
    <style media="screen">
    .online{
        color: #32CD32;
    }
    .ffside {
        height: 100%;
        z-index: 1;
        top: 0;
        right: 0;
        width: 18em;
        overflow-x: hidden;
    }
    .chat_box{
        width:260px;
        padding: 5px;
        position: fixed;
        bottom: 0px;
    }

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


          <div class="row title-supplier shadow" style="padding-top: 25px; background-color: #64297C; padding-bottom: 20px; ">

            <div class="col-md-4">
                <center><img class="rounded-circle" src="uploads/{{ Auth::user()->photo }}" alt="..."  width="150px" ><br><br></center>

                   {{--  <center>
                      <h5 class="text-light">X Rp.50000</h5>
                    </center><br> --}}
                
                        
                  {{-- <button type="button" class="btn btn-success" style="margin-left: 65px;"><span data-feather="message-circle" style=" width: 20px; height: 20px;"></span> Chat</button> --}}
                  {{-- <button type="button" class="btn btn-primary" style="margin-left: 10px;"><span data-feather="phone" style=" width: 20px; height: 20px;"></span> Telepon</button> --}}
                  
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
                    <div class="col-md-3"> </div>

                    <div class="col-md-9 mt-2" style="padding-left: 40px;">
                      <a href="{!! url('/users/' . Auth::user()->id ) !!}" style="text-decoration:none;" ><button class="btn btn-outline-light btn-sm btn-block">Edit Profil</button></a>
                    </div>

                  </div>
            </div>

            <div class="col-md-4">            
              <a href="" style="text-decoration: none;"><p class="h4 text-center" style="font-size: 28px; color: #ffffff;">  {{ Auth::user()->name }}</p></a>

              <div class="mse-difficulty-bar">
                <span title="Difficulty is Considered Moderate">
                  <span class="bars">
                    <span class="bar warnaku"></span>
                    <span class="bar warnaku"></span>
                    <span class="bar warnaku"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </span>
                </span>
              </div>

              <h5 class="text-light text-center">{{ Auth::user()->detail_toko }}</h5>
            </div>

            <div class="col-md-8">

             @if ( !empty( Auth::user()->status))

              <div class="col-md-12 " style="padding-left: 40px;">
                <b style="font-size: 18px; color:#ffffff; padding-right: 20px;"><i>"{{ Auth::user()->status }}"</i></b> 
                <a data-toggle="modal" data-target="#showedit" ><button class="btn btn-success btn-sm">Edit Profil</button></a>
              </div>

              @else

              <div class="col-md-6 " style="padding-left: 40px;">
                <a data-toggle="modal" data-target="#showedit" ><button class="btn btn-primary btn-sm"><span data-feather="plus"></span> Tambah Status</button></a>
              </div>

              @endif

            </div>




          </div>

        </div>
        <div class="col-sm-2"></div>
     
        <div class="modal fade" id="showedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form method="POST" action="{{ route('users.update', Auth::user()->id ) }}">
                        @csrf
                        {{ method_field('patch') }}
                    <div class="form-group">
                      <label for="#">Status</label>
                      <input type="text" class="form-control" name="status" placeholder="Silahkan Masukkan Status">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-2"> </div>

        <div class="col-sm-8" style="/*background-color:*/ red;" >

                        <div class="container-fluid">
                            <div class="row">             
                              <div class="col-sm-12">
                                @if ($message = Session::get('success'))
                                      <div class="alert alert-success hilang">
                                          <p>{{ $message }}</p>
                                      </div>
                                @endif
                                </div>

                                <div class="col-sm-12">
                                @if ($message = Session::get('delete'))
                                      <div class="alert alert-danger hilang">
                                          <p>{{ $message }}</p>
                                      </div>
                                @endif
                                </div>
                            </div>


                            <form action="{!! route('products.index') !!}" method="GET" >
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
                                <div class="col-md-3">
                                    <form action="{!! route('products.index') !!}" method="GET">
                                  
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Search Product" id="pencarian" name="pencarian">
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary" type="button"><span data-feather="search"></span></button>
                                      </div>
                                    </div>
                                  </form>

                                </div>
                               
                                <div class="col-md-3" >
                                      <a href="{!! url('/products'); !!}" class="custom2 btn btn-success btn-block"><span data-feather="list"></span> Semua Produk</a>
                                </div>

                                <div class="col-md-3">
                                      <a style="font-size: 13px;" href="{!! url('/inputproduct'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="plus"></span> Tambah Produk</a>
                                </div>

                                <div class="col-md-3">
                                      <a style="font-size: 13px;" href="{!! url('/jasa'); !!}" class="custom  btn btn-primary btn-block"><span data-feather="eye"></span> Lihat Jasa</a>
                                </div>

                            </div>

                        </div>


                         <div id="tesdropdown"></div>


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
                                     <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                     <div class="card" style="cursor:pointer;">
                                        <div class="ukuran"><img class="" src="uploads/{{ $product->photo }}"  alt="Card image cap"></div>
                                          <div class="card-body">
                                            <p class="card-title">{{ $product->nama_produk }}</p>
                                            <h6 class="card-text text-danger">Rp{{ number_format($product->harga, 0, ',', '.')}}</h6>
                                          </div>
                                          <div class="card-footer" style="background-color: #DC3179;">
                                            <div class="clearfix" >
                                                 <a href="{{ url('detail/'.$product->id) }}" class="btn btn-outline-light btn-sm float-left spasitombolfooter"><span data-feather="eye"></span> Lihat</a>
                                                 @csrf
                                                 @method('DELETE')
                                                 <a href="#myModal{{ $product->id }}"  data-toggle="modal" class="btn btn-outline-dark btn-sm float-right"><span data-feather="trash-2"></span> Hapus</a>
                                                <!-- Modal HTML -->
                                                <div id="myModal{{ $product->id }}" class="modal fade" >
                                                  <div class="modal-dialog modal-confirm">
                                                    <div class="modal-content">
                                                      <div class="modal-header" style="margin-bottom: -35px;">
                                                        <div class="icon-box">
                                                         <span data-feather="x" style="height: 46px; width: 46px;  margin-top: 13px; color: #f15e5e; display: inline-block;"></span>
                                                        </div>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <h4>Hapus Produk</h4><br>
                                                        <p>Apa kau benar benar ingin menghapus produk ini?</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                              </form>
                                            </div>{{--  clearfix --}}
                                          </div>{{--  cardfooter --}}

                                        </div> {{-- card --}}
                                    </div> {{-- col-md-3 --}}
                                     @endforeach
                                  @endif

                              </div> {{-- row --}}
                        </div>{{-- container --}}

                        {!! $products->links() !!}
                        
                    </div> {{-- col md 8 --}}

                    <div class="col-sm-2"></div>




                    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

              </div> {{-- row --}}

            </div> {{-- container --}}
      

      @include('includes.footer')
    
 

@endsection

