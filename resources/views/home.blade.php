@extends('layouts.app')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
     {{--  <h1>FASHION</h1> --}}
      </br>
      </br>
    
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container-fluid">

      {{-- brand --}}

        <div class="row">

                @foreach ($supplier as $inisupplier)
                  <div class="col" style="padding-bottom: 75px;  margin-right: 5px;  " >
                        <div class="ukuran" onclick="location.href=' {{ url('supplier/' . $inisupplier->nama_supplier) }}';" style="cursor:pointer;"><img src="uploads/{{ $inisupplier->photo }}" alt="..." width="190px;"" class="rounded"></div>
                  </div> 
                @endforeach


                <div class="col" style="padding-bottom: 20px; margin-right: 15px; ">
                      <div class="ukuran"><img src="lv.png" alt="..." width="170px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 20px; margin-right: 10px; ">
                      <div class="ukuran"><img src="levis.png" alt="..." width="270px;"" class="rounded"></div>
                </div>
        </div>

         <div class="container-fluid" style="padding-left: 100px; padding-right: 100px; ">


         <div class="row">
                <div class="col" style="padding-bottom: 1px;  margin-right: 4px;  " >
                      <div class="ukuran"><img src="sumpreme.jpg" alt="..." width="200px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 1px; margin-right: 2px; ">
                      <div class="ukuran"><img src="Versace.jpg" alt="..." width="120px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 1px; margin-right: 2px; ">
                      <div class="ukuran"><img src="lacoste.jpg" alt="..." width="150px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 1px; margin-right: 2px; ">
                      <div class="ukuran"><img src="hugoboss.png" alt="..." width="150px;"" class="rounded"></div>
                </div>
                <div class="col" style="padding-bottom: 1px; margin-right: 2px; ">
                      <div class="ukuran"><img src="awear.png" alt="..." width="200px;"" class="rounded"></div>
                </div>        
        </div>
         <div class="row">
                <div class="col" style="padding-bottom: 13px;  margin-right: 4px;  " >
                      <div class="ukuran"><img src="Brooks.jpg" alt="..." width="200px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="feanear.jpg" alt="..." width="200px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="rolex.png" alt="..." width="200px;"" class="rounded"></div>
                </div> 
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="scottie.jpg" alt="..." width="200px;"" class="rounded"></div>
                </div>
                <div class="col" style="padding-bottom: 13px; margin-right: 2px; ">
                      <div class="ukuran"><img src="asics.png" alt="..." width="200px;"" class="rounded"></div>
                </div>        
        </div>


        

        <a class="btn btn-primary float-right"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Other
          </a> <br><br>

            <div class="collapse" id="collapseExample">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                   <ul>
                    <a class="" data-toggle="collapse" data-target="#muncul">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>A</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                    </a>

                      <div id="muncul" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="apc.png" width="50px"> A.P.C
                                </a>
                           </li>
                           <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" aria-selected="false">
                                  <img src="arrow.png" width="50px"> Arrow Clothing
                                </a>
                           </li>
                           <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" aria-selected="false">
                                  <img src="ankara.png" width="50px"> Ankara Clothing
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                  <ul>
                  <a class="" data-toggle="collapse" data-target="#b">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>B</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="b" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="bailley44.png" width="50px">  Bailley44
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                   <ul>
                  <a class="" data-toggle="collapse" data-target="#c">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>C</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="c" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="carven.png" width="50px"> Carven
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                  <ul>
                  <a class="" data-toggle="collapse" data-target="#d">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>D</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="d" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="dkny.png" width="50px"> DKNY
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                  <ul>
                  <a class="" data-toggle="collapse" data-target="#e">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>E</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="e" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="escada.png" width="50px"> ESCADA
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                   <ul>
                  <a class="" data-toggle="collapse" data-target="#f">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>F</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="f" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="fatface.png" width="50px"> FAT FACE
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                   <ul>
                  <a class="" data-toggle="collapse" data-target="#g">
                      <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>G</span>
                          <span data-feather="chevron-down"></span>
                      </h5>
                  </a>
                   <div id="g" class="collapse">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab"role="tab"  aria-selected="false">
                                  <img src="gola.png" width="50px"> Gola Classic
                                </a>
                           </li>
                        </ul>         
                      </div>
                  </ul>

                

                    </div>                      
                    </div>
               </div>
              </div>
            </div>
        

    @include('includes.footer')
    </div>

  
@endsection