@extends('layouts.app')

@section('content')

    {{-- diatas adalah kodingan header --}}

  <body class="bg-light">

    <div class="container-fluid" style=" padding-top: 30px;">

      
       <div class="row">
          <div class="col-md-2">

              @include('kategori-produk')

          </div>{{--  end div md-2 --}}


          <div class="col-md-10">


             <nav aria-label="breadcrumb" class="col-md-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Semua Produk</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Busana Wanita</li>
                    </ol>
              </nav>

              <button id="muncul" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Tampilkan Filter
              </button><br><br>

              <form action="{!! route('products.index') !!}" method="GET" >
                            <div class="pencarian collapse" style="margin-top: -2px;"  id="collapseExample">
                              <div class="row" style="padding: 10px;">
                                <div class="col-sm-4" style="padding-bottom: 13px; border-right: solid 1px #e5e5e5;">
                                  

                                    {{-- <select class="custom-select" name="kategori">
                                        @if(count($products) == 0)
                                          <option value="">Tidak Ada Kategori</option>
                                        @else
                                          @foreach ($kategori_toko as $ini) 
                                              {
                                                <option value="{{ $ini->kategori }}">{{ $ini->kategori }}</option>
                                              }
                                          @endforeach
                                        @endif
                                    </select> --}}
                                    
                                      <div class="mb-3">
                                        <label for="username">Kondisi</label> <br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input id="baru" name="kondisi" type="radio" class="custom-control-input" value="baru" >
                                          <label class="custom-control-label" for="baru" style="font-weight: 400;">Baru</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input id="bekas" name="kondisi" type="radio" class="custom-control-input" value="bekas">
                                          <label class="custom-control-label" for="bekas" style="font-weight: 400;">Bekas</label>
                                        </div>
                                      </div>

                                     <div class="mb-3">
                                      <label for="username">Asal Produk</label> <br>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input id="impor" name="asal_produk" type="radio" class="custom-control-input" value="impor" >
                                        <label class="custom-control-label" for="impor" style="font-weight: 400;">Impor</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input id="lokal" name="asal_produk" type="radio" class="custom-control-input" value="lokal">
                                        <label class="custom-control-label" for="lokal" style="font-weight: 400;">Lokal</label>
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="username">Pembuatan Barang</label> <br>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input id="handmade" name="pembuatan_barang" type="radio" class="custom-control-input" value="handmade" >
                                        <label class="custom-control-label" for="handmade" style="font-weight: 400;">Handmade</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input id="nonhandmade" name="pembuatan_barang" type="radio" class="custom-control-input" value="nonhandmade">
                                        <label class="custom-control-label" for="nonhandmade" style="font-weight: 400;">Non Handmade</label>
                                      </div>
                                    </div>

                                </div>


                                 <div class="col-sm-4" style="padding-bottom: 13px;  border-right: solid 1px #e5e5e5;">
                                    <div class="mb-3">
                                      <label for="username">Size </label>
                                        <select class="form-control" name="size" id="size">
                                          <option value="">Pilih Size</option>
                                          <option value="XS">XS</option>
                                          <option value="S">S</option>
                                          <option value="M">M</option>
                                          <option value="L">L</option>
                                          <option value="XL">XL</option>
                                          <option value="XXL">XXL</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                      <label for="username">Panjang Lengan</label>
                                      <select class="form-control" name="panjang_lengan" id="panjang_lengan">
                                          <option value="">Pilih Panjang Lengan</option>
                                          <option value="Pendek">Pendek</option>
                                          <option value="Panjang">Panjang</option>
                                      </select>
                                    </div>

                                    <div class="mb-3">
                                      <label for="username">Bahan</label>
                                      <select class="form-control" name="bahan" id="bahan">
                                          <option value="">Pilih Bahan</option>
                                          <option value="Katun">Katun</option>
                                          <option value="Parasut">Parasut</option>
                                          <option value="Wool">Wool</option>
                                          <option value="Sutra">Sutra</option>
                                          <option value="Linen">Linen</option>
                                          <option value="Satin">Satin</option>
                                          <option value="Spandex">Spandex</option>
                                      </select>
                                    </div>


                                    <div class="mb-3">
                                      <label for="username">Warna</label>
                                        <select class="form-control" name="warna" id="warna">
                                          <option value="">Pilih Warna</option>
                                          <option value="Black">Black</option>
                                          <option value="Blue">Blue</option>
                                          <option value="Gold">Gold</option>
                                          <option value="Green">Green</option>
                                          <option value="Jet Black">Jet Black</option>
                                          <option value="Red">Red</option>
                                          <option value="Rose Gold">Rose Gold</option>
                                          <option value="Silver">Silver</option>
                                          <option value="Space Grey">Space Grey</option>
                                          <option value="White">White</option>
                                          <option value="Yellow">Yellow</option>
                                          <option value="Black Slate">Black Slate</option>
                                          <option value="White/Silver">White/Silver</option>
                                      </select>
                                    </div>
                                </div>

                                 <div class="col-sm-4" style="padding-bottom: 13px;">
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
                                      
                                        <button class="custom btn btn-primary " style="margin-top: 40px;" type="submit"><span data-feather="filter" style=" width: 20px; height: 20px;"></span> Filter</button>
                                </div>
                              </div>
                            </div>
                             </form>


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
                                          <h2 class="mt-5">Maaf produk tidak ditemukan</h2>
                                          <p class="mt-2">Silahkan melakukan pencarian kembali dengan menggunakan kata kunci lain.</p>

                                          <a href="{!! url('/kategori-pakaianwanita'); !!}"><button class="btn btn-primary mt-4"><i data-feather="list"></i> Tampilkan semua produk</button></a>
                                        </div>

                                      </div>
                                  </div>
                                 
                                 @else


                                 @foreach ($products as $product)
                                {{-- produk --}}
                                <div class="col-md-2  mb-4">
                                 <div class="card">
                                    <div class="ukuran">  <img src="uploads/{{ $product->photo }}" class="card-img-top" alt="Card image cap"> </div>
                                      <div class="card-body">
                                        <p class="card-title">{{ $product->nama_produk }}</p>
                                        <h6 class="card-text text-danger">Rp.{{ number_format ($product->harga,0,',','.')}}</h6>
                                      </div>
                                      <div class="card-footer bg-transparent">
                                        <p class="text-muted" style="font-size: 15px; margin: 2px;">Nike Indonesia</p>
                                        <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Barat</p>
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

@endsection