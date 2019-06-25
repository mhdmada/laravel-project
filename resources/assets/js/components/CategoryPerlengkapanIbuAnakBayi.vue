<template>


   <div class="card" style="">
    <div class="card-header text-white bg-primary" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/kategoriperlengkapanibubayi" class="float-left text-white">Perlengkapan Ibu & Bayi</a>
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
                  <a href="/popokdiaper" class="float-left">Popok dan Diaper</a>
                </h5>
                <a data-toggle="collapse" href="#popok" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="popok" class="collapse">
            <div class="card-header" v-for="popokdiaper in popokdiapers" >
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="popokdiaper.kategori2" class="float-left">{{ popokdiaper.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/makanansusubayi" class="float-left">Makanan & Susu Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#makananbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="makananbayi" class="collapse">
            <div class="card-header" v-for="makanansusubayi in makanansusubayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="makanansusubayi.kategori2" class="float-left">{{ makanansusubayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/makanansusuibu" class="float-left">Makanan & Susu Ibu</a>
                </h5>
                <a data-toggle="collapse" href="#makananibu" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="makananibu" class="collapse">
            <div class="card-header" v-for="makanansusuibu in makanansusuibus">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="makanansusuibu.kategori2" class="float-left">{{ makanansusuibu.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>



      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/bajubayi" class="float-left">Baju Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#bajubayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="bajubayi" class="collapse">
            <div class="card-header" v-for="bajusepatubayi in bajusepatubayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="bajusepatubayi.kategori2" class="float-left">{{ bajusepatubayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/perawatanbayi" class="float-left">Perawatan Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#perawatanbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="perawatanbayi" class="collapse">
            <div class="card-header" v-for="perawatanbayi in perawatanbayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="perawatanbayi.kategori2" class="float-left">{{ perawatanbayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/perlengkapanmakanbayi" class="float-left">Perlengkapan Makan Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#perlengkapanmakananbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="perlengkapanmakananbayi" class="collapse">
            <div class="card-header" v-for="perlengkapanmakanbayi in perlengkapanmakanbayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="perlengkapanmakanbayi.kategori2" class="float-left">{{ perlengkapanmakanbayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/perlengkapanmandibayi" class="float-left">Perlengkapan Mandi Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#mandibayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="mandibayi" class="collapse">
            <div class="card-header" v-for="perlengkapanmandibayi in perlengkapanmandibayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="perlengkapanmandibayi.kategori2" class="float-left">{{ perlengkapanmandibayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/strollerbayi" class="float-left">Stroller dan Alat Bantu Bawa Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#stroller" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="stroller" class="collapse">
            <div class="card-header" v-for="strollerbayi in strollerbayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="strollerbayi.kategori2" class="float-left">{{ strollerbayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/tasperlengkapanbayi" class="float-left">Tas Perlengkapan Bayi</a>
                </h5>
              </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/perlengkapantidurbayi" class="float-left">Perlengkapan Tidur Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#tidurbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="tidurbayi" class="collapse">
            <div class="card-header" v-for="perlengkapantidurbayi in perlengkapantidurbayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="perlengkapantidurbayi.kategori2" class="float-left">{{ perlengkapantidurbayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/aksesorisbayi" class="float-left">Aksesoris Bayi</a>
                </h5>
                <a data-toggle="collapse" href="#aksesorisbayi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="aksesorisbayi" class="collapse">
            <div class="card-header" v-for="aksesorisbayi in aksesorisbayis">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="aksesorisbayi.kategori2" class="float-left">{{ aksesorisbayi.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/bajuhamil" class="float-left">Baju Hamil</a>
                </h5>
                <a data-toggle="collapse" href="#bajuhamil" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="bajuhamil" class="collapse">
            <div class="card-header" v-for="bajuhamil in bajuhamils">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="bajuhamil.kategori2" class="float-left">{{ bajuhamil.kategori2 }}</a>
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

        'popokdiapers',
        'makanansusubayis',
        'makanansusuibus',
        'bajusepatubayis',
        'perawatanbayis',
        'perlengkapanmakanbayis',
        'perlengkapanmandibayis',
        'strollerbayis',
        'perlengkapantidurbayis',
        'aksesorisbayis',
        'bajuhamils',

        ],


    }

</script>
