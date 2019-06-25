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
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
      }

     
      .like:hover{
        color: black;
        text-decoration: none;
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

        a.title{
          text-decoration: none;
        }


    </style>
  </head>
  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container" >

    
    
      <div class="row">
          <div class="col-md-12">
          <section class="card card-info">
              <div class="row card-body">
                <div class="col-md-12" style="padding-bottom: 20px;">
                  <h3> <a href="#" class="title">Product Inquiry</a></h3> <hr>
                  <h4>How can I find category feature for product? </h4>
                </div>
             

                <div class="col-md-12"    >
                    <div class="media">
                      <img class="mr-3" src="logo.png" width="50px;" alt="Generic placeholder image">
                      <div class="media-body">
                        <h6 class="mt-0">Simetri</h6>
                        <p>just type other button in homepage, it will show all of product category</p>
                        <div class="clearfix">
                          <small class="text-muted float-left">1.2k likes</small>
                         <small><a href="" class="like float-right"><span data-feather="heart"></span> <b>like</b> </a></small>
                       </div>
                      </div>
                    </div>
                    <hr>
                </div>
               
                 <div class="col-md-12">
                    <div class="media">
                      <img class="mr-3" src="photo.jpg" width="50px;" class="rounded-circle" alt="Generic placeholder image">
                      <div class="media-body">
                        <h6 class="mt-0">Anonymous</h6>
                        <p>try hard dude!</p>
                        <div class="clearfix">
                          <small class="text-muted float-left">900 likes</small>
                         <small><a href="" class="like float-right"><span data-feather="heart"></span> <b>like</b> </a></small>
                       </div>
                      </div>
                    </div>
                    <hr>
                </div>


                <div class="col-md-12" style="padding-top: 40px;" >
                    
                    <textarea class="form-control" rows="5"></textarea><br>
                    <button class="btn btn-primary"><span data-feather="send"></span>  Post</button>
                </div>
               
              </div>
              
          </section>
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
