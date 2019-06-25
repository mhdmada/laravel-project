

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


        <div class="col-md-12 order-md-2 bordered mb-4" style="background-color: white;">

      

            <div class="mb-3" style="padding-top: 15px;">
              <h3>Penjualanku</h3>
            </div>
        
            <div class="mb-3">
              <h3 class="text-danger"> </h3>  
            </div>

            <hr class="mb-4">
              <div class="row">
                <div class="col-md-12 mb-3" >
                 <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="belum-tab" data-toggle="tab" href="#belum" role="tab" aria-controls="belum" aria-selected="true">Pemesanan</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" id="batal-tab" data-toggle="tab" href="#batal" role="tab" aria-controls="batal" aria-selected="true">Batal</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sudah-tab" data-toggle="tab" href="#sudah" role="tab" aria-controls="sudah" aria-selected="true">Sudah Bayar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="dikirim-tab" data-toggle="tab" href="#dikirim" role="tab" aria-controls="dikirim" aria-selected="false">Berhasil Dikirim</a>
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
                            </div>  

                            <div class="col-md-2 mb-3">
                                 <a data-toggle="modal" data-target="#batal{{$belum->kode}}" ><button class="btn btn-danger btn-sm"><span data-feather="x"></span> Tolak Pesanan</button></a>
                            </div>

                            

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
                             Tanggal Transaki   <font style="padding-left: 7px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $batal->updated_at->format('d M Y') }}</b> <br>
                             Jam Transaksi      <font style="padding-left: 21px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $batal->updated_at->format('H:i:s') }} </b>
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
                             <h6>{{ $diterima->pesan }}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$diterima->kode}}</b>   <br>
                             Tanggal Transaki   <font style="padding-left: 7px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $diterima->updated_at->format('d M Y') }}</b> <br>
                             Jam Transaksi      <font style="padding-left: 21px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $diterima->updated_at->format('H:i:s') }} </b>
                             Proses Pesanan     <font style="padding-left: 21px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;"><span id="remainingTime">24:00:00</span></b> <br>
                             
                             <form name="counter">
                                <input type="text" size="8" name="chandresh" id="counter">
                            </form>

                            </div>

                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'. $diterima->kode ) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{ $diterima->bank }} <br><a data-toggle="modal" data-target="#detail{{ $diterima->kode }}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>

                            <div class="col-md-5 mb-3">
                                 <a data-toggle="modal" data-target="#reject{{ $diterima->kode }}" ><button class="btn btn-danger btn-sm ml-3 mr-2"><span data-feather="x"></span> Reject</button></a>
                           
                                 <a data-toggle="modal" data-target="#{{ $diterima->kode }}" ><button class="btn btn-primary btn-sm mr-2"><span data-feather="activity"></span> Proses</button></a>
                            
                                 <a data-toggle="modal" data-target="#kirim{{ $diterima->kode }}" ><button class="btn btn-success btn-sm"><span data-feather="send"></span> Kirim</button></a>
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
                                                <input id="01" type="file" accept="image/*" name="photo_resi">
                                                <input type="hidden" class="form-control" name="status" value="dikirim" placeholder="Silahkan Masukkan Status">
                                              </div>

                                              <div class="form-group mx-sm-3 mb-2 mt-5 upload-wrap">
                                                <div class="input-group input-group-sm mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">No Resi</span>
                                                  </div>
                                                  <input name="no_resi" type="text" style="text-transform: uppercase;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Masukkan No Resi">
                                                </div>
                                              </div>

                                            <input type="hidden" class="form-control" name="status" value="dikirim" placeholder="Silahkan Masukkan Status">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                                    <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div> {{-- end modal --}}



                              <div class="modal fade" id="reject{{$diterima->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        Apakah anda yakin ingin Menolak Pesanan Anda ?
                                        <form method="POST" action="{{ route('transaksi.update', $diterima->kode ) }}">
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
                             Tanggal Kirim   <font style="padding-left: 26px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $kirim->updated_at->format('d M Y') }}</b> <br>
                             Jam Kirim      <font style="padding-left: 50px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $kirim->updated_at->format('H:i:s') }} </b>
                            </div>


                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$kirim->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$kirim->bank}} <br><a data-toggle="modal" data-target="#detail{{$kirim->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>
                            
                            <div class="col-md-2">
                               <h5><span class="badge badge-success"><i data-feather="check" style="width: 18px; height: 18px;"></i> Berhasil Dikirim</span></h5><br>
                               <h6>No Resi : {{ $kirim->no_resi }}</h6>
                            </div>

                            <div class="col-md-2">
                                <img class="img-thumbnail" width="200px;" src="uploads/{{$kirim->photo_resi}}">
                            </div>

                            <div class="col-md-2">

                            </div>

                          @endforeach 

                        </div>  
                    </div>






                    <div class="tab-pane fade" id="berhasil" role="tabpanel" aria-labelledby="berhasil-tab">
                        <div class="row mt-5">

                           @foreach ($berhasil as $selesai)
                            
                            <div class="col-md-12 mb-3" >
                             <h6>{{$selesai->pesan}}</h6>
                            </div>

                            <div class="col-md-3">
                             Kode Transaksi     <font style="padding-left: 17px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{$selesai->kode}}</b>   <br>
                             Tanggal Kirim   <font style="padding-left: 26px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $selesai->updated_at->format('d M Y') }}</b> <br>
                             Jam Kirim      <font style="padding-left: 50px; padding-right: 2px;">:</font> <b style="font-family: 'Oswald', sans-serif !important;">{{ $selesai->updated_at->format('H:i:s') }} </b>
                            </div>


                            <div class="col-md-2 mb-3">
                              <a href="{{ url('detail-status/'.$selesai->kode) }}"> <button type="button" class="btn btn-primary btn-sm"><span data-feather="list"></span> Produk</button></a>
                            </div>

                            <div class="col-md-2">Transfer : {{$selesai->bank}} <br><a data-toggle="modal" data-target="#detail{{$selesai->kode}}" > <button type="button" class="btn btn-link">Detail Transfer</button></a></div>
                            
                            <div class="col-md-2">
                               <h5><span class="badge badge-success"><i data-feather="check" style="width: 18px; height: 18px;"></i> Berhasil Diterima</span></h5><br>
                            </div>


                            <div class="col-md-2">

                            </div>


                              
                              {{-- <div class="col-md-4">
                                  <div class="panel panel-default ffside" id="chatApp">
                                      <div class="panel-heading">{{ $selesai->created_at->format('d M Y ')  }}</div>
                                      <div class="panel-body" style="padding:0px;">
                                          <ul class="list-group">
                                              <li class="list-group-item" v-for="chatList in chatLists" style="cursor: pointer;" @click="chat(chatList)">
                                                
                                              <i class="far fa-comment"></i> Chat  @{{ chatList.name }}  <i class="fa fa-circle pull-left" v-bind:class="{'online': (chatList.online=='Y')}"></i>  
                                              <span class="badge badge-primary" v-if="chatList.msgCount !=0">@{{ chatList.msgCount }}</span></li>
                                              <li class="list-group-item" v-if="socketConnected.status == false">@{{ socketConnected.msg }}</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div> --}}

                             


                              <!-- Modal -->
                                <div class="modal fade" id="komentar{{$selesai->kode}} " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                          <div class="col-md-12">
                                            <textarea class="form-control" name="komentar" rows="3" placeholder="Review Produk"></textarea>
                                          </div>

                                          <input type="hidden" name="kode" value="{{$selesai->kode}}">
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


@endsection

@section('page-script')
    <script src="{{ asset('js/chat.js') }}" charset="utf-8"></script>
@stop
