

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

     .uploadpreview{
      width:200px;
      height:200px;
      display:block;
   /*   margin-left: 90px;*/
      border:1px solid #ccc;
      border-radius: 5px;
      margin:0 auto 15px;
      background-size:100% auto;
      background-repeat:no-repeat;
      background-position:center;
    }

    .upload-wrap{
      float:left;
      width:200px;
    }

    input[type="file"] {
        color: transparent;
        width: 120px;
        margin: 0 auto;
        display: block;
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
              <h3>Pembelian</h3>
            </div>
        
            <div class="mb-3">
              <h3 class="text-danger"> </h3>  
            </div>

            <hr class="mb-4">
              <div class="row">
                <div class="col-md-12 mb-3" >
                 <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="belum-tab" data-toggle="tab" href="#belum" role="tab" aria-controls="belum" aria-selected="true">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="batal-tab" data-toggle="tab" href="#batal" role="tab" aria-controls="batal" aria-selected="true">Batal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sudah-tab" data-toggle="tab" href="#sudah" role="tab" aria-controls="sudah" aria-selected="true">Sudah Bayar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="dikirim-tab" data-toggle="tab" href="#dikirim" role="tab" aria-controls="dikirim" aria-selected="false">Diterima</a>
                    </li>                   
                    <li class="nav-item">
                      <a class="nav-link" id="berhasil-tab" data-toggle="tab" href="#berhasil" role="tab" aria-controls="berhasil" aria-selected="true">Selesai</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="belum" role="tabpanel" aria-labelledby="belum-tab">
                        <div class="row mt-5">
                        @if(count($belum_bayar) == 0)
                            <div class="col-sm-12">
                              <div class="text-center">
                                  <div class="mt-4">
                                      <img src="empty.gif" width="180px;" >
                                  </div>
                                  <h1 style=" font-size: 22px; font-weight: 500;" class="mt-3" >Tidak Ada Tagihan Pembayaran</h1>
                                  <p class="text-muted" style="">Silahkan Beli Produk </p>
                              </div>
                            </div>
                          @else

                          @foreach ($belum_bayar as $belum)
                            <div class="col-md-12 mb-3" >
                             <h6>{{$belum->pesan}}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$belum->kode}}</b>   <br>
                             Tanggal Transaki   <font style="padding-left: 7px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $belum->created_at->format('d M Y') }}</b> <br>
                             Jam Transaksi      <font style="padding-left: 21px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $belum->created_at->format('H:i:s') }} </b>
                            </div>

                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$belum->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$belum->bank}} <br><a data-toggle="modal" data-target="#detail{{$belum->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>

                            <div class="col-md-2 mb-3">
                                 <a data-toggle="modal" data-target="#sudah{{$belum->kode}}" ><button class="btn btn-success btn-sm"><span data-feather="check"></span> Sudah Bayar</button></a>
                            </div>  

                            <div class="col-md-2 mb-3">
                                 <a data-toggle="modal" data-target="#batal{{$belum->kode}}" ><button class="btn btn-danger btn-sm"><span data-feather="x"></span> Batal Pesanan</button></a>
                            </div>  

                           


                            <div class="modal fade" id="sudah{{$belum->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bayar Pesanan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        Apakah anda yakin sudah membayar Pesanan Anda ?
                                        <form method="POST" action="{{ route('transaksi.update', $belum->kode ) }}">
                                            @csrf
                                            {{ method_field('put') }}
                                          <input type="hidden" class="form-control" name="status" value="sudah bayar" placeholder="Silahkan Masukkan Status">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                                    <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div> {{-- end modal --}}



                            <div class="modal fade" id="batal{{$belum->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        Apakah anda yakin ingin membatalkan Pesanan Anda ?
                                        <form method="POST" action="{{ route('transaksi.update', $belum->kode ) }}">
                                            @csrf
                                            {{ method_field('put') }}
                                          <input type="hidden" class="form-control" name="status" value="batal">
                                          <input type="hidden" class="form-control" name="dibatalkan" value="{{ Auth::user()->name }}">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                                    <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div> {{-- end modal --}}



                            <div class="modal fade" id="detail{{$belum->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Transfer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        <h5>Total Tagihan : Rp. {{$belum->total}}</h5>
                                        <hr>
                                        <h5>Metode Pembayaran : Transfer</h5>
                                        <hr>
                                        <h5>Waktu Limit Pembayaran : <span id="remainingTime">24:00:00</span></h5>
                                        <hr>
                                        <h5>Nomor Rekening : 78896223334 A/N Mythings</h5>
                                        <hr>
                                        <h5>Bank : &nbsp 
                                          @if($belum->bank == "BCA")
                                          <img style="width: 120px;" src="logo-bca.png">
                                          @endif

                                          @if($belum->bank == "Mandiri")
                                          <img style="width: 140px;" src="logo-mandiri.png">
                                          @endif

                                          @if($belum->bank == "BNI")
                                          <img style="width: 120px;" src="logo-bni.png">
                                          @endif

                                          @if($belum->bank == "BRI")
                                          <img style="width: 140px;" src="logo-bri.png">
                                          @endif
                                        </h5>
                                  </div>
                                 
                                </div>
                              </div>
                            </div> {{-- end modal --}}

                            @endforeach 
                            @endif

                          </div>  
                      </div>





                    <div class="tab-pane fade" id="batal" role="tabpanel" aria-labelledby="batal-tab">
                        <div class="row mt-5">
                          @foreach ($batal_bayar as $batal)
                            <div class="col-md-12 mb-3" >
                             <h6>{{$batal->pesan}}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$batal->kode}}</b>   <br>
                             Tanggal Batal   <font style="padding-left: 26px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $batal->updated_at->format('d M Y') }}</b> <br>
                             Jam Batal      <font style="padding-left: 47px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $batal->updated_at->format('H:i:s') }} </b>
                            </div>

                            <div class="col-md-3 mb-3">
                             
                              <a href="{{ url('detail-status/'.$batal->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>

                            </div>


                            <div class="col-md-2">Transfer : {{$batal->bank}} <br><a data-toggle="modal" data-target="#detail{{$batal->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>


                            <div class="col-md-4 mb-3">
                                <h5>Dibatalkan oleh  {{$batal->dibatalkan}}</h5>
                            </div>  

                          @endforeach 
                        </div>  
                    </div>



                  <div class="tab-pane fade" id="sudah" role="tabpanel" aria-labelledby="sudah-tab">
                        <div class="row mt-5">
                          @foreach ($diterima_bayar as $diterima)

                            <div class="col-md-12 mb-3" >
                             <h6>{{$diterima->pesan}}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$diterima->kode}}</b>   <br>
                             Tanggal Bayar   <font style="padding-left: 23px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $diterima->updated_at->format('d M Y') }}</b> <br>
                             Jam Bayar      <font style="padding-left: 44px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $diterima->updated_at->format('H:i:s') }} </b>
                            </div>

                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$diterima->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$diterima->bank}} <br><a data-toggle="modal" data-target="#detail{{$diterima->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>
                               
                            <div class="col-md-2 mb-3">
                              <button data-toggle="modal" data-target="#kirim{{ $diterima->kode }}"  class="btn btn-secondary btn-sm"><span data-feather="upload"></span> Upload transfer</button>
                            </div>

                            <div class="col-md-2 mb-3">
                                @if(!empty($diterima->photo_transfer))
                                <h5><span class="badge badge-success"><i data-feather="check" style="width: 13px; height: 13px;"></i> Berhasil Diupload</span></h5>
                                @endif
                            </div>


                              <div class="modal fade" id="kirim{{ $diterima->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Kirim Pesanan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            {{-- Apakah anda yakin akan mengirim mengirim Pesanan Anda ? --}}
                                            <form class="" method="POST" action="{{ route('transaksi.update',  $diterima->kode ) }}" enctype="multipart/form-data">
                                                @csrf
                                                {{ method_field('put') }}

                                                  <div class="form-group mx-sm-3 mb-2 upload-wrap">
                                                    <label for="exampleInputEmail1">Photo No Resi</label>
                                                    <div class="uploadpreview 01"></div>
                                                    <input id="01" type="file" accept="image/*" name="photo_transfer">
                                                    <input type="hidden" class="form-control" name="status" value="sudah bayar" placeholder="Silahkan Masukkan Status">
                                                  </div>

                                                <input type="hidden" class="form-control" name="status" value="sudah bayar" placeholder="Silahkan Masukkan Status">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                                        <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                              </div> {{-- end modal --}}


                          @endforeach 

                        </div>  
                    </div>





                    <div class="tab-pane fade" id="dikirim" role="tabpanel" aria-labelledby="dikirim-tab">
                        <div class="row mt-5">

                          @foreach ($pengiriman as $kirim)

                            <div class="col-md-12 mb-3" >
                             <h6>{{$kirim->pesan}}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$kirim->kode}}</b>   <br>
                             Tanggal Bayar   <font style="padding-left: 23px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $kirim->updated_at->format('d M Y') }}</b> <br>
                             Jam Bayar      <font style="padding-left: 44px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $kirim->updated_at->format('H:i:s') }} </b>
                            </div>

                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$kirim->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$kirim->bank}} <br><a data-toggle="modal" data-target="#detail{{$kirim->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>

                            <div class="col-md-2 mb-3"></div> 

                            <div class="col-md-2 mb-3">
                                 <a data-toggle="modal" data-target="#sudah{{$kirim->kode}}" ><button class="btn btn-success btn-sm"><span data-feather="check"></span> Sudah Diterima</button></a>
                            </div>  

                            <div class="modal fade" id="sudah{{ $kirim->kode }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Terima Pesanan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        Apakah anda yakin ingin telah menerima Pesanan Anda ?
                                        <form method="POST" action="{{ route('transaksi.update', $kirim->kode ) }}">
                                            @csrf
                                            {{ method_field('put') }}
                                          <input type="hidden" class="form-control" name="status" value="berhasil" placeholder="Silahkan Masukkan Status">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                                    <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div> {{-- end modal --}}
                            @endforeach 

                        </div>  
                    </div>

                    <div class="tab-pane fade" id="berhasil" role="tabpanel" aria-labelledby="berhasil-tab">
                        <div class="row mt-5">

                           @foreach ($berhasil as $terima)

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$terima->kode}}</b>   <br>
                             Tanggal Bayar   <font style="padding-left: 23px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $terima->updated_at->format('d M Y') }}</b> <br>
                             Jam Bayar      <font style="padding-left: 44px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $terima->updated_at->format('H:i:s') }} </b>
                            </div>

                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$terima->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$terima->bank}} <br><a data-toggle="modal" data-target="#detail{{$terima->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>

                            <div class="col-md-2 mb-3"></div> 

                           {{--  <div class="col-md-3">
                                <a data-toggle="modal" data-target="#komentar{{$terima->kode}}" ><button class="btn btn-primary btn-sm"><i data-feather="edit-3"></i>Review</button></a>             
                            </div>
 --}}

                              <!-- Modal -->
                                <div class="modal fade" id="komentar{{$terima->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Komentar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">

                                       <form action="{{url('simpan')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                          
                                        <div class="container">
                                          <div class="row justify-content-center align-items-center">

                                          <div class="col-md-4 mb-3">
                                            <label for="username">Foto Utama <span class="badge badge-info">wajib</span> </label>
                                            <div id="image-preview5">
                                              <label for="image-upload" id="image-label5">Choose File</label>
                                              <input type="file" name="photo1" id="image-upload5" multiple="multiple" />
                                            </div>
                                          </div>
                                  
                                 
                                          <div class="col-md-4 mb-3">
                                            <label for="username">Foto 2 <small class="text-muted">(Optional)</small></label> 
                                             <div id="image-preview5">
                                              <label for="image-upload" id="image-label">Choose File</label>
                                              <input type="file" name="photo2" id="image-upload" multiple="multiple"/>
                                            </div>
                                          </div>

                                          <div class="col-md-4 mb-3">
                                            <label for="username">Foto 3 <small class="text-muted">(Optional)</small></label>
                                             <div id="image-preview5">
                                              <label for="image-upload" id="image-label2">Choose File</label>
                                              <input type="file" name="photo3" id="image-upload2" multiple="multiple" />
                                            </div>
                                          </div>

                                          <div class="col-md-12 mb-3">
                                            <small id="emailHelp" class="form-text"><span data-feather="alert-circle" class="text-danger"></span>  Size foto tidak boleh lebih dari 1 MB</small>
                                          </div>

                                          <div class="col-md-12">
                                            <textarea class="form-control" name="komentar" rows="3" placeholder="Review Produk"></textarea>
                                          </div>

                                          <input type="hidden" name="kode" value="{{$terima->id}}">
                                          <input type="hidden" name="user" value="{{ Auth::user()->name }}">
                                          
                                          </div> {{-- roow --}}
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>

                                    </div>
                                  </div>
                                </div>
                                <!-- Modal -->

                            @endforeach

                        </div> 
                    </div>


                  </div>

                </div>          
              </div>  
           
            <hr class="mb-4">

          
          <!-- Modal -->
            <div class="modal fade" id="luncurkan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row justify-content-center align-items-center">

                
                      <div id="muncul" class="col-md-12" style="display: none;">

                      <div id="happy" class="head" style="justify-content: center;">
                        <div class="face face__happy">
                          <div class="eye-left"></div>
                          <div class="eye-right"></div>
                          <div class="mouth"></div>
                        </div>
                      </div>
                      <div id="netral" class="head" style="justify-content: center;">
                        <div class="face face__standard">
                          <div class="eye-left"></div>
                          <div class="eye-right"></div>
                          <div class="mouth"></div>
                        </div>
                      </div>
                      <div id="sad" class="head" style="justify-content: center;"">
                        <div class="face face__sad">
                          <div class="eye-left"></div>
                          <div class="eye-right"></div>
                          <div class="mouth"></div>
                        </div>
                      </div>

                      </div>


                        <div class="col-md-12 text-center mt-4">
                         
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline1" name="smiley" class="custom-control-input" value="sad">
                          <label class="custom-control-label" for="customRadioInline1">Tidak Puas</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" name="smiley" class="custom-control-input" value="netral">
                          <label class="custom-control-label" for="customRadioInline2">Netral</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline3" name="smiley" class="custom-control-input" value="happy">
                          <label class="custom-control-label" for="customRadioInline3">Puas</label>
                        </div>

                        </div>



                      <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Excellent">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Sangat Baik">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Baik">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Cukup">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Tidak Puas">1 star</label>
                      </div>

                      </div> {{-- roow --}}

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->

            
        

      


         </p>

        </div>


      </div>

      @include('includes.footer')

    </div>


@endsection

@section('page-script')
    <script src="{{ asset('js/chat.js') }}" charset="utf-8"></script>
@stop
