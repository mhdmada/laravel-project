<template>

  <div class="card" style="">
    <div class="card-header text-white bg-primary" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/kategoribusanamuslim" class="float-left text-white">Busana Muslim</a>
            <a data-toggle="collapse" href="#subkategorimuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategorimuslim" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/atasanmuslim" class="float-left">Atasan Muslim</a>
                </h5>
                <a data-toggle="collapse" href="#atasanmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="atasanmuslim" class="collapse">
            <div class="card-header" v-for="atasanmuslim in atasanmuslims">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="atasanmuslim.kategori2" class="float-left">{{ atasanmuslim.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/bawahanmuslim" class="float-left">Bawahan Muslim</a>
                </h5>
                <a data-toggle="collapse" href="#bawahanmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="bawahanmuslim" class="collapse">
            <div class="card-header" v-for="bawahanmuslim in bawahanmuslims">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="bawahanmuslim.kategori2" class="float-left">{{ bawahanmuslim.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/dressmuslim" class="float-left">Dress Muslim</a>
                </h5>
                <a data-toggle="collapse" href="#dressmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="dressmuslim" class="collapse">
            <div class="card-header" v-for="dressmuslim in dressmuslims">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="dressmuslim.kategori2" class="float-left">{{ dressmuslim.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/outwearmuslim" class="float-left">Outwear Muslim</a>
                </h5>
                <a data-toggle="collapse" href="#outwearmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="outwearmuslim" class="collapse">
            <div class="card-header"  v-for="outwearmuslim in outwearmuslims" >
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="outwearmuslim.kategori2" class="float-left">{{ outwearmuslim.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/scarf" class="float-left">Scarf</a>
                </h5>
                <a data-toggle="collapse" href="#scarfmuslim" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="scarfmuslim" class="collapse">
            <div class="card-header" v-for="scarf in scarfs">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="scarf.kategori2" class="float-left">{{ scarf.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/aksesorisjilbab" class="float-left">Aksesoris Jilbab</a>
                </h5>
                <a data-toggle="collapse" href="#aksesorisjilbab" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="aksesorisjilbab" class="collapse">
            <div class="card-header" v-for="aksesorisjilbab in aksesorisjilbabs">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="aksesorisjilbab.kategori2" class="float-left">{{ aksesorisjilbab.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/perlengkapanibadah" class="float-left">Perlengkapan Ibadah</a>
                </h5>
                <a data-toggle="collapse" href="#perlengkapanibadah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="perlengkapanibadah" class="collapse">
            <div class="card-header" v-for="perlengkapanibadah in perlengkapanibadahs">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="perlengkapanibadah.kategori2" class="float-left">{{ perlengkapanibadah.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/bajumuslimanak" class="float-left">Baju Muslim Anak</a>
                </h5>
              </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/setelanmuslim" class="float-left">Setelan Muslim</a>
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

        'atasanmuslims',
        'bawahanmuslims',
        'dressmuslims',
        'outwearmuslims',
        'scarfs',
        'aksesorisjilbabs',
        'perlengkapanibadahs',

        ],


    }

</script>
