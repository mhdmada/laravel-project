<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <style type="text/css">
      .cliente {
        border-radius: 25px;
        padding: 20px;
        outline: 2px solid #ccc;
        outline-offset: -10px;
        -moz-outline-radius: 10px;
        -webkit-outline-radius: 10px;
      }
      .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;*/
      }

      .pencarian{
        background-color: #ffffff;
        padding: 10px;
        border:solid 1px #e2e2e2;
        border-radius: 5px;
        margin-bottom: 20px;
        margin-top: 30px;
      }

      .custom{
        margin-top: 40px; 
        border-color: #8064A2  !important;
        background-color: #8064A2 !important;
      }

      .custom{
        margin-top: 40px; 
        border-color: #fd7e14  !important;
        background-color: #fd7e14 !important;
      }

      .custom:hover{
        background-color: #f6744b !important;
      }


    </style>
  </head>
  <body>

     @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Customer Premium</h1><br>
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container-fluid" style="padding-left: 250px; padding-right: 250px;">

      <div class="row">
        <div class="col-sm-3">
            <center><img src="elon.png" alt="..." class="rounded-circle" width="160px"><br><br>
              <a href=""><p class="h4">Elon Musk</p></a>

            </center><br>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Forum</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>

            </div>
        </div>

        <div class="col-sm-9" style="/*background-color:*/ red;" >
            <div class="tab-content" id="v-pills-tabContent">
              {{-- home --}}
              <div class="tab-pane fade show active border-left" style="padding-left: 50px;" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span data-feather="user"></span> Name: John</li>
                    <li class="list-group-item"><span data-feather="shield"></span> Gender: Male</li>
                    <li class="list-group-item"><span data-feather="phone"></span> Telp: 085213xxxxxxx</li>
                    <li class="list-group-item"><span data-feather="calendar"></span> Join Date: 01-02-96</li>
                    <li class="list-group-item"><span data-feather="map-pin"></span> Location: Jakarta,Indonesia</li>
                  
                  </ul>
              </div>
              {{-- forum --}}
              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <table class="table table-sm table-hover">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Product</th>
                          <th scope="col">Category</th>
                          <th scope="col">Comments</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Sepatu</td>
                          <td>Mens Wear</td>
                          <td>23</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacket</td>
                          <td>Mens Wear</td>
                          <td>90</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Laptop</td>
                          <td>Electronic</td>
                          <td>30</td>
                        </tr>
                      </tbody>
                    </table>
              </div>

              {{-- produk --}}
              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="container-fluid">
                            
                            <div class="pencarian">
                              <div class="row" style="padding: 10px;">
                                <div class="col-sm-4" style="padding-bottom: 13px; border-right: solid 1px #e5e5e5;">
                                    <h6>Kategori Toko</h6>
                                    <select class="custom-select " id="state" required>
                                      <option value="">Pilih Kategori</option>
                                      <option>Shoes</option>
                                      <option>T-shirt</option>
                                    </select>
                                </div>
                                 <div class="col-sm-4" style="padding-bottom: 13px;  border-right: solid 1px #e5e5e5;">
                                        <h6>Harga</h6>
                                      <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp.</div>
                                        </div>
                                        <input type="text" maxlength="15" class="form-control" id="minimum" name="minimum" placeholder="Minimum" value="" required> 
                                      </div>
                                      <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp.</div>
                                        </div>
                                        <input type="number" maxlength="15" class="form-control" id="max" name="maksimum" placeholder="Maksimum" value="" required>
                                      </div>
                                </div>
                                 <div class="col-sm-4" style="padding-bottom: 13px;">
                                      <h6>Lokasi</h6>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Jabodetabek</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">Jambi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                                          <label class="custom-control-label" for="customCheck3">Surabaya</label>
                                        </div>
                                        <button type="button" class="custom btn btn-primary btn-block btn-lg"><span data-feather="filter" style=" width: 20px; height: 20px;"></span> Filter</button>
                                </div>
                              </div>
                            </div>

                             <div class="row mb-3">
                                <div class="col-sm-10" >
                                    <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button"><span data-feather="search"></span></button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                      <a href="{!! url('/inputproduct'); !!}" class="btn btn-primary"><span data-feather="plus"></span> Add Product</a>
                                </div>
                              </div>
                        </div>


                        <div class="container-fluid">
                                <div class="row">
                                  <div class="col-md-3  mb-4">
                                     <div class="card">
                                        <div class="ukuran"><img class="card-img-top" src="sepatu.jpg"  alt="Card image cap"></div>
                                          <div class="card-body">
                                            <p class="card-title">Sepatu Nike Navy Blue</p>
                                            <h6 class="card-text text-danger">Rp.300.000</h6>
                                          </div>
                                          <div class="card-footer bg-transparent">
                                            <div class=" clearfix">
                                              <a href="#" class="btn btn-outline-success btn-sm float-left"><span data-feather="edit"></span> Edit</a>  
                                              <a href="#" class="btn btn-outline-danger btn-sm float-right"><span data-feather="trash-2"></span> Hapus</a>  
                                            </div>
                                          </div>
                                      </div>
                                    </div>


                                    <div class="col-md-3  mb-4">
                                     <div class="card">
                                        <div class="ukuran"><img class="card-img-top" src="Jacket.jpg"  alt="Card image cap"></div>
                                          <div class="card-body">
                                             <p class="card-title">Jaket Army</p>
                                             <h6 class="card-text text-danger">Rp.150.000</h6>
                                          </div>
                                          <div class="card-footer bg-transparent">
                                            <div class=" clearfix">
                                              <a href="#" class="btn btn-outline-success btn-sm float-left"><span data-feather="edit"></span> Edit</a>  
                                              <a href="#" class="btn btn-outline-danger btn-sm float-right"><span data-feather="trash-2"></span> Hapus</a>  
                                            </div>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="col-md-3  mb-4">
                                     <div class="card">
                                        <div class="ukuran"><img class="card-img-top" src="laptop.jpg"  alt="Card image cap"></div>
                                          <div class="card-body">
                                            <p class="card-title">Imac</p>
                                            <h6 class="card-text text-danger">Rp.21.000.000</h6>
                                          </div>
                                          <div class="card-footer bg-transparent">
                                            <div class=" clearfix">
                                              <a href="#" class="btn btn-outline-success btn-sm float-left"><span data-feather="edit"></span> Edit</a>  
                                              <a href="#" class="btn btn-outline-danger btn-sm float-right"><span data-feather="trash-2"></span> Hapus</a>  
                                            </div>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="col-md-3  mb-4">
                                     <div class="card">
                                        <div class="ukuran"><img class="card-img-top" src="headset.jpg"  alt="Card image cap"></div>
                                          <div class="card-body">
                                            <p class="card-title">Headset</p>
                                            <h6 class="card-text text-danger">Rp.50.000</h6>
                                          </div>
                                          <div class="card-footer bg-transparent">
                                            <div class=" clearfix">
                                              <a href="#" class="btn btn-outline-success btn-sm float-left"><span data-feather="edit"></span> Edit</a>  
                                              <a href="#" class="btn btn-outline-danger btn-sm float-right"><span data-feather="trash-2"></span> Hapus</a>  
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                        </div>

                            <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-center">
                                <li class="page-item">
                                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                            </nav>
              </div>



                  {{-- setting --}}
              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="mb-3">Settings</h4>
                        <form class="needs-validation" novalidate>

                          <div class="mb-3">
                            <label for="username">Nama</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="Masukkan Nama Lengkap" placeholder="Username" required>
                              <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Telepon</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: 085213xxxxxx">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 mb-3">
                              <label for="country">Provinsi</label>
                              <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>Jakarta</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="state">Kabupaten</label>
                              <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>Jakarta Barat</option>
                              </select>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="state">Kecamatan</label>
                              <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>Meruya</option>
                              </select>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            
                          </div>

                          <div class="mb-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" type="text" rows="3"></textarea>
                            <div class="invalid-feedback">
                              Masukkan Alamat
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="address">Jenis Kelamin</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input id="laki-laki" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                              <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input id="perempuan" name="paymentMethod" type="radio" class="custom-control-input" required>
                              <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                            <div class="invalid-feedback">
                              Masukkan Alamat
                            </div>
                          </div>
                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="edit"></span> Edit Data</button>
                        </form>
                </div>

                 {{-- kantorcabang --}}

              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-distributor" role="tabpanel" aria-labelledby="v-pills-distributor-tab">
                        <h4 class="mb-3">Distributor</h4>
                        <form class="needs-validation" novalidate>

                          <div class="mb-3">
                            <label for="username">Provinsi</label>
                              <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Pilih Provinsi</option>
                                <option>Jakarta</option>
                                <option>Palembang</option>
                                <option>Jambi</option>
                              </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                              </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: mythings@gmail.com">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Telepon</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: 085213xxxxxx">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>


                          <div class="mb-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" type="text" rows="3"></textarea>
                            <div class="invalid-feedback">
                              Masukkan Alamat
                            </div>
                          </div>

                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Data</button>
                        </form>
                </div>

                {{-- kantorcabang --}}

              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-agen" role="tabpanel" aria-labelledby="v-pills-agen-tab">
                        <h4 class="mb-3">Agen</h4>
                        <form class="needs-validation" novalidate>

                          <div class="mb-3">
                            <label for="username">Provinsi</label>
                              <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Pilih Provinsi</option>
                                <option>Jakarta</option>
                                <option>Palembang</option>
                                <option>Jambi</option>
                              </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                              </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: mythings@gmail.com">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Telepon</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: 085213xxxxxx">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>


                          <div class="mb-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" type="text" rows="3"></textarea>
                            <div class="invalid-feedback">
                              Masukkan Alamat
                            </div>
                          </div>

                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Data</button>
                        </form>
                </div>


                 {{-- kantorcabang --}}

              <div class="tab-pane fade border-left" style="padding-left: 50px;" id="v-pills-reseller" role="tabpanel" aria-labelledby="v-pills-reseller-tab">
                        <h4 class="mb-3">Reseller</h4>
                        <form class="needs-validation" novalidate>

                          <div class="mb-3">
                            <label for="username">Provinsi</label>
                              <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Pilih Provinsi</option>
                                <option>Jakarta</option>
                                <option>Palembang</option>
                                <option>Jambi</option>
                              </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                              </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: mythings@gmail.com">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="email">Telepon</label>
                            <input type="email" class="form-control" id="email" placeholder="exp: 085213xxxxxx">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>


                          <div class="mb-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" type="text" rows="3"></textarea>
                            <div class="invalid-feedback">
                              Masukkan Alamat
                            </div>
                          </div>

                          <hr class="mb-4">
                          <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Data</button>
                        </form>
                </div>


            </div>
        </div>
      </div>

  

      <br><br>

      @include('includes.footer')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()


      
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
