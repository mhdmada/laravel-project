<template>


   <div class="card" style="">
     <div class="card-header text-white bg-primary" role="tab" id="headingOne">
       <div class="clearfix">
           <h5 class="mb-0">
             <a href="/kategorikecantikan" class="float-left text-white">Kecantikan</a>
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
                   <a href="/stylingrambutwanita" class="float-left">Styling Rambut Wanita</a>
                 </h5>
                 <a data-toggle="collapse" href="#stylingrambutwanita" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="stylingrambutwanita" class="collapse">
             <div class="card-header" v-for="stylingrambutwanita in stylingrambutwanitas">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="stylingrambutwanita.kategori2" class="float-left">{{ stylingrambutwanita.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/makeupmata" class="float-left">Make up Mata</a>
                 </h5>
                 <a data-toggle="collapse" href="#makeupmata" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="makeupmata" class="collapse">
             <div class="card-header" v-for="makeupmata in makeupmatas">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="makeupmata.kategori2" class="float-left">{{ makeupmata.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/makeupwajah" class="float-left">Make Up Wajah</a>
                 </h5>
                 <a data-toggle="collapse" href="#makeupwajah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="makeupwajah" class="collapse">
             <div class="card-header" v-for="makeupwajah in makeupwajahs">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="makeupwajah.kategori2" class="float-left">{{ makeupwajah.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>


       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/handnailart" class="float-left">Hand & Nail Art</a>
                 </h5>
                 <a data-toggle="collapse" href="#handnailart" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="handnailart" class="collapse">
             <div class="card-header" v-for="handnailart in handnailarts">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="handnailart.kategori2" class="float-left">{{ handnailart.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/setpalettemakeup" class="float-left">Set & Palette Makeup</a>
                 </h5>
               </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/eyebrowkit" class="float-left">Eyebrow Kit</a>
                 </h5>
                 <a data-toggle="collapse" href="#eyebrowkit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="eyebrowkit" class="collapse">
             <div class="card-header" v-for="eyebrowkit in eyebrowkits">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="eyebrowkit.kategori2" class="float-left">{{ eyebrowkit.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

         <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/aksesorismakeup" class="float-left">Aksesoris & Alat Make Up</a>
                 </h5>
                 <a data-toggle="collapse" href="#aksesorismakeup" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="aksesorismakeup" class="collapse">
             <div class="card-header" v-for="alatmakeup in alatmakeups">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="alatmakeup.kategori2" class="float-left">{{ alatmakeup.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/perawatankulit" class="float-left">Perawatan Kulit</a>
                 </h5>
                 <a data-toggle="collapse" href="#perawatankulit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="perawatankulit" class="collapse">
             <div class="card-header" v-for="perawatankulit in perawatankulits">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="perawatankulit.kategori2" class="float-left">{{ perawatankulit.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>


       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/lipcolor" class="float-left">Lip Color & Lip Care</a>
                 </h5>
                 <a data-toggle="collapse" href="#lipcolor" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="lipcolor" class="collapse">
             <div class="card-header" v-for="lipcolor in lipcolors">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="lipcolor.kategori2" class="float-left">{{ lipcolor.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/perawatanwajah" class="float-left">Perawatan Wajah</a>
                 </h5>
                 <a data-toggle="collapse" href="#perawatanwajah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="perawatanwajah" class="collapse">
             <div class="card-header" v-for="perawatanwajah in perawatanwajahs">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="perawatanwajah.kategori2" class="float-left">{{ perawatanwajah.kategori2 }}</a>
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

        'stylingrambutwanitas',
        'makeupmatas',
        'makeupwajahs',
        'handnailarts',
        'eyebrowkits',
        'alatmakeups',
        'perawatankulits',
        'lipcolors',
        'perawatanwajahs',

        ],


    }

</script>
