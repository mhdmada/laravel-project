<template>

   <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Gaming</a>
                              <a data-toggle="collapse" href="#subkategorigaming" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorigaming" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Game Console</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#gameconsole" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="gameconsole" class="collapse">
                              @foreach ($gameconsole as $inigameconsole)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inigameconsole->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">CD Game</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#cdgame" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="cdgame" class="collapse">
                              @foreach ($cdgame as $inigame)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inigame->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">PC Gaming</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pcgaming" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pcgaming" class="collapse">
                              @foreach ($pcgaming as $inigaming)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inigaming->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  


                    <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Busana Muslim</a>
                              <a data-toggle="collapse" href="#subkategorimuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorimuslim" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Atasan Muslim</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#atasanmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="atasanmuslim" class="collapse">
                              @foreach ($atasanmuslim as $iniatasanmuslim)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniatasanmuslim->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Bawahan Muslim</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bawahanmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bawahanmuslim" class="collapse">
                              @foreach ($bawahanmuslim as $inibawahanmuslim)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibawahanmuslim->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Dress Muslim</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#dressmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="dressmuslim" class="collapse">
                              @foreach ($dressmuslim as $inidressmuslim)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inidressmuslim->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Outwear Muslim</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#outwearmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="outwearmuslim" class="collapse">
                              @foreach ($outwearmuslim as $inioutwearmuslim)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inioutwearmuslim->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Scarf</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#scarfmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="scarfmuslim" class="collapse">
                              @foreach ($scarfmuslim as $iniscarfmuslim)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniscarfmuslim->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Aksesoris Jilbab</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorisjilbab" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorisjilbab" class="collapse">
                              @foreach ($aksesorisjilbab as $iniaksesorisjilbab)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaksesorisjilbab->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Perlengkapan Ibadah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perlengkapanibadah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perlengkapanibadah" class="collapse">
                              @foreach ($perlengkapanibadah as $iniperlengkapanibadah)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperlengkapanibadah->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Baju Muslim Anak</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Setelan Muslim</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                      </div>
                    </div>  


                    <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Busana Anak</a>
                              <a data-toggle="collapse" href="#subkategoribusanaanak" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoribusanaanak" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Aksesoris Rambut Anak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorisrambutanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorisrambutanak" class="collapse">
                              @foreach ($aksesorisrambutanak as $inirambutanak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inirambutanak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tas Anak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tasanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tasanak" class="collapse">
                              @foreach ($tasanak as $initasanak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initasanak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Perhiasan Anak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perhiasananak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perhiasananak" class="collapse">
                              @foreach ($perhiasananak as $iniperhiasananak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperhiasananak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Aksesoris Anak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorisanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorisanak" class="collapse">
                              @foreach ($aksesorisanak as $iniaksesorisanak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaksesorisanak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Sepatu Anak Laki-Laki</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#sepatuanaklaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="sepatuanaklaki" class="collapse">
                              @foreach ($sepatuanaklaki as $inisepatuanaklaki)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inisepatuanaklaki->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Sepatu Anak Perempuan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#sepatuanakperempuan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="sepatuanakperempuan" class="collapse">
                              @foreach ($sepatuanakperempuan as $inisepatuanakperempuan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inisepatuanakperempuan->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                          <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Pakaian Anak Laki-Laki</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pakaiananaklaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pakaiananaklaki" class="collapse">
                              @foreach ($pakaiananaklaki as $inipakaiananaklaki)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inipakaiananaklaki->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Pakaian Anak Perempuan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pakaiananakperempuan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pakaiananakperempuan" class="collapse">
                              @foreach ($pakaiananakperempuan as $inipakaiananakperempuan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inipakaiananakperempuan->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  






</template>

<script type="text/javascript">

    export default{

        props:[

        'aksesorislaptop',

        ],


    }

</script>
