<template>

                        <div class="card" style="">
                          <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                            <div class="clearfix">
                                <h5 class="mb-0">
                                  <a  href="/kategori-pakaianwanita" class="float-left text-white">Busana Wanita</a>
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
                                        <a href="/kategori-atasanwanita" class="float-left">Atasan Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#atasan-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="atasan-wanita" class="collapse">
                                  <div class="card-header" v-for="atasanwanita in atasanwanitas">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="atasanwanita.kategori2" class="float-left">{{ atasanwanita.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-sepatuwanita" class="float-left">Sepatu Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#sepatu-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="sepatu-wanita" class="collapse">
                                    <div class="card-header" v-for="sepatuwanita in sepatuwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="sepatuwanita.kategori2" class="float-left">{{ sepatuwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-celanawanita" class="float-left">Celana Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#celana-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="celana-wanita" class="collapse">
                                    <div class="card-header" v-for="sepatuwanita in sepatuwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="sepatuwanita.kategori2" class="float-left">{{ sepatuwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>


                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-taswanita" class="float-left">Tas Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#tas-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="tas-wanita" class="collapse">
                                    <div class="card-header" v-for="taswanita in taswanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="taswanita.kategori2" class="float-left">{{ taswanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-batikwanita" class="float-left">Batik Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#batik-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="batik-wanita" class="collapse">
                                    <div class="card-header" v-for="batikwanita in batikwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="batikwanita.kategori2" class="float-left">{{ batikwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-aksesoriswanita" class="float-left">Aksesoris Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#aksesoris-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="aksesoris-wanita" class="collapse">
                                    <div class="card-header" v-for="aksesoriswanita in aksesoriswanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="aksesoriswanita.kategori2" class="float-left">{{ aksesoriswanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-pakaiandalamwanita" class="float-left">Pakaian Dalam Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#pakaiandalam-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="pakaiandalam-wanita" class="collapse">
                                    <div class="card-header" v-for="pakaiandalamwanita in pakaiandalamwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="pakaiandalamwanita.kategori2" class="float-left">{{ pakaiandalamwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-perhiasanfashion" class="float-left">Perhiasan Fashion</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#perhiasanfashion-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="perhiasanfashion-wanita" class="collapse">
                                    <div class="card-header" v-for="perhiasanwanita in perhiasanwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="perhiasanwanita.kategori2"  class="float-left">{{ perhiasanwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-bajutidurwanita" class="float-left">Baju Tidur Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#bajutidur-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="bajutidur-wanita" class="collapse">
                                    <div class="card-header" v-for="bajutidurwanita in bajutidurwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="bajutidurwanita.kategori2" class="float-left">{{ bajutidurwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-rokwanita" class="float-left">Rok</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#rok-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="rok-wanita" class="collapse">
                                    <div class="card-header" v-for="rokwanita in rokwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="rokwanita.kategori2" class="float-left">{{ rokwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-dress" class="float-left">Dress</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#dress-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="dress-wanita" class="collapse">
                                    <div class="card-header" v-for="dresswanita in dresswanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="dresswanita.kategori2" class="float-left">{{ dresswanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-aksesorisrambut" class="float-left">Aksesoris Rambut</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#aksesoris-rambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="aksesoris-rambut" class="collapse">
                                    <div class="card-header" v-for="aksesorisrambutwanita in aksesorisrambutwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="aksesorisrambutwanita.kategori2" class="float-left">{{ aksesorisrambutwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-perlengkapancouple" class="float-left">Perlengkapan Couple </a>
                                      </h5>
                                      <a data-toggle="collapse" href="#perlengkapan-couple" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="perlengkapan-couple" class="collapse">
                                    <div class="card-header" v-for="couplewanita in couplewanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="couplewanita.kategori2" class="float-left">{{ couplewanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>

                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-perlengkapanjahit" class="float-left">Perlengkapan Jahit </a>
                                      </h5>
                                      <a data-toggle="collapse" href="#perlengkapan-jahit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="perlengkapan-jahit" class="collapse">
                                    <div class="card-header" v-for="perlengkapanjahitku in perlengkapanjahit">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="perlengkapanjahitku.kategori2" class="float-left">{{ perlengkapanjahitku.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-outwearwanita" class="float-left">Outwear Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#outwear" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="outwear" class="collapse">
                                    <div class="card-header" v-for="outwearwanita in outwearwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="outwearwanita.kategori2" class="float-left">{{ outwearwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>


                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-jamtanganwanita" class="float-left">Jam Tangan Wanita</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#jamtangan-wanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="jamtangan-wanita" class="collapse">
                                    <div class="card-header" v-for="jamtanganwanita in jamtanganwanitas">
                                      <div class="clearfix">
                                        <h5 class="mb-0">
                                          <a v-bind:href="jamtanganwanita.kategori2"  class="float-left">{{ jamtanganwanita.kategori2 }}</a>
                                        </h5>
                                      </div>
                                    </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kategori-setelan" class="float-left">Setelan</a>
                                      </h5>
                                    </div>
                              </div>
                            </div>


                          </div>
                        </div> 



</template>

<script type="text/javascript">

    export default{

        props:[

         'atasanwanitas',
         'celanawanitas',
         'rokwanitas',
         'dresswanitas',
         'outwearwanitas',
         'batikwanitas',
         'pakaiandalamwanitas',
         'taswanitas',
         'sepatuwanitas',
         'jamtanganwanitas',
         'perhiasanwanitas',
         'aksesoriswanitas',
         'aksesorisrambutwanitas',
         'couplewanitas',
         'bajutidurwanitas',
         'perlengkapanjahit',

        ],


    }

</script>
