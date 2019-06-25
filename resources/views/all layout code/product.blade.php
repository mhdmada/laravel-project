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

      .ukuran {
        height: 10em;
        position: relative
        }
        .ukuran img {
        margin: 0;
        /*background: yellow;*/
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
        }

        hr.vr{
         transform: rotate(90deg);
        }

    </style>
  </head>

    @include('includes.header')

    {{-- diatas adalah kodingan header --}}



  <body class="bg-light">

    <div class="container-fluid">
      <div class="py-5 text-center">
      
       
      </div>

      <div class="row">

        <div class="col-md-4 order-md-1 mb-4"  >
          <div class="row">
                <div class="col-md-8 mb-3">
                    <img src="laptop.jpg" width="450px;" alt="..." class="img-thumbnail">
                </div>

                <div class="col-md-4 mb-3">
                  <div class="col-md-12" style="padding-bottom: 45px;"><img src="laptop.jpg" width="98px;" alt="..." class="img-thumbnail"></div>
                  <div class="col-md-12" style="padding-bottom: 45px;"><img src="laptop.jpg" width="98px;" alt="..." class="img-thumbnail"></div>
                  <div class="col-md-12" style="padding-bottom: 45px;"><img src="laptop.jpg" width="98px;" alt="..." class="img-thumbnail"></div>
                   
                </div>
          </div>     
          
        </div>


        <div class="col-md-3 order-md-2 mx-5 bordered" style="background-color: white;">
       

            <div class="mb-3" style="padding-top: 15px;">
              <h5>iMac 21.5 i5 2.7ghz/8gb/1tb (Slim) </h5>
            </div>

            <div class="mb-3">
              <h3 class="text-danger">Rp.21.500.000 </h3>
            </div>

            <div class="mb-3" style="padding-top: 15px; padding-bottom: 15px;">
                <h5>Berat: 16.000gr</h5>
            </div>
           
            <hr class="mb-4">

            <div class="mb-3" style="padding-top: 15px;">
               <label for="username">Location</label>
              <div class="input-group">
                <select class="form-control">
                  <option>Choose..</option>
                  <option>Jakarta</option>
                  <option>Medan</option>
                  <option>Surabaya</option>
                </select>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <button class="btn btn-secondary btn-block" type="submit"><span data-feather="map-pin"></span>  Search Location</button>        
        </div>


        <div class="col-md-3 order-md-3" style="background-color: white;">
        
            <div class="mb-3" style="padding-top: 30px;" align="center">
               <img src="apple.png" alt="..." width="100px;" style="padding-bottom: 20px;">
            </div>

             <div class="mb-3" style="padding-top: 10px;" align="center">
                <h1>Apple Store</h1>
            </div>

             <div class="mb-3" align="center">
                   <h2>085213xxxxxxx</h2>
            </div>
            <div class="mb-3" style="padding-bottom: 10px;" align="center">
                   <h3>Location</h3>
            </div>

            <div class="row" >
                 <div class="col" >
                  <h6><span data-feather="shopping-bag"></span> 650 product</h6>
                </div>
               
                <div class="col">
                  <h6><span data-feather="heart"></span> 25 likes</h6>
                </div>

                <div class="col" >
                  <h6><span data-feather="message-square"></span> 24/7 Service</h6>
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

      // kode menampilkan tanggal
      $(document).ready(function() {
          var date = new Date();

          var day = date.getDate();
          var month = date.getMonth() + 1;
          var year = date.getFullYear();

          if (month < 10) month = "0" + month;
          if (day < 10) day = "0" + day;

          var today = year + "-" + month + "-" + day;       
          $("input[type='date']").attr("value", today);
      });


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




    </script>
    </script>
  </body>
</html>
