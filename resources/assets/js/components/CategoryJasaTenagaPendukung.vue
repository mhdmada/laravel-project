<template>

   <div class="card" style="">
    <div class="card-header text-white bg-success" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/jasatenagapendukung" class="float-left text-white">Tenaga Pendukung</a>
            <a data-toggle="collapse" href="#subkategoritenaga" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategoritenaga" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/asistenrumahtangga" class="float-left">Asisten Rumah Tangga</a>
                </h5>
                <a data-toggle="collapse" href="#asisten" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="asisten" class="collapse">
            <div class="card-header" v-for="art in arts">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="art.kategori2" class="float-left">{{ art.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/babysister" class="float-left">Baby Sister</a>
                </h5>
                <a data-toggle="collapse" href="#babysister" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="babysister" class="collapse">
            <div class="card-header" v-for="babysister in babysisters">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="babysister.kategori2" class="float-left">{{ babysister.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/satpam" class="float-left">Satpam</a>
                </h5>
                <a data-toggle="collapse" href="#satpam" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="satpam" class="collapse">
            <div class="card-header" v-for="satpam in satpams" >
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="satpam.kategori2" class="float-left">{{ satpam.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/driver" class="float-left">Driver</a>
                </h5>
                <a data-toggle="collapse" href="#driver" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="driver" class="collapse">
            <div class="card-header" v-for="driver in drivers">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="driver.kategori2" class="float-left">{{ driver.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/tukangmasak" class="float-left">Tukang Masak</a>
                </h5>
                <a data-toggle="collapse" href="#tukangmasak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="tukangmasak" class="collapse">
            <div class="card-header" v-for="tukangmasak in tukangmasaks">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="tukangmasak.kategori2" class="float-left">{{ tukangmasak.kategori2 }}</a>
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

        'arts',
        'babysisters',
        'satpams',
        'drivers',
        'tukangmasaks',


        ],


    }

</script>
