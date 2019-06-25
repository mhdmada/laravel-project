@extends('layouts.app')

@section('page-style')
    <style media="screen">

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
<!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Interface</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>
                        </li>
                        <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.html">Dashboard One</a>
                                </li>
                                <li><a href="index-2.html">Dashboard Two</a>
                                </li>
                                <li><a href="index-3.html">Dashboard Three</a>
                                </li>
                                <li><a href="index-4.html">Dashboard Four</a>
                                </li>
                                <li><a href="analytics.html">Analytics</a>
                                </li>
                                <li><a href="widgets.html">Widgets</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a>
                                </li>
                                <li><a href="view-email.html">View Email</a>
                                </li>
                                <li><a href="compose-email.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Animations</a>
                                </li>
                                <li><a href="google-map.html">Google Map</a>
                                </li>
                                <li><a href="data-map.html">Data Maps</a>
                                </li>
                                <li><a href="code-editor.html">Code Editor</a>
                                </li>
                                <li><a href="image-cropper.html">Images Cropper</a>
                                </li>
                                <li><a href="wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="flot-charts.html">Flot Charts</a>
                                </li>
                                <li><a href="bar-charts.html">Bar Charts</a>
                                </li>
                                <li><a href="line-charts.html">Line Charts</a>
                                </li>
                                <li><a href="area-charts.html">Area Charts</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{ url('kurir/') }}">Shipping Information</a>
                                </li>
                              {{--   <li><a href="#">Transaction Information</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="notification.html">Notifications</a>
                                </li>
                                <li><a href="alert.html">Alerts</a>
                                </li>
                                <li><a href="modals.html">Modals</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="accordion.html">Accordion</a>
                                </li>
                                <li><a href="dialog.html">Dialogs</a>
                                </li>
                                <li><a href="popovers.html">Popovers</a>
                                </li>
                                <li><a href="tooltips.html">Tooltips</a>
                                </li>
                                <li><a href="dropdown.html">Dropdowns</a>
                                </li>
                            </ul>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-promos"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Shipping Information</h2>
										<p>Welcome to <span class="bread-ntd">Admin Mythings</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<span data-toggle="modal" data-target="#tambahbank">
										{{-- <button title="Tambah Rekening" class="btn" data-toggle="tooltip" data-placement="left" ><i class="notika-icon notika-up-arrow"></i></button> --}}
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				 @if ($message = Session::get('success'))                               
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Berhasil Update Nama Bank!</strong>.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
				 @endif


			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

	

    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>List Pengiriman</h2>
                            <p>CRUD</p>
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Resi</th>
                                        <th>Nama Barang</th>
                                        <th>Pembeli</th>
                                        <th>Toko</th>
                                        <th>Update Point</th>
                                        <th>Update Delivery Customer</th>
                                        <th>Lihat Point Pengiriman</th>
                                        <th>ID Kurir</th>
                                        <th>Nama Kurir</th>
                                        <th>Point Delivery Customer</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($daftar_transaksi as $transaksi)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $transaksi->no_resi or 'tidak ada'}}</td>
                                        <td>{{ $transaksi->name}}</td>
                                        <td>{{ $transaksi->pembeli }}</td>
                                        <td>{{ $transaksi->toko }}</td>
                                        
                                        <td class="text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#lokasi{{$transaksi->kode}}" > <span data-feather="map-pin"></span></button></td>

                                        <td class="text-center"><button class="btn btn-success" data-toggle="modal" data-target="#verifikasi{{$transaksi->kode}}" > <span data-feather="send"></span></button></td>

                                        <td class="text-center"><button class="btn btn-secondary" data-toggle="modal" data-target="#point{{$transaksi->kode}}" > <span data-feather="clipboard"></span></button></td>
                                        <td>
                                            @if(!empty($transaksi->id_kurir)) 
                                            {{ $transaksi->id_kurir}}
                                            @else
                                            Belum ada ID Kurir
                                            @endif
                                        </td>

                                        <td>
                                            @if(!empty($transaksi->nama_kurir)) 
                                            {{ $transaksi->nama_kurir}}
                                            @else
                                            Belum ada Nama Kurir
                                            @endif
                                        </td>

                                        <td>{{ $transaksi->lokasi_delivery }}</td>

                                        @if($transaksi->status == 'berhasil')
                                           <td class="text-center"><span class="badge badge-success">Barang sudah diterima</span></td>
                                        @else
                                           <td class="text-center"><span class="badge badge-warning">Barang belum diterima</span></td>
                                        @endif
                                        

                                    </tr>


                                        <div class="modal fade" id="verifikasi{{ $transaksi->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <form class="" method="POST" action="{{ route('verifikasikurir.update',  $transaksi->kode ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        {{ method_field('put') }}

                                                        <div class="form-group mx-sm-3 mb-2 mt-5 upload-wrap">

                                                            <div class="input-group input-group-sm mb-3" style="width: 200%;">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Point Delivery Customer</span>
                                                              </div>
                                                              <input name="lokasi_delivery" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="">
                                                              <small id="emailHelp" class="form-text text-muted">hanya diisi jika delivery langsung ke customer.</small>
                                                            </div>

                                                            <div class="input-group input-group-sm mb-3" style="width: 200%;">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">ID Kurir</span>
                                                              </div>
                                                              <input name="id_kurir" style="width: 150px;" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="">
                                                              <small id="emailHelp" class="form-text text-muted">hanya diisi jika delivery langsung ke customer.</small>
                                                            </div>

                                                            <div class="input-group input-group-sm mb-3" style="width: 200%;">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Nama Kurir</span>
                                                              </div>
                                                              <input name="nama_kurir" style="width: 150px;" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="">
                                                              <small id="emailHelp" class="form-text text-muted">hanya diisi jika delivery langsung ke customer.</small>
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


                                        <div class="modal fade" id="lokasi{{ $transaksi->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Point Lokasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">                                                    


                                                    {{-- Apakah anda yakin akan mengirim mengirim Pesanan Anda ? --}}
                                                    <form class="" method="POST" action="{{ route('verifikasilokasi.update',  $transaksi->kode ) }}" >
                                                        @csrf
                                                        {{ method_field('put') }}

                                                          <div class="form-group mx-sm-3 mb-2 mt-5 upload-wrap">

                                                            <div class="input-group input-group-sm mb-3" style="width: 200%;">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Point Pengiriman</span>
                                                              </div>
                                                              <input name="lokasi" type="text" style="text-transform: uppercase;" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="">
                                                            </div>

                                                            <hr style="width: 400px;">

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


                                        <div class="modal fade" id="point{{ $transaksi->kode}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">List Point Pengiriman</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-md-12" style="padding-left: 45px;">
                                                        <div class="ui relaxed divided list">
                                                            @foreach ($tracking as $track)
                                                              <div class="item">
                                                                <div class="content">
                                                                  <a class="header" style="padding-bottom: 50px;">{{ $track->new_value }}</a>
                                                                  <div class="description">{{ Carbon\Carbon::parse($track->created_at)->format('H:i') }} . {{ Carbon\Carbon::parse($track->created_at)->format('d-M-Y') }} </div>
                                                                </div>
                                                              </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
                                        </div> {{-- end modal --}}





                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
       
 
        </div>
    </div>

                               
<script>
  new Vue({
   el:"#app",
   data: {
    pesan:"Hello World!"
   }
  });
</script>

   
@endsection