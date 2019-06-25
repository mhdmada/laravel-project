<template>

  <div class="card" style="">
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="/jasakebersihan" class="float-left text-white">Kebersihan</a>
                              <a data-toggle="collapse" href="#subkategorikebersihan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikebersihan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/dalamrumah" class="float-left">Dalam Rumah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#dalamrumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="dalamrumah" class="collapse">
                              <div class="card-header" v-for="dalamrumah in dalamrumahs">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="dalamrumah.kategori2" class="float-left">{{ dalamrumah.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/luarrumah" class="float-left">Luar Rumah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#luarrumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="luarrumah" class="collapse">
                              <div class="card-header" v-for="luarrumah in luarrumahs">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="luarrumah.kategori2" class="float-left">{{ luarrumah.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/cucikendaraan" class="float-left">Cuci Kendaraan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#cucikendaraan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="cucikendaraan" class="collapse">
                              <div class="card-header" v-for="cucikendaraan in cucikendaraans">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="cucikendaraan.kategori2" class="float-left">{{ cucikendaraan.kategori2 }}</a>
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

        'dalamrumahs',
        'luarrumahs',
        'cucikendaraans',


        ],


    }

</script>
