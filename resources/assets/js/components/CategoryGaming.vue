<template>

   <div class="card" style="">
     <div class="card-header text-white bg-primary" role="tab" id="headingOne">
       <div class="clearfix">
           <h5 class="mb-0">
             <a href="/kategorigaming" class="float-left text-white">Gaming</a>
             <a data-toggle="collapse" href="#subkategorigaming" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
              <i class="fa fa-chevron-down"></i>
             </a>
           </h5>
       </div>
     </div>

     <div id="subkategorigaming" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/gameconsole" class="float-left">Game Console</a>
                 </h5>
                 <a data-toggle="collapse" href="#gameconsole" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="gameconsole" class="collapse">
             <div class="card-header" v-for="gameconsole in gameconsoles" >
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="gameconsole.kategori2" class="float-left">{{ gameconsole.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>

       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/cdgame" class="float-left">CD Game</a>
                 </h5>
                 <a data-toggle="collapse" href="#cdgame" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="cdgame" class="collapse">
             <div class="card-header" v-for="cdgame in cdgames">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="cdgame.kategori2" class="float-left">{{ cdgame.kategori2 }}</a>
                 </h5>
               </div>
             </div>
         </div>
       </div>



       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/pcgaming" class="float-left">PC Gaming</a>
                 </h5>
                 <a data-toggle="collapse" href="#pcgaming" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                   <i class="fa fa-chevron-down"></i>
                 </a>
               </div>
         </div>
         <div id="pcgaming" class="collapse">
             <div class="card-header" v-for="pcgaming in pcgamings">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a v-bind:href="pcgaming.kategori2" class="float-left">{{ pcgaming.kategori2 }}</a>
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

        'gameconsoles',
        'cdgames',
        'pcgamings',

        ],


    }

</script>
