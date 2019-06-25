<template>

    <div class="card" style="">
          <div class="card-header text-white bg-primary" role="tab" id="headingOne">
            <div class="clearfix">
                <h5 class="mb-0">
                  <a href="/kategorilaptopaksesoris" class="float-left text-white">Laptop & Aksesoris</a>
                  <a data-toggle="collapse" href="#subkategorilaptop" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                   <i class="fa fa-chevron-down"></i>
                  </a>
                </h5>
            </div>
          </div>

          <div id="subkategorilaptop" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

            <div class="card">
              <div class="card-header">
                    <div class="clearfix">
                      <h5 class="mb-0">
                        <a href="/Laptop" class="float-left">Laptop</a>
                      </h5>
                    </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                    <div class="clearfix">
                      <h5 class="mb-0">
                        <a href="/Aksesoris Laptop" class="float-left">Aksesoris Laptop</a>
                      </h5>
                      <a data-toggle="collapse" href="#aksesorislaptop" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                        <i class="fa fa-chevron-down"></i>
                      </a>
                    </div>
              </div>
              <div id="aksesorislaptop" class="collapse">
                  <div class="card-header" v-for="aksesorislaptopku in aksesorislaptop">
                    <div class="clearfix">
                      <h5 class="mb-0">
                        <a v-bind:href="aksesorislaptopku.kategori2" class="float-left">{{ aksesorislaptopku.kategori2 }}</a>
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

        'aksesorislaptop',

        ],


    }

</script>
