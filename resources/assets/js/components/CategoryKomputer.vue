<template>

    <div class="card" style="">
                      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="/KomputerDanAksesoris" class="float-left text-white">Komputer & Aksesoris</a>
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
                                    <a href="/Desktop" class="float-left">Desktop & Mini PC</a>
                                  </h5>
                                </div>
                          </div>
                        </div>
                        
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/HarddiskDanFlashdisk" class="float-left">Harddisk & Flashdisk</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#harddisk" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="harddisk" class="collapse">
                              <div class="card-header" v-for="harddisk in harddisks">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="harddisk.kategori2" class="float-left">{{ harddisk.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/VgaCard" class="float-left">VGA Card</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#vgacard" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="vgacard" class="collapse">
                              <div class="card-header" v-for="vgacard in vgacards">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="vgacard.kategori2" class="float-left">{{ vgacard.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Printer" class="float-left">Printer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#printer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="printer" class="collapse">
                              <div class="card-header" v-for="printer in printers">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="printer.kategori2" class="float-left">{{ printer.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/PeripheralDanAksesoris" class="float-left">Peripheral & Aksesoris</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#peripheral" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="peripheral" class="collapse">
                              <div class="card-header" v-for="peripheral in peripherals">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="peripheral.kategori2" class="float-left">{{ peripheral.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/Networking" class="float-left">Networking</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#networking" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="networking" class="collapse">
                              <div class="card-header" v-for="networking in networkings">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="networking.kategori2" class="float-left">{{ networking.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/KomponenKomputer" class="float-left">Komponen Komputer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#komponenkomputer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="komponenkomputer" class="collapse">
                              <div class="card-header" v-for="komponenkomputer in komponenkomputers">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="komponenkomputer.kategori2" class="float-left">{{ komponenkomputer.kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="/OpticalDrive" class="float-left">Optical Drive</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#fuck" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="fuck" class="collapse">
                              <div class="card-header" v-for="opticaldrive in opticaldrives">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a v-bind:href="opticaldrive.kategori2" class="float-left">{{ opticaldrive.kategori2 }}</a>
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

         'harddisks',
         'vgacards',
         'printers',
         'peripherals',
         'networkings',
         'komponenkomputers',
         'opticaldrives',

        ],


    }

</script>
