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

    </style>
  </head>
  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container-fluid" style="padding-left: 200px; padding-right: 200px; ">

      {{-- brand --}}

        <div class="row">
                <div class="col" style="padding-bottom: 30px;  margin-right: 2px;  " >
                      <div class="ukuran"><img src="adidas.png" alt="..." width="250px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="nike.png" alt="..." width="250px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="lv.png" alt="..." width="150px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="levis.png" alt="..." width="250px;"" class="rounded"></div>
                </div>
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="converse.png" alt="..." width="250px;"" class="rounded"></div>
                </div>        
        </div>

        



   <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active" >
                    <img class="d-block col-3 img-fluid" src="nokia.png">
                </div>
                <div class="carousel-item" >
                    <img class="d-block col-3 img-fluid" src="fedex.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="ikea.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="xbox.png">
                </div>
                 <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="sony.png">
                </div>
                 <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="allianz.png">
                </div>
                 <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="visa.png">
                </div>
              
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   
  </div>


      

        {{-- ini adalah produk --}}
        {{-- <div class="row" style="padding-bottom: 100px;">
                <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top " src="sepatu.jpg"  alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">Sepatu Nike Navy Blue</p>
                        <h6 class="card-text text-danger">Rp.300.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Jakarta</small>
                      </div>
                    </div>
                </div>

                <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top ukuran" src="jacket.jpg"  alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">Jacket Army</p>
                        <h6 class="card-text text-danger">Rp.170.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Bandung</small>
                      </div>
                    </div>
                </div>  

                <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top ukuran" src="laptop.jpg"  alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">Imac Apple</p>
                        <h6 class="card-text text-danger">Rp.22.453.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Pontianak</small>
                      </div>
                    </div>
                </div>  

                 <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top ukuran" src="headset.jpg" alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">Headset</p>
                        <h6 class="card-text text-danger">Rp.150.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Padang</small>
                      </div>
                    </div>
                </div>

                <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top ukuran" src="cpu.jpg" alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">CPU Dell</p>
                        <h6 class="card-text text-danger">Rp.2.560.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Jakarta</small>
                      </div>
                    </div>
                </div>  

                <div class="col-sm-2" style="padding-bottom: 13px;">
                    <div class="card" style="width: 13rem;">
                      <div class="ukuran"><img class="card-img-top ukuran" src="zoro.jpg" alt="Card image cap"></div>
                      <div class="card-body">
                        <p class="card-title">Action Figure Zorro</p>
                        <h6 class="card-text text-danger">Rp.400.000</h6>
                      </div>
                      <div class="card-footer">
                      Store Name <br>
                      <small class="text-muted"><span data-feather="map-pin"></span> Jakarta</small>
                      </div>
                    </div>
                </div>    
        </div> --}}

        <a class="btn btn-primary float-right"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Other
          </a> <br><br>

            <div class="collapse" id="collapseExample">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="briefcase"></span>  Stationery </h5></div>
                    <div class="col-3" style="padding-bottom: 35px; padding-top: 35px;  padding-left: 100px;" ><h5><span data-feather="book"></span>  Buku </h5></div>
                    <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="camera"></span>  Kamera </h5></div>
                    <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="cpu"></span>  Electronic </h5></div>

                    

                     <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="film"></span>  Tiket </h5></div>
                      <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="smartphone"></span>  Smartphone </h5></div>
                       <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="headphones"></span>  HeadPhones </h5></div>
                      <div class="col-3" style="padding-bottom: 35px; padding-top: 35px; padding-left: 100px;"><h5><span data-feather="monitor"></span>  Komputer </h5></div>
                       
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
