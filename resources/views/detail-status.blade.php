

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


  <body style="background-color: #f5f5f5">

    <div class="container">
      <div class="py-5 text-center">
      
       
      </div>

      <div class="row">


        <div class="col-md-12 order-md-2 rounded mb-4 shadow" style="background-color: white;">

      
            <div class="mb-3" style="padding-top: 15px;">
              <h3>Detail Produk</h3>
            </div>
        
            <div class="mb-3">
              <h3 class="text-danger"> </h3>  
            </div>

            <hr class="mb-4">
              <div class="row">
                <div class="col-md-12 mb-3" >
                 
                        <div class="row mt-5">
                          @foreach ($details as $detail)
                            <div class="col-md-12 mb-3" >
                             <h6>{{$detail->pesan}}</h6>
                            </div>

                            <div class="col-md-4 mb-3 ml-3">
                             <img src="../uploads/{{$detail->photo}}" width="60px;">
                            </div>

                            <div class="col-md-2 h4">x{{$detail->jumlah}}</div>


                            <div class="col-md-2 mb-3" >
                              <h4>{{$detail->name}}</h4>
                              <h4 class="text-danger">Rp {{$detail->harga}} </h4>
                              {{-- <a data-toggle="modal" data-target="#produk{{$belum->kode}}" > <button type="button" class="btn btn-link">Produk</button></a> --}}
                            </div>

                            <div class="col-md-2 mb-3" >
                              <h4> {{$detail->toko}} </h4>
                            </div>

                          @endforeach 

                        </div>  
                              
            <hr class="mb-4">

        </div>



      </div>

      @include('includes.footer')

    </div>


@endsection

@section('page-script')
    <script src="{{ asset('js/chat.js') }}" charset="utf-8"></script>
@stop
