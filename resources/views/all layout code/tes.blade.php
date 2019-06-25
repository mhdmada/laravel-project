
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

    <style type="text/css">
        .carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(25%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-25%);
}
  
.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
  
}

    </style>
</head>
<body>
<div class="container text-center my-3">
    <h2>Bootstrap 4 Multiple Item Carousel</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=1">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=2">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=3">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=4">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=5">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=6">
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
    <h4>Advances one slide at a time</h4>
</div>



 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('#recipeCarousel').carousel({
  interval: 10000
})

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
