
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
    </style>
@stop

@section('content')

  <body style="background-color: #f5f5f5">

    <div class="container">
      <div class="text-center">
      
       
      </div>

      <div class="row">

        <div class="col-md-12 order-md-1 mb-4" >
          <div class="row">
                <div class="col-md-12 mb-3">
                  <nav aria-label="breadcrumb" class="col-md-6">
                        <ol class="breadcrumb">
                          @if ( !empty($produk->kategori))
                          <li class="breadcrumb-item" style="color: dodgerblue;">{{ $produk->kategori }}</li>
                          @endif
                          @if ( !empty($produk->kategori1))
                          <li class="breadcrumb-item" style="color: dodgerblue;">{{ $produk->kategori1 }}</li>
                          @endif
                          @if ( !empty($produk->kategori2))
                          <li class="breadcrumb-item" style="color: dodgerblue;">{{ $produk->kategori2 }}</li>
                          @endif
                        </ol>
                  </nav>
                </div>
          </div>     
        </div>

        <div class="col-md-12">
            
            <div class="ps-product__thumbnail" data-vertical="true">
              <figure>
                <div class="ps-wrapper">
                  <div class="ps-product__gallery" data-arrow="true">
                    <div class="item"><a href="img/products/detail/fullwidth/1.jpg"><img src="../uploads/{{ $produk->photo }}" alt=""></a></div>
                    <div class="item"><a href="img/products/detail/fullwidth/2.jpg"><img src="../uploads/{{ $produk->photo }}" alt=""></a></div>
                    <div class="item"><a href="img/products/detail/fullwidth/3.jpg"><img src="../uploads/{{ $produk->photo }}" alt=""></a></div>
                  </div>
                </div>
              </figure>
              <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                <div class="item"><img src="../uploads/{{ $produk->photo }}" alt=""></div>
                <div class="item"><img src="../uploads/{{ $produk->photo }}" alt=""></div>
                <div class="item"><img src="../uploads/{{ $produk->photo }}" alt=""></div>
              </div>
            </div>

        </div>

        <div id="zoomku" class="col-md-4 order-md-1 mb-4" >
          <div style="width:350px;" >
            <zoom-on-hover img-normal="../uploads/{{ $produk->photo }}"></zoom-on-hover>
          </div>
        </div>
    
        <div class="col-md-8 order-md-2 bordered mb-4" style="background-color: white;">

            <div class=" clearfix">
              <div class="mb-3 float-left" style="padding-top: 15px;">
                <h3>{{ $produk->nama_produk }} </h3>
              </div>
              <div class="mb-3 float-right" style="padding-top: 15px;">
                <h3>{{ $produk->status_barang }} </h3>
              </div>
              
            </div>

        
            <div class="mb-3">
              <h3 class="text-danger">Rp {{ number_format($produk->harga, 0, ',', '.')  }} </h3>  
            </div>

            
            <hr class="mb-4">
              <div class="row">

                <div class="col-md-12 mb-3" >
                  <b style="font-size: 17px;">Detail Produk</b>
                </div>

                @if ( !empty($produk->kondisi))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Kondisi : {{ $produk->kondisi }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->lama_pemakaian))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock" style="color:dodgerblue;"></span> Lama pemakaian :  {{ $produk->lama_pemakaian  }} {{ $produk->waktu_lama_pemakaian  }}  </h6>
                    </div>  
                @endif

                @if ( !empty($produk->tahun_pembelian))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar" style="color:dodgerblue;"></span> Tahun pembelian :  {{ $produk->tahun_pembelian  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->asal_produk))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="globe" style="color:dodgerblue;"></span> Asal Produk :  {{ $produk->asal_produk  }} </h6>
                    </div> 
                @endif

                 @if ( !empty($produk->pembuatan_barang))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="globe" style="color:dodgerblue;"></span> Pembuatan Barang :  {{ $produk->pembuatan_barang  }} </h6>
                    </div> 
                @endif 

                @if ( !empty($produk->diameter))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Diameter : {{ $produk->diameter }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->size))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Size : {{ $produk->size }}</h6> 
                    </div>
                @endif

                {{-- panjang lengan belum --}}


                @if ( !empty($produk->motif))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Motif : {{ $produk->motif }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->bahan))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Bahan : {{ $produk->bahan }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->bahan_tali))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Bahan Tali : {{ $produk->bahan_tali }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->warna))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="droplet" style="color:dodgerblue;"></span> Warna :  {{ $produk->warna  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->memori))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Memori :  {{ $produk->memori  }} </h6>
                      </div>  
                @endif

               
                @if ( !empty($produk->tipe_memori))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Tipe Memori :  {{ $produk->tipe_memori  }} </h6>
                      </div>  
                @endif


                @if ( !empty($produk->garansi))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Garansi  :  {{ $produk->garansi  }} </h6>
                      </div>  
                @endif

                @if ( !empty($produk->masa_garansi))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Masa Garansi  :  {{ $produk->masa_garansi  }} </h6>
                      </div>  
                @endif


                @if ( !empty($produk->jenis))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Jenis  :  {{ $produk->jenis  }} </h6>
                      </div>  
                @endif

                @if ( !empty($produk->tipe_kartu_sim))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Tipe Kartu Sim :  {{ $produk->tipe_kartu_sim  }} </h6>
                      </div>  
                @endif

                @if ( !empty($produk->tipe_layar))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Tipe Layar  :  {{ $produk->tipe_layar  }} </h6>
                      </div>  
                @endif

                @if ( !empty($produk->ukuran_layar))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Ukuran Layar  :  {{ $produk->ukuran_layar  }} </h6>
                      </div>  
                @endif

                 @if ( !empty($produk->kapasitas_harddisk))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="hard-drive" style="color:dodgerblue;"></span> Kapasitas Harddisk  :  {{ $produk->kapasitas_harddisk  }} </h6>
                      </div>  
                @endif
                

                @if ( !empty($produk->operating_system))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="server" style="color:dodgerblue;"></span> Operating System :  {{ $produk->operating_system  }} </h6>
                      </div>  
                @endif
               

                @if ( !empty($produk->processor))
                      <div class="col-md-4 mb-3" >
                        <h6><span data-feather="database" style="color:dodgerblue;"></span> Processor :  {{ $produk->processor  }} </h6>
                      </div>  
                @endif


                @if ( !empty($produk->ram))
                  <div class="col-md-4 mb-3" >
                      <h6><span data-feather="cpu" style="color:dodgerblue;"></span> RAM :  {{ $produk->ram  }} </h6>
                  </div> 
                @endif

                @if ( !empty($produk->bentuk_produk))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Bentuk Produk : {{ $produk->bentuk_produk }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->kegunaan))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Kegunaan : {{ $produk->kegunaan }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->jenis_rambut))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Jenis Rambut : {{ $produk->jenis_rambut }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->tahan_air))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Tahan Air : {{ $produk->tahan_air }}</h6> 
                    </div>
                @endif


                @if ( !empty($produk->merk))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Merk : {{ $produk->merk }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->teknikpengolahan))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Teknik Pengolahan : {{ $produk->teknikpengolahan }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->sex))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Jenis Kelamin : {{ $produk->sex }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->riwayatkesehatan))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Riwayat Kesehatan : {{ $produk->riwayatkesehatan }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->usia))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Usia : {{ $produk->usia }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->berat))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="archive" style="color:dodgerblue;"></span> Berat : {{ $produk->berat }} gr</h6> 
                    </div>
                @endif

              
                <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                     Note : sebelum melakukan pembelian mohon anda memastikan ketersediaan barang baik dari segi ukuran, kualitas dan kuantitas!
                  </div>
                </div>
              
              </div>  {{-- row --}}


            <hr class="mb-4">

            <div class="row">

         {{--        <div class="col-md-4">
                    <div class="panel panel-default ffside" id="chatApp">
                        <div class="panel-heading"></div>
                          <div class="panel-body" style="padding:0px;">
                              <ul class="list-group">
                                  <li class="list-group-item" v-for="chatList in chatLists" style="cursor: pointer;" @click="chat(chatList)">

                                  <i class="far fa-comment"></i> Chat  @{{ chatList.name }}  <i class="fa fa-circle pull-left" v-bind:class="{'online': (chatList.online=='Y')}"></i>  
                                  <span class="badge badge-primary" v-if="chatList.msgCount !=0">@{{ chatList.msgCount }}</span>

                                  </li>
                                  <li class="list-group-item" v-if="socketConnected.status == false">@{{ socketConnected.msg }}</li>
                              </ul>
                          </div>
                    </div>
                </div> --}}
                        
                <div class="col-md-4 mb-3" >
                  <a href="{!! url('/messenger'); !!}""><button class="btn btn-primary btn-block"><span data-feather="message-circle"></span>  Chat</button></a>
                </div>

                <div class="col-md-4 mb-3" >

                  <form action="{{url('cart')}}" method="post"> {{-- ini form --}}
                    
                    <input type="hidden" value="{{$produk->id}}" name="id">
                    <input type="hidden" value="{{ $produk->nama_produk }}" name="name">
                    <input type="hidden" value="{{ $produk->photo }}" name="image">
                    <input type="hidden" value="{{ $produk->harga }}" name="price">
                    <input type="hidden" value="{{ $produk->nama_supplier }}" name="toko">
                    <input type="hidden" value="kosong" name="kurir">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{-- <button class="btn btn-warning btn-block" type="submit" ><span data-feather="shopping-bag"></span>  Beli</button>  --}}
                    </form> {{-- ini form --}}
                </div>

                <div id="detailproduct" class="col-md-4 mb-3">
                      

                      <span class="btn btn-success btn-block" @click.stop.prevent="copyTestingCode"><span data-feather="copy"></span> Copy URL</span>

                      <input type="hidden" id="testing-code" value="http://mythings.co.id/detail/{{$produk->id}}">
                </div>

            </div>

          

            <hr class="mb-4"> 

            <h5>Deskripsi Produk</h5> <p>
            {!! $produk->deskripsi !!}</p>

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





        <div class="col-md-12 order-md-3 bordered mb-4" style="background-color: white;">

          <div class="row">

            <div class="col-md-4 ">
              <div class="row">
                  <div class="col-md-4 my-3"><img class="rounded-circle" src="../uploads/{{  $user->photo }}" alt="..." width="100px;" ></div>
                  <div class="col-md-8 mt-4">
                  <h5 style="padding-bottom: 10px;">{{  $produk->nama_supplier }}
                   @if($user->premium == 'true')  <img src="https://img.icons8.com/color/96/000000/filled-star.png" width="20px;"> @endif
                  </h5>
                  <button class="btn btn-secondary btn-sm" onclick="window.location.href='{!! url('supplier/'. $produk->nama_supplier); !!}'"><span data-feather="eye"></span>  Lihat Toko</button></div>
              </div>
            </div>

             <div class="col-md-3 my-5 border-left"> <h6 class="text-center"> <span data-feather="shopping-bag"></span> Jumlah Produk : {{ $jumlah }}</h6>   </div>
              <div class="col-md-4 my-5 border-left border-right"><h6 class="text-center"> <span data-feather="shopping-bag"></span> Tanggal Bergabung :  {{  $user->created_at->format('d/m/Y') }} </h6> </div>
          

          </div>

        </div>


         <div class="comments col-md-12 order-md-3 " id="comments"  style="background-color: white; padding: 30px;">
            <h3 class="mb-4">Penilaian Produk</h3>

            @if(count($komentar) == 0)
              <div style="padding-bottom: 13px;">
                
                    <h1 style=" font-size: 20px; font-weight: 500;" class="mt-3" >Belum Ada Penilaian</h1>
                 
               
              </div>
            @else

            @foreach ($komentar as $komen)
            <!-- comment -->
            <div class="comment mb-2 row">
                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="../user.png" alt="avatar" width="50px;"></a>
                </div>
                <div class="comment-content col-md-11 col-sm-10">
                    <h6 class="small comment-meta"><a href="#">{{$komen->user}} </a> {{ \Carbon\Carbon::parse($komen->created_at)->diffForHumans() }} </h6>
                    <div class="comment-body">
                        <p style="font-weight: 15px;">
                            {{$komen->komentar}} 
                        </p>

                        @if ( !empty($komen->photo1))
                        <a data-toggle="modal" data-target="#gambar1{{ $komen->photo1 }}" style="cursor: zoom-in;"> <img width="80px;" height="5px;" src="../uploads/{{ $komen->photo1 }}" class="mb-3 mr-2 img-thumbnail" /> </a>
                        @endif

                        @if ( !empty($komen->photo2))
                        <a data-toggle="modal" data-target="#gambar2{{ $komen->photo2 }}" style="cursor: zoom-in;"><img width="80px;" height="5px;" src="../uploads/{{ $komen->photo2 }}" class="mb-3 mr-2 img-thumbnail" /> </a>
                        @endif


                        @if ( !empty($komen->photo3))
                        <a data-toggle="modal" data-target="#gambar3{{ $komen->photo3 }}" style="cursor: zoom-in;"><img width="80px;" height="5px;" src="../uploads/{{ $komen->photo3 }}" class="mb-3 mr-2 img-thumbnail" /></a>
                        @endif
                        
                    </div>
                </div>
            </div>
            <!-- /comment -->

            <!-- Modal -->
              <div class="modal fade" id="gambar1{{ $komen->photo1 }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                        <img width="465px;" src="../uploads/{{ $komen->photo1 }}" class="img-responsive" style="justify-content: center;" />
                    </div>
                  </div>
                </div>
              </div>
            <!-- Modal -->

            <!-- Modal -->
              <div class="modal fade" id="gambar2{{ $komen->photo2 }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                        <img width="465px;" src="../uploads/{{ $komen->photo2 }}" class="img-responsive" style="justify-content: center;" />
                    </div>
                   
                  </div>
                </div>
              </div>
            <!-- Modal -->

            <!-- Modal -->
              <div class="modal fade" id="gambar3{{ $komen->photo3 }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                        <img width="465px;" src="../uploads/{{ $komen->photo3 }}" class="img-responsive" style="justify-content: center;" />
                    </div>
                   
                  </div>
                </div>
              </div>
            <!-- Modal -->




            @endforeach
            @endif

        </div>


      </div>

      @include('includes.footer')

    </div>

@endsection


@section('page-script')

 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>  


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  

    <script>
      new Vue({
        el: "#zoomku",
        components: {
          zoomOnHover: zoomOnHover
        }
      })
    </script>

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
@stop

