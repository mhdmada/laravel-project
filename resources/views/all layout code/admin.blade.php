<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> Admin Dashboard</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">log out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">


        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">


            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link active" href="#dashboard"  data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pengunjung" role="tab" aria-controls="proyek" aria-selected="false">
                  <span data-feather="users"></span>
                  List Customer
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supplier" role="tab" aria-controls="panel" aria-selected="false">
                  <span data-feather="users"></span>
                  List Supplier
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#category" role="tab" aria-controls="panel" aria-selected="false">
                  <span data-feather="tag"></span>
                  List Category
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#forum" role="tab" aria-controls="panel" aria-selected="false">
                  <span data-feather="message-circle"></span>
                  List Forum
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#faq" role="tab" aria-controls="panel" aria-selected="false">
                  <span data-feather="file-text"></span>
                  FAQ
                </a>
              </li>



            <a class="" data-toggle="collapse" data-target="#muncul">
            <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reports</span>
                <span data-feather="chevron-down"></span>
            </h5>
            </a>

            <div id="muncul" class="collapse">
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#harikerja" role="tab" aria-controls="harikerja" aria-selected="false">
                  <span data-feather="file-text"></span>
                    Cetak report pengunjung
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#harilibur" role="tab" aria-controls="harilibur" aria-selected="false" >
                  <span data-feather="file-text"></span>
                  Cetak report category
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#harilibur" role="tab" aria-controls="harilibur" aria-selected="false" >
                  <span data-feather="file-text"></span>
                  Cetak report menu
                </a>
              </li>

            </ul>
          </div>
          </div>
        </nav>


             
           
        <div role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 tab-content"> {{-- div content --}}

             <div class="tab-pane active" id="dashboard" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                    <h1 class="h2">Dashboard</h1>      
                      <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                          <button class="btn btn-sm btn-outline-secondary">Share</button>
                          <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                         <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                          <span data-feather="calendar"></span>
                          This week
                        </button>
                    </div>    
                </div>


                       <canvas class="my-4" id="myChart" width="900" height="380"></canvas>    
                      <table  align="center">
                        <tr>
                          <td><canvas class="my-4" id="kategori" width="650" height="380"></canvas></td>
                          <td><canvas class="my-4" id="fitur" width="650" height="380"></canvas></td>
                        </tr>
                      </table>

            </div>

            {{-- customer --}}
            <div class="tab-pane " id="pengunjung" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                  <h1 class="h2">List Customer</h1> 
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama customer</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Email Customer</th>
                    <th scope="col">Password Customer</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>0852xxxxx</td>
                    <td>mada@gmail.com</td>
                    <td>mada123</td>
                    <td><button class="btn btn-danger btn-block btn-sm"><span data-feather="trash-2"></span> Hapus</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            {{-- supplier --}}
            <div class="tab-pane " id="supplier" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                  <h1 class="h2">List Supplier</h1> 
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Email Supplier</th>
                    <th scope="col">Password Supplier</th>
                     <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>0852xxxxx</td>
                    <td>mada@gmail.com</td>
                    <td>mada123</td>
                    <td><button class="btn btn-danger btn-block btn-sm"><span data-feather="trash-2"></span> Hapus</button></td>
                  </tr>
                </tbody>
              </table>
            </div>

            {{-- category--}}
            <div class="tab-pane " id="category" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                  <h1 class="h2">List Category</h1> 
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama category</th>
                    <th >Sub category</th>
                    <th >Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>pakaian</td>
                    <td>lengan pendek</td>
                    <td>
                      <div class="btn-group mr-2">
                        <a class="btn btn-success btn-sm" href="#"><span data-feather="edit"></span> Edit</a>
                        <a class="btn btn-danger btn-sm" href="#"><span data-feather="trash-2"></span> Hapus</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

             {{-- forum--}}
            <div class="tab-pane " id="forum" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                  <h1 class="h2">List Forum</h1> 
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Forum</th>
                    <th scope="col">Tanggal Posting</th>
                    <th scope="col">Nama pemosting</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>jual beli baju</td>
                    <td>12-03-2018</td>
                    <td>hartono</td>
                    <td><a href="" class="btn btn-danger btn-block btn-sm"><span data-feather="trash-2"></span> Hapus</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            {{-- forum--}}
            <div class="tab-pane " id="faq" role="tabpanel" aria-labelledby="home-tab">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"  role="tabpanel" aria-labelledby="home-tab" >
                  <h1 class="h2">FAQ</h1> 
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">pertanyaan</th>
                    <th scope="col">jawaban</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td><a href="" class="btn btn-danger btn-block btn-sm"><span data-feather="trash-2"></span> Hapus</a></td>
                  </tr>
                </tbody>
              </table>
            </div>






        </div>{{-- div content --}}
   
   
   





      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    <script src="dist/js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      feather.replace()
   
    
   
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
          datasets: [{
            label: "Pengunjung",
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          },
          {
            label: "Customer",
            data: [1000, 25434, 43523, 14323, 35534, 27899, 32342],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: 'red',
            borderWidth: 4,
            pointBackgroundColor: 'red'
          },
          {
            label: "Supplier",
            data: [26736, 54344, 68483, 34500, 43433, 24000, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: 'green',
            borderWidth: 4,
            pointBackgroundColor: 'green'
          },


          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          legend: {
            display: true,
          },

          title: {
            display: true,
            text: 'Pengunjung'
        }

        }
      });

      // ini chart kategori
      var category = document.getElementById("kategori");
      var kategori = new Chart(category, {
        type: 'pie',
        data: {
          labels: ["Fashion", "Otomotif", "Furniture", "Electronic"],
          datasets: [{
            label: "Kategori",
            data: [15339,23323,32323,34334],
            backgroundColor: ['#ff0066','#ff00ff','#79D1CF','#751aff'],
          }]
        },
        options: {
          legend: {
            display: true,
          },
          title: {
            display: true,
            text: 'Kategori'
          }
        }
      });

      // ini chart fitur
      var feature = document.getElementById("fitur");
      var fitur = new Chart(feature, {
        type: 'pie',
        data: {
          labels: ["Google Maps", "Chat"],
          datasets: [{
            label: "Fitur",
            data: [15339,23323],
            backgroundColor: ["#c45850","#e8c3b9"],
          }]
        },
        options: {
          legend: {
            display: true,
          },
          title: {
            display: true,
            text: 'Fitur'
          }
        }
      });
    </script>
   
  </body>
</html>
