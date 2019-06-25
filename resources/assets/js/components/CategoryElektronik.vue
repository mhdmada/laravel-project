<template>

    <div class="card" style="">
                          <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                            <div class="clearfix">
                                <h5 class="mb-0">
                                  <a href="/kategorielektronik" class="float-left text-white">Elektronik</a>
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
                                        <a href="/vaporizer" class="float-left">Vaporizer</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#vaporizer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="vaporizer" class="collapse">
                                  <div class="card-header" v-for="vaporizer in vaporizers">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="vaporizer.kategori2" class="float-left">{{ vaporizer.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/audio" class="float-left">Audio</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#audio" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="audio" class="collapse">
                                  <div class="card-header" v-for="audio in audios">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="audio.kategori2" class="float-left">{{ audio.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/tv" class="float-left">TV</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#tv" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="tv" class="collapse">
                                  <div class="card-header" v-for="tv in tvs">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="tv.kategori2" class="float-left">{{ tv.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/kamerapengintai" class="float-left">Kamera Pengintai</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#kamerapengintai" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="kamerapengintai" class="collapse">
                                  <div class="card-header" v-for="kamerapengintai in kamerapengintais">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="kamerapengintai.kategori2" class="float-left">{{ kamerapengintai.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/mediaplayer" class="float-left">Media Player</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#mediaplayer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="mediaplayer" class="collapse">
                                  <div class="card-header" v-for="mediaplayer in mediaplayers">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="mediaplayer.kategori2"  class="float-left">{{ mediaplayer.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/telepon" class="float-left">Telepon</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#telepon" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="telepon" class="collapse">
                                  <div class="card-header" v-for="telepon in telepons">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="telepon.kategori2"  class="float-left">{{ telepon.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/toolkit" class="float-left">Tool & Kit</a>
                                      </h5>
                                    </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/pencahayaan" class="float-left">Pencahayaan</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#pencahayaan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="pencahayaan" class="collapse">
                                  <div class="card-header" v-for="pencahayaan in pencahayaans">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="pencahayaan.kategori2" class="float-left">{{ pencahayaan.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/peralatanlistrik" class="float-left">Peralatan Listrik</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#peralatanlistrik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="peralatanlistrik" class="collapse">
                                  <div class="card-header" v-for="peralatanlistrik in peralatanlistriks">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="peralatanlistrik.kategori2" class="float-left">{{ peralatanlistrik.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                             <div class="card">
                              <div class="card-header">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a href="/peralatanelektroniklainnya" class="float-left">Peralatan Elektronik Lainnya</a>
                                      </h5>
                                      <a data-toggle="collapse" href="#peralatanelektroniklainnya" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                        <i class="fa fa-chevron-down"></i>
                                      </a>
                                    </div>
                              </div>
                              <div id="peralatanelektroniklainnya" class="collapse">
                                  <div class="card-header" v-for="perangkatelektroniklainnya in perangkatelektroniklainnyas">
                                    <div class="clearfix">
                                      <h5 class="mb-0">
                                        <a v-bind:href="perangkatelektroniklainnya.kategori2" class="float-left">{{ perangkatelektroniklainnya.kategori2 }}</a>
                                      </h5>
                                    </div>
                                  </div>
                              </div>
                            </div>

                          </div>
                        </div> 



</template>

<script type="text/javascript">

    export default{

        props:[

        'vaporizers',
        'audios',
        'tvs',
        'kamerapengintais',
        'mediaplayers',
        'telepons',
        'pencahayaans',
        'peralatanlistriks',
        'perangkatelektroniklainnyas',

        ],


    }

</script>
