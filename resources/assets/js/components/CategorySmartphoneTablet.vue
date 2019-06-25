<template>

    <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="/handphonetablet" class="float-left text-white">Handphone & Tablet</a>
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
                                    <a href="/Smartphone" class="float-left">Smartphone</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Powerbank" class="float-left">Powerbank</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Smartwatch" class="float-left">Smartwatch</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Tablet" class="float-left">Tablet</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/aksesorishandphone" class="float-left">Aksesoris Handphone</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesorishandphone" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesorishandphone" class="collapse">
                              <div class="card-header" v-for="aksesorishandphoneku in aksesorishandphone">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="aksesorishandphoneku.kategori2" class="float-left">{{ aksesorishandphoneku.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/aksesoristablet" class="float-left">Aksesoris Tablet</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#aksesoristablet" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="aksesoristablet" class="collapse">
                              <div class="card-header" v-for="aksesoristabletku in aksesoristablet">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="aksesoristabletku.kategori2" class="float-left">{{ aksesoristabletku.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/memorycard" class="float-left">Memory Card</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#memorycard" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="memorycard" class="collapse">
                              <div class="card-header" v-for="memorycardku in memorycard">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="memorycardku.kategori2" class="float-left">{{ memorycardku.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Kabel Data" class="float-left">Kabel Data</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Kabel & Konektor" class="float-left">Kabel & Konektor</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Headset Bluetooth" class="float-left">Headset Bluetooth</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Nomor Perdana & Voucher" class="float-left">Nomor Perdana & Voucher</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Stylus" class="float-left">Stylus</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Lensa Handphone" class="float-left">Lensa Handphone</a>
                                  </h5>
                                </div>
                          </div>
                        </div>


                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Tongsis" class="float-left">Tongsis</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Tomsis" class="float-left">Tomsis</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Pelindung Kabel" class="float-left">Pelindung Kabel</a>
                                  </h5>
                                </div>
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Virtual Reality Glasses" class="float-left">Virtual Reality Glasses</a>
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

        'aksesorishandphone',
        'aksesoristablet',
        'memorycard',

        ],


    }

</script>
