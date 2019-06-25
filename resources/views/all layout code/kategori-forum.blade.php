<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="carousel.css">
   

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
      width: 25px;
      height: 25px;
      vertical-align: text-bottom;*/
      }

      .card:hover {
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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

        .button {
          border-radius: 4px;
          background-color: #f2f2f2;
          border:solid 1px #f2f2f2;
          color: black;
          text-align: center;
          font-size: 22px;
          padding: 20px;
          width: 200px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
        }

        .button:hover {
          border-radius: 4px;
          border:solid 1px #bfbfbf;
          background-color: #FFFFFF;
          box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

    </style>
  </head>
  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <p class="h3">Forum Category</p>
    </div><br>

    <div class="container">

    
    
      <div class="row">
          <div class="col-md-3" style="padding-bottom: 23px;">
           <a  href="{!! url('/forum'); !!}"><button class="button"><span data-feather="shopping-bag"></span>  mens wear</button></a>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="book"></span>  buku</button>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="camera"></span>  kamera </button>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="cpu"></span>  electronic</button>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="film"></span>  tiket</button>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="smartphone"></span>  smartphone </button>
          </div>
          <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="headphones"></span>  headPhones</button>
          </div>
           <div class="col-md-3" style="padding-bottom: 23px;">
           <button class="button"><span data-feather="monitor"></span>  komputer</button>
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
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();

       $('#recipeCarousel').carousel({
          interval: 2000
        });

        $('.carousel .carousel-item').each(function(){
            var next = $(this).next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            for (var i=0;i<2;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                
                next.children(':first-child').clone().appendTo($(this));
              }
        });
      
          
    </script>
  </body>
</html>
