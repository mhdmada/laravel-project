<template>

    <div class="card" style="">
      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
        <div class="clearfix">
            <h5 class="mb-0">
              <a href="/kategoribusanaanak" class="float-left text-white">Busana Anak</a>
              <a data-toggle="collapse" href="#subkategoribusanaanak" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
               <i class="fa fa-chevron-down"></i>
              </a>
            </h5>
        </div>
      </div>

      <div id="subkategoribusanaanak" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/aksesorisrambutanak" class="float-left">Aksesoris Rambut Anak</a>
                  </h5>
                  <a data-toggle="collapse" href="#aksesorisrambutanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="aksesorisrambutanak" class="collapse">
              <div class="card-header" v-for="aksesorisrambutanak in aksesorisrambutanaks">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="aksesorisrambutanak.kategori2" class="float-left">{{ aksesorisrambutanak.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/tasanak" class="float-left">Tas Anak</a>
                  </h5>
                  <a data-toggle="collapse" href="#tasanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="tasanak" class="collapse">
              <div class="card-header" v-for="tasanak in tasanaks">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="tasanak.kategori2" class="float-left">{{ tasanak.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/perhiasananak" class="float-left">Perhiasan Anak</a>
                  </h5>
                  <a data-toggle="collapse" href="#perhiasananak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="perhiasananak" class="collapse">
              <div class="card-header" v-for="perhiasananak in perhiasananaks">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="perhiasananak.kategori2" class="float-left">{{ perhiasananak.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/aksesorisanak" class="float-left">Aksesoris Anak</a>
                  </h5>
                  <a data-toggle="collapse" href="#aksesorisanak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="aksesorisanak" class="collapse">
              <div class="card-header" v-for="aksesorisanak in aksesorisanaks">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="aksesorisanak.kategori2" class="float-left">{{ aksesorisanak.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/sepatuanaklaki" class="float-left">Sepatu Anak Laki-Laki</a>
                  </h5>
                  <a data-toggle="collapse" href="#sepatuanaklaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="sepatuanaklaki" class="collapse">
              <div class="card-header" v-for="sepatuanaklaki in sepatuanaklakis">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="sepatuanaklaki.kategori2" class="float-left">{{ sepatuanaklaki.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/sepatuanakperempuan" class="float-left">Sepatu Anak Perempuan</a>
                  </h5>
                  <a data-toggle="collapse" href="#sepatuanakperempuan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="sepatuanakperempuan" class="collapse">
              <div class="card-header" v-for="sepatuanakperempuan in sepatuanakperempuans">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="sepatuanakperempuan.kategori2" class="float-left">{{ sepatuanakperempuan.kategori2  }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

          <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/pakaiananaklaki" class="float-left">Pakaian Anak Laki-Laki</a>
                  </h5>
                  <a data-toggle="collapse" href="#pakaiananaklaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="pakaiananaklaki" class="collapse">
              <div class="card-header" v-for="pakaiananaklaki in pakaiananaklakis">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="pakaiananaklaki.kategori2" class="float-left">{{ pakaiananaklaki.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/pakaiananakperempuan" class="float-left">Pakaian Anak Perempuan</a>
                  </h5>
                  <a data-toggle="collapse" href="#pakaiananakperempuan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="pakaiananakperempuan" class="collapse">
              <div class="card-header" v-for="pakaiananakperempuan in pakaiananakperempuans">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="pakaiananakperempuan.kategori2"  class="float-left">{{ pakaiananakperempuan.kategori2 }}</a>
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

        'aksesorisrambutanaks',
        'tasanaks',
        'perhiasananaks',
        'aksesorisanaks',
        'sepatuanaklakis',
        'sepatuanakperempuans',
        'pakaiananaklakis',
        'pakaiananakperempuans',

        ],

    }

</script>
