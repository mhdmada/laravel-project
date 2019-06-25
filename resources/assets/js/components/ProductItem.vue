<template>
   
    <div class="col-md-1.5  mb-4" style="margin-right: 10px;">
     <div class="card">
        <div class="ukuran">  <img v-bind:src="'uploads/'+ photo"  class="card-img-top" alt="Card image cap"> </div>
          <div class="card-body">
            <p class="card-title" v-text="nama_produk"></p>
            <h6 class="card-text text-danger"></h6>
          </div>
          <div class="card-footer" style="background-color: #DC3179; height: 110px;">
            <p class="text-light" style="font-size: 15px; margin: 2px;" v-text="kategori"></p>
            <p class="text-light" style="font-size: 15px; margin: 2px;" v-text="nama_supplier"><i class="fas fa-store"></i> </p>
            <a v-bind:href="'/detail/'+ id"><button class="btn btn-primary btn-sm">Detail</button></a>
          </div>
      </div>
    </div>


</template>

<script type="text/javascript">

    export default{

        props:[
        'id',
        'kategori', 
        'nama_produk',
        'photo',
        'nama_supplier',
        ],
         
       
    }

</script>
