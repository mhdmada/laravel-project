<template>

  <div class="card" style="">
    <div class="card-header text-white bg-success" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/jasakecantikan" class="float-left text-white">Kecantikan</a>
            <a data-toggle="collapse" href="#subkategorikecantikan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategorikecantikan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/salon" class="float-left">Salon</a>
                </h5>
                <a data-toggle="collapse" href="#salon" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="salon" class="collapse">
            <div class="card-header" v-for="salon in salons">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="salon.kategori2" class="float-left">{{ salon.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/tatarias" class="float-left">Tata Rias</a>
                </h5>
                <a data-toggle="collapse" href="#tatarias" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="tatarias" class="collapse">
            <div class="card-header" v-for="tatarias in tatariass">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="tatarias.kategori2" class="float-left">{{ tatarias.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

       <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/pangkasrambut" class="float-left">Pangkas Rambut</a>
                </h5>
                <a data-toggle="collapse" href="#pangkasrambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="pangkasrambut" class="collapse">
            <div class="card-header" v-for="pangkasrambut in pangkasrambuts">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="pangkasrambut.kategori2" class="float-left">{{ pangkasrambut.kategori2 }}</a>
                </h5>
              </div>
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/barbershop" class="float-left">BarberShop</a>
                </h5>
                <a data-toggle="collapse" href="#barbershop" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                  <i class="fa fa-chevron-down"></i>
                </a>
              </div>
        </div>
        <div id="barbershop" class="collapse">
            <div class="card-header" v-for="barbershop in barbershops">
              <div class="clearfix">
                <h5 class="mb-0">
                  <a v-bind:href="barbershop.kategori2" class="float-left">{{ barbershop.kategori2 }}</a>
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

        'salons',
        'tatariass',
        'pangkasrambuts',
        'barbershops',



        ],


    }

</script>
