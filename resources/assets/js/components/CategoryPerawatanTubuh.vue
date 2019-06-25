<template>

    <div class="card" style="">
     <div class="card-header text-white bg-primary" role="tab" id="headingOne">
       <div class="clearfix">
           <h5 class="mb-0">
             <a href="/kategoriperawatantubuh" class="float-left text-white">Perawatan Tubuh</a>
             <a data-toggle="collapse" href="#subkategoriperawatantubuh" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
              <i class="fa fa-chevron-down"></i>
             </a>
           </h5>
       </div>
     </div>

     <div id="subkategoriperawatantubuh" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/grooming" class="float-left">Grooming</a>
                 </h5>
                 <a data-toggle="collapse" href="#groom" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="groom" class="collapse">
             <div class="card-header" v-for="grooming in groomings">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="grooming.kategori2" class="float-left">{{ grooming.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/parfumcologne" class="float-left">Parfum,Cologne, & Fragrance</a>
                 </h5>
                 <a data-toggle="collapse" href="#parfum" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="parfum" class="collapse">
             <div class="card-header" v-for="parfum in parfums">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="parfum.kategori2" class="float-left">{{ parfum.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/telinga" class="float-left">Telinga</a>
                 </h5>
                 <a data-toggle="collapse" href="#telinga" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="telinga" class="collapse">
             <div class="card-header" v-for="telinga in telingas">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="telinga.kategori2" class="float-left">{{ telinga.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>


       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/produkkewanitaan" class="float-left">Produk Kewanitaan</a>
                 </h5>
                 <a data-toggle="collapse" href="#produkwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="produkwanita" class="collapse">
             <div class="card-header" v-for="produkkewanitaan in produkkewanitaans">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="produkkewanitaan.kategori2" class="float-left">{{ produkkewanitaan.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/perawatanrambut" class="float-left">Perawatan Rambut</a>
                 </h5>
                 <a data-toggle="collapse" href="#perawatanrambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="perawatanrambut" class="collapse">
             <div class="card-header" v-for="perawatanrambut in perawatanrambuts">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="perawatanrambut.kategori2" class="float-left">{{ perawatanrambut.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/perawatanmata" class="float-left">Perawatan Mata</a>
                 </h5>
                 <a data-toggle="collapse" href="#perawatanmata" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="perawatanmata" class="collapse">
             <div class="card-header" v-for="perawatanmata in perawatanmatas">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="perawatanmata.kategori2" class="float-left">{{ perawatanmata.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/mandidanperawatantubuh" class="float-left">Mandi & Perawatan Tubuh</a>
                 </h5>
                 <a data-toggle="collapse" href="#mandi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="mandi" class="collapse">
             <div class="card-header" v-for="mandi in mandis">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="mandi.kategori2" class="float-left">{{ mandi.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/perawatankaki" class="float-left">Perawatan Kaki</a>
                 </h5>
                 <a data-toggle="collapse" href="#perawatankaki" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="perawatankaki" class="collapse">
             <div class="card-header" v-for="perawatankaki in perawatankakis">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="perawatankaki.kategori2" class="float-left">{{ perawatankaki.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

        <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/kesehatangigi" class="float-left">Kesehatan Gigi</a>
                 </h5>
                 <a data-toggle="collapse" href="#kesehatangigi" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="kesehatangigi" class="collapse">
             <div class="card-header" v-for="kesehatangigi in kesehatangigis">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="kesehatangigi.kategori2" class="float-left">{{ kesehatangigi.kategori2 }}</a>
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

        'groomings',
        'parfums',
        'telingas',
        'produkkewanitaans',
        'perawatanrambuts',
        'perawatanmatas',
        'mandis',
        'perawatankakis',
        'kesehatangigis',


        ],


    }

</script>
