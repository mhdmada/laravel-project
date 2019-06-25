<template>

     <div class="card" style="">
      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
        <div class="clearfix">
            <h5 class="mb-0">
              <a href="/kategorikesehatan" class="float-left text-white">Kesehatan</a>
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
                    <a href="/obatobatan" class="float-left">Obat-Obatan </a>
                  </h5>
                  <a data-toggle="collapse" href="#obat" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="obat" class="collapse">
              <div class="card-header" v-for="obatobatan in obatobatans">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="obatobatan.kategori2" class="float-left">{{ obatobatan.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/maternity" class="float-left">Maternity</a>
                  </h5>
                  <a data-toggle="collapse" href="#maternity" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="maternity" class="collapse">
              <div class="card-header" v-for="maternity in maternitys">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="maternity.kategori2" class="float-left">{{ maternity.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/alatbantukesehatan" class="float-left">Alat Bantu Kesehatan</a>
                  </h5>
                  <a data-toggle="collapse" href="#alatbantukesehatan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="alatbantukesehatan" class="collapse">
              <div class="card-header" v-for="alatbantukesehatan in alatbantukesehatans">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="alatbantukesehatan.kategori2" class="float-left">{{ alatbantukesehatan.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/essentialoil" class="float-left">Essential Oil</a>
                  </h5>
                </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kesehatanwanita" class="float-left">Kesehatan Wanita</a>
                  </h5>
                  <a data-toggle="collapse" href="#kesehatanwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="kesehatanwanita" class="collapse">
              <div class="card-header" v-for="kesehatanwanita in kesehatanwanitas">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="kesehatanwanita.kategori2" class="float-left">{{ kesehatanwanita.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/dietvitamin" class="float-left">Diet & Vitamin</a>
                  </h5>
                  <a data-toggle="collapse" href="#diet" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="diet" class="collapse">
              <div class="card-header" v-for="dietvitamin in dietvitamins">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="dietvitamin.kategori2" class="float-left">{{ dietvitamin.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/perlengkapanmedis" class="float-left">Perlengkapan Medis</a>
                  </h5>
                  <a data-toggle="collapse" href="#perlengkapanmedis" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="perlengkapanmedis" class="collapse">
              <div class="card-header" v-for="perlengkapanmedis in perlengkapanmediss">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="perlengkapanmedis.kategori2" class="float-left">{{ perlengkapanmedis.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kesehatanlainnya" class="float-left">Kesehatan Lainnya</a>
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

        'obatobatans',
        'maternitys',
        'alatbantukesehatans',
        'kesehatanwanitas',
        'dietvitamins',
        'perlengkapanmediss',

        ],


    }

</script>
