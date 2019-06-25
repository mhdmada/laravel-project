<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">

    <style type="text/css">
       .feather {
      width: 18px;
      height: 18px;
      vertical-align: text-bottom;*/
      }

      .field-icon {
        float: right;
        margin-right: 13px;
        margin-top: -32px;
        position: relative;
        z-index: 2;
      }


    </style>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>

  <body>
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="logo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Masuk MyThings</h1>
        <p>Belum punya akun MyThings? Daftar<a href="{!! url('/register'); !!}">&nbspdi sini</a></p>
      </div>

     

      <div class="form-group ">
        <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Username" required autofocus>
      </div>

      <div class="form-group">
        <input id="password-field" type="password" class="form-control  form-control-lg" name="password" placeholder="Kata Sandi">
        <span toggle="#password-field"  class="fas fa-eye field-icon toggle-password"></span>
      </div>


      

      <div class="clearfix">
          <div class="custom-control custom-checkbox float-left mt-2">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
          </div>
          <div class="float-right mb-4"><a href="#" class="btn btn-link ">Lupa Kata Sandi</a>  </div>
      </div>

      


      <button class="btn btn-lg btn-primary btn-block " type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>



    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      // kode menampilkan icon
      feather.replace()

      $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        
        if (input.attr("type") == "password") {
          input.attr("type", "text");
          console.log('ubahtext');
        } else {
          input.attr("type", "password");
           console.log('ubahpass');
        }
      });


    </script>
  </body>
</html>
