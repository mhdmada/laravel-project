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

        a:hover {
          text-decoration: none;
        }

    </style>
  </head>
  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container-fluid" style="padding-left: 200px; padding-right: 200px; ">

    
    
      <div class="row">
          <div class="col-md-12">
          <div class="card">
              <header class="card-header">
                <h3>Mens Wear</h3>
              </header>
              <div class="row card-body">
                <div class="col-md-6">
                  <h4> <a href="{!! url('/sub-forum'); !!}"><i class="glyphicon glyphicon-th-list"> </i>How can I find category feature for product?</a></h4> 
                  {{-- <h6>In This div You lean Web design ! </h6> --}}
                  
                </div>
                <div class="col-md-2">
                  <ul id="post-topic">
                    <li class="list-unstyled"> Topics:62 </li>
                    <li class="list-unstyled"> Posts:445 </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <a href="#"><i class="glyphicon glyphicon-user"></i> Mohammad sharifi  </a><br>
                  <a href="#"><i class="glyphicon glyphicon-calendar"></i> 2014-09-15 17:57 PM  </a>
                </div>
              </div>
              
              <hr>
              <div class="row card-body">
                <div class="col-md-6">
                  <h4> <a href="#"><i class="glyphicon glyphicon-th-list"> </i> Where I can find crocodile polo</a></h4>
                  {{-- <h6>In This div You lean Web design ! </h6> --}}
                  
                </div>
                <div class="col-md-2">
                  <ul id="post-topic">
                    <li class="list-unstyled"> Topics:62 </li>
                    <li class="list-unstyled"> Posts:445 </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <a href="#"><i class="glyphicon glyphicon-user"></i> Mohammad sharifi  </a><br>
                  <a href="#"><i class="glyphicon glyphicon-calendar"></i> 2014-09-15 17:57 PM  </a>
                </div>
              </div>
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
