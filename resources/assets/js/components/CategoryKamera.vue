<template>

    <div class="card" style="">
              <div class="card-header text-white bg-primary" role="tab" id="headingOne">
                <div class="clearfix">
                    <h5 class="mb-0">
                      <a href="/kamera" class="float-left text-white">Kamera</a>
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
                            <a href="/kameradigital" class="float-left">Kamera Digital</a>
                          </h5>
                          <a data-toggle="collapse" href="#kameradigital" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="kameradigital" class="collapse">
                      <div class="card-header" v-for="kameradigital in kameradigitals">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="kameradigital.kategori2" class="float-left">{{ kameradigital.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/kameravideo" class="float-left">Kamera Video</a>
                          </h5>
                          <a data-toggle="collapse" href="#kameravideo" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="kameravideo" class="collapse">
                      <div class="card-header" v-for="kameravideo in kameravideos">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="kameravideo.kategori2" class="float-left">{{ kameravideo.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/kameraanalog" class="float-left">Kamera Analog</a>
                          </h5>
                          <a data-toggle="collapse" href="#kameraanalog" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="kameraanalog" class="collapse">
                      <div class="card-header" v-for="kameraanalog in kameraanalogs">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="kameraanalog.kategori2" class="float-left">{{ kameraanalog.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/lensaaksesoris" class="float-left">Lensa & Aksesoris</a>
                          </h5>
                          <a data-toggle="collapse" href="#lensa" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="lensa" class="collapse">
                      <div class="card-header" v-for="lensaaksesoris in lensaaksesoriss">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="lensaaksesoris.kategori2"  class="float-left">{{ lensaaksesoris.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/flashaksesoris" class="float-left">Flash & Aksesoris</a>
                          </h5>
                          <a data-toggle="collapse" href="#flash" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="flash" class="collapse">
                      <div class="card-header" v-for="flashaksesoris in flashaksesoriss">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="flashaksesoris.kategori2" class="float-left">{{ flashaksesoris.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/aksesoriskamera" class="float-left">Aksesoris Kamera</a>
                          </h5>
                          <a data-toggle="collapse" href="#aksesoriskamera" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="aksesoriskamera" class="collapse">
                      <div class="card-header" v-for="aksesoriskamera in aksesoriskameras">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="aksesoriskamera.kategori2" class="float-left">{{ aksesoriskamera.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/bateraichargergrip" class="float-left">Baterai,Charger & Grip</a>
                          </h5>
                          <a data-toggle="collapse" href="#bateraikamera" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="bateraikamera" class="collapse">
                      <div class="card-header" v-for="bateraikamera in bateraikameras">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="bateraikamera.kategori2" class="float-left">{{ bateraikamera.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>

                 <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/cleanertoolkit" class="float-left">Cleaner & Tool Kit</a>
                          </h5>
                          <a data-toggle="collapse" href="#cleaner" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="cleaner" class="collapse">
                      <div class="card-header" v-for="cleanerkamera in cleanerkameras">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="cleanerkamera.kategori2" class="float-left">{{ cleanerkamera.kategori2 }}</a>
                          </h5>
                        </div>
                      </div>
                  </div>
                </div>

                 <div class="card">
                  <div class="card-header">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a href="/framealbumrollfilm" class="float-left">Frame,Album & Roll Film</a>
                          </h5>
                          <a data-toggle="collapse" href="#album" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                            <i class="fa fa-chevron-down"></i>
                          </a>
                        </div>
                  </div>
                  <div id="album" class="collapse">
                      <div class="card-header" v-for="framekamera in framekameras">
                        <div class="clearfix">
                          <h5 class="mb-0">
                            <a v-bind:href="framekamera.kategori2" class="float-left">{{ framekamera.kategori2 }}</a>
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

        'kameradigitals',
        'kameravideos',
        'kameraanalogs',
        'lensaaksesoriss',
        'flashaksesoriss',
        'aksesoriskameras',
        'bateraikameras',
        'cleanerkameras',
        'framekameras',

        ],


    }

</script>
