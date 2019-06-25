<template>

  <div class="card" style="">
    <div class="card-header text-white bg-success" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/kursus" class="float-left text-white">Kursus</a>
            <a data-toggle="collapse" href="#subkategorikursus" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategorikursus" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/menjahit" class="float-left">Menjahit</a>
                </h5>
                <a data-toggle="collapse" href="#menjahit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="menjahit" class="collapse">
            <div class="card-header" v-for="menjahit in menjahits">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="menjahit.kategori2" class="float-left">{{ menjahit.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/musik" class="float-left">Musik</a>
                </h5>
                <a data-toggle="collapse" href="#musik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="musik" class="collapse">
            <div class="card-header" v-for="musik in musiks">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="musik.kategori2" class="float-left">{{ musik.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/memasak" class="float-left">Memasak</a>
                </h5>
                <a data-toggle="collapse" href="#memasak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="memasak" class="collapse">
            <div class="card-header" v-for="memasak in memasaks">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="memasak.kategori2" class="float-left">{{ memasak.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/beladiri" class="float-left">Beladiri</a>
                </h5>
                <a data-toggle="collapse" href="#beladiri" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="beladiri" class="collapse">
            <div class="card-header" v-for="beladiri in beladiris">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="beladiri.kategori2" class="float-left">{{ beladiri.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/programkomputer" class="float-left">Program Komputer</a>
                </h5>
                <a data-toggle="collapse" href="#programkomputer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="programkomputer" class="collapse">
            <div class="card-header" v-for="programkomputer in programkomputers">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="programkomputer.kategori2" class="float-left">{{ programkomputer.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/menari" class="float-left">Menari</a>
                </h5>
                <a data-toggle="collapse" href="#menari" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="menari" class="collapse">
            <div class="card-header" v-for="menari in menaris">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="menari.kategori2" class="float-left">{{ menari.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/otomotif" class="float-left">Otomotif</a>
                </h5>
                <a data-toggle="collapse" href="#otomotif" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="otomotif" class="collapse">
            <div class="card-header" v-for="otomotif in otomotifs">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="otomotif.kategori2" class="float-left">{{ otomotif.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/bimbel" class="float-left">Bimbingan Belajar</a>
                </h5>
                <a data-toggle="collapse" href="#bimbel" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="bimbel" class="collapse">
            <div class="card-header" v-for="bimbinganbelajar in bimbinganbelajars">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="bimbinganbelajar.kategori2" class="float-left">{{ bimbinganbelajar.kategori2 }}</a>
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

        'menjahits',
        'musiks',
        'memasaks',
        'beladiris',
        'programkomputers',
        'menaris',
        'otomotifs',
        'bimbinganbelajars',


        ],


    }

</script>
