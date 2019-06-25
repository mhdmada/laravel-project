<template>

    <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="/hewan" class="float-left text-white">Hewan</a>
                              <a data-toggle="collapse" href="#hewan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="hewan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/hewankomsumsi" class="float-left">Hewan Komsumsi</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#hewankomsumsi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="hewankomsumsi" class="collapse">
                              <div class="card-header" v-for="hewankomsumsi in hewankomsumsis">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="hewankomsumsi.kategori2" class="float-left">{{ hewankomsumsi.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/hewanpeliharaan" class="float-left">Hewan Peliharaan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#hewanpeliharaan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="hewanpeliharaan" class="collapse">
                              <div class="card-header" v-for="hewanpeliharaan in hewanpeliharaans">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="hewanpeliharaan.kategori2" class="float-left">{{ hewanpeliharaan.kategori2 }}</a>
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

        'hewanpeliharaans',
        'hewankomsumsis',

        ],


    }

</script>
