        



        <div id="accordion" role="tablist">
                    <div class="card" style="">{{-- card busana --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Busana Pria</a>
                              <a data-toggle="collapse" href="#subkategoribusanapria" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoribusanapria" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="{!! url('/kategori-atasanpria'); !!}" class="float-left">Atasan Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#atasan-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="atasan-pria" class="collapse">
                              @foreach ($atasanpria as $atasan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $atasan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Sepatu Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#sepatu-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="sepatu-pria" class="collapse">
                              @foreach ($sepatupria as $sepatu)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $sepatu->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Celana Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#celana-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="celana-pria" class="collapse">
                              @foreach ($celanapria as $celana)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $celana->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Outwear Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#outwear-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="outwear-pria" class="collapse">
                              @foreach ($outwearpria as $outwear)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $outwear->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Jam Tangan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#jam-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="jam-pria" class="collapse">
                              @foreach ($jamtanganpria as $jamtangan)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $jamtangan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Tas Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tas-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tas-pria" class="collapse">
                              @foreach ($taspria as $tas)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $tas->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Batik Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#batik-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="batik-pria" class="collapse">
                              @foreach ($batikpria as $batik)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $batik->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoris-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoris-pria" class="collapse">
                              @foreach ($aksesorispria as $aksesoris)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $aksesoris->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Pakaian Dalam Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pakaiandalam-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pakaiandalam-pria" class="collapse">
                              @foreach ($pakaiandalampria as $pakaiandalam)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $pakaiandalam->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perhiasan Fashion</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perhiasanfashion-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perhiasanfashion-pria" class="collapse">
                              @foreach ($perhiasanpria as $perhiasan)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $perhiasan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Baju Tidur Pria</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bajutidur-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bajutidur-pria" class="collapse">
                              @foreach ($bajutidurpria as $bajutidur)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $bajutidur->kategori2 }}</a>
                                    </h5>
                                  </div>
                                </div>
                              @endforeach
                          </div>
                        </div>
                      </div>
                    </div>  {{-- card busana --}}


                     <div class="card" style="">{{-- card busana wanita --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a  href="{!! url('/kategori-pakaianwanita'); !!}" class="float-left text-white">Busana Wanita</a>
                              <a data-toggle="collapse" href="#subkategoribusanawanita" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoribusanawanita" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Atasan Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#atasan-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="atasan-wanita" class="collapse">
                              @foreach ($atasanwanita as $atasan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $atasan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Sepatu Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#sepatu-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="sepatu-wanita" class="collapse">
                              @foreach ($sepatuwanita as $sepatu)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $sepatu->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Celana Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#celana-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="celana-wanita" class="collapse">
                              @foreach ($celanawanita as $celana)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $celana->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Tas Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tas-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tas-wanita" class="collapse">
                              @foreach ($taswanita as $tas)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $tas->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Batik Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#batik-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="batik-wanita" class="collapse">
                              @foreach ($batikwanita as $batik)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $batik->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoris-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoris-wanita" class="collapse">
                              @foreach ($aksesoriswanita as $aksesoris)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $aksesoris->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Pakaian Dalam Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pakaiandalam-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pakaiandalam-wanita" class="collapse">
                              @foreach ($pakaiandalamwanita as $pakaiandalam)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $pakaiandalam->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perhiasan Fashion</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perhiasanfashion-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perhiasanfashion-wanita" class="collapse">
                              @foreach ($perhiasanwanita as $perhiasan)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $perhiasan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Baju Tidur Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bajutidur-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bajutidur-wanita" class="collapse">
                              @foreach ($bajutidurwanita as $bajutidur)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $bajutidur->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Rok</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#rok-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="rok-wanita" class="collapse">
                              @foreach ($rok as $rokwanita)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $rokwanita->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Dress</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#dress-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="dress-wanita" class="collapse">
                              @foreach ($dress as $dresswanita)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $dresswanita->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Rambut</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoris-rambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoris-rambut" class="collapse">
                              @foreach ($aksesorisrambut as $aksesorisrambutwanita)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $aksesorisrambutwanita->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perlengkapan Couple </a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perlengkapan-couple" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perlengkapan-couple" class="collapse">
                              @foreach ($perlengkapancouple as $perlengkapancouple)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $perlengkapancouple->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perlengkapan Jahit </a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perlengkapan-jahit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perlengkapan-jahit" class="collapse">
                              @foreach ($perlengkapanjahit as $perlengkapanjahit)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $perlengkapanjahit->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Outwear Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#outwear" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="outwear" class="collapse">
                              @foreach ($outwearwanita as $outwear)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $outwear->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Jam Tangan Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#jamtangan-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="jamtangan-wanita" class="collapse">
                            {{--   @foreach ($jamtanganwanita as $jamtangan)
                                <div class="card-header">
                                  <div class="clearfix">
                                    <h5 class="mb-0">
                                      <a href="#" class="float-left">{{ $jamtangan->kategori2 }}</a>
                                    </h5>
                                  </div>
                                </div>
                              @endforeach --}}
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Setelan</a>
                                  </h5>
                                </div>
                          </div>
                        </div>


                      </div>
                    </div>  {{-- card busana wanita --}}



                    <div class="card" style="">{{-- card handphone & tablet --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-handphone'); !!}" class="float-left text-white">Handphone & Tablet</a>
                              <a data-toggle="collapse" href="#subkategorihandphone" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorihandphone" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Smartphone</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Powerbank</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Smartwatch</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tablet</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Aksesoris Handphone</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorishandphone" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorishandphone" class="collapse">
                              @foreach ($aksesorishandphone as $aksesoris)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $aksesoris->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Tablet</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoristablet" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoristablet" class="collapse">
                              @foreach ($aksesoristablet as $aksesoris)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $aksesoris->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Memory Card</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#memorycard" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="memorycard" class="collapse">
                              @foreach ($memorycard as $memory)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $memory->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kabel Data</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Kabel & Konektor</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Headset Bluetooth</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Nomor Perdana & Voucher</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Stylus</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Lensa Handphone</a>
                                  </h5>
                                </div>
                          </div>
                        </div>


                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tongsis</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tomsis</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Pelindung Kabel</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Virtual Reality Glasses</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card handphone & tablet --}}



                    <div class="card" style="">{{-- card laptop & Aksesoris --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Laptop & Aksesoris</a>
                              <a data-toggle="collapse" href="#subkategorilaptop" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorilaptop" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Laptop</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Aksesoris Laptop</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorislaptop" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorislaptop" class="collapse">
                              @foreach ($aksesorislaptop as $aksesoris)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $aksesoris->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>              

                      </div>
                    </div>  {{-- card laptop & Aksesoris --}}


                     <div class="card" style="">{{-- card komputer & aksesoris--}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Komputer & Aksesoris</a>
                              <a data-toggle="collapse" href="#subkategorikomputer" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikomputer" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Desktop & Mini PC</a>
                                  </h5>
                                </div>
                          </div>
                        </div>
                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Harddisk & Flashdisk</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#harddisk" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="harddisk" class="collapse">
                              @foreach ($harddisk as $iniharddisk)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniharddisk->kategori2 }}</a>
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
                                    <a href="#" class="float-left">VGA Card</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#vgacard" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="vgacard" class="collapse">
                              @foreach ($vgacard as $vga)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $vga->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Printer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#printer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="printer" class="collapse">
                              @foreach ($printer as $iniprinter)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniprinter->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Peripheral & Aksesoris</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#peripheral" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="peripheral" class="collapse">
                              @foreach ($peripheral as $iniperipheral)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperipheral->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Networking</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#networking" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="networking" class="collapse">
                              @foreach ($networking as $ininetworking)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $ininetworking->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Komponen Komputer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#komponenkomputer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="komponenkomputer" class="collapse">
                              @foreach ($komponencomputer as $inikomponen)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikomponen->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Optical Drive</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#fuck" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="fuck" class="collapse">
                              @foreach ($optical as $inioptical)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inioptical->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card komputer & aksesoris--}}

                    <div class="card" style="">{{-- card elektronik--}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Elektronik</a>
                              <a data-toggle="collapse" href="#subkategorielektronik" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorielektronik" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Vaporizer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#vaporizer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="vaporizer" class="collapse">
                              @foreach ($vaporizer as $inivaporizer)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inivaporizer->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Audio</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#audio" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="audio" class="collapse">
                              @foreach ($audio as $iniaudio)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaudio->kategori2 }}</a>
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
                                    <a href="#" class="float-left">TV</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tv" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tv" class="collapse">
                              @foreach ($tv as $initv)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initv->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kamera Pengintai</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kamerapengintai" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kamerapengintai" class="collapse">
                              @foreach ($kamerapengintai as $inikamerapengintai)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikamerapengintai->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Media Player</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#mediaplayer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="mediaplayer" class="collapse">
                              @foreach ($mediaplayer as $inimediaplayer)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimediaplayer->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Telepon</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#telepon" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="telepon" class="collapse">
                              @foreach ($telepon as $initelepon)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initelepon->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Tool & Kit</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Pencahayaan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pencahayaan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pencahayaan" class="collapse">
                              @foreach ($pencahayaan as $inipencahayaan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inipencahayaan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Peralatan Listrik</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#peralatanlistrik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="peralatanlistrik" class="collapse">
                              @foreach ($peralatanlistrik as $iniperalatanlistrik)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperalatanlistrik->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Peralatan Elektronik Lainnya</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#peralatanelektroniklainnya" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="peralatanelektroniklainnya" class="collapse">
                              @foreach ($peralatanelektroniklainnya as $iniperalatan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperalatan->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card elektronik--}}


                    <div class="card" style="">{{-- card kamera--}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Kamera</a>
                              <a data-toggle="collapse" href="#subkategorikamera" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikamera" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Kamera Digital</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kameradigital" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kameradigital" class="collapse">
                              @foreach ($kameradigital as $inikameradigital)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikameradigital->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kamera Video</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kameravideo" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kameravideo" class="collapse">
                              @foreach ($kameravideo as $inikameravideo)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikameravideo->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kamera Analog</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kameraanalog" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kameraanalog" class="collapse">
                              @foreach ($kameraanalog as $inianalog)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inianalog->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Lensa & Aksesoris</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#lensa" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="lensa" class="collapse">
                              @foreach ($lensa as $inilensa)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inilensa->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Flash & Aksesoris</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#flash" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="flash" class="collapse">
                              @foreach ($flash as $iniflash)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniflash->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Kamera</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoriskamera" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoriskamera" class="collapse">
                              @foreach ($aksesoriskamera as $iniaksesoriskamera)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaksesoriskamera->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Baterai,Charger & Grip</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bateraikamera" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bateraikamera" class="collapse">
                              @foreach ($bateraikamera as $inibaterai)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibaterai->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Cleaner & Tool Kit</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#cleaner" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="cleaner" class="collapse">
                              @foreach ($cleanerkamera as $inicleaner)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inicleaner->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Frame,Album & Roll Film</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#album" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="album" class="collapse">
                              @foreach ($album as $inialbum)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inialbum->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card kamera--}}


                    <div class="card" style="">{{-- card  gaming --}}
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
                    </div>  {{-- card gaming --}}


                    <div class="card" style="">{{-- card  busana muslim --}}
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
                    </div>  {{-- card busana muslim --}}

                    <div class="card" style="">{{-- card  busana anak --}}
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
                    </div>  {{-- card busana anak --}}


                    <div class="card" style="">{{-- card  kecantikan --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Kecantikan</a>
                              <a data-toggle="collapse" href="#subkategorikecantikan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikecantikan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Styling Rambut Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#stylingrambutwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="stylingrambutwanita" class="collapse">
                              @foreach ($stylingrambutwanita as $inistylingrambutwanita)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inistylingrambutwanita->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Make up Mata</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#makeupmata" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="makeupmata" class="collapse">
                              @foreach ($makeupmata as $inimakeupmata)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimakeupmata->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Make Up Wajah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#makeupwajah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="makeupwajah" class="collapse">
                              @foreach ($makeupwajah as $inimakeupwajah)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimakeupwajah->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Hand & Nail Art</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#handnailart" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="handnailart" class="collapse">
                              @foreach ($handnailart as $inihandnailart)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inihandnailart->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Set & Palette Makeup</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Eyebrow Kit</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#eyebrowkit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="eyebrowkit" class="collapse">
                              @foreach ($eyebrowkit as $inieyebrowkit)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inieyebrowkit->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris & Alat Make Up</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorismakeup" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorismakeup" class="collapse">
                              @foreach ($aksesorisalatmakeup  as $iniaksesorisalatmakeup)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaksesorisalatmakeup->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Kulit</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatankulit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatankulit" class="collapse">
                              @foreach ($perawatankulit as $iniperawatankulit)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatankulit->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Lip Color & Lip Care</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#lipcolor" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="lipcolor" class="collapse">
                              @foreach ($lipcolor as $inilipcolor)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inilipcolor->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Wajah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatanwajah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatanwajah" class="collapse">
                              @foreach ($perawatanwajah as $iniperawatanwajah)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatanwajah->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card kecantikan --}}


                     <div class="card" style="">{{-- card  kesehatan --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-kesehatan'); !!}" class="float-left text-white">Kesehatan</a>
                              <a data-toggle="collapse" href="#subkategorikesehatan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikesehatan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Obat-Obatan </a>
                                  </h5>
                                  <a data-toggle="collapse" href="#obat" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="obat" class="collapse">
                              @foreach ($obat as $iniobat)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniobat->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Maternity</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#maternity" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="maternity" class="collapse">
                              @foreach ($maternity as $inimaternity)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimaternity->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Alat Bantu Kesehatan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#alatbantukesehatan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="alatbantukesehatan" class="collapse">
                              @foreach ($alatbantukesehatan as $inialatbantu)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inialatbantu->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Essential Oil</a>
                                  </h5>
                                </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Kesehatan Wanita</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kesehatanwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kesehatanwanita" class="collapse">
                              @foreach ($kesehatanwanita as $inikesehatanwanita)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikesehatanwanita->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Diet & Vitamin</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#diet" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="diet" class="collapse">
                              @foreach ($diet  as $inidiet)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inidiet->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perlengkapan Medis</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perlengkapanmedis" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perlengkapanmedis" class="collapse">
                              @foreach ($perlengkapanmedis as $iniperlengkapanmedis)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperlengkapanmedis->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kesehatan Lainnya</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card kesehatan --}}



                     <div class="card" style="">{{-- card  perawatan tubuh --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Perawatan Tubuh</a>
                              <a data-toggle="collapse" href="#subkategoriperawatantubuh" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoriperawatantubuh" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Grooming</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#groom" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="groom" class="collapse">
                              @foreach ($grooming as $inigrooming)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inigrooming->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Parfum,Cologne, & Fragrance</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#parfum" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="parfum" class="collapse">
                              @foreach ($parfum as $iniparfum)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniparfum->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Telinga</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#telinga" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="telinga" class="collapse">
                              @foreach ($telinga as $initelinga)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initelinga->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Produk Kewanitaan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#produkwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="produkwanita" class="collapse">
                              @foreach ($produkkewanitaan as $iniprodukkewanitaan)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniprodukkewanitaan->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Rambut</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatanrambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatanrambut" class="collapse">
                              @foreach ($perawatanrambut  as $iniperawatanrambut)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatanrambut->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Mata</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatanmata" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatanmata" class="collapse">
                              @foreach ($perawatanmata as $iniperawatanmata)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatanmata->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Mandi & Perawatan Tubuh</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#mandi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="mandi" class="collapse">
                              @foreach ($mandi as $inimandi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimandi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Kaki</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatankaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatankaki" class="collapse">
                              @foreach ($perawatankaki as $iniperawatankaki)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatankaki->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Kesehatan Gigi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#kesehatangigi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="kesehatangigi" class="collapse">
                              @foreach ($kesehatangigi as $inikesehatangigi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inikesehatangigi->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card perawatan tubuh --}}




                     <div class="card" style="">{{-- card  perlengkapan ibu dan bayi --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Perlengkapan Ibu & Bayi</a>
                              <a data-toggle="collapse" href="#subkategoriperlengkapanibu" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoriperlengkapanibu" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Popok dan Diaper</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#popok" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="popok" class="collapse">
                              @foreach ($popok as $inipopok)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inipopok->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Makanan & Susu Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#makananbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="makananbayi" class="collapse">
                              @foreach ($makananbayi as $inimakananbayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimakananbayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Baju Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bajubayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bajubayi" class="collapse">
                              @foreach ($bajubayi as $inibajubayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibajubayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perawatan Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perawatanbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perawatanbayi" class="collapse">
                              @foreach ($perawatanbayi as $iniperawatanbayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniperawatanbayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perlengkapan Makan Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#perlengkapanmakananbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="perlengkapanmakananbayi" class="collapse">
                              @foreach ($perlengkapanmakananbayi  as $inimakananbayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimakananbayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Perlengkapan Mandi Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#mandibayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="mandibayi" class="collapse">
                              @foreach ($mandibayi as $inimandibayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimandibayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Stroller dan Alat Bantu Bawa Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#stroller" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="stroller" class="collapse">
                              @foreach ($stroller as $inistroller)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inistroller->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Tas Perlengkapan Bayi</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Perlengkapan Tidur Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tidurbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tidurbayi" class="collapse">
                              @foreach ($tidurbayi as $initidurbayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initidurbayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Aksesoris Bayi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorisbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorisbayi" class="collapse">
                              @foreach ($aksesorisbayi as $iniaksesorisbayi)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniaksesorisbayi->kategori2 }}</a>
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
                                    <a href="#" class="float-left">Baju Hamil</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bajuhamil" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bajuhamil" class="collapse">
                              @foreach ($bajuhamil as $inibajuhamil)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibajuhamil->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card perlengkapan ibu dan bayi --}}



                     <div class="card" style="">{{-- card  serba serbi --}}
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="#" class="float-left text-white">Serba-Serbi</a>
                            </h5>
                        </div>
                      </div>
                    </div>  {{-- card serba serbi --}}



              </div> {{--  div id accordion --}}
