<template>

  <div>

    <nav aria-label="breadcrumb" class="col-md-6">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">{{filter}}</li>
      </ol>
    </nav>

  <div class="row ml-3"> 
    <div class="col-md-12" style="margin-bottom:15px;">

        <button v-for="(entry, index) in filterList" :item="entry" :key="index" @click="filter = entry; active = index;" :class="{ active: entry == filter }">
          {{ entry }}
        </button>

        <!-- will show after click Digital Mall -->
          <div class="muncul" v-if="filter === 'Digital Mall'">
                 <button v-for="(entry, index) in filterList2" :item="entry" :key="index" @click="filter = entry; active = index;" :class="{ active: entry == filter }">
                  {{ entry }}
                </button>
          </div>

           <!-- will show after Tradisional Market -->
          <div class="muncul" v-if="filter === 'Tradisional Market'">
                 <button v-for="(entry, index) in filterList3" :item="entry" :key="index" @click="filter = entry; active = index;" :class="{ active: entry == filter }">
                  {{ entry }}
                </button>
          </div>

      </div>

      <div class="col-md-1.5  mb-4" style="margin-right: 10px;"  v-for="(entry, index) in users" v-if="resultsFilter(entry, filter, filter2)" :item="entry" :key="index">
        <div class="card">
          <div class="ukuran">  <img v-bind:src="'uploads/'+ entry.photo"  class="card-img-top" alt="Card image cap"> </div>
            <div class="card-body">
              <p class="card-title">{{ entry.nama_produk }}</p>
              <h6 class="card-text text-danger">Rp.{{ entry.harga }} </h6>
            </div>
            <div class="card-footer" style="background-color: #DC3179; height: 110px;">
              <p class="text-light" style="font-size: 15px; margin: 2px;"></p> <img v-if="entry.premium === 'true' " src="https://img.icons8.com/color/96/000000/filled-star.png" width="16px;"> 
              <p class="text-light" style="font-size: 15px; margin: 2px; margin-bottom:8px;"><i class="fas fa-store"></i> {{ entry.nama_supplier }} </p>
              <a v-bind:href="'/detail/'+ entry.id"><button class="btn btn-primary btn-sm">Detail</button></a>
            </div>
        </div>
      </div>


  </div>

  </div>

</template>

<script>
  export default {
    name: "DataDisplay",
    data: function() {
      return {
        fkey: "status_barang",
        fkey2: "jenis_status_barang",
        fkey3: "kondisi",

        filterList:   ["All","Digital Mall", "Tradisional Market","bekas"],
        filterList2:  ["Branded", "Non Branded","Intermediary"],
        filterList3:  ["Beras","Daging Ayam","Daging Sapi","Telur Ayam","Bawang Merah","Bawang Putih","Cabai Merah","Cabai Rawit","Minyak Goreng","Gula Pasir"],

        filter: "All",
        users: []
      };
    },
    created() {
      var apiURL = "https://mythings.co.id/apiproducts";
      fetch(apiURL)
        .then(res => res.json())
        .then(res => (this.users = res))
        .catch(error => console.log(error));
    },
    methods: {
      resultsFilter(entry) {
        if (this.filter !== "All") {
          if (entry[this.fkey] === this.filter || entry[this.fkey2] === this.filter || entry[this.fkey3] === this.filter  ) {
            return entry;
          }
        } else {
          return entry;
        }

      }
    }
  }; 
</script>


<style scoped>
button {
  background: #74b6cc;
  border: none;
  color: #fff;
  padding: 8px;
  margin-right: 5px; 
  margin-bottom: 20px;
}
button.active {
  background: #0089ba;
}
.userWrap {
  list-style-type: none;
  padding: 2%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  flex-direction: row;
}
.user {
  padding: 10px;
  margin: 1% 0;
  border: 1px solid #ddd;
  border-radius: 3px;
  width: 46%;
  text-align: left;
}
h2.title {
  font-size: 1.3rem;
  font-weight: bold;
  margin: 0;
}
.language {
  display: block;
  font-size: 0.9rem;
}
</style>