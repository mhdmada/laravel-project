

@extends('layouts.app')

@section('content')


  <body style="background-color: #f5f5f5">

    <div class="container">
      <div class="py-5 text-center">
      
       
      </div>

      <div class="row">

        

        <div class="col-md-12 order-md-2 bordered mb-4" style="background-color: white;">

    
            <div class="mb-3" style="padding-top: 15px;">
              <h3>Keranjangku</h3>
            </div>
        
            @if (Cart::content()->isNotEmpty() )
            <div class="mb-3">
              <h4 class="text">Kemana Barang Pesananmu Dikirimkan?  </h4>
              {{ Auth::user()->lokasi }}<br>
              {{ Auth::user()->no_hp }}

            </div>
            @endif


            <hr class="mb-4">
              <div class="row">

              @if (Cart::content()->isEmpty() )

              <div class="col-md-2"></div>

              <div class="col-md-4 mb-5">
                <img src="empty-cart.png">
              </div>

              <div class="col-md-4"></div>

              @else

              @foreach(Cart::content() as $row)

                <div class="col-md-4 mb-5 text-center">
                 <img src="uploads/{{$row->image}}" width="80px;">
                </div>

                 <div class="col-md-4 mb-3" >
                  <h5>{{$row->name}}</h5>
                  <input type="text" id="harga" class="form-control-plaintext text-danger" style="font-size: 20px;" value="{{ $row->price }} "> 
                  <h3>{{$row->toko }}</h3>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kurir</label>
                    <select class="form-control" name="dropdown" id="dropdown">
                      <option value="">Pilih</option>
                      <option value="JNE">JNE</option>
                      <option value="POS">POS</option>
                      <option value="J&T">J&T</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Layanan</label>
                    <select class="form-control" name="dropdown" id="dropdown">
                      <option value="">Pilih</option>
                      <option value="20000">1 Hari - 20000</option>
                      <option value="15000">2 Hari - 15000</option>
                      <option value="10000">5 Hari - 10000</option>
                    </select>
                  </div>


                </div>


                 <div class="col-md-2 mb-3" >
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" id="moins" onclick="minus()" type="button"><font style="font-size: 20px;">-</font></button>
                      </div>
                      <input type="number" class="form-control text-center" id="count" name="qty" value="{{$row->qty}}" style="font-size: 20px; font-family: Calibri">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" id="plus" onclick="plus()" type="button"><font style="font-size: 20px;">+</font></button>
                      </div>
                    </div>
                </div> 

                <div class="col-md-2">
                  <a href="{{url('remove-cart/'.$row->rowId)}}" class="btn btn-danger">Remove</a>
                </div>

             
              @endforeach

               </div>  {{-- row --}}
           
            <hr class="mb-4">

             


                <div class="row">
                   <div class="col-md-12 mb-3 clearfix" >
                      <h2 class="float-left" style="font-family: Calibri">Total : <input type="text" class="form-control-plaintext" id="total" name="" value="Rp. {{ Cart::subtotal() }}"></h2> 

                       <form action="{{url('cart2')}}" method="post"> {{-- ini form --}}
                        @foreach(Cart::content() as $row)
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" value="{{ $row->id }}" name="id">
                          <input type="hidden" value="{{ $row->name }}" name="name">
                          <input type="hidden" value="{{ $row->toko }}" name="toko">
                          <input type="hidden" name="kurir" id="receiver" value="" />

                          <input type="hidden" value="{{ $row->image }}" name="image">
                          <input type="hidden" value="{{ $row->price }}" name="price">
                          <input type="hidden" value="{{ $row->qty }}" name="jumlah" id="jumlah">
                        @endforeach
                          <button class="btn btn-primary custom float-right" type="submit"><span data-feather="shopping-cart"></span> Checkout</button> 
                      </form>

                    </div>
                </div>

            

          @endif


             

         </p>

        </div>

       



           <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Masih develop</p>
              </div>
              <div class="modal-footer">
             
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-12 order-md-3 bordered" style="background-color: white;">
{{-- 
          <div class="row">

            <div class="col-md-4 ">
              <div class="row">
                  <div class="col-md-4 my-3"><img src="../apple.png" alt="..." width="100px;" ></div>
                  <div class="col-md-8 mt-4"><h5 style="padding-bottom: 10px;">Apple Store</h5> <button class="btn btn-secondary btn-sm" onclick="window.location.href='{!! url('/supplier'); !!}'">Kunjungi Toko</button></div>
              </div>
            </div>

             <div class="col-md-3 my-5 border-left"> <h6 class="text-center"> <span data-feather="shopping-bag"></span> Jumlah Produk : </h6>   </div>
              <div class="col-md-4 my-5 border-left border-right"><h6 class="text-center"> <span data-feather="shopping-bag"></span> Tanggal Bergabung : 16-05-2018 </h6> </div>
          

          </div> --}}

        </div>

      </div>

      @include('includes.footer')

    </div>

<script type="text/javascript">

    var count = 1;
    var countEl = document.getElementById("count");


    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
    }



</script>

        


@endsection

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  {{--    <script src="../js/jquery.elevatezoom.js"></script>

     <script src="../js/jquery-1.8.3.min.js"></script>


    
    <script src="../dist/js/bootstrap.min.js"></script>
   
     
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script type="text/javascript">
      // kode menampilkan icon
      feather.replace()


      function initMap() {
        var uluru = {lat: -6.192317, lng:   106.745376};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }


      $("#zoom_01").elevateZoom();

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVAVB7aTepD4N2uVobsTKeTGYk3p0nOps&callback=initMap">
    </script>
  </body>
</html> --}}
