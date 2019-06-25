<template>

    <div class="card" style="">
      <div class="card-header text-white bg-success" role="tab" id="headingOne">
        <div class="clearfix">
            <h5 class="mb-0">
              <a href="/jasakesehatan" class="float-left text-white">Kesehatan</a>
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
                    <a href="/tradisional" class="float-left">Tradisional</a>
                  </h5>
                  <a data-toggle="collapse" href="#tradisional" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="tradisional" class="collapse">
              <div class="card-header" v-for="kesehatantradisionallist in kesehatantradisional">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="kesehatantradisionallist.kategori2" class="float-left">{{ kesehatantradisionallist.kategori2 }}</a>
                  </h5>
                </div>
              </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/modern" class="float-left">Modern</a>
                  </h5>
                  <a data-toggle="collapse" href="#modern" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
          </div>
          <div id="modern" class="collapse">
              <div class="card-header" v-for="kesehatanmodernlist in kesehatanmodern">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a v-bind:href="kesehatanmodernlist.kategori2" class="float-left">{{ kesehatanmodernlist.kategori2 }}</a>
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

        'kesehatantradisional',
        'kesehatanmodern',
        ],


    }

</script>
