

@extends('layouts.app')

@section('content')


  <body style="background-color: #f5f5f5">

    <div class="container">
      <div class="py-5 text-center">
      
       
      </div>

      <div class="row">


        <div class="col-md-12 order-md-2 bordered mb-4" style="background-color: white;">

          <form action="{{url('store')}}" method="POST" id="form-beli">
            {{ csrf_field() }}

            <div class="mb-3" style="padding-top: 15px;">
              <h3>Checkout</h3>
            </div>
        
            <div class="mb-3">
              <h3 class="text-danger"> </h3>  
            </div>

            <hr class="mb-4">
              <div class="row">
                @foreach(Cart::content() as $row)
                  <div class="col-md-4 mb-3" >
                   <img src="uploads/{{$row->image}}" name="photo" width="80px;">
                   <input type="hidden" name="photo" value="{{$row->image}}">
                  </div>

                  <div class="col-md-4 mb-3" >
                    <input class="form-control-plaintext" style="font-size: 20px;" type="text" name="name" value="{{$row->name}}" readonly>
                    <input class="form-control-plaintext text-danger" style="font-size: 18px;" type="text" name="harga" value="{{$row->price}}" id="harga" readonly>
                    Biaya Kirim : {{$row->kurir}}
                  </div>

                  <div class="col-md-2 mb-3">
                     <input class="form-control-plaintext" type="text" style="font-size: 18px;" name="jumlah" value="{{$row->jumlah}}" id="jumlah" readonly>
                  </div> 

                   <div class="col-md-2 mb-3">
                    <input class="form-control-plaintext" type="text" style="font-size: 18px;" name="toko" value="{{$row->toko}}" id="toko" readonly>
                  </div>


                @endforeach              
              </div>  
           
            <hr class="mb-4">

            <div class="row">
             
              <div class="col-md-12 mb-3">
                <h6>Metode Pembayaran</h6>
                <select class="form-control" style="width: 30%;" name="bank" >
                  <option>BCA</option>
                  <option>BNI</option>
                  <option>Mandiri</option>
                  <option>BRI</option>
                </select>
              </div>

            </div>

            <hr class="mb-4" style="border-top: 1px solid #8c8b8b">

            <div class="row">
                <div class="col-md-6 mb-2 clearfix" >
                  <h6 class="float-left">Subtotal untuk Produk:</h6>
                  <div class="row float-right">
                      <input type="text" class="form-control-plaintext subtotal" name="subtotal" value="{{ $promo }}" readonly id="subtotal">
                  </div>
                </div>

                <div class="col-md-6"></div> {{-- tambahan div pengisi sisi kanan --}}

                <div class="col-md-12" class="mb-2"><hr></div> {{-- horizontal line --}}

                <div class="col-md-6 mb-2 clearfix" >
                  <div>Asuransi :</div>
                  <div class="float-left">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="yes" name="asuransi" class="custom-control-input" value="Yes">
                          <label class="custom-control-label" for="yes">Ya</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline checked">
                          <input type="radio" id="no" name="asuransi" class="custom-control-input" value="No" checked="true">
                          <label class="custom-control-label" for="no">Tidak</label>
                         </div>
                  </div>
                  <div class="row float-right">
                        <input class="form-control-plaintext" type="text" id="insurance" data-field-id="{{ $insurance }}" name="asuransi" value="{{ $insurance }}" readonly=""> 
                  </div>
                </div>

                <div class="col-md-6"></div> {{-- tambahan div pengisi sisi kanan --}}
                
                <div class="col-md-12" class="mb-2"><hr></div> {{-- horizontal line --}}


                <div class="col-md-6 mb-2 clearfix" >
                  <h6 class="float-left">Harga Kurir: <font style="color: red;"></font></h6>
                  <div class="row float-right">
                     <input type="text" class="form-control-plaintext biayakirim" name="biaya_kirim" value="5" readonly >
                  </div>
                </div>

                <div class="col-md-6"></div> {{-- tambahan div pengisi sisi kanan --}}

                 <div class="col-md-12"><hr></div>
                

                <div class="col-md-6 mb-2 clearfix" >
                <div class="float-left">Sumbangan Bantuan: 
                      <div class="col-md-12 " style="width: -100px;">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="yes1" name="bantuan" class="custom-control-input" value="Yes">
                          <label class="custom-control-label" for="yes1">Ya</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline checked">
                          <input type="radio" id="no1" name="bantuan" class="custom-control-input" value="No" checked="true">
                          <label class="custom-control-label" for="no1">Tidak</label>
                         </div>
                      </div>
                </div>
                   <div class="row float-right">
                      <input class="form-control-plaintext" type="text" id="bantuan" data-field-id="{{ $tes->bantuan }}" name="bantuan" value="{{ $tes->bantuan }}" readonly=""> 
                     
                  </div>
                </div>


                <div class="col-md-6"></div> {{-- tambahan div pengisi sisi kanan --}}

                <div class="col-md-12" class="mb-2"><hr></div> {{-- horizontal line --}}


                <div class="col-md-6 mb-2 clearfix" >
                  <h5 class="float-left">Total Pembayaran: <font style="color: red;"></font></h5>
                  <div class="row float-right">
                      <input type="text" style="color: red" class="form-control-plaintext" name="total" id="total" value="" readonly>
                  </div>
                </div>

                  <input type="hidden" name="kode" value="{{$row->id }}">
                  <input type="hidden" name="status" value="belum">

                  <input type="hidden" name="pembeli" value="{{ Auth::user()->name }}">

                </form> {{-- end form --}}

                <div class="col-md-6"></div> {{-- tambahan div pengisi sisi kanan --}}

                <div class="col-md-12" class="mb-2"><hr></div> {{-- horizontal line --}}


                <div class="col-md-6 mb-2 clearfix" >
                  <h6 class="float-left">Code Promo:  @if(Session::has('berhasil')) <font style="color: red;">{{ $tes->unique_code }}</font> <br>potongan diskon  <font>{{ $tes->diskon }}</font> @endif </h6>
                  <div class="row float-right">

                        <form  method="GET" action="{{url('pembayaran')}}">                        
                          <div class="col-md-12">
                          <div class="input-group input-group-sm mb-3">
                            <input type="text" style=" width: 120px;" name="promo" class="form-control" placeholder="Promo Code" aria-describedby="emailHelp">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">Apply</button>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-12">
                          @if(Session::has('berhasil'))
                               <small id="emailHelp" class="form-text text-success"> Kode promo berhasil ditambahkan !! {!! session('flash_message') !!}</small>
                          @endif
                        </div>

                        </form>
                        
                  </div>
                </div>


            </div> 
            {{-- end row --}}

            {{--  <a class="btn btn-primary btn-block float-right" href="{!! url('/status'); !!}" > Buat Pesanan</a>  --}}
             <button type="submit" id="button-beli" class="btn btn-primary btn-block float-right">Buat Pesanan</button>

             <br><br>

         

         </p>

        </div>




      </div>

      @include('includes.footer')

    </div>

    <script type="text/javascript">
       $("#button-beli").click(function(){  
            $("#form-beli").submit();
          });

          console.log('fdjfd');
    </script>

@endsection





    
        
        





  