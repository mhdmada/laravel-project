<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>tambah gaji</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

     <style type="text/css">
      .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;*/
      }

      #image-preview {
        width: 120px;
        height: 120px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        color: #ecf0f1;
        border: solid 1px #4285F4;
        border-radius: 3px;
      }
      #image-preview input {
        line-height: 200px;
        font-size: 200px;
        position: absolute;
        opacity: 0;
        z-index: 10;
      }
      #image-preview label {
        position: absolute;
        z-index: 5;
        opacity: 0.8;
        cursor: pointer;
        border-radius: 3px;
        background-color: #f4511e;
        width: 100px;
        height: 30px;
        font-size: 10px;
        line-height: 30px;
        text-transform: uppercase;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
      }

      #image-preview2 {
        width: 120px;
        height: 120px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        color: #ecf0f1;
        border: solid 1px #4285F4;
        border-radius: 3px;
      }
      #image-preview2 input {
        line-height: 200px;
        font-size: 200px;
        position: absolute;
        opacity: 0;
        z-index: 10;
      }
      #image-preview2 label {
        position: absolute;
        z-index: 5;
        opacity: 0.8;
        cursor: pointer;
        border-radius: 3px;
        background-color: #f4511e;
        width: 100px;
        height: 30px;
        font-size: 10px;
        line-height: 30px;
        text-transform: uppercase;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
      }

      #image-preview3 {
        width: 120px;
        height: 120px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        color: #ecf0f1;
        border: solid 1px #4285F4;
        border-radius: 3px;
      }
      #image-preview3 input {
        line-height: 200px;
        font-size: 200px;
        position: absolute;
        opacity: 0;
        z-index: 10;
      }
      #image-preview3 label {
        position: absolute;
        z-index: 5;
        opacity: 0.8;
        cursor: pointer;
        border-radius: 3px;
        background-color: #f4511e;
        width: 100px;
        height: 30px;
        font-size: 10px;
        line-height: 30px;
        text-transform: uppercase;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
      }

      #image-preview4 {
        width: 410px;
        height: 300px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        color: #ecf0f1;
        border: solid 1px #4285F4;
        border-radius: 3px;

      }
      #image-preview4 input {
        line-height: 200px;
        font-size: 200px;
        position: absolute;
        opacity: 0;
        z-index: 10;
      }
      #image-preview4 label {
        position: absolute;
        z-index: 5;
        opacity: 0.8;
        cursor: pointer;
        border-radius: 3px;
        background-color: #f4511e;
        width: 100px;
        height: 30px;
        font-size: 10px;
        line-height: 30px;
        text-transform: uppercase;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
      }

      .sidebar-produk{
        background-color: #ffffff;
        padding: 20px;
        border:solid 1px #e2e2e2;
        border-radius: 5px;
        margin-bottom: 15px;
      }

       .gambar-produk{
        background-color: #ffffff;
        padding: 20px;
        border:solid 1px #e2e2e2;
        border-radius: 5px;
      }

      .title-supplier{
        background-color: #ffffff;
        padding: 10px;
        border:solid 1px #e2e2e2;
        border-radius: 5px;
        margin-bottom: 20px;
        margin-top: 30px;
      }

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>

    @include('includes.header')

    {{-- diatas adalah kodingan header --}}

  <body class="bg-light">

    <div class="container-fluid" style="padding-left: 250px; padding-right: 250px;">

        <div class="title-supplier">
        <div class="row">
              <div class="col-md-6  mb-4">
                <center><img src="apple.png" width="150px" style="margin:50px;"></center>
                <center>
                <a style="width: 150px;" href="https://api.whatsapp.com/send?phone=62895359908350" class="btn btn-success btn-sm" role="button" aria-pressed="true" target="blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                <a style="width: 150px;" href="#" class="btn btn-secondary btn-sm" role="button" aria-pressed="true"><i class="far fa-comment"></i> Chat</a>
                </center>

               
              </div>
              <div class="col-md-6 mb-4"><br>
                <h4>Tentang Toko</h4><br>
                <p class="h5 text-danger">Apple Store</p>
                <p class="lead">iShop Indonesia merupakan Apple Online Store berlokasi di Jakarta yang menyediakan produk-produk Apple seperti: 
                  iPod , iPhone, iPad, MacBook, Macbook Air, Macbook Pro, Mac mini, iMac, Mac Pro dll.</p>
                <p class="lead">iShop Indonesia adalah reseller dari Distributor Apple di Indonesia dan melayani pengiriman ke seluruh wilayah di Indonesia.
                  Rasakan pengalaman belanja online produk-produk Apple di iShop Indonesia.</p>
              </div>
              <div class="col-md-12 mb-4">
                 <hr>
                <div class="row"  style="margin-top: 30px;">
                  <div style="border-right: solid 1px #e5e5e5;" class="col"><p class="text-center"><i class="fas fa-cubes fa-lg" style="color:#be4bdb"></i>  Produk: <font style="color: red;">240</font></p></div>
                  <div style="border-right: solid 1px #e5e5e5;" class="col"><p class="text-center"><i class="far fa-calendar-check fa-lg" style="color:#15aabf"></i>  Bergabung: <font style="color: red;">3 Bulan Lalu</font></p></div>
                  <div class="col"><p class="text-center"><i class="fas fa-map-pin fa-lg" style="color:red"></i>  Lokasi: <font style="color: red;">Jakarta, Indonesia</font></p></div>
                </div>
              </div>
        </div>
        </div>

      <div class="row">
        {{-- filter --}}
        <div class="col-md-2  mb-4">
          <div class="card">
            <div class="card-header"><h5>Filter</h5></div>
            <div class="card-body">
              <h6>Kategori Toko</h6><br>
              <p style="border-bottom: solid 1px #e5e5e5; padding-bottom: 13px; font-weight: 500;" class="text-danger">Sepatu</p>
              <p style="border-bottom: solid 1px #e5e5e5; padding-bottom: 13px; font-weight: 500;">Kaos</p>
              <p style="border-bottom: solid 1px #e5e5e5; padding-bottom: 13px; font-weight: 500;">Bag</p>
              <p style="border-bottom: solid 1px #e5e5e5; padding-bottom: 13px; font-weight: 500;">Hat</p>
            </div>
            
            <div class="card-body">
              <h6>Harga</h6><br>
              <form id="form" method="post" action="">
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
              </form>
            </div>

            <div class="card-body">
              <h6>Lokasi</h6><br>
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
             
            </div>


          </div>
        </div>

        {{-- produk --}}
        <div class="col-md-2  mb-4">
         <div class="card">
            <div class="ukuran"><img class="card-img-top" src="sepatu.jpg"  alt="Card image cap"></div>
              <div class="card-body">
                <p class="card-title">Sepatu Nike Navy Blue</p>
                <h6 class="card-text text-danger">Rp.300.000</h6>
              </div>
              <div class="card-footer bg-transparent">
                <p class="text-muted" style="font-size: 15px; margin: 2px;">Nike Indonesia</p>
                <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Barat</p>
              </div>
          </div>
        </div>

        {{-- produk --}}
        <div class="col-md-2  mb-4">
         <div class="card">
            <div class="ukuran"><img class="card-img-top" src="jacket.jpg"  alt="Card image cap"></div>
              <div class="card-body">
                <p class="card-title">Jaket Army</p>
                <h6 class="card-text text-danger">Rp.200.000</h6>
              </div>
              <div class="card-footer bg-transparent">
                <p class="text-muted" style="font-size: 15px; margin: 2px;">Levis Indonesia</p>
                <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Timur</p>
              </div>
          </div>
        </div>

        {{-- produk --}}
        <div class="col-md-2  mb-4">
         <div class="card">
            <div class="ukuran"><img class="card-img-top" src="zoro.jpg"  alt="Card image cap"></div>
              <div class="card-body">
                <p class="card-title">Action Figure Zorro</p>
                <h6 class="card-text text-danger">Rp.2.500.000</h6>
              </div>
              <div class="card-footer bg-transparent">
                <p class="text-muted" style="font-size: 15px; margin: 2px;">Nike Indonesia</p>
                <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Barat</p>
              </div>
          </div>
        </div>

        {{-- produk --}}
        <div class="col-md-2  mb-4">
         <div class="card">
            <div class="ukuran"><img class="card-img-top" src="headset.jpg"  alt="Card image cap"></div>
              <div class="card-body">
                <p class="card-title">Headset</p>
                <h6 class="card-text text-danger">Rp.550.000</h6>
              </div>
              <div class="card-footer bg-transparent">
                <p class="text-muted" style="font-size: 15px; margin: 2px;">Apple Indonesia</p>
                <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Pusat</p>
              </div>
          </div>
        </div>

        {{-- produk --}}
        <div class="col-md-2  mb-4">
         <div class="card">
            <div class="ukuran"><img class="card-img-top" src="cpu.jpg"  alt="Card image cap"></div>
              <div class="card-body">
                <p class="card-title">CPU Dell</p>
                <h6 class="card-text text-danger">Rp.3.000.000</h6>
              </div>
              <div class="card-footer bg-transparent">
                <p class="text-muted" style="font-size: 15px; margin: 2px;">Dell Indonesia</p>
                <p class="text-muted" style="font-size: 15px; margin: 2px;"><i class="fas fa-map-marker-alt "></i> Jakarta Selatan</p>
              </div>
          </div>
        </div>


      </div>

      @include('includes.footer')
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="http://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>  

    
    <script src="dist/js/bootstrap.min.js"></script>
   
     
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      // kode menampilkan icon
      feather.replace()

      // kode untuk input harga

      // kode image-preview

      $(document).ready(function() {
            $.uploadPreview({
              input_field: "#image-upload4",
              preview_box: "#image-preview4",
              label_field: "#image-label4"
            });

            $.uploadPreview({
              input_field: "#image-upload",
              preview_box: "#image-preview",
              label_field: "#image-label"
            });

            $.uploadPreview({
              input_field: "#image-upload2",
              preview_box: "#image-preview2",
              label_field: "#image-label2"
            });

            $.uploadPreview({
              input_field: "#image-upload3",
              preview_box: "#image-preview3",
              label_field: "#image-label3"
            });
      });


      // kode input harga
      (function($, undefined) {

          "use strict";

          // When ready.
          $(function() {
            
            var $form = $( "#form" );
            var $input = $form.find( "#minimum" ); //gak bisa 2 inputtt ?

            $input.on( "keyup", function( event ) {
              
              
              // When user select text in the document, also abort.
              var selection = window.getSelection().toString();
              if ( selection !== '' ) {
                return;
              }
              
              // When the arrow keys are pressed, abort.
              if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
              }
              
              
              var $this = $( this );
              
              // Get the value.
              var input = $this.val();
              
              var input = input.replace(/[\D\s\._\-]+/g, "");
                  input = input ? parseInt( input, 10 ) : 0;

                  $this.val( function() {
                    return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
                  } );
            } );
            
            /**
             * ==================================
             * When Form Submitted
             * ==================================
             */
            $form.on( "submit", function( event ) {
              
              var $this = $( this );
              var arr = $this.serializeArray();
            
              for (var i = 0; i < arr.length; i++) {
                  arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
              };
              
              console.log( arr );
              
              event.preventDefault();
            });
            
          });
        })(jQuery);









    </script>
    </script>
  </body>
</html>
