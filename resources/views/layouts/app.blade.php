<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
{{--     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="ws_url" content="{{ env('WS_URL') }}">
    <meta name="user_id" content="{{ Auth::id() }}"> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- admin css --}}

    <link rel="stylesheet" href="folder-admin/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    {{-- <link rel="stylesheet" href="folder-admin/css/owl.carousel.css">
    <link rel="stylesheet" href="folder-admin/css/owl.theme.css">
    <link rel="stylesheet" href="folder-admin/css/owl.transitions.css"> --}}
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/normalize.css">
  <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/wave/waves.min.css">
    <link rel="stylesheet" href="folder-admin/css/wave/button.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/notika-custom-icon.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/style-admin.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="folder-admin/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="folder-admin/js/vendor/modernizr-2.8.3.min.js"></script>

    {{-- admin css --}}


    <!-- Scripts -->
   {{--  <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    



    <!-- Styles -->
    <link href="{{ asset('../dist/css/bootstrap.min.css') }}" rel="stylesheet"> {{-- kode untuk page url berdasarkan id --}} 
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tambahproduct.css') }}" rel="stylesheet">

    <link href="{{ asset('../dist/css/zoomOnHover.css') }}" rel="stylesheet">

   

    @yield('page-style')


    <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

    <link rel="stylesheet" href="dist/bootstrap-clockpicker.css" />

    <link href="form-validation.css" rel="stylesheet">

    <link href="/src/jquery.exzoom.css" rel="stylesheet">

    <style type="text/css">

     /*=====================================================*/
    .rating {
      float:left;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        /* padding:0 .1em; */
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:300%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: dodgerblue;
        
    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: dodgerblue;
        
    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: dodgerblue;
        
    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }
    
    .dropdown-toggle:after { content: none }  /*menghilangkan span caret di dropdown */

     .red-tooltip.tooltip.tooltip.bottom .tooltip-arrow, 
    .red-tooltip.tooltip.tooltip.bottom-left .tooltip-arrow,
    .red-tooltip.tooltip.tooltip.bottom-right .tooltip-arrow{border-bottom-color: red;}
    .red-tooltip.tooltip.top .tooltip-arrow {border-top-color: red;}
    .red-tooltip.tooltip.left .tooltip-arrow {border-left-color: red;}
    .red-tooltip.tooltip.right .tooltip-arrow {border-right-color: red;}
    .red-tooltip.tooltip > .tooltip-inner{background-color:red;}



/*this is code for animation when product not found*/
  
  .empty-icon-container{
  margin:1em auto;
  text-align:center;
  display:flex;
  flex-direction: column;
  align-items: center;

}
.animation-container{
  position:relative;
  display:block;
  text-align: center;
  height:100px;
  width:100px;
  border-bottom: solid 2px #333;
  overflow:hidden;
}
.bounce{
  display: inline-block;
  position:absolute;
  bottom:0;
  left:50%;
  width:40px;
  height:40px;
  margin-left: -20px;
  background-size: contain;
  animation: bounceAnim 1s cubic-bezier(.63,.09,.75,.46) infinite alternate,
            spinAnim 3s linear infinite;
}

@keyframes bounceAnim{
  0%, 10% { bottom: 50%; }

  100% { bottom: 0%; }
}
@keyframes spinAnim{
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.pebble1{
  position:absolute;
  top:95%;
  background-color:#333;
  width:10px;
  height:10px;
  border-radius: 20px 20px 0px 0px;
  animation: pebblesAnim 1s linear infinite;
}
.pebble2{
  position:absolute;
  top:97%;
  background-color:#333;
  width:5px;
  height:5px;
  border-radius: 10px 10px 0px 0px;
  animation: pebblesAnim 2s linear infinite;
}
.pebble3{
  position:absolute;
  top:98%;
  background-color:#333;
  width:3px;
  height:3px;
  border-radius: 20px 20px 0px 0px;
  animation: pebblesAnim 3s linear infinite;
}

@keyframes pebblesAnim{
  0% { right: -20%; }
  100% { right: 110%; }
}
  
/*for link*/

.kategori {
  color: black;
  text-decoration: none;
}

a.kategori:hover{
  color: #f4511e;
  text-decoration: none;
}


.fa-laravel {
  color: #c3c3c3;
}

.fa-laravel:hover {
  color: #f05340;
}

/*=================================================*/
/* Container around the toggleButton__slider */
.toggleButton {
  font-family: arial;
  font-size: 14px;
  position: relative;
  display: inline-block;
  width: 100px;
  height: 30px;
}

/* Hide default HTML checkbox */
.toggleButton input {
  display: none;
}

/* Circle toggleButton__slider */
.toggleButton__slider {
  position: absolute;
  cursor: pointer;
  border-radius: 34px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #B91F60
;
  -webkit-transition: .4s;
  transition: .4s;
}

.toggleButton__slider:before {
  position: absolute;
  border-radius: 50%;
  content: "";
  height: 26px;
  width: 26px;
  left: 2px;
  top: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
/*  box-shadow: 0px 2px 10px #888888; */
}

input:checked + .toggleButton__slider {
  background-color: #1FB92B;
}

input:focus + .toggleButton__slider {
  box-shadow: 0 0 1px #297B37;
}

input:checked + .toggleButton__slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(68px);
}

.toggleButton--textOff {
  position: relative;
  color: #FFF;
  font-weight: 500;
  top: 7px;
  left: 36px;
}

.toggleButton--textOn {
  position: relative;
  visibility: hidden;
  color: #FFF;
  font-weight: 500;
  top: 7px;
  right: 30px;
}

/* Control visibility of ON/OFF text within slider */
.toggleButton__checkbox:checked + span > .toggleButton--textOn {
  visibility: visible;
}

.toggleButton__checkbox:checked + span > .toggleButton--textOff {
  visibility: hidden;
}




/* CSS used here will be applied after bootstrap.css */

.dropdown {
    display:inline-block;
    margin-left:20px;
    padding:10px;
    justify-content: center;
  }


.glyphicon-bell {
   
    font-size:1.5rem;
  }

.notifications {
   min-width:420px; 
  }
  
.notifications-wrapper {
     overflow:auto;
      max-height:305px;
    }
    
 .menu-title {
     color:#ff7788;
     font-size:1.5rem;
      display:inline-block;
      }
 
.glyphicon-circle-arrow-right {
      margin-left:10px;     
   }
  
   
 .notification-heading, .notification-footer  {
  padding:2px 10px;
       }
      
        
.dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {
  
 font-size:1.3rem;
 color:#000;
    
}

.notifications a.content {
 text-decoration:none;
 background:#ffffff;
margin-left: -100px;
 }
    
.notification-item {
 padding:10px;
 margin-left:20px;
 margin-right:20px;
 background:#ccc;
 border-radius:4px;
 }

 .dropdown-menu-center { /* ini untuk menu dropdown ditengah */
    right: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
    -o-transform: translate(-50%, 0);
    transform: translate(-50%, 0);

    
}


/* Difficulty Rating Bar */
.mse-difficulty-bar .bars .bar {
  display: inline-block;
  width: 21px;
  height: 6px;
  background-color: #EEEEEE;
  margin-left: 3px;
  margin-bottom: 2px;
    letter-spacing: normal;
}

.mse-difficulty-bar {
  padding-bottom: 22px;
  padding-top: 0px;
  text-align: center;
  letter-spacing: -4px;
 }

.mse-difficulty-bar .bars .bar.warnaku { background-color: #FFD700; } /*warna custom mada */
.mse-difficulty-bar .bars .bar.selected1 { background-color: #BAD900; } 
.mse-difficulty-bar .bars .bar.selected2 { background-color: #C8D500; }
.mse-difficulty-bar .bars .bar.selected3 { background-color: #D29F00; }
.mse-difficulty-bar .bars .bar.selected4 { background-color: #CE5F00; }
.mse-difficulty-bar .bars .bar.selected5 { background-color: #CA2000; }


/* ini adalah  time lince */
body {
  font-family: Lato, Arial, Helvetica, sans-serif;
  font-size: .875rem;
}

.item {
  display: list-item;
  table-layout: fixed;
  list-style-type: none;
  list-style-position: outside;
  padding: 1em 0 1em 2em;
  line-height: 1.14285714em;
  position: relative;
  margin-bottom: -178px; /* jarak antar dot */
}

.item:before {
  position: absolute;
  top: 50px;
  left: 8px;
  width: 8px;
  height: 8px;
  /*margin-top: -8px;*/
  content: '';
  border-radius: 100px;
  background: #00B5AD;
}

.item:after {
  position: absolute;
  top: 0;
  left: 11px;
  width: 0px;
  height: 100px;
  content: '';
  border-right: 1px dotted #00B5AD;
}

.item:first-child:after {
  top: 50px;
  height: 50px;
  margin-top: -1px;
}

.item:last-child:after {
  position: absolute;
  bottom: 50px;
  height: 50px;
  margin-top: -1px;
}

.header {
  font-weight: 700;
}


/*=============================================ini adalah app==================================================*/

// Common [ Font, Helpers ]
.primary { font-family: Roboto; }
.secondary { font-family: Lato; }
.tertiary { font-family: Arvo; }
.last { font-family: Montserrat; }



/* Loading Content Question-Card Component. */

/* Loading Content Card Component */
.postLoadCard {
  padding: 10px;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
  box-shadow: 0 1px 4px rgba(0, 0, 0, .04);
  border: 1px solid rgba(0, 0, 0, .09);
  border-radius: 2.5px;
  border-color: rgba(0, 0, 0, 0.08);
  background: rgba(255, 255, 255, .8);
  margin: 0 0 18px;
  
}
.loadingAvatar {
  padding: 10px;
  height: 50px;
  width: 50px;
  border-radius: 100%;
  margin: 5px;
  margin-bottom: 7.5px;
  background: linear-gradient(90deg, rgba(207, 216, 220, .15), rgba(207, 216, 220, .35), rgba(207, 216, 220, .15));
  -webkit-animation: loadanimation 1.4s ease infinite;
  -moz-animation: loadanimation 1.4s ease infinite;
  animation: loadanimation 1.4s ease infinite;
}
.loadingAnim, .loadingText {
  margin: 0 0 16px;
  min-width: 80px;
  padding: 6px;
  width: 100%;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  background: linear-gradient(90deg, rgba(207, 216, 220, .15), rgba(207, 216, 220, .35), rgba(207, 216, 220, .15));
  -webkit-animation: loadanimation 1.4s ease infinite;
  -moz-animation: loadanimation 1.4s ease infinite;
  animation: loadanimation 1.4s ease infinite;
  background-size: 600% 600%;
  &:first-child {
    padding: 16px;
    max-width: 400px;
  }
}
.bodyWrap {
  padding: 20px 16px 0;
}
.contentWrap {
  // padding: 20px 16px 0;
  .loadingAnim{
    &:nth-child(even) { width: 90%; }
    &:nth-child(odd) { width: 100%; }
  }
}
.footerWrap {
  margin: 24px 0 0;
  padding: 24px 0;
}



@-webkit-keyframes loadanimation {
  0% { background-position: 0 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0 50%; }
}
@-moz-keyframes loadanimation {
  0% { background-position: 0 50%; }
  50% { background-position: 100% 50%; } 
  100% { background-position: 0 50%; }
}
@keyframes loadanimation {
  0% { background-position: 0 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0 50%; }
}


/*### Layout Desktops ####*/
@media screen and (min-width: 1920px) {

    .testing{
      padding-left: 250px; 
      padding-right: 250px;
    }

}

/*### Layout Desktops ###*/
@media screen and (min-width : 1366px) and (max-width : 1900px){
  
  .testing{
      padding-left: 250px; 
      padding-right: 250px;
  }

  .spasitombolfooter {
       margin-bottom: 25px;
  }

}


.tess{

  padding-left: 250px; 
      padding-right: 250px;

}

    </style>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="height: 70px;">
            <div class="container-fluid">
                <a class="navbar-brand " href="{{ url('/') }}" style="font-family: 'Kaushan Script', cursive;">
                    <h2>{{ config('app.name', 'Laravel') }}</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                          <a id="kategori" class="h5 nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>KATEGORI <span data-feather="chevron-down"></span></a>
                            <div class="dropdown-menu " aria-labelledby="kategori">
                              <a class="dropdown-item" href="{!! url('/'); !!}">Kategori Produk</a>
                              <a class="dropdown-item" href="{!! url('/kategori-jasa'); !!}">Kategori Jasa</a>
                            </div>
                        </li>
                    </ul>

                   {{--   <form class="ml-3 my-auto d-inline" style="width: 63%;">
                         <div class=" input-group">
                          <input type="text" class="form-control" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-info" type="button"><span data-feather="search"></span></button>
                          </div>
                        </div>
                    </form> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                      &nbsp<li class="nav-item "><a style="padding-top: 9px; padding-bottom: 9px;" class="nav-link btn btn-primary btn-sm" href="{{ route('login') }}"> <font style="color:white;">{{ __('Login') }}</font></a></li> &nbsp
                           <li class="nav-item"><a style="padding-top: 9px; padding-bottom: 9px;" class="nav-link btn btn-success btn-sm" href="{{ route('register') }}"><font style="color:white;">{{ __('Register') }}</font></a></li>
                        @else
                            
                            @if (Auth::user()->type == 'admin')
                                 
                              <li class="nav-item dropdown">
                                  <div class="text-center">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="https://png.icons8.com/color/48/000000/menu.png" width="30px;">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{!! url('/'); !!}">My Home</a>
{{--                                       <a class="dropdown-item" href="{!! url('/products'); !!}">My Products</a>
                                      <a class="dropdown-item" href="{!! url('/users/' . Auth::user()->id ) !!}">My Akun</a>
                                      <a class="dropdown-item" href="{!! url('/rekening') !!}">My Rekening</a>
                                      <a class="dropdown-item" href="{!! url('/status'); !!}">Status Pembelian</a>
                                      <a class="dropdown-item" href="{!! url('/penjualan'); !!}">Status Penjualan</a> --}}
                                      <a class="dropdown-item" href="{!! url('/policy'); !!}" target="blank">Policy and Term</a>
                                  </div>
                                </div>
                              </li>


                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="uploads/{{ Auth::user()->photo }}" width="26px;" class="rounded">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                      <strong class="dropdown-header"><a href="{!! url('/admin'); !!}" class="kategori">{{ Auth::user()->name }}</a> </strong>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>

                            
                            @else

                              <li class="nav-item dropdown">
                                  <div class="text-center">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                         <img src="https://png.icons8.com/color/80/000000/appointment-reminders.png" width="30px;">
                                    </a>
                                      
                                    <ul class="dropdown-menu notifications dropdown-menu-center" role="menu" aria-labelledby="dLabel">
                                          <div class="notification-heading"><h4 class="menu-title">Notifications</h4></div>
                                            <li class="divider"></li>
                                              <div class="notifications-wrapper">
                                             
                                                @foreach ($histories as $history) 
                                                  <a class="content" href="#">
                                                    <div class="notification-item">
                                                      <h4 class="item-title">Perubahan {{ $history->key }} · {{ \Carbon\Carbon::parse($history->created_at)->diffForHumans() }}</h4>
                                                      <p class="item-info" style="font-size: 18px;">{{ $history->new_value }}</p>
                                                    </div>
                                                  </a>
                                                @endforeach

                                              </div>
                                            <li class="divider"></li>
                                          <div class="notification-footer"></div>
                                      </ul>
                                  </div>
                              </li>
                                 

                              {{-- <li class="nav-item dropdown">
                                  <div class="text-center">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{!! url('/checkout'); !!}">
                                         <img src="https://png.icons8.com/color/48/000000/shopping-cart.png" width="30px;">
                                    </a>
                                </div>
                              </li> --}}

                              <li class="nav-item dropdown">
                                  <div class="text-center">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="https://png.icons8.com/color/48/000000/menu.png" width="30px;">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{!! url('/'); !!}">My Things</a>
                                      <a class="dropdown-item" href="{!! url('/wantedlistproduct'); !!}">Wanted List Product</a>
                                      <a class="dropdown-item" href="{!! url('/wantedlistjasa'); !!}">Wanted List Jasa</a>
                                      <a class="dropdown-item" href="{!! url('/users/' . Auth::user()->id ) !!}">My Akun</a>
                                      <a class="dropdown-item" href="{!! url('/rekening') !!}">My Rekening</a>
                                      <a class="dropdown-item" href="{!! url('/status'); !!}">Status Pembelian</a>
                                      <a class="dropdown-item" href="{!! url('/penjualan'); !!}">Status Penjualan</a>
                                      <a class="dropdown-item" href="{!! url('/policy'); !!}" target="blank">Policy and Term</a>
                                  </div>
                                </div>
                              </li>


                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="uploads/{{ Auth::user()->photo }}" width="26px;" class="rounded">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                      <strong class="dropdown-header"><a href="{!! url('/products'); !!}" class="kategori">My Home</a> </strong>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>



                                  </div>
                              </li>

                            @endif
                         
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

 

        <main class="py-4">
            @yield('content-admin')
        </main>

       

        <main class="py-4">
            @yield('content') {{-- content user --}}
        </main>


    </div>


    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/jquery.uploadPreview.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>  
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="../js/jquery.elevatezoom.js"></script>

    <script src="{{ asset('../dist/js/zoomOnHover.js') }}"></script>


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
   {{--  <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/socket.io.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    {{-- <script src="{{ asset('js/socket.io-stream.js') }}"></script> --}}


    @yield('page-script')
    @yield('widget-script')

    

    <script>


     feather.replace()

       $(document).ready(function(){

          $("#dropdown").change(function () {
              $("#receiver").val(this.value);
          });


          $('input:radio[name="asuransi"]').change(function(){

            if($(this).val() == 'Yes'){

               if ($('input:radio[name=bantuan]:checked').val() == "Yes") {
                         var subtotal = +$(".subtotal").val();
                         var asuransi = $('#insurance').data("field-id");
                         var bantuan = $('#bantuan').data("field-id");
                         var kirim = +$(".biayakirim").val();

                         $("#total").val(subtotal+asuransi+kirim+bantuan);

                  }else{

                      var subtotal = +$(".subtotal").val();
                      var asuransi = $('#insurance').data("field-id");
                      var kirim = +$(".biayakirim").val();

                      $("#total").val(subtotal+asuransi+kirim);

                  }

               
               }else{

                  if ($('input:radio[name=bantuan]:checked').val() == "Yes") {
                    var subtotal = +$(".subtotal").val();
                    var kirim = +$(".biayakirim").val();
                    var bantuan = $('#bantuan').data("field-id");
                 
                    $("#total").val(subtotal+kirim+bantuan);

                  }else{

                    var subtotal = +$(".subtotal").val();
                    var kirim = +$(".biayakirim").val();
                 
                    $("#total").val(subtotal+kirim);

                  }

               }
        });






          $('input:radio[name="bantuan"]').change(function(){

            if($(this).val() == 'Yes'){

                if ($('input:radio[name=asuransi]:checked').val() == "Yes") {
                         var subtotal = +$(".subtotal").val();
                         var bantuan = $('#bantuan').data("field-id");
                         var asuransi = $('#insurance').data("field-id");
                         var kirim = +$(".biayakirim").val();

                         $("#total").val(subtotal+kirim+bantuan+asuransi);

                  }else{

                      var subtotal = +$(".subtotal").val();
                      var bantuan = $('#bantuan').data("field-id");
                      var kirim = +$(".biayakirim").val();

                      $("#total").val(subtotal+kirim+bantuan);

                  }

               
               }else{

                if ($('input:radio[name=asuransi]:checked').val() == "Yes") {
                          var subtotal = +$(".subtotal").val();
                          var kirim = +$(".biayakirim").val();
                           var asuransi = $('#insurance').data("field-id");
                          $("#total").val(subtotal+kirim+asuransi);

                  }else{

                        var subtotal = +$(".subtotal").val();
                        var kirim = +$(".biayakirim").val();
                        $("#total").val(subtotal+kirim);

                  }

               }
        });




      });




        var asuransi = $('#insurance').data("field-id");

        console.log(asuransi);



     $(document).ready(function(){
          $("#moins").click(function(){

                $("#jumlah").val($("#count").val());
                 $('#total').val( $('#count').val() * $('#harga').val());
                
         });
      });

      $(document).ready(function(){
          $("#plus").click(function(){
              $("#jumlah").val($("#count").val());
              $('#total').val( $('#count').val() * $('#harga').val());

         });
      });




     $(document).ready(function(){
      $(".bounce").css("background-image",'url('+imgDataURI+')');
    })

//this jut saves referencing an external image. 
var imgDataURI = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAbrwAAG68BXhqRHAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABA/SURBVHic7Z1plF1FEcd/QybbMWBIAiKIIhDF/bCJO6CComBEhCAiGhWF4xHccAUBdzzywQ03BCXiLiqCCCIoorK4IEclKkZkEgMJISEJEEKS54d6l7nv39XLffPmzQjzP6c/3Pequuveut1dXVXdFyYwgQlMYAITeGhiEnACsAS4HTh0bMV5aONRwHVAq1ZuH1OJxjnmAcuAO4CXJegGgOcCX8Ae6HLg5Zm692rX3ZKyol3fBBwsYfhBLXH+nw68CbgJ/8HG8AxgtcOzGji4R7I/KKEPrMIU4C34b3hVlkfqfCK+Mi4EHjlCeecBq9pynQJsOcL6xh30oW0BHA38y/lP54HDnfrmRHjPaNc9EgwQviArgJOAaSOse9xAH9yNzm9VWQ9cgL2lU5y6BoCfOHyf6qG8d0RkW8yDxHpL9YL6uP8xYNtMXcc7vN+htxP4PODOhKyXATv2sL2+I6WItcDJwMML6tmhTV/nvwEzCnqNmcBp2Fziyb0KmC88pdbkmOJV+De0CTgb2K5BXedLHfdgk/toYiY2HN6Hfx/nMDy35KzJMcUAcDqwmfAmbsJM1iZ4plPXO3olbAHmApfgK+V6bAiLWZNjjunAtwkF3AycSXdDzBVS15+BwV4I2wADmJl+D+G9LXd+GxeYDvwCf67o1kJ5gVPffg5dv8bwJwJ/dWQadwqZDvwc31x8ygjqvUzquyxC188xfAbwLcaxQqYBlxIK9WeaTdyKJxHOHftEaMfigbwff54cc4WoBdQCfgtsPcJ6vyR1/jpBO1YP5Fhgo9P+8/ooQwfe5QjzO6xbjwTTCP1Vr0zQj+UbeiShUlYAO/dZDg50BLkRmNWDug+TepeStqz6oZCpxK3EBYTD11+ArXotxKHAbcBKOq2XHdq/1QUYIu5tfVH7/xXAQQXt/kDqPiNDP9oKeR1mLa4lbsW905Hjm70WZGmt8tsZfkt/Kg1vwBZwHmbQ6bS7NdPmTOBeqT+3Kh9NhUzGHJ/14ehhEdrzHFle10th6gppYcPUG5xG35aoQ9+c/2bafL3Q/7FAztFUyCRM5pL7nYat3uu0a4FdeyXM2VL5xYST7U+Je1ynEir19Eyb2vtOLZBztIes06T+IfwQAdjDXyP0V9Ijr/SLCG+2Xu7E5pMYjhL6u4FtEvTT2jR1nt2xSXMpNmwe4fB1q5D52BC0jPQKf44j16sT9K9xZHp9A7mimEw8aNMCjsnwqx/q8xn6AwgVeLn85iUxdKuQ22s8S5x66/istHFVpu4fCf1KTLEjhg5bVfkd6RuYS2gKPinT1icibdWLF2vvViFqKT4mQbsL4f2kjI1HA+uEvrIWD8OG/iXASxrIC/jD1mbg2Rm+U4UntdKucJXTVr2sitxAtwrR9nKOyV/hP+AY3iP067BcsrqH+D8N5AVs2LpLKr6ggO8vwpMb3ibju7ercgl2Mx66VcjnhO+UDP0CoV9MepSYjhkAdR61who7Q3cl7Kp7Z3ieIPTryYdq98JXxBosdyt1490q5E3C970M/ZaEw9BeGZ43OvLVy1cayAtYAkK9gisLeLSr/qSA51hH2CuAnQp4u1XIPsL3jwIe9SJ8NEM/iA1LMYUc2EBeBgkXRSWZgRqoWlDAo8PHlyi33btVyJbCt4F8fpcujK8raOe9jowtzGJsFP2cJxUsxVauKTyMTldDi/jYX8fVwtMkytitQiC0tLbP0O9A5xC+kbxDdQ6hO6ir4er7UkHOqoBwLbGosC1d7zyugZwjUcifhDcWBKvjBuF5RQGPF2V0h6tYFx3EYtp1LCxoWLNKrijg2RqYXbtej6WM9gNDcv3oAh414UuUeL5cb8LM6AAxhTwd87xWWIyZsjk8Xa6vLeDZRa5vxgTuB9T7XJKZqPPGngU8l2KjQIVJwFM9wphCtDtdUtAohCbx7wt4NLqWc9H3EroO8OaQI7GHuQzzYV0v/+9J3gC5nzBJ4wCPsFQhP8s0CDZ5PaJ2vY6yOUQfQj8Vcqdc63ppC8wCnI0lbXwDOA7zs1WYSVnPulyuX+gReQqZTOeCp4UlLuTweLleRNnQo9kpOq6PJlbL9Uy59oyEEwmDVHML2lKF7I3z/D2FzMWUUuEWwjfJw25y/c8CHghDv7kgVi+hCtEe0sJW9Osz9ZQEoYawkHiFGTjWpKcQ9cr+oaAxgMfKdcnKF8KtCCXK7xXukmvtIWC+u+eQHkpLo4I3yPXuSuApRN3KJdYVhG/6LYV8mp3RT4XkekiFP2DD+C8j/5dup1OFPEEJShRyS2FjOjnrFuXXYCvjITqD/2OpkHVyHUtgAHN1HAB8xvkvt+GowmK5Lln3BHGC/Qob01Vv3T4fIHRTXIoFhdT5lgoLexjJSn1b4S3d5/4W4dM3PwaNLwULZ6+H6Btb6rPXXau6tXmzXB+IDYdqZd1X2F4Or8QMhLsIdz1VuF+uS519P5fr2S5VCLUgi14+3elamjStnmEV8iXEt4rVS9OMP6+HvJrOzMo7fNbA47umsM0dhC+1r76O7YVvaQnTCsoe0Hysiw9hcWKNLHo5vo8iviOpKk23ISv/UYRprrdFeKcJ3b2FbW5Nd4qcKXyrSpjUfT7ZodE5YSNhZDHW/Qcw217zl6rSdM+58qsyNhJP1p7k0JZgqvBtKOSbInxFw/MGyh5sKkWoRT52shNhqlAvFKIPOJVD1a1CBoVP56IYVJG5BScQ7tWOHTFxOP7+iNSQpRgg7JFTS4SsIaWMozK8OmTdnSZ/ADOEb20h3xzhix0h0oFbhSllYx9G2KOqkspSrEPnnqZnjHhtb6AscKSTetGYjt1b4weLebbrfDcrgTc86GIptRvqB1ic2XMilu661XHUm7OaYBPwWsrSlTRHt9Tk1nsrNQb0ZQt6lqcQXSnnbOWFWCKDKqVbhTQdshRHYyHTEqhCSidnXdGXKkRHjcA68xSi4dOSJIWFhJG0R3iEDnRiG+mxSN9uQKsmfdEkS+i7Kl2HaIgicFh6CtFxrdSTqW7zEkVC6HEtOf+kV9C2Sv1o6rfzFni6ToNQITcpk2fSqkLc2K8DVUjpyTk6kXou8NGCKqR0UleF6L0PAGcxnCL0Hcyh6gXxOuD1kL/L9dOKROy+h+hDiPWQ+htXYkGVINZDBkjvS9F5Ve+9sqIqTAK+hsVV6gh6iIdBwhzWXAIZmNB1notLGiPck368Q+N5Bqo1hpq8TaBe289iC1Y9RUL3pehhCd4JeLl12noci9LrIRuBa+S3/TDX8TLM5p7n8Km2S3uWury9YI/3xp2HHQM1Emhbz8E80JoRou0/Wf73gnjfw4apWF7Bbylf4Qf76q6g8xAxLxFhKuEbUbJr6DjhiaVYem+c9wY2wVcdfi26L2WW/L+etNv+6Iic72si6PMzQsa8p38XOjfVRfAy4bkoQatuda80gW4y1XIR4XC9r9CUBKeOcep2tzLEHHlXEY8hQPwQMU0i2yNRRwWdEFNhzfOxVXivMht3ivy+GhtuDiaUT/fk31jQjr7AKynb8t2Br+C/NeckeHSSrGc8vhizWlYDh9R+ny08d5PPBPRiHk17yBb4Weler6jjYqF/c0FberDbuQ3kfAAHOsL+jXQiwB5Cvw5zT+xEZ/xD99aph7kktBlTSin0eL57sd6XwiTCvfpB5ohgFqFHe98Gcj6AQTq3DreAtxfwqPd2f8JNPDoMXNulwN5hm6XYT/h+U8Czp/AsJ9+bTxCem1M8qWDQRuDL8tvxpANPGwmTir+AGQl1nCrXmuWYe+sqlDoRPWi6018LeHSnbpWhE8Nkwpf46ymeXHTuLDo9oHNJn10FZrnUoe6Cy7H973X8Ta5L1zAjgbahMng4TK5z+yePITQc9sZ61m3Es2GSqDRaN/NSitwOs4K8CXcN/gb9lwpdSXJ3hW6HrGuEL7cBU3cXbyC9nW2Q/Dn3KUs2KYhOnm/I8PwyIsBxEXqdYNeSj8lX6EYhg4Tnl+TCBacJfexQzgq5LdEtyt32AfSIjeWkI4l6zFILm9hTE6AmTZQOW90oZHfhyZ2oMEh4CEDK3N2GMJ1Ky3I6zf8o5mMPZw1mk78L++KNxs5Th8lsRXgyw9GZdi8S+lhvUnSjEF0v5Q4NOFTo15GO2yx05KqG7IXYEB074qkDA+TTe6qyCTNpY9C5JzcvvF/ozysR2JGrBHqa6kkZevXuqvVZh3c+zGWYQdDVBwRSn2zQMkR86NJFYov0Ear7Cu0thfI2VcgAnYcvtwjjFHXsRZgEGOzraGMbwqydRYzwozCHkx//6uW7ibr0BJ1UjGQ64TCnu7I8NFXIU4R+DelMF3VAXh2hm0QYR9lE/uSkIgxi+6/f0xZIv9+h5d2Reg4Rus2kD6/RvN8TC2RtqpCThP7CBO2znPpj5vGHHNpPFsjTFQaxQwHei+3IVQVtwj9+D+ywszrttcTXMScKbcnu36YKuVLo3xqhG8DmvZLe8QrCtdc1jDzHrBi7Eg5r92LfI1TsT/jQjo3UO1foNpDfe9FEIdsSrqliWTXeCaxefOcgwg+/3Em453LU8SxC9/UafKWoy3oF8VWufjwstwhtopA3C+2fInSzCV84dQmB+eh03ltPl97cXuAIQgtkHaEzcRdCwWPGwClC94uMDE0Uotn2H3BoBggP3rmH8MSJFxAmg2wmn+A96tBJsroBTdU52aHzxu/dCG8ydTpQqUJ2I3x51PEJdlCy1qmKW4CfZH5Cov2+4h2EN7sZszyqCXwq4cbQ+wgPrAE7cadOd2ai7VKFfFrovKNen0H4oP/I8Kp6APiI02YLM3jGFd6IH8G7kOHF41zCnVNLCIeD+UKzinhGY4lCtiYMnKlVuCvhPsm7GD42Yxvgx057LUyJZ2Or9H5/IyuJI/A/NTfEsP1+pPP/YjozHScTHlMeOzW0RCGnC80SOh/cjphnQOuqlPZSLH7hKUPLsjb9mGIylsRwLvFF5GbsZJ0ZwMed/2+ic8fvB+X/lfhumpxCZhHu/q3PCdsTpi+1sAMuZ2GZlbHPG8XKmH7X/RDK357qDToO3yM6xPBKfg6hX807RSGnkLPk/5UMm9z7EPq1Wm3Z3k542EFVrsfi+ec6Mlb3MWYo9Q5r+Seh2djC1jbVwctq8dxPmOuVUsjehPNaZQktIMwGabVlWhyReRPWu+sr8Gp0+Cr2Yq7AT7XtG3Ssb7WF+iK2Hnk+djJQU4X9EJtQF8nv/6BzU09MIVthStdh8XHEJ+dUWcQYLvia4FCsl9yGJdcdQGhpTMcO249tEI2VewiPkG1hyQXVW+opZAr+576vJn2keUyGkxn5VrtxiZ2x8TmWBNGkXEC4i7bV/k0/F9FN2YgFyfr+xbWxwJOxm419jbm0eFkduUyPEkUsxF/FP+jxSODD+PNQv8t/27IUnWH1YMckzLX9NcpODOpVWY7F/l9OH2MXKfTkY1U9xiDm2j8I86g+jcIMjQKswwJkV2OJC9fRv0ObizAeFaKYgsXB98Am2B2x7MftMOXV03E2YA99dbvciuVc/RtLFb2B8gNmJjCBCUxgAhP4v8L/ADYpmJg0kKzfAAAAAElFTkSuQmCC";


      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
      })



    // fungsi flash message fade
    window.setTimeout(function() {
          $(".hilang").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 2000);


    // fungsi carousel untuk gambar
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



      // kode menampilkan icon
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


      $(document).ready(function() {

            $('#muncul').click(function() {
              $("#muncul").toggleClass( "active" );
              if ($("#muncul").hasClass("active")) {
                $("#muncul").text("Sembunyikan Filter");
              } else {
                $("#muncul").text("Tampilkan Filter");
              }
            });
  
  


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

            //kode buat memunculkan input setelah klik bekas

            $("#baru").click(function(){
                $(".muncul").slideUp(500);
            });

            $("#bekas").click(function(){
                $(".muncul").slideDown(500);
            });

            $("#bekas_smartphone").click(function(){
                $(".muncul").slideDown(500);
            });


             $(".munculkan").click(function(){
                $(".muncul").slideDown(500);
            });


               $(".sembunyikan").click(function(){
                $(".muncul").slideUp(500);
            });

          //kode untuk menampilkan sub kategori  

           $('.dynamic').change(function(){
            if($(this).val() != '')
            {
             var select = $(this).attr("id");
             var value = $(this).val();
             var dependent = $(this).data('dependent');
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('productcontroller.fetch') }}",
              method:"POST",
              data:{select:select, value:value, _token:_token, dependent:dependent},
              success:function(result)
              {
               $('#'+dependent).html(result);
              }

             })
            }
           });


           $('.dynamic2').change(function(){
            if($(this).val() != '')
            {
             var select = $(this).attr("id");
             var value = $(this).val();
             var dependent = $(this).data('dependent');
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('jasacontroller.fetch') }}",
              method:"POST",
              data:{select:select, value:value, _token:_token, dependent:dependent},
              success:function(result)
              {
               $('#'+dependent).html(result);
              }

             })
            }
           });



           $('#kategori').change(function(){
            $('#kategori2').val('');
            $('#kategori3').val('');


           });

           $('#kategori2').change(function(){
            $('#kategori3').val('');
           });
           

       
          $(".akupuntur :input").attr("disabled", true);
          $(".massage :input").attr("disabled", true);

           $(".salon :input").attr("disabled", true);
           $(".pangkasrambut :input").attr("disabled", true);
          $(".barbershop :input").attr("disabled", true);

          $(".rumah :input").attr("disabled", true);

          $(".kendaraan :input").attr("disabled", true);

          $(".elektronik :input").attr("disabled", true);

          $(".bersihrumah :input").attr("disabled", true);

          $(".cucikendaraan :input").attr("disabled", true);


          $(".tenagapendukung :input").attr("disabled", true);

          $(".kursus :input").attr("disabled", true);

          $(".hama :input").attr("disabled", true);

          $(".tourdalamnegeri :input").attr("disabled", true);

          $(".tourluarnegeri :input").attr("disabled", true);


    });


       

    </script>

    {{-- inputan untuk time --}}
    <script type="text/javascript" src="dist/bootstrap-clockpicker.js"></script> 
    <script type="text/javascript">
        var input = $('.input-waktu').clockpicker({
            placement: 'bottom',
            align : 'left',
            autoclose: true,
        });

      
        //upload produk

        $('.upload-wrap input[type=file]').change(function(){
          var id = $(this).attr("id");
          var newimage = new FileReader();
          newimage.readAsDataURL(this.files[0]);
          newimage.onload = function(e){
            $('.uploadpreview.' + id ).css('background-image', 'url(' + e.target.result + ')' );
          }
        });


        //countimer 

        function Timer(duration, display) 
        {
            var timer = duration, hours, minutes, seconds;
            setInterval(function () {
                hours = parseInt((timer /3600)%24, 10)
                minutes = parseInt((timer / 60)%60, 10)
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.text(hours +":"+minutes + ":" + seconds);

                --timer;
            }, 1000);
        }



        jQuery(function ($) 
        {
            var twentyFourHours = 24 * 60 * 60;
            var display = $('#remainingTime');
            Timer(twentyFourHours, display);
        });
       





        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        var cnt = 60;
        function counter(){
            if(getCookie("cnt") > 0){
          cnt = getCookie("cnt");
         }
         cnt -= 1;
         document.cookie = "cnt="+ cnt;
         jQuery("#counter").val(getCookie("cnt"));
         
         if(cnt>0){
          setTimeout(counter,1000);
         }

        }

        counter();

    </script>

</body>
</html>
