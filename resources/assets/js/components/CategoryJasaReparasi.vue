<template>

  <div class="card" style="">
    <div class="card-header text-white bg-success" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/jasareparasi" class="float-left text-white">Reparasi</a>
            <a data-toggle="collapse" href="#subkategorireparasi" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategorireparasi" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/rumah" class="float-left">Rumah</a>
                </h5>
                <a data-toggle="collapse" href="#rumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="rumah" class="collapse">
            <div class="card-header" v-for="rumah in rumahs">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="rumah.kategori2" class="float-left">{{ rumah.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/mobil" class="float-left">Mobil</a>
                </h5>
                <a data-toggle="collapse" href="#mobil" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="mobil" class="collapse">
            <div class="card-header" v-for="mobil in mobils">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="mobil.kategori2" class="float-left">{{ mobil.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/motor" class="float-left">Motor</a>
                </h5>
                <a data-toggle="collapse" href="#motor" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="motor" class="collapse">
            <div class="card-header" v-for="motor in motors">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="motor.kategori2" class="float-left">{{ motor.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/listrik" class="float-left">Listrik</a>
                </h5>
                <a data-toggle="collapse" href="#listrik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="listrik" class="collapse">
            <div class="card-header" v-for="reparasilistrik in reparasilistriks">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="reparasilistrik.kategori2" class="float-left">{{ reparasilistrik.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/tambalban" class="float-left">Tambal Ban</a>
                </h5>
                <a data-toggle="collapse" href="#tambalban" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="tambalban" class="collapse">
            <div class="card-header" v-for="tambalban in tambalbans">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="tambalban.kategori2" class="float-left">{{ tambalban.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/las" class="float-left">Las</a>
                </h5>
                <a data-toggle="collapse" href="#las" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="las" class="collapse">
            <div class="card-header" v-for="las in lass">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="las.kategori2" class="float-left">{{ las.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/elektronik" class="float-left">Elektronik</a>
                </h5>
                <a data-toggle="collapse" href="#elektronik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="elektronik" class="collapse">
            <div class="card-header" v-for="reparasielektronik in reparasielektroniks">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="reparasielektronik.kategori2" class="float-left">{{ reparasielektronik.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/reparasihandphone" class="float-left">Handphone</a>
                </h5>
                <a data-toggle="collapse" href="#handphone" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="handphone" class="collapse">
            <div class="card-header" v-for="reparasihandphone in reparasihandphones">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="reparasihandphone.kategori2" class="float-left">{{ reparasihandphone.kategori2 }}</a>
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

        'rumahs',
        'mobils',
        'motors',
        'reparasilistriks',
        'tambalbans',
        'lass',
        'reparasielektroniks',
        'reparasihandphones',



        ],


    }

</script>
