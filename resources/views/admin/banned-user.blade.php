@extends('layouts.app')
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

                                <li><a href="{{ url('admin/') }}">Rekening Information</a></li>
                                <li><a href="{{ url('verifikasi/') }}">Transaction Information</a></li>
                                <li><a href="{{ url('banned-user/') }}">Banned User</a></li>
                                <li><a data-toggle="modal" href="#ubahhari">Ubah Hari</a></li>

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
										<i class="notika-icon notika-finance"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>User Management</h2>
										<p>Welcome to <span class="bread-ntd">Admin Mythings</span></p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-2 col-sm-2 col-xs-3">
                                <form action="{!! url('/banned-user'); !!}" method="GET" >
								<div class="breadcomb-report">
                                    <select class="form-control" name="premium">
                                        <option disabled selected>Choose user</option>
                                        <option value="true">Premium User</option>
                                        <option value="">User</option>
                                    </select>
								</div>
							</div>

                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3">
                                <div class="breadcomb-report">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                                </form>
                            </div>

                             <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="{!! url('/banned-user'); !!}"><button class="btn btn-primary">Show All</button></a>
                                </div>
                                </form>
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
                            <h2>Transaksi</h2>
                            <p>CRUD</p>
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th>Status User</th>
                                        <th>Change User Status</th>
                                        <th>Change Premium Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                @foreach($list_user as $user)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $user->name }} @if($user->premium == 'true')  <img src="https://img.icons8.com/color/96/000000/filled-star.png" width="16px;"> @endif</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->status_user == 1) 
                                            <h6><span class="badge badge-success"><i data-feather="check" style="width: 13px; height: 13px;"></i> Active User</span></h6>
                                            @else
                                             <h6><span class="badge badge-danger"><i data-feather="alert-octagon" style="width: 13px; height: 13px;"></i> Banned User</span></h6>
                                            @endif
                                        </td>
                                        <td class="text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#banned{{$user->id}}" > <span data-feather="clipboard"></span></button></td>
                                        <td class="text-center"><button class="btn btn-warning" data-toggle="modal" data-target="#premium{{$user->id}}" > <span data-feather="star"></span></button></td>
                                        <?php $no++; ?>
                                    </tr>

                                        <div class="modal fade" id="banned{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Change User Status</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                    Pilih Status User {{$user->name}}  <br><br>
                                                    <form method="POST" action="{{ route('banned.update', $user->id ) }}">
                                                        @csrf
                                                        {{ method_field('put') }}

                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="active_user{{$user->id}}" name="status_user" class="custom-control-input" value="1">
                                                        <label class="custom-control-label" for="active_user{{$user->id}}">Active User</label>
                                                      </div>
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="banned_user{{$user->id}}" name="status_user" class="custom-control-input" value="0">
                                                        <label class="custom-control-label" for="banned_user{{$user->id}}">Banned User</label>
                                                      </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button class="btn btn-success" type="submit"><span data-feather="send"></span> Submit</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div> {{-- end modal --}}

                                         {{-- this is for making premium user --}}
                                        <div class="modal fade" id="premium{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Change Premium User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                    Pilih Status Premium User {{$user->name}} <br><br>
                                                    <form method="POST" action="{{ route('premium.update', $user->id ) }}">
                                                        @csrf
                                                        {{ method_field('put') }}
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="active_premium{{$user->id}}" name="premium" class="custom-control-input" value="true">
                                                        <label class="custom-control-label" for="active_premium{{$user->id}}">Active Premium</label>
                                                      </div>
                                                      <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="deactive_premium{{$user->id}}" name="premium" class="custom-control-input" value="false">
                                                        <label class="custom-control-label" for="deactive_premium{{$user->id}}">Deactive Premium</label>
                                                      </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button class="btn btn-success" type="submit"><span data-feather="send"></span> Submit</button>
                                                </form>
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


    <div class="modal fade" id="ubahhari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ubah hari</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                Apakah Anda Yakin Mengubah limit hari di wanted list product?
                <form method="POST" action="{{ route('ubahhari.update' ) }}">
                    @csrf
                    {{ method_field('put') }}
                  <input class="form-control" name="limit_hari" placeholder="masukkan jumlah hari" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
            <button class="btn btn-success" type="submit"><span data-feather="check-circle"></span> Ya</button>
            </form>
          </div>
        </div>
      </div>
    </div> {{-- end modal --}}


    <!-- Normal Table area End-->
    <!-- Start Footer area-->
 {{--    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Footer area-->
   
@endsection