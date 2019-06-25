
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.VueSocketio = require('vue-socket.io'); // vue socket

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, VueRouter, axios);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('kalkulator', require('./components/KalkulatorForm.vue'));

// const router = new VueRouter({ mode: 'history'});
// const app = new Vue(Vue.util.extend({ router })).$mount('#app');

// const app = new Vue({
//     el: '#app'
// });

Vue.component('busana-pria', require('./components/CategoryBusanaPria.vue'));
Vue.component('busana-wanita', require('./components/CategoryBusanaWanita.vue'));
Vue.component('smartphone-tablet', require('./components/CategorySmartphoneTablet.vue'));
Vue.component('laptop', require('./components/CategoryLaptop.vue'));
Vue.component('komputer', require('./components/CategoryKomputer.vue'));
Vue.component('elektronik', require('./components/CategoryElektronik.vue'));
Vue.component('kamera', require('./components/CategoryKamera.vue'));
Vue.component('gaming', require('./components/CategoryGaming.vue'));
Vue.component('busana-muslim', require('./components/CategoryBusanaMuslim.vue'));
Vue.component('busana-anak', require('./components/CategoryBusanaAnak.vue'));
Vue.component('kecantikan', require('./components/CategoryKecantikan.vue'));
Vue.component('produk-kesehatan', require('./components/CategoryKesehatan.vue'));
Vue.component('perawatan-tubuh', require('./components/CategoryPerawatanTubuh.vue'));
Vue.component('perlengkapan-ibuanakbayi', require('./components/CategoryPerlengkapanIbuAnakBayi.vue'));
Vue.component('hewan', require('./components/CategoryHewan.vue'));

//JASA Component

Vue.component('kesehatan', require('./components/CategoryJasaKesehatan.vue'));
Vue.component('jasa-kecantikan', require('./components/CategoryJasaKecantikan.vue'));
Vue.component('tourtravel', require('./components/CategoryJasaTravel.vue'));
Vue.component('reparasi', require('./components/CategoryJasaReparasi.vue'));
Vue.component('kebersihan', require('./components/CategoryJasaKebersihan.vue'));
Vue.component('tenaga-pendukung', require('./components/CategoryJasaTenagaPendukung.vue'));
Vue.component('Kursus', require('./components/CategoryJasaKursus.vue'));


Vue.component('product-item', require('./components/ProductItem.vue'));

Vue.component('fake-item', require('./components/FakeItem.vue'));

//chat komponen
Vue.component('chat-app', require('./components/ChatApp.vue'));

Vue.component('datadisplay', require('./components/DataDisplay.vue'));


var konten = new Vue({
  el: '#konten',
  data: {
    products: [],
    loading: false,
    fakes: 7,
    isHidden: false,
    selectedCategory: "All"
  },

  methods: {
    getUserDetails: function getUserDetails() {var _this = this;
      fetch('https://mythings.co.id/apiproducts').
      then(function (result) {return result.json();}).
      then(function (result) {
        _this.products = result;
        _this.loading = true;
      });
    } },


  created: function created() {var _this2 = this;
    setTimeout(function () {
      _this2.getUserDetails();
    }, 1000);
  }

});


var tes = new Vue({
  el: '#tes',

});


new Vue({
    el: "#detailproduct",
    data: {
        // laravelroute: this.console.log(''),
    },
    methods: {
        copyTestingCode () {
          let testingCodeToCopy = document.querySelector('#testing-code')
          testingCodeToCopy.setAttribute('type', 'text')    // 不是 hidden 才能複製
          testingCodeToCopy.select()

          try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            alert('URL was copied ' + msg);
          } catch (err) {
            alert('Oops, unable to copy');
          }

          /* unselect the range */
          testingCodeToCopy.setAttribute('type', 'hidden')
          window.getSelection().removeAllRanges()
        },
    },
    
});





new Vue({
  el: '#kontenkategori',
  data () {
    return {

       //BUSANA PRIA
     atasanprias: [],
     sepatuprias: [],
     celanaprias:[],
     outwearprias:[],
     jamtanganprias:[],
     tasprias:[],
     batikprias:[],
     aksesorisprias:[],
     pakaiandalamprias:[],
     perhiasanfashionprias:[],
     bajutidurprias:[],

      //BUSANA WANITA
     atasanwanitas: [],
     celanawanitas:[],
     rokwanitas: [],
     dresswanitas: [],
     outwearwanitas:[],
     batikwanitas:[],
     pakaiandalamwanitas:[],
     taswanitas:[],
     sepatuwanitas: [],
     jamtanganwanitas:[],
     perhiasanwanitas:[],
     aksesoriswanitas:[],
     aksesorisrambutwanitas:[],
     couplewanitas:[],
     bajutidurwanitas:[],
     perlengkapanjahit:[],

     //SMARTPHONE
     aksesorishandphone:[],
     aksesoristablet:[],
     memorycard:[],

    //LAPTOP
    aksesorislaptop:[],

    //KOMPUTER
    harddisks:[],
    vgacards:[],
    printers:[],
    peripherals:[],
    networkings:[],
    komponenkomputers:[],
    opticaldrives:[],

    //ELEKTRONIK
    vaporizers:[],
    audios:[],
    tvs:[],
    kamerapengintais:[],
    mediaplayers:[],
    telepons:[],
    pencahayaans:[],
    peralatanlistriks:[],
    perangkatelektroniklainnyas:[],

    //kamera
    kameradigitals:[],
    kameravideos:[],
    kameraanalogs:[],
    lensaaksesoriss:[],
    flashaksesoriss:[],
    aksesoriskameras:[],
    bateraikameras:[],
    cleanerkameras:[],
    framekameras:[],

    //gaming
    gameconsoles:[],
    cdgames:[],
    pcgamings:[],

    //busana muslim
    atasanmuslims:[],
    bawahanmuslims:[],
    dressmuslims:[],
    outwearmuslims:[],
    scarfs:[],
    aksesorisjilbabs:[],
    perlengkapanibadahs:[],

    //busana anak
    aksesorisrambutanaks:[],
    tasanaks:[],
    perhiasananaks:[],
    aksesorisanaks:[],
    sepatuanaklakis:[],
    sepatuanakperempuans:[],
    pakaiananaklakis:[],
    pakaiananakperempuans:[],

    //kecantikan
    stylingrambutwanitas:[],
    makeupmatas:[],
    makeupwajahs:[],
    handnailarts:[],
    eyebrowkits:[],
    alatmakeups:[],
    perawatankulits:[],
    lipcolors:[],
    perawatanwajahs:[],

    //kesehatan
    obatobatans:[],
    maternitys:[],
    alatbantukesehatans:[],
    kesehatanwanitas:[],
    dietvitamins:[],
    perlengkapanmediss:[],

    //Perawatan Tubuh
    groomings:[],
    parfums:[],
    telingas:[],
    produkkewanitaans:[],
    perawatanrambuts:[],
    perawatanmatas:[],
    mandis:[],
    perawatankakis:[],
    kesehatangigis:[],

    //Perlengkapan Ibu, Anak & Bayi
    popokdiapers:[],
    makanansusubayis:[],
    makanansusuibus:[],
    bajusepatubayis:[],
    perawatanbayis:[],
    perlengkapanmakanbayis:[],
    perlengkapanmandibayis:[],
    strollerbayis:[],
    perlengkapantidurbayis:[],
    aksesorisbayis:[],
    bajuhamils:[],

    //Hewan
    hewankomsumsis:[],
    hewanpeliharaans:[],


    }
  },
  mounted () {


    //==============Perlengkapan Ibu, Anak & Bayi===================
    axios.get('http://localhost:8000/apipopokdiaper')
      .then(response => (this.popokdiapers = response.data));

    axios.get('http://localhost:8000/apimakanansusubayi')
      .then(response => (this.makanansusubayis = response.data));

    axios.get('http://localhost:8000/apimakanansusuibu')
      .then(response => (this.makanansusuibus = response.data));

    axios.get('http://localhost:8000/apibajusepatubayi')
      .then(response => (this.bajusepatubayis = response.data));

    axios.get('http://localhost:8000/apiperawatanbayi')
      .then(response => (this.perawatanbayis = response.data));

    axios.get('http://localhost:8000/apiperlengkapanmakanbayi')
      .then(response => (this.perlengkapanmakanbayis = response.data));

    axios.get('http://localhost:8000/apiperlengkapanmandibayi')
      .then(response => (this.perlengkapanmandibayis = response.data));

    axios.get('http://localhost:8000/apistrollerbayi')
      .then(response => (this.strollerbayis = response.data));

    axios.get('http://localhost:8000/apiperlengkapantidurbayi')
      .then(response => (this.perlengkapantidurbayis = response.data));

    axios.get('http://localhost:8000/apiaksesorisbayi')
      .then(response => (this.aksesorisbayis = response.data));

    axios.get('http://localhost:8000/apibajuhamil')
      .then(response => (this.bajuhamils = response.data));





     //==============PERAWATAN TUBUH===================
    axios.get('http://localhost:8000/apigrooming')
      .then(response => (this.groomings = response.data));

    axios.get('http://localhost:8000/apiparfum')
      .then(response => (this.parfums = response.data));

    axios.get('http://localhost:8000/apitelinga')
      .then(response => (this.telingas = response.data));

    axios.get('http://localhost:8000/apiprodukkewanitaan')
      .then(response => (this.produkkewanitaans = response.data));

    axios.get('http://localhost:8000/apiperawatanrambut')
      .then(response => (this.perawatanrambuts = response.data));

    axios.get('http://localhost:8000/apiperawatanmata')
      .then(response => (this.perawatanmatas = response.data));

    axios.get('http://localhost:8000/apimandi')
      .then(response => (this.mandis = response.data));

    axios.get('http://localhost:8000/apiperawatankaki')
      .then(response => (this.perawatankakis = response.data));

    axios.get('http://localhost:8000/apikesehatangigi')
      .then(response => (this.kesehatangigis = response.data));



    //==============KESEHATAN===================
    axios.get('http://localhost:8000/apiobatobatan')
      .then(response => (this.obatobatans = response.data));

    axios.get('http://localhost:8000/apimaternity')
      .then(response => (this.maternitys = response.data));

    axios.get('http://localhost:8000/apialatbantukesehatan')
      .then(response => (this.alatbantukesehatans = response.data));

    axios.get('http://localhost:8000/apikesehatanwanita')
      .then(response => (this.kesehatanwanitas = response.data));

    axios.get('http://localhost:8000/apidietvitamin')
      .then(response => (this.dietvitamins = response.data));

    axios.get('http://localhost:8000/apiperlengkapanmedis')
      .then(response => (this.perlengkapanmediss = response.data));



    //==============KECANTIKAN===================
    axios.get('http://localhost:8000/apistylingrambutwanita')
      .then(response => (this.stylingrambutwanitas = response.data));

    axios.get('http://localhost:8000/apimakeupmata')
      .then(response => (this.makeupmatas = response.data));

    axios.get('http://localhost:8000/apimakeupwajah')
      .then(response => (this.makeupwajahs = response.data));

    axios.get('http://localhost:8000/apihandnailart')
      .then(response => (this.handnailarts = response.data));

    axios.get('http://localhost:8000/apieyebrowkit')
      .then(response => (this.eyebrowkits = response.data));

    axios.get('http://localhost:8000/apialatmakeup')
      .then(response => (this.alatmakeups = response.data));

    axios.get('http://localhost:8000/apiperawatankulit')
      .then(response => (this.perawatankulits = response.data));

    axios.get('http://localhost:8000/apilipcolor')
      .then(response => (this.lipcolors = response.data));

    axios.get('http://localhost:8000/apiperawatanwajah')
      .then(response => (this.perawatanwajahs = response.data));



     //==============BUSANA ANAK===================
    axios.get('http://localhost:8000/apiaksesorisrambutanak')
      .then(response => (this.aksesorisrambutanaks = response.data));

    axios.get('http://localhost:8000/apitasanak')
      .then(response => (this.tasanaks = response.data));

    axios.get('http://localhost:8000/apiperhiasananak')
      .then(response => (this.perhiasananaks = response.data));

    axios.get('http://localhost:8000/apiaksesorisanak')
      .then(response => (this.aksesorisanaks = response.data));

    axios.get('http://localhost:8000/apisepatuanaklaki')
      .then(response => (this.sepatuanaklakis = response.data));

    axios.get('http://localhost:8000/apisepatuanakperempuan')
      .then(response => (this.sepatuanakperempuans = response.data));

    axios.get('http://localhost:8000/apipakaiananaklaki')
      .then(response => (this.pakaiananaklakis = response.data));

    axios.get('http://localhost:8000/apipakaiananakperempuan')
      .then(response => (this.pakaiananakperempuans = response.data));


    //==============BUSANA MUSLIM===================
    axios.get('http://localhost:8000/apiatasanmuslim')
      .then(response => (this.atasanmuslims = response.data));

    axios.get('http://localhost:8000/apibawahanmuslim')
      .then(response => (this.bawahanmuslims = response.data));

    axios.get('http://localhost:8000/apidressmuslim')
      .then(response => (this.dressmuslims = response.data));

    axios.get('http://localhost:8000/apioutwearmuslim')
      .then(response => (this.outwearmuslims = response.data));

    axios.get('http://localhost:8000/apiscarf')
      .then(response => (this.scarfs = response.data));

    axios.get('http://localhost:8000/apiaksesorisjilbab')
      .then(response => (this.aksesorisjilbabs = response.data));

    axios.get('http://localhost:8000/apiperlengkapanibadah')
      .then(response => (this.perlengkapanibadahs = response.data));

    //==============GAMING===================
    axios.get('http://localhost:8000/apigameconsole')
      .then(response => (this.gameconsoles = response.data));

    axios.get('http://localhost:8000/apicdgame')
      .then(response => (this.cdgames = response.data));

    axios.get('http://localhost:8000/apipcgaming')
      .then(response => (this.pcgamings = response.data));

    //==============ELEKTRONIK===================

    axios.get('http://localhost:8000/apikameradigital')
      .then(response => (this.kameradigitals = response.data));

    axios.get('http://localhost:8000/apikameravideo')
      .then(response => (this.kameravideos = response.data));

    axios.get('http://localhost:8000/apikameraanalog')
      .then(response => (this.kameraanalogs = response.data));

    axios.get('http://localhost:8000/apilensaaksesoris')
      .then(response => (this.lensaaksesoriss = response.data));

    axios.get('http://localhost:8000/apiflashaksesoris')
      .then(response => (this.flashaksesoriss = response.data));

    axios.get('http://localhost:8000/apiaksesoriskamera')
      .then(response => (this.aksesoriskameras = response.data));

    axios.get('http://localhost:8000/apibateraikamera')
      .then(response => (this.bateraikameras = response.data));

    axios.get('http://localhost:8000/apicleanerkamera')
      .then(response => (this.cleanerkameras = response.data));

    axios.get('http://localhost:8000/apiframekamera')
      .then(response => (this.framekameras = response.data));



    //==============ELEKTRONIK===================

    axios.get('http://localhost:8000/apivaporizers')
      .then(response => (this.vaporizers = response.data));

    axios.get('http://localhost:8000/apiaudios')
      .then(response => (this.audios = response.data));

    axios.get('http://localhost:8000/apitvs')
      .then(response => (this.tvs = response.data));

    axios.get('http://localhost:8000/apikamerapengintais')
      .then(response => (this.kamerapengintais = response.data));

    axios.get('http://localhost:8000/apimediaplayers')
      .then(response => (this.mediaplayers = response.data));

    axios.get('http://localhost:8000/apitelepons')
      .then(response => (this.telepons = response.data));

    axios.get('http://localhost:8000/apipencahayaans')
      .then(response => (this.pencahayaans = response.data));

    axios.get('http://localhost:8000/apiperalatanlistriks')
      .then(response => (this.peralatanlistriks = response.data));

    axios.get('http://localhost:8000/apiperangkatelektroniklainnyas')
      .then(response => (this.perangkatelektroniklainnyas = response.data));


    //==============KOMPUTER===================

    axios.get('http://localhost:8000/apiharddisks')
      .then(response => (this.harddisks = response.data));

    axios.get('http://localhost:8000/apivgacards')
      .then(response => (this.vgacards = response.data));

    axios.get('http://localhost:8000/apiprinters')
      .then(response => (this.printers = response.data));

    axios.get('http://localhost:8000/apiperipherals')
      .then(response => (this.peripherals = response.data));

    axios.get('http://localhost:8000/apinetworkings')
      .then(response => (this.networkings = response.data));

    axios.get('http://localhost:8000/apikomponenkomputers')
      .then(response => (this.komponenkomputers = response.data));

    axios.get('http://localhost:8000/apiopticaldrives')
      .then(response => (this.opticaldrives = response.data));


    //==============LAPTOP ===================

    axios.get('http://localhost:8000/apiaksesorislaptop')
      .then(response => (this.aksesorislaptop = response.data));

    //==============SMARTPHONE ===================

    axios.get('http://localhost:8000/apiaksesorishandphone')
      .then(response => (this.aksesorishandphone = response.data));

    axios.get('http://localhost:8000/apiaksesoristablet')
      .then(response => (this.aksesoristablet = response.data));

    axios.get('http://localhost:8000/apimemorycard')
      .then(response => (this.memorycard = response.data));

    //==============HEWAN===================

    axios.get('http://localhost:8000/apihewankomsumsi')
      .then(response => (this.hewankomsumsis = response.data));

    axios.get('http://localhost:8000/apihewanpeliharaan')
      .then(response => (this.hewanpeliharaans = response.data));


    //==============BUSANA WANITA ===================

    axios.get('http://localhost:8000/apiatasanwanita')
      .then(response => (this.atasanwanitas = response.data));

    axios.get('http://localhost:8000/apicelanawanita')
      .then(response => (this.celanawanitas = response.data));

    axios.get('http://localhost:8000/apirokwanita')
      .then(response => (this.rokwanitas = response.data));

    axios.get('http://localhost:8000/apidresswanita')
      .then(response => (this.dresswanitas = response.data));

    axios.get('http://localhost:8000/apioutwearwanita')
      .then(response => (this.outwearwanitas = response.data));

    axios.get('http://localhost:8000/apibatikwanita')
      .then(response => (this.batikwanitas = response.data));

    axios.get('http://localhost:8000/apipakaiandalamwanita')
      .then(response => (this.pakaiandalamwanitas = response.data));

    axios.get('http://localhost:8000/apitaswanita')
      .then(response => (this.taswanitas = response.data));

    axios.get('http://localhost:8000/apisepatuwanita')
      .then(response => (this.sepatuwanitas = response.data));

    axios.get('http://localhost:8000/apijamtanganwanita')
      .then(response => (this.jamtanganwanitas = response.data));

    axios.get('http://localhost:8000/apiperhiasanwanita')
      .then(response => (this.perhiasanwanitas = response.data));

    axios.get('http://localhost:8000/apiaksesoriswanita')
      .then(response => (this.aksesoriswanitas = response.data));

    axios.get('http://localhost:8000/apiaksesorisrambutwanita')
      .then(response => (this.aksesorisrambutwanitas = response.data));

    axios.get('http://localhost:8000/apicouplewanita')
      .then(response => (this.couplewanitas = response.data));

    axios.get('http://localhost:8000/apibajutidurwanita')
      .then(response => (this.bajutidurwanitas = response.data));

    axios.get('http://localhost:8000/apiperlengkapanjahit')
      .then(response => (this.perlengkapanjahit = response.data));



    //===========BUSANA PRIA ===================
    axios.get('http://localhost:8000/apiatasanpria')
      .then(response => (this.atasanprias = response.data));

    axios.get('http://localhost:8000/apisepatupria')
      .then(response => (this.sepatuprias = response.data));

    axios.get('http://localhost:8000/apicelanapria')
      .then(response => (this.celanaprias = response.data));

    axios.get('http://localhost:8000/apioutwearpria')
      .then(response => (this.outwearprias = response.data));

    axios.get('http://localhost:8000/apijamtanganpria')
      .then(response => (this.jamtanganprias = response.data));

    axios.get('http://localhost:8000/apitaspria')
      .then(response => (this.tasprias = response.data));

    axios.get('http://localhost:8000/apibatikpria')
      .then(response => (this.batikprias = response.data));

    axios.get('http://localhost:8000/apiaksesorispria')
      .then(response => (this.aksesorisprias = response.data));

    axios.get('http://localhost:8000/apipakaiandalampria')
      .then(response => (this.pakaiandalamprias = response.data));

    axios.get('http://localhost:8000/apiperhiasanfashionpria')
      .then(response => (this.perhiasanfashionprias = response.data));

    axios.get('http://localhost:8000/apibajutidurpria')
      .then(response => (this.bajutidurprias = response.data));


  }
});






new Vue({
  el: '#kontenkategorijasa',
  data () {
    return {

       //KESEHATAN
     kesehatantradisional: [],
     kesehatanmodern: [],

     //KECANTIKAN
     salons: [],
     tatariass: [],
     pangkasrambuts: [],
     barbershops: [],

     //Reparasi
     rumahs: [],
     mobils: [],
     motors: [],
     reparasilistriks: [],
     tambalbans: [],
     lass: [],
     reparasielektroniks: [],
     reparasihandphones: [],

     //KEBERSIHAN
     dalamrumahs: [],
     luarrumahs: [],
     cucikendaraans: [],

     //TEnaga Pendukung
     arts: [],
     babysisters: [],
     satpams: [],
     drivers: [],
     tukangmasaks: [],

     //Kursus
     menjahits: [],
     musiks: [],
     memasaks: [],
     beladiris: [],
     programkomputers: [],
     menaris: [],
     otomotifs: [],
     bimbinganbelajars: [],


    }
  },
  mounted () {

    //==============Kursus===================
    axios.get('http://localhost:8000/apimenjahit')
      .then(response => (this.menjahits = response.data));

    axios.get('http://localhost:8000/apimusik')
      .then(response => (this.musiks = response.data));

    axios.get('http://localhost:8000/apimemasak')
      .then(response => (this.memasaks = response.data));

    axios.get('http://localhost:8000/apibeladiri')
      .then(response => (this.beladiris = response.data));

    axios.get('http://localhost:8000/apiprogramkomputer')
      .then(response => (this.programkomputers = response.data));

    axios.get('http://localhost:8000/apimenari')
      .then(response => (this.menaris = response.data));

    axios.get('http://localhost:8000/apiotomotif')
      .then(response => (this.otomotifs = response.data));

    axios.get('http://localhost:8000/apibimbinganbelajar')
      .then(response => (this.bimbinganbelajars = response.data));

    //==============Tenaga PEndukung===================
    axios.get('http://localhost:8000/apiart')
      .then(response => (this.arts = response.data));

    axios.get('http://localhost:8000/apibabysister')
      .then(response => (this.babysisters = response.data));

    axios.get('http://localhost:8000/apisatpam')
      .then(response => (this.satpams = response.data));

    axios.get('http://localhost:8000/apidriver')
      .then(response => (this.drivers = response.data));

    axios.get('http://localhost:8000/apitukangmasak')
      .then(response => (this.tukangmasaks = response.data));


    //==============Kebersihan===================
    axios.get('http://localhost:8000/apidalamrumah')
      .then(response => (this.dalamrumahs = response.data));

    axios.get('http://localhost:8000/apiluarrumah')
      .then(response => (this.luarrumahs = response.data));

    axios.get('http://localhost:8000/apicucikendaraan')
      .then(response => (this.cucikendaraans = response.data));

    //==============Reparasi===================
    axios.get('http://localhost:8000/apirumah')
      .then(response => (this.rumahs = response.data));

    axios.get('http://localhost:8000/apimobil')
      .then(response => (this.mobils = response.data));

    axios.get('http://localhost:8000/apimotor')
      .then(response => (this.motors = response.data));

    axios.get('http://localhost:8000/apireparasilistrik')
      .then(response => (this.reparasilistriks = response.data));

    axios.get('http://localhost:8000/apitambalban')
      .then(response => (this.tambalbans = response.data));

    axios.get('http://localhost:8000/apilas')
      .then(response => (this.lass = response.data));

    axios.get('http://localhost:8000/apireparasielektronik')
      .then(response => (this.reparasielektroniks = response.data));

    axios.get('http://localhost:8000/apireparasihandphone')
      .then(response => (this.reparasihandphones = response.data));

    //==============KECANTIKAN===================
    axios.get('http://localhost:8000/apisalon')
      .then(response => (this.salons = response.data));

    axios.get('http://localhost:8000/apitatarias')
      .then(response => (this.tatariass = response.data));

    axios.get('http://localhost:8000/apibarbershop')
      .then(response => (this.barbershops = response.data));

    axios.get('http://localhost:8000/apipangkasrambut')
      .then(response => (this.pangkasrambuts = response.data));

    //==============KESEHATAN===================
    axios.get('http://localhost:8000/apikesehatantradisional')
      .then(response => (this.kesehatantradisional = response.data));

    axios.get('http://localhost:8000/apikesehatanmodern')
      .then(response => (this.kesehatanmodern = response.data));


  }
});


new Vue({
    el: '#productcategories',
    template: `

        <div class="row">

            <div class="col-md-4">
                <div class="mb-3">
                <label for="username">Kategori</label>
                  <select name="kategori" v-model="selectedContinent"  class="form-control">
                      <option value="">Pilih Kategori</option>
                      <option v-for="(country_obj, country) in places" :value="country">{{country}}</option>
                  </select>
                </div> 
            </div>

            <div class="col-md-4">
               <div class="mb-3" >
                <label for="username">Sub Kategori 1</label>
                  <select name="kategori1"  :disabled="countries.length == 0" v-model="selectedCountry"  class="form-control">
                      <option value="">Pilih Kategori 1</option>
                      <option v-for="(city_obj, city) in countries">{{city}}</option>
                  </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                <label for="username">Sub Kategori 2</label>
                <select name="kategori2"  :disabled="cities.length == 0" v-model="selectedCity"  class="form-control">
                    <option value="">Pilih Kategori 2</option>
                    <option v-for="city in cities">{{city}}</option>
                </select>
                </div>
            </div>

           
        </div>



    `,
    data: function() {
        return {
            places: {
                "Busana Pria": {
                    "Atasan Pria": ["Kaos Tanpa Lengan Pria", "Kemeja Casual Pria", "Kaos Pria", "Polo Shirt Pria","Kemeja Formal Pria"],
                    "Sepatu Pria": ["Sneakers", "Boots", "Pantofel", "Sepatu Sandal","Slip On","Kaos Kaki","Perawatan Sepatu","Sandal","Loafers"],
                    "Celana Pria": ["Celana Jeans Pria", "Celana Panjang Pria", "Celana Pendek Pria"],
                    "Outwear Pria": ["Jas Pria","Jaket Pria","Sweater Pria","Vest Pria","Hoodie Pria","Coat Pria","Cardigan Pria"],
                    "Jam Tangan": ["Jam Tangan Analog", "Jam Tangan LED", "Jam Tangan Digital", "Strap Jam Tangan"],
                    "Tas Pria": ["Tas Travel", "Briefcase", "Tas selempang", "Clutch","Waist Bag","Backpack"],
                    "Batik Pria": ["Kemeja Batik", "Celana Batik",],
                    "Aksesoris Pria": ["Kacamata", "Dompet Pria", "Ikat Pinggang Pria", "Dasi","Sarung tangan fashion","Topi Pria","Kacamata Hitam"],
                    "Pakaian Dalam Pria": ["Boxer", "Kaos Dalam", "Celana Dalam", ],
                    "Perhiasan Fashion": ["Gelang", "Batu Mulia & Batu Alam", "Anting", "Kalung", "Cincin"],
                    "Baju Tidur Pria": ["Celana Tidur", "Piyama"],
                },

                "Busana Wanita": {
                    "Atasan Wanita": ["Polo Shirt", "Kaos", "kemeja", "Blouse", "Tank Top", "Crop Top"],
                    "Celana Wanita": ["Legging", "Celana Crop", "Hot Pants", "Celana Jeans","Celana Panjang","Celana Pendek"],
                    "Rok": ["Rok Midi", "Rok Maxi", "Rok Mini"],
                    "Dress": ["Midi Dress", "Maxi Dress", "Jump Suit", "Mini Dress"],
                    "Outerwear": ["Blazer", "Cardigan", "Hoodie", "Vest","Sweater","Coat","Jaket"],
                    "Setelan": [],
                    "Batik Wanita": ["Dress Batik", "Kain Batik", "Bawahan Batik", "Batik Couple","Kebaya","Blouse Batik"],
                    "Pakaian Dalam Wanita": ["Celana Dalam", "G-String", "Korset", "Lingerie","Bra"],
                    "Tas Wanita": ["Clutch", "Hand Bag", "Shoulder Bag", "Tas Selempang","Tote Bag","Aksesoris Tas","Tas Kosmetik","Backpack"],
                    "Sepatu Wanita": ["Sneakers", "Sandal", "Sepatu Sandal", "Loafers","Boots","Kaos Kaki","Flat Shoes","Wedges","Heels","Slip on"],
                    "Jam Tangan": ["Jam Tangan LED", "Jam Tangan Digital", "Jam Tangan Analog"],
                    "Perhiasan": ["Anting", "Logam Mulia", "Kalung", "Gelang","Cincin","Liontin","Bros"],
                    "Aksesoris Wanita": ["Kacamata Hitam", "Frame Kacamata", "Dompet Wanita", "Ikat Pinggang Wanita","Scarf & Shawl","Kacamata","Sarung Tangan Fashion","Topi Wanita"],
                    "Aksesoris Rambut": ["Rambut Palsu","Hair Extension", "Mahkota & Headpiece", "Jepitan Rambut", "Bando","Ikat Rambut"],
                    "Perlengkapan Couple": ["Jam Tangan Couple", "Aksesoris Couple", "Baju Couple", "Cincin Couple"],
                    "Baju Tidur Wanita": ["Piyama", "Celana Tidur", "Daster"],
                    "Perlengkapan Jahit": ["Jarum Jahit", "Manekin", "Resleting", "Patch","Alat Ukur Baju","Benang","Kancing","Payet","Peniti","Mesin Jahit"],
                },

                "Handphone & Tablet": {
                    "Smartphone": [],
                    "Powerbank": [],
                    "Tablet": [],
                    "Aksesoris Handphone": ["Baterai Handphone", "Aksesoris Mobil Handphone", "Casing & Cover Handphone", "Skin Handphone", "Charger Handphone", "Mount Handphone","Gantungan Handphone","Spare Part Handphone","Screen Guard Handphone","Docking Handphone","Aksesoris Handphone Lainnya"],
                    "Aksesoris Tablet": ["Baterai Tablet", "Aksesoris Mobil Tablet", "Casing & Cover Tablet", "Charger Tablet","Mount Tablet","Spare Part Tablet","Screen Guard Tablet","Keyboard Bluetooth Tablet","Connection Kit Tablet","Docking Tablet","Aksesoris Tablet Lainnya"],
                    "Memory Card": ["Compact Flash", "Memory Stick Pro Duo", "Memory Stick Pro-HG Duo", "Memory Stick Micro M2","MMC","Sd Card","MiniSD Card","MicroSD Card","Memory Card Lainnya"],
                    "Kabel Data": [],
                    "Kabel & Konektor": [],
                    "Headset Bluetooth": [],
                    "Nomor Perdana & Voucher": [],
                    "Stylus": [],
                    "Lensa Handphone": [],
                    "Tongsis": [],
                    "Tomsis": [],
                    "Pelindung Kabel": [],
                    "Virtual Reality Glasses": [],
                },

                "Laptop & Aksesoris": {
                    "Laptop": [],
                    "Aksesoris Laptop": ["Memory RAM", "Cooling Pad", "Baterai Laptop", "Adaptor Laptop", "Protector", "Skin Laptop", "Meja Laptop", "Tas Laptop", "Spare Part Laptop", "Aksesoris Laptop Lainnya"],
                    "Desktop & Mini PC": [],
                    "Harddisk & Flashdisk": ["HDD External", "HDD Internal", "SSD", "Flash Disk", "HDD Cases & Docking", "Storage Lainnya"],
                    "VGA Card": ["NVIDIA Series - Geforce", "AMD Series - ATI", "AGP Series"],
                    "Printer": ["All in One", "Dot Matrix", "Ink Jet", "Laser Color","Laser Mono","Point of Sales (POS)","Barcode","Tinta Printer","Kertas Printer","Spare Part","Printer Lainnya"],
                    "Peripheral & Aksesoris": ["Mouse", "Keyboard", "Mouse & Keyboard Bundle", "Mousepad", "Keypad", "Card Readers", "Joystick & Wheel", "Scanner", "USB Hub","Webcam","CD & DVD Kosong","Proyektor & Perangkat Presentasi","TV Card & Tuner","Kabel & Konektor","Tools & Kits","Peripheral & Aksesoris Lainnya"],
                    "Networking": ["Modem USB", "Wireless Router", "Wired Router", "Wireless Adapter", "Switch Internet", "Power Over Ethernet", "Powerline", "KVM Switch", "Network Transceiver", "Network Card", "Print Server", "Antena Penguat Sinyal", "Kabel & Konektor Networking", "Networking Lainnya"],
                    "Komponen Komputer": ["Processor Intel", "Processor AMD", "Motherboard Intel", "Motherboard AMD", "Memory", "Monitor", "Power Supply Unit (PSU)", "Casing Komputer", "Sound Card", "UPS", "Stabilizer","CPU Cooler","VGA Cooler","Memory Cooler","Harddisk Cooler","Fan Case","Thermal Paste"],
                    "Optical Drive": ["CD", "DVD", "Blu-Ray", "Duplikator"],


                },

                "Komputer & Aksesoris": {
                    "Desktop & Mini PC": [],
                    "Harddisk & Flashdisk": ["HDD External", "HDD Internal", "SSD", "Flash Disk", "HDD Cases & Docking", "Storage Lainnya"],
                    "VGA Card": ["NVIDIA Series - Geforce", "AMD Series - ATI", "AGP Series"],
                    "Printer": ["All in One", "Dot Matrix", "Ink Jet", "Laser Color", "Laser Mono", "Point of Sales (POS)", "Barcode", "Tinta Printer","Kertas Printer", "Spare Part", "Printer Lainnya", ],
                    "Peripheral & Aksesoris": ["Mouse", "Keyboard", "Mouse & Keyboard Bundle", "Mousepad", "Keypad", "Card Readers", "Joystick & Wheel", "Scanner", "USB Hub", "Webcam", "CD & DVD Kosong", "Proyektor & Perangkat Presentasi", "TV Card & Tuner", "Kabel & Konektor", "Tools & Kits", "Peripheral & Aksesoris Lainnya"],
                    "Networking": ["Modem USB", "Wireless Router", "Wired Router", "Wireless Adapter", "Switch Internet", "Power Over Ethernet", "Powerline", "KVM Switch", "Network Transceiver", "Network Card", "Print Server", "Antena Penguat Sinyal", "Kabel & Konektor Networking","Networking Lainnya"],
                    "Komponen Komputer": ["Processor Intel", "Processor AMD", "Motherboard Intel", "Motherboard AMD", "Memory", "Monitor", "Power Supply Unit (PSU)", "Casing Komputer", "Sound Card", "UPS", "Stabilizer", "CPU Cooler", "VGA Cooler", "Memory Cooler", "Harddisk Cooler", "Fan Case", "Thermal Paste"],
                    "Optical Drive": ["CD", "DVD", "Blu-Ray", "Duplikator"],

                },

                "Elektronik": {
                    "Vaporizer": ["Kapas Vape", "Liquid", "Aksesoris Vape", "MOD", "Atomizer", "Coil"],
                    "Audio": ["Earphone", "Speaker", "Headphone", "Headset"],
                    "TV": ["LED TV", "LCD TV", "Plasma TV", "Remote TV","Bracket","Antena TV","Kabel & Konektor TV","TV Lainnya"],
                    "Kamera Pengintai": ["Paket Perangkat Keamanan", "Kamera CCTV", "IP Camera", "Fake Camera","Spy Camera","Wireless Camera","DVR","Spare Part Kamera Pengintai","Kamera Pengintai Lainnya"],
                    "Media Player": ["MP3 Player", "MP4 Player", "DVD Player", "Receiver TV","Media Player Lainnya"],
                    "Telepon": ["Mesin Fax", "Telepon Kabel", "Telepon Wireless", "Telepon Satelit","Telepon Lainnya"],
                    "Tool & Kit": [],
                    "Pencahayaan": ["Bohlam", "Senter", "Lampu Baca", "Lampu Meja","Lampu Dinding","Lampu Gantung","Lampu Darurat","Lampu Proyektor","Pencahayaan Lainnya"],
                    "Peralatan Listrik": ["Stop Kontak", "Pengaman Stop Kontak", "Saklar", "Penghemat Listrik","Anti Petir","Alarm","Bel","Listrik Lainnya"],
                    "Perangkat Elektronik Lainnya": ["Baterai", "Kipas Angin Listrik", "Stun Gun", "GPS","Perangkat Elektronik Lainnya"],
                },

                "Kamera": {
                    "Kamera Digital": ["Kamera DSLR", "Kamera Mirrorless", "Action Camera", "Kamera Digital lainnya", "Kamera Pocket - Prosumer"],
                    "Kamera Video": ["Kamera Video Lainnya", "Drone", "Camcorder"],
                    "Kamera Analog": ["Lomo", "Kamera Analog Lainnya", "Kamera Instan"],
                    "Lensa & Aksesoris": ["Lensa", "Filter", "Cap", "Hood", "Adapter", "Converter - Teleconverter","Lensa & Aksesoris Lainnya",],
                    "Flash & Aksesoris": ["Flash", "Flash Trigger", "Diffuser", "Hot shoe", "Flash & Aksesoris Lainnya"],
                    "Aksesoris Kamera": ["Tripod & Stabillizer", "Tas & Casing Kamera", "Waterproof Case", "Strap Kamera", "Lighting & Studio", "Remote - Wireless", "Kabel Konektor Kamera", "Memory Card Camera", "Aksesoris Kamera Lainnya"],
                    "Baterai,Charger & Grip": ["Baterai Kamera", "Charger Kamera", "Battery Grip Kamera", "Baterai,Charger & Grip Lainnya"],
                    "Cleaner & Tool Kit": ["Cleaning Kit", "Lenspen", "Blower", "Cleaning Cloth","Dry Box","Silica Gel","Cleaner & Tool Kit Lainnya"],
                    "Frame,Album & Roll Film": ["Frame Foto", "Roll Film", "Printer Foto", "Frame Digital","Album","DVs",],
                },

                "Gaming": {
                    "Game Console": ["Aksesoris Game Console", "Komponen Game Console", "Wheels", "Game Boy dan Game Retro", "Joystick", "Nintendo", "PlayStation", "Memory Card Game Console", "Xbox",],
                    "CD Game": ["CD Playstation", "CD Nintendo", "CD Xbox", "CD PC dan Laptop Gaming"],
                    "PC dan Laptop Gaming": ["Mouse Gaming", "Komponen Komputer", "Laptop Gaming", "PC Gaming", "Mouse & Keyboard Gaming Bundle", "Aksesoris PC Gaming", "PC Controller", "Keyboard Gaming", "Virtual Reality Glasses", "Headset Gaming", "Monitor"]
                },

                "Busana Muslim": {
                    "Atasan Muslim": ["Kemeja Muslim", "Blouse Muslim", "Baju Koko", "Manset Muslim"],
                    "Bawahan Muslim": ["Rok Muslim", "Palazzo", "Legging", "Celana Muslim",],
                    "Dress Muslim": ["Jumpsuit", "Kaftan", "Gamis", "Abaya",],
                    "Outerwear Muslim": ["Cape", "Coat", "Vest", "Cardigan",],
                    "Scarf": ["Berlin", "Khimar", "Pashmina", "Hijab Segi Empat", "Ciput", "Hijab Instan"],
                    "Aksesoris Jilbab": ["Brooch", "Headpiece"],
                    "Perlengkapan Ibadah": ["Tasbih", "Sajadah", "Mukena", "Peci", "Sarung",],
                    "Baju Muslim Anak": [],
                    "Setelan Muslim": [],
                },

                "Busana Anak": {
                    "Aksesoris Rambut Anak": ["Bando", "Ikat Rambut", "Jepitan Rambut",],
                    "Tas Anak": ["Tas Selempang Anak", "Tas Koper Anak", "Tas Backpack Anak",],
                    "Perhiasan Anak": ["Gelang Anak", "Anting Anak", "Kalung Anak", "Cincin Anak"],
                    "Aksesoris Anak": ["Kacamata Anak", "Jam Tangan Anak", "Ikat Pinggang Anak", "Dompet Anak", "Topi Anak", ],
                    "Sepatu Anak Laki-Laki": ["Kaos Kaki Anak Laki-Laki", "Sandal Jepit Anak Laki-Laki", "Sepatu Sandal Anak Laki-Laki", "Boots Anak Laki-Laki", "Sepatu Kets Anak Laki-Laki",],
                    "Sepatu Anak Perempuan": ["Kaos Kaki Anak Perempuan","Sandal Jepit Anak Perempuan", "Sepatu Sandal Anak Perempuan", "Boots Anak Perempuan", "Sepatu Kets Anak Perempuan", "Flat Shoes Anak Perempuan", "Sepatu Pesta Anak Perempuan"],
                    "Pakaian Anak Perempuan": ["Kaos Anak Perempuan", "Celana Pendek Anak Perempuan", "Baby Dolls Anak Perempuan", "Baju Setelan Anak Perempuan", "Blouse Anak Perempuan", "Bolero Anak Perempuan", "Cardigan Anak Perempuan", "Celana Anak Perempuan", "Dress Anak Perempuan", "Hoodies Anak Perempuan", "Jaket & Blazer Anak Perempuan", "Celana Jeans Anak Perempuan", "JumpSuits Anak Perempuan", "Kemeja Anak Perempuan", "Kostum Anak Perempuan", "Legging Anak Perempuan","Pakaian Dalam Anak Perempuan","Baju Tidur Anak Perempuan","Rok Anak Perempuan","Seragam Anak Perempuan","Tank Top Anak Perempuan","Pakaian Anak Perempuan Lainnya" ],
                    "Pakaian Anak Laki-Laki": ["Kaos Anak Laki-Laki", "Celana Pendek Anak Laki-Laki", "Baju Setelan Anak Laki-Laki", "Celana Panjang Anak Laki-Laki", "Hoodies Anak Laki-Laki", "Jaket & Blazer Anak Laki-Laki", "Celana Jeans Anak Laki-Laki", "JumpSuits Anak Laki-Laki", "Kemeja Anak Laki-Laki", "Kostum Anak Laki-Laki", "Pakaian Dalam Anak Laki-Laki", "Baju Tidur Anak Laki-Laki", "Seragam Anak Laki-Laki", "Pakaian Anak Laki-Laki Lainnya",],
                },

                "Kecantikan": {
                    "Styling Rambut Wanita": ["Alat Potong Rambut", "Aksesoris Rambut", "Rambut Palsu", "Produk Styling Rambut", "Catokan", "Hair Dryer","Sisir", "Hair Extension" ],
                    "Make Up Mata": ["Eye Primer", "Lem Bulu Mata", "Bulu Mata Palsu", "Mascara", "Eye Liner", "Eyelid Tape", "Pinset & Penjepit Bulu Mata", "Eyeshadow"],
                    "Make Up Wajah": ["Blush on", "BB cream & CC cream,BB cushion", "Bronzer & Highlighter", "Setting Spray", "Bedak Wajah", "Face Primer", "Concealer", "Foundation"],
                    "Hand & Nail Art": ["Henna", "Stiker Kuku", "Alat & Aksesoris Nail Art", "Fake Nail", "Kutek", "Portable Nail Dryer", "Lem Kuku Palsu"],
                    "Set & Palette Makeup": [],
                    "Eyebrow Kit": ["Pensil Alis", "Cetakan dan Sisir Alis", "Eyebrow Powder & Pomade", "Pinset dan Cukuran Alis"],
                    "Aksesoris & Alat Make Up": ["Tas Kosmetik", "Set Makeup Brush", "Pembersih Brush Make up", "Pinset Komedo", "Laci & Tempat Makeup", "Beauty Sponge", "Kemasan Make up", "Cermin Make Up"],
                    "Perawatan Kulit": ["Penghilang Bekas Jerawat", "Penghilang Bekas Luka", "Anti Selulit & Stretchmark"],
                    "Lip Color & Lip Care": ["Lip Tint", "Lipstik dan Pensil Bibir", "Lip Balm & Oil", "Lipgloss","Lip Scrub","Lip Cream"],
                    "Perawatan Wajah": ["Cleanser", "Serum & Masker Mata", "Krim Mata", "Skin Care Tools","Serum & Minyak Wajah", "Masker Bibir", "Pembersih Make Up", "Scrub & Peeling Wajah","Krim Wajah", "Masker Wajah", "Sunblock Wajah", "Toner","Paket Perawatan Wajah"],
                },

                "Kesehatan": {
                    "Obat-Obatan": ["Obat Batuk dan Pilek", "Obat Penumbuh Rambut", "Obat Jerawat", "Obat Pencernaan", "Obat Sakit Kepala", "Obat Diabetes", "Obat Generik", "Obat Lainnya", "Koyo", "Obat herbal", "Salep"],
                    "Maternity": ["Vitamin Ibu Hamil", "Nipple Cream", "Susu Hamil", "Kehamilan","Asi Booster"],
                    "Alat Bantu Kesehatan": ["Alat Pelangsing", "Termometer", "Behel", "Kacamata Terapi","Alat Bantu Pendengaran","Peralatan P3k","Timbangan Badan","Alat Pijat","Earmuff"],
                    "Essential Oil": [],
                    "Kesehatan Wanita": ["Obat Menstruasi", "Perawatan Tubuh Wanita", "Alat Kontrasepsi", "Produk Kesehatan Lainnya", "Obat Menopause", "Kesehatan Wanita Lainnya"],
                    "Diet & Vitamin": ["Detox", "Obat Pelangsing", "Suplemen Fitness", "Vitamin & Nutrisi", "Penambah Berat Badan", "Vitamin Daya Tahan Tubuh", "Diet & Vitamin Lainnya"],
                    "Perlengkapan Medis": ["Alat Diagnosa", "Alat Terapi", "Alat Lainnya", "Alat Monitor Kesehatan", "Alat Bantu Jalan", "Alat Laboratorium"],
                    "Kesehatan Lainnya": []
                },

                "Perawatan Tubuh": {
                    "Grooming": ["Hair Foam", "Alat & Krim Cukur", "Sisir Saku", "Hair Wax & Pomade"],
                    "Parfum,Cologne, & Fragrance": ["Parfum & Cologne Unisex", "Parfum & Cologne Wanita", "Parfum & Cologne Anak-Anak", "Parfum & Cologne Pria"],
                    "Telinga": ["Ear Candle", "Pembersih Telinga"],
                    "Produk Kewanitaan": ["Tampon", "Sabun Kewanitaan", "Pembalut"],
                    "Perawatan Rambut": ["Shampoo", "Pewarna Rambut", "Hair tonic", "Masker Rambut", "Conditioner", "Minyak & Serum Rambut", "Dry Shampoo",],
                    "Perawatan Mata": ["Tetes Mata", "Softlens", "Cairan Pembersih Softlens"],
                    "Mandi & Perawatan Tubuh": ["Pemutih Ketiak", "Paket Perawatan & Perlengkapan Mandi", "Sunblock Badan", "Deodorant", "Body Lotion", "Body Butter", "Sabun Badan", "Body Scrub", "Perontok Bulu"],
                    "Perawatan Kaki,Tangan & Kuku": ["Minyak Kutikula Kuku", "Hand Sanitizer", "Perawatan Kaki", "Sabun Cuci Tangan", "Paket Perawatan Tangan & Kaki", "Penghilang Cat Kuku", "Alat Medikur & Pedikur", "Gunting Kuku", "Hand Cream"],
                    "Kesehatan Gigi & Mulut": ["Pembersih Lidah", "Benang Gigi & Tusuk Gigi", "Obat Kumur", "Sikat Gigi", "Pasta Gigi", "Pemutih Gigi"],
                },

                "Perlengkapan Ibu & Bayi": {
                    "Popok dan Diaper": ["Popok Kain", "Diaper"],
                    "Makanan & Susu Bayi": ["Biskuit Bayi", "Susu Bayi", "Bubur Bayi", "Makanan & Susu Bayi Lainnya"],
                    "Baju & Sepatu Bayi": ["Jumper Bayi", "Jaket Bayi", "Baju Bayi Perempuan", "Baju Bayi Laki-Laki", "Pakaian Bayi Unisex", "Sepatu", "Sarung Tangan & Kaos Kaki", "Baju & Sepatu Bayi Lainnya"],
                    "Perawatan Bayi": ["Cream Bayi", "Kesehatan Bayi", "Kapas dan Tissue", "Bedak Bayi", "Minyak Telon"],
                    "Perlengkapan Makan Bayi": ["Botol Susu Sanitizer", "Botol Susu", "Kursi Makan Bayi", "Baby food Maker", "Set Peralatan Makan Bayi", "Celemek Bayi", "Dot"],
                    "Perlengkapan Mandi Bayi": ["Pelampung", "Mainan Mandi", "Bathub dan Kolam", "Topi Pelindung Air", "Shampoo Bayi", "Handuk dan Peralatan Mandi", "Sabun Bayi", "Pispot"],
                    "Stroller dan Alat Bantu Bawa Bayi": ["Gendongan Bayi", "Dudukan Mobil Bayi", "Stroller"],
                    "Tas Perlengkapan Bayi": [],
                    "Perlengkapan Tidur Bayi": ["Tempat Tidur Bayi", "Bantal dan Guling", "Baby Monitor", "Selimut dan Bedong", "Kelambu"],
                    "Aksesoris Bayi": ["Perhiasan Bayi", "Headband Bayi", "Topi Bayi"],
                    "Baju Hamil": ["Dress Hamil", "Rok Hamil", "Baju Atasan Hamil", "Celana Dalam Hamil", "Korset Ibu Hamil", "Apron Menyusui", "Gurita", "Bra Menyusui", "Celana Hamil"],
                    "Makanan & Susu Ibu": ["Susu Ibu Hamil", "Susu Ibu Menyusui"],
                    "Makanan & Susu Anak": ["Susu Anak", "Nutrisi Khusus", "Suplemen & Vitamin"],
                },
            },
            countries: [],
            cities: [],
            selectedContinent: "",
            selectedCountry: "",
            selectedCity: ""
        }
    },
    watch: {
        selectedContinent: function() {
            // Clear previously selected values
            this.countries = [];
            this.cities = [];
            this.selectedCountry = "";
            this.selectedCity = "";
            // Populate list of countries in the second dropdown
            if (this.selectedContinent.length > 0) {
                this.countries = this.places[this.selectedContinent]
            }
        },
        selectedCountry: function() {
            // Clear previously selected values
            this.cities = [];
            this.selectedCity = "";
            // Now we have a continent and country. Populate list of cities in the third dropdown
            if (this.selectedCountry.length > 0) {
                this.cities = this.places[this.selectedContinent][this.selectedCountry]
            }
        }
    }
});



new Vue({
    el: '#jasacategories',
    template: `

        <div class="row">

            <div class="col-md-4">
                <div class="mb-3">
                <label for="username">Kategori</label>
                  <select name="kategori" v-model="selectedContinent"  class="form-control">
                      <option value="">Pilih Kategori</option>
                      <option v-for="(country_obj, country) in places" :value="country">{{country}}</option>
                  </select>
                </div> 
            </div>

            <div class="col-md-4">
               <div class="mb-3" >
                <label for="username">Sub Kategori 1</label>
                  <select name="kategori1"  :disabled="countries.length == 0" v-model="selectedCountry"  class="form-control">
                      <option value="">Pilih Kategori 1</option>
                      <option v-for="(city_obj, city) in countries">{{city}}</option>
                  </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                <label for="username">Sub Kategori 2</label>
                <select name="kategori2"  :disabled="cities.length == 0" v-model="selectedCity"  class="form-control">
                    <option value="">Pilih Kategori 2</option>
                    <option v-for="city in cities">{{city}}</option>
                </select>
                </div>
            </div>

           
        </div>



    `,
    data: function() {
        return {
            places: {
                "Kesehatan": {
                    "Tradisional": ["Akupuntur", "Massage & Spa", "Tradisional Lainnya"],
                    "Modern": ["Dokter", "Pembersihan Hama", "Modern Lainnya"],
                },

                "Kecantikan": {
                    "Salon": ["Salon Pesta", "Salon Formal", "Salon Lainnya"],
                    "Tata Rias": ["Tata Rias Pesta", "Tata Rias Formal", "Tata Rias Lainnya"],
                    "Pangkas Rambut": ["Pangkas Rambut AC", "Pangkas Rambut Kipas Angin", "Pangkas Rambut Lainnya"],
                    "Barbershop": ["Barbershop AC", "Barbershop Kipas Angin", "Barbershop Lainnya"],
                },

                "Reparasi": {
                    "Rumah": ["Reparasi Rumah Sebagian", "Reparasi Rumah Seluruh", "Reparasi Rumah Lainnya"],
                    "Mobil": ["Reparasi Mobil Baru", "Reparasi Mobil Lama", "Reparasi Mobil Lainnya"],
                    "Motor": ["Reparasi Motor Baru", "Reparasi Motor Lama", "Reparasi Motor Lainnya"],
                    "Reparasi Listrik": ["Reparasi Listrik Rumah", "Reparasi Listrik Pabrik", "Reparasi Listrik Lainnya"],
                    "Tambal Ban": ["Tambal Ban Mobil", "Tambal Ban Motor", "Tambal Ban Lainnya"],
                    "Las": ["Las Rumah", "Las Pabrik", "Las Lainnya"],
                    "Reparasi Elektronik": ["Reparasi Laptop", "Reparasi Televisi", "Reparasi AC","Reparasi Kulkas","Reparasi Elektronik Lainnya"],
                    "Reparasi Handphone": ["Reparasi Smartphone", "Reparasi All", "Reparasi Handphone Lainnya"],
                },

                "Kebersihan": {
                    "Dalam Rumah": ["Bersihkan Rumah", "Cuci Pakaian", "Setrika","Kebersihan Dalam Rumah Lainnya"],
                    "Luar Rumah": ["Bersihkan Luar Rumah", "Bersihkan Teras", "Bersihkan Perkarangan","Kebersihan Luar Rumah Lainnya"],
                    "Cuci Kendaraan": ["Cuci Mobil", "Cuci Motor", "Cuci Kendaraan Lainnya"],
                },

                "Tenaga Pendukung": {
                    "Asisten Rumah Tangga": ["Asisten Rumah Tangga Tetap", "Asisten Rumah Tangga Sementara", "Asisten Rumah Tangga Lainnya"],
                    "Baby Sister": ["Baby Sister Tetap", "Baby Sister Sementara", "Baby Sister Lainnya"],
                    "Satpam": ["Satpam Tetap", "Satpam Sementara", "Satpam Lainnya"],
                    "Driver": ["Driver Tetap", "Driver Sementara", "Driver Lainnya"],
                    "Tukang Masak": ["Tukang Masak Tetap", "Tukang Masak Sementara", "Tukang Masak Lainnya"],
                },

                "Kursus": {
                    "Menjahit": ["Menjahit Private", "Menjahit Public", "Menjahit Lainnya"],
                    "Musik": ["Musik Private", "Musik Public", "Musik Lainnya"],
                    "Memasak": ["Memasak Private", "Memasak Public", "Memasak Lainnya"],
                    "Beladiri": ["Beladiri Private", "Beladiri Public", "Beladiri Lainnya"],
                    "Program Komputer": ["Program Komputer Private", "Program Komputer Public", "Program Komputer Lainnya"],
                    "Menari": ["Menari Private", "Menari Public", "Menari Lainnya"],
                    "Otomotif": ["Otomotif Private", "Otomotif Public", "Otomotif Lainnya"],
                    "Bimbingan Belajar": ["Bimbingan Belajar Private", "Bimbingan Belajar Public", "Bimbingan Belajar Lainnya"],
                },

                "Jasa Tour and Travel": {
                    "Dalam Negeri": [],
                    "Luar Negeri": [],
                },
                
            },
            countries: [],
            cities: [],
            selectedContinent: "",
            selectedCountry: "",
            selectedCity: ""
        }
    },
    watch: {
        selectedContinent: function() {
            // Clear previously selected values
            this.countries = [];
            this.cities = [];
            this.selectedCountry = "";
            this.selectedCity = "";
            // Populate list of countries in the second dropdown
            if (this.selectedContinent.length > 0) {
                this.countries = this.places[this.selectedContinent]
            }
        },
        selectedCountry: function() {
            // Clear previously selected values
            this.cities = [];
            this.selectedCity = "";
            // Now we have a continent and country. Populate list of cities in the third dropdown
            if (this.selectedCountry.length > 0) {
                this.cities = this.places[this.selectedContinent][this.selectedCountry]
            }
        }
    }
});



new Vue({
    el: '#tambahprodukvue',
    data: {

        kategoriAktif: 1,
        kategori1: '',
        kategori2: '',
        kategori3: '',

        kategoriAktifJasa: 1,
        kategorijasa1: '',
        kategorijasa2: '',
        kategorijasa3: '',

        maxinput: 100,
        productname: '',

        maxdesc: 2000,
        description: '',


        kondisi: '',

        distribusi: '',
        statusdigital: '',

        /*jasa*/

        senin: '',
        selasa: '',
        rabu: '',
        kamis: '',
        jumat: '',
        sabtu: '',
        minggu: '',



    }
});
