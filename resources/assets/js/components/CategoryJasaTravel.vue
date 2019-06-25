<template>

  <div class="card" style="">
    <div class="card-header text-white bg-success" role="tab" id="headingOne">
      <div class="clearfix">
          <h5 class="mb-0">
            <a href="/jasatourtravel" class="float-left text-white">Jasa Tour & Travel</a>
            <a data-toggle="collapse" href="#subkategoritravel" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
             <i class="fa fa-chevron-down"></i>
            </a>
          </h5>
      </div>
    </div>

    <div id="subkategoritravel" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

       <div class="card">
          <div class="card-header">
                <div class="clearfix">
                  <h5 class="mb-0">
                    <a href="/Dalam Negeri" class="float-left">Dalam Negeri</a>
                  </h5>
                </div>
          </div>
        </div>


       <div class="card">
         <div class="card-header">
               <div class="clearfix">
                 <h5 class="mb-0">
                   <a href="/Luar Negeri" class="float-left">Luar Negeri</a>
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



        ],


    }

</script>
