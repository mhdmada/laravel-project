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
    </style>
  </head>

  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Register</h1>
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Supplier VIP</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Facility</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Payment Method</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Register</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Supplier Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Facility</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Payment Method</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Register</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Customer Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Facility </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Payment Method</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Register</button>
          </div>
        </div>
      </div>

      @include('includes.footer')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
