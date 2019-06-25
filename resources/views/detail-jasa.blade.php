
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


        <div id="zoomku" class="col-md-4 order-md-1 mb-4" >
          <div style="width:350px;" >
            <zoom-on-hover img-normal="../uploads/{{ $produk->photo }}"></zoom-on-hover>
          </div>
        </div>
      


        <div class="col-md-8 order-md-2 bordered mb-4" style="background-color: white;">

      

            <div class="mb-3" style="padding-top: 15px;">
              <h2>{{ $produk->nama_paket }} </h2>
            </div>
        
            <div class="mb-3">
              <h3 class="text-danger">Rp {{ number_format($produk->harga, 0, ',', '.')  }} / {{ $produk->waktu }}</h3>  
            </div>

            <form action="{{url('cart')}}" method="post"> {{-- ini form --}}
            <hr class="mb-4">
              <div class="row">

                <div class="col-md-12 mb-3" >
                  <b style="font-size: 17px;">Detail Jasa</b>
                </div>

                @if ( !empty($produk->spesialisasi))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="tag" style="color:dodgerblue;"></span> Spesialisasi : {{ $produk->spesialisasi }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->bidang_spesialisasi))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="award" style="color:dodgerblue;"></span> Bidang Spesialisasi : {{ $produk->bidang_spesialisasi }}</h6> 
                    </div>
                @endif


                @if ( !empty($produk->izin_praktik))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="file-text" style="color:dodgerblue;"></span> Izin praktik :  {{ $produk->izin_praktik  }} </h6>
                    </div> 
                @endif

                 @if ( !empty($produk->konsultasi))
                    <div class="col-md-4 mb-3" >
                      <h6> <span data-feather="clipboard" style="color:dodgerblue;"></span> Konsultasi : {{ $produk->konsultasi }}</h6> 
                    </div>
                @endif

                @if ( !empty($produk->usia))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="user" style="color:dodgerblue;"></span> Usia :  {{ $produk->usia  }} Tahun </h6>
                    </div>  
                @endif

                @if ( !empty($produk->gelar_pendidikan))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="award" style="color:dodgerblue;"></span> Gelar Pendidikan :  {{ $produk->gelar_pendidikan  }} </h6>
                    </div>  
                @endif

                 @if ( !empty($produk->nama_universitas))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="book-open" style="color:dodgerblue;"></span> Universitas :  {{ $produk->nama_universitas  }} </h6>
                    </div>  
                @endif

                

                @if ( !empty($produk->khusus_layanan))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="target" style="color:dodgerblue;"></span> Khusus Layanan :  {{ $produk->khusus_layanan  }} </h6>
                    </div>  
                @endif



                @if ( !empty($produk->jenis_kelamin))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="user" style="color:dodgerblue;"></span> Gender :  {{ $produk->jenis_kelamin  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->bahasa_indonesia))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="check" style="color:dodgerblue;"></span> Bahasa Indonesia :  {{ $produk->bahasa_indonesia  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->bahasa_inggris))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="check" style="color:dodgerblue;"></span> Bahasa Inggris :  {{ $produk->bahasa_inggris  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->bahasa_mandarin))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="check" style="color:dodgerblue;"></span> Bahasa Mandarin :  {{ $produk->bahasa_mandarin  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->bahasa_jepang))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="check" style="color:dodgerblue;"></span> Bahasa Jepang :  {{ $produk->bahasa_jepang  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->lama_pengalaman))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="briefcase" style="color:dodgerblue;"></span> Lama Pengalaman :  {{ $produk->lama_pengalaman  }} {{ $produk->waktu_lama_pengalaman  }} </h6>
                    </div>  
                @endif



                <div class="col-md-12 mb-3" >
                   <b style="font-size: 17px;">Alamat</b>
                </div>

                <hr>

                 @if ( !empty($produk->kelurahan))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="map-pin" style="color: red"></span> Kelurahan :  {{ $produk->kelurahan  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->kecamatan))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="map-pin" style="color: red"></span> Kecamatan :  {{ $produk->kecamatan  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->kabupaten_kota))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="map-pin" style="color: red"></span> Kabupaten / Kota :  {{ $produk->kabupaten_kota  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->provinsi))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="map-pin" style="color: red"></span> Provinsi :  {{ $produk->provinsi  }} </h6>
                    </div>  
                @endif

                @if ( !empty($produk->kode_pos))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="map-pin" style="color: red"></span> Kode Pos :  {{ $produk->kode_pos  }} </h6>
                    </div>  
                @endif


                 <div class="col-md-12 mb-3" >
                   <b style="font-size: 17px;">Fasilitas</b>
                </div>





               
                @if ( !empty($produk->obat))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="bookmark" style="color: seagreen;"></span> Obat :  {{ $produk->obat  }} </h6>
                    </div>  
                @endif


                @if ( !empty($produk->jumlah_paket))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="bookmark" style="color: seagreen;"></span> Jumlah Paket :  {{ $produk->jumlah_paket  }} </h6>
                    </div>  
                @endif


               


              </div>  

              <input type="hidden" value="{{$produk->id}}" name="id">
              <input type="hidden" value="{{ $produk->nama_produk }}" name="name">
              <input type="hidden" value="{{ $produk->photo }}" name="image">
              <input type="hidden" value="{{ $produk->harga }}" name="price">
              <input type="hidden" value="{{ $produk->nama_supplier }}" name="toko">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

           
            <hr class="mb-4">

            <div class="row">

                <div class="col-md-4 mb-3" >
                  <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" ><span data-feather="message-circle"></span>  Chat</button> 
                </div>

                <div class="col-md-4 mb-3" >
                  {{-- <button class="btn btn-warning btn-block" type="submit" ><span data-feather="shopping-bag"></span>  Beli</button>  --}}
                </div>

                <div id="detailproduct" class="col-md-4 mb-3">

                      <span class="btn btn-success btn-block" @click.stop.prevent="copyTestingCode"><span data-feather="copy"></span> Copy URL</span>

                      <input type="hidden" id="testing-code" value="http://mythings.co.id/detail-jasa/{{$produk->id}}">
                </div>

            </div>

            </form> {{-- ini form --}}

            <hr class="mb-4"> 

            <div class="row">
                <div class="col-md-12 mb-3" >
                  <b style="font-size: 17px;">Hari Kerja</b>
                </div>

                @if ( !empty($produk->hari_senin))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Senin :  {{ $produk->hari_senin  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_senin))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_senin  }} {{ $produk->zona_waktu_buka_senin  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_senin))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_senin  }} {{ $produk->zona_waktu_tutup_senin  }}</h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_selasa))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Selasa :  {{ $produk->hari_selasa  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_selasa))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_selasa  }} {{ $produk->zona_waktu_buka_selasa  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_selasa))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_selasa  }} {{ $produk->zona_waktu_tutup_selasa  }}</h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_rabu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Rabu :  {{ $produk->hari_rabu  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_rabu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_rabu  }} {{ $produk->zona_waktu_buka_rabu  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_rabu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_rabu  }} {{ $produk->zona_waktu_tutup_rabu  }}</h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_kamis))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Kamis :  {{ $produk->hari_kamis  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_kamis))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_kamis  }} {{ $produk->zona_waktu_buka_kamis  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_kamis))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_kamis  }} {{ $produk->zona_waktu_tutup_kamis  }}</h6>
                    </div> 
                @endif



                @if ( !empty($produk->hari_jumat))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Jum'at :  {{ $produk->hari_jumat  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_jumat))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_jumat  }} {{ $produk->zona_waktu_buka_jumat  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_jumat))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_jumat  }} {{ $produk->zona_waktu_tutup_jumat  }}</h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_sabtu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Sabtu :  {{ $produk->hari_sabtu  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_sabtu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_sabtu  }} {{ $produk->zona_waktu_buka_sabtu  }} </h6>
                    </div> 
                @endif



                @if ( !empty($produk->hari_sabtu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_sabtu  }} {{ $produk->zona_waktu_tutup_sabtu  }}</h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_minggu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="calendar"></span> Hari Minggu :  {{ $produk->hari_minggu  }} </h6>
                    </div> 
                @endif

                @if ( !empty($produk->hari_minggu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Buka :  {{ $produk->jam_buka_minggu  }} {{ $produk->zona_waktu_buka_minggu  }} </h6>
                    </div> 
                @endif


                @if ( !empty($produk->hari_minggu))
                    <div class="col-md-4 mb-3" >
                      <h6><span data-feather="clock"></span> Jam Tutup :  {{ $produk->jam_tutup_minggu  }} {{ $produk->zona_waktu_tutup_minggu  }}</h6>
                    </div> 
                @endif


                 @if ( !empty($produk->keterangan_libur))
                    <div class="col-md-12 mb-3" >
                      <h6><span data-feather="clipboard"></span> Keterangan Libur :  {{ $produk->keterangan_libur  }} </h6>
                    </div> 
                @endif



            </div>

            <b style="font-size: 17px;">Deskripsi Jasa</b> 
            <p style="font-size: 16px;">{!! $produk->deskripsi_pelayanan !!}</p>

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
                  <div class="col-md-4 my-3"><img class="rounded-circle" src="../uploads/android.jpg" alt="..." width="100px;" ></div>
                  <div class="col-md-8 mt-4"><h5 style="padding-bottom: 10px;">Android Star</h5> <button class="btn btn-secondary btn-sm" onclick="window.location.href='{!! url('supplier/'. $produk->nama_supplier); !!}'">Kunjungi Toko</button></div>
              </div>
            </div>

             <div class="col-md-3 my-5 border-left"> <h6 class="text-center"> <span data-feather="shopping-bag"></span> Jumlah Produk : {{ $jumlah }}</h6>   </div>
              <div class="col-md-4 my-5 border-left border-right"><h6 class="text-center"> <span data-feather="shopping-bag"></span> Tanggal Bergabung : 16-05-2018 </h6> </div>
          

          </div>

        </div>


         <div class="comments col-md-12 order-md-3 " id="comments"  style="background-color: white; padding: 30px;">
            <h3 class="mb-4">Penilaian Jasa</h3>

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

