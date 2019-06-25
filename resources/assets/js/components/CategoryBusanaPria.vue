<template>

    <div class="card" style="">
      <div class="card-header text-white bg-primary" role="tab" id="headingOne">
        <div class="clearfix">
            <h5 class="mb-0">
              <a href="/kategori-pakaianpria" class="float-left text-white">Busana Pria</a>
              <a data-toggle="collapse" href="#subkategoribusanapria" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
               <i class="fa fa-chevron-down"></i>
              </a>
            </h5>
        </div>
      </div>

      <div id="subkategoribusanapria" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-atasanpria" class="float-left">Atasan Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#atasan-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="atasan-pria" class="collapse">
              <div class="card-header" v-for="atasanpria in atasanprias">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="atasanpria.kategori2" class="float-left">{{ atasanpria.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-sepatupria" class="float-left">Sepatu Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#sepatu-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="sepatu-pria" class="collapse">
                <div class="card-header"  v-for="sepatupria in sepatuprias" >
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="sepatupria.kategori2" class="float-left">{{ sepatupria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-celanapria" class="float-left">Celana Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#celana-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="celana-pria" class="collapse">
                <div class="card-header" v-for="celanapria in celanaprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="celanapria.kategori2"class="float-left">{{ celanapria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-outwearpria" class="float-left">Outwear Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#outwear-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="outwear-pria" class="collapse">
                <div class="card-header" v-for="outwearpria in outwearprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="outwearpria.kategori2" class="float-left">{{ outwearpria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-jamtangan" class="float-left">Jam Tangan</a>
                  </h5>
                  <a data-toggle="collapse" href="#jam-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="jam-pria" class="collapse">
                <div class="card-header" v-for="jamtanganpria in jamtanganprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="jamtanganpria.kategori2" class="float-left">{{ jamtanganpria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-taspria" class="float-left">Tas Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#tas-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="tas-pria" class="collapse">
                <div class="card-header" v-for="taspria in tasprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="taspria.kategori2" class="float-left">{{ taspria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-batikpria" class="float-left">Batik Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#batik-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="batik-pria" class="collapse">
                <div class="card-header" v-for="batikpria in batikprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="batikpria.kategori2" class="float-left">{{ batikpria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-aksesorispria" class="float-left">Aksesoris Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#aksesoris-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="aksesoris-pria" class="collapse">
                <div class="card-header" v-for="aksesorispria in aksesorisprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="aksesorispria.kategori2"class="float-left">{{ aksesorispria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-pakaiandalampria" class="float-left">Pakaian Dalam Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#pakaiandalam-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="pakaiandalam-pria" class="collapse">
                <div class="card-header" v-for="pakaiandalampria in pakaiandalamprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="pakaiandalampria.kategori2" class="float-left">{{ pakaiandalampria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-perhiasanfashionpria" class="float-left">Perhiasan Fashion</a>
                  </h5>
                  <a data-toggle="collapse" href="#perhiasanfashion-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="perhiasanfashion-pria" class="collapse">
                <div class="card-header" v-for="perhiasanfashionpria in perhiasanfashionprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="perhiasanfashionpria.kategori2" class="float-left">{{ perhiasanfashionpria.kategori2 }}</a>
                    </h5>
                  </div>
                </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/kategori-bajutidurpria" class="float-left">Baju Tidur Pria</a>
                  </h5>
                  <a data-toggle="collapse" href="#bajutidur-pria" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="bajutidur-pria" class="collapse">
                <div class="card-header" v-for="bajutidurpria in bajutidurprias">
                  <div class="clearfix">
                    <h5 class="mb-0">
                      <a v-bind:href="bajutidurpria.kategori2" class="float-left">{{ bajutidurpria.kategori2 }}</a>
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

        'atasanprias',
        'sepatuprias',
        'celanaprias',
        'outwearprias',
        'jamtanganprias',
        'tasprias',
        'batikprias',
        'aksesorisprias',
        'pakaiandalamprias',
        'perhiasanfashionprias',
        'bajutidurprias',

        ],


    }

</script>
