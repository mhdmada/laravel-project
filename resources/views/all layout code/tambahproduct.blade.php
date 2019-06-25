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

      .info-produk{
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



    </style>
  </head>

    @include('includes.header')

    {{-- diatas adalah kodingan header --}}



  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Tambah Product Baru</h2>
        {{-- <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> --}}
      </div>

      <div class="row">



        <div class="col-md-6 order-md-1 mb-4">
          <div class="gambar-produk">
          <h5 class="d-flex justify-content-between align-items-center mb-3">
            Upload Foto Product
          </h5><hr>
          <div class="row">
                <div class="col-md-12 mb-3">
                  <div id="image-preview4">
                    <label for="image-upload" id="image-label4">Choose File</label>
                    <input type="file" name="image" id="image-upload4" />
                  </div>
                </div>
          </div>     
          <div class="row">
                <div class="col-md-4 mb-3">
                   <div id="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="image-upload" />
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                   <div id="image-preview2">
                    <label for="image-upload" id="image-label2">Choose File</label>
                    <input type="file" name="image" id="image-upload2" />
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                   <div id="image-preview3">
                    <label for="image-upload" id="image-label3">Choose File</label>
                    <input type="file" name="image" id="image-upload3" />
                  </div>
                </div>
          </div>
          </div>
        </div>


        <div class="col-md-5 order-md-2  mx-2">

          <div class="info-produk">
          <h5 class="mb-3">Informasi Produk</h5><hr>
          <form class="needs-validation" novalidate>

            <div class="mb-3">
              <label for="username">Kategori</label>
                <select class="form-control">
                  <option>Pilih Kategori</option>
                  <option>Electronic</option>
                  <option>Mens Wear</option>
                  <option>Baby Stuff</option>
                </select>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>

            <div class="mb-3">
              <label for="username">Nama Produk</label>
                <input type="text" class="form-control" id="firstName" placeholder="masukkan nama produk" value="" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>
          </div>


          <div class="info-produk">
            <h5 class="mb-3">Harga</h5><hr>
            <div class="mb-3">
              <label for="username">Pemesanan Mininum / Pcs <small class="text-muted">(Maksimum 10.000)</small> </label>
                <input type="number" class="form-control" id="firstName" placeholder="ex: 30" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>

            <div class="mb-3">
              <label for="username">Harga</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">Rp.</div>
                </div>
                <input type="number" class="form-control" id="firstName" placeholder="masukkan harga" value="" required>
              </div>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>
          </div>


          <div class="info-produk">
            <h5 class="mb-3">Detail Produk</h5><hr>
            <div class="mb-3">
              <label for="username">Size </label>
                <input type="text" class="form-control" id="firstName" placeholder="ex: Xl" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>

            <div class="mb-3">
              <label for="username">Warna</label>
                <input type="text" class="form-control" id="firstName" placeholder="ex: Hitam" required> 
            </div>
          </div>

          <div class="info-produk">
            <h5 class="mb-3">Lokasi</h5><hr>
            <div class="mb-3">
              <label for="username">Input Lokasi</label>
                <input type="text" class="form-control" id="firstName"  required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
            </div>

            <div class="mb-3">
              <label for="username">Alamat</label>
               <textarea class="form-control" rows="3" ></textarea>
            </div>
          </div>

 

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Product</button>
          </form>
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

// <label for="image-upload" id="image-label">Choose File</label>
//             <input type="file" name="image" id="image-upload" />




    </script>
    </script>
  </body>
</html>
