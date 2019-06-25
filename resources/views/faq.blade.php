<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
     <style type="text/css">
      .cliente {
        border-radius: 25px;
        padding: 20px;
        outline: 2px solid #ccc;
        outline-offset: -10px;
        -moz-outline-radius: 10px;
        -webkit-outline-radius: 10px;
      }
      .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;*/
      }

      .accordion .card-header:after {
          content: "\f106";
          font-weight: 900; /*this shit line must be adding to show the fucking symbol*/
          font-family: 'Font Awesome\ 5 Free';
          float: right; 
      }
      .accordion .card-header.collapsed:after {
          /* symbol for "collapsed" panels */
          content: "\f107"; 
          font-family: 'Font Awesome\ 5 Free';
          font-weight: 900;
      }
      .collapsed{
        cursor: pointer;
      }

    </style>
  </head>

  <body>

    @include('includes.header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">FAQ</h1>
      {{-- <p class="lead">fault Bootstrap components and utilities with little customization.</p> --}}
    </div>

    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General Info</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Promo info</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Order</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">About Mythings</a>
          </div>
        </div>

        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div id="accordion" class="accordion">
                  <div class="card mb-3 ">
                      <div class="card-header collapsed " data-toggle="collapse" href="#collapseOne">
                          <a class="card-title">
                              Kendala Promo Jual Beli Online
                          </a>
                      </div>
                      <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                          <p>Jika Anda memiliki kendala pada program promo yang diadakan oleh MyThings, maka pastikan bahwa Anda telah membaca, memahami, dan menyetujui syarat ketentuan terkait promo tersebut. Selain itu pastikan juga Anda memahami cara penggunaan kode promo serta benefit yang akan diterima agar tidak terjadi kesalahan saat menggunakan promo tersebut untuk bertransaksi.

                          Benefit Promo Tidak Sesuai dengan Syarat Ketentuan
                          Pastikan Anda tidak mengikuti dan menggunakan lebih dari satu promo yang tersedia di MyThings. Selain itu pastikan bahwa kode promo dan batas waktu promo masih berlaku.

                          Anda juga dapat melakukan pengecekan pada syarat dan ketentuan yang berlaku dari promo tersebut sehingga dapat Anda pastikan benefit atau keuntungan apa saja yang akan Anda terima nantinya.

                          Jika Anda tidak menerima benefit promo sesuai dengan syarat dan ketentuan, maka dapat melaporkannya pada Customer Care MyThings dengan menginformasikan ketidaksesuaian yang Anda alami.

                          Tidak Bisa Menggunakan Voucher Promo Jual Beli Online
                          Anda dapat pastikan bahwa menggunakan hanya satu promo dan tidak melakukan penggabungan promo. Selain itu Anda juga perlu perhatikan kode voucher yang digunakan sesuai dengan syarat dan ketentuan promo Jual Beli Online. Anda perlu juga memerhatikan batas waktu promo, ketentuan promo, dan kesesuaian promo yang sedang berlangsung.

                          Apabila kode voucher dan syarat ketentuan sudah sesuai akan tetapi Anda tidak dapat menggunakannya pada transaksi Anda, maka dapat sampaikan pada Costumer Care kami.
                          </p>

                      </div>
                  </div>

                  <div class="card mb-3">
                      <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          <a class="card-title">
                           Hubungi Penjual
                          </a>
                      </div>
                      <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                          <p>1. Kirim Pesan</p>
                           <p> Pesan yang Anda kirim akan masuk ke kotak masuk penjual. Pesan balasan dari penjual juga akan muncul pada kotak masuk Anda.</p>
                          <p>2. Diskusi Produk</p>
                          <p>Tak hanya bisa berdiskusi dengan penjual, melalui Diskusi Produk Anda juga dapat melihat pertanyaan – pertanyaan dari pembeli lainnya. </p>
                      </div>
                  </div>    

                  <div class="card mb-3">
                      <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <a class="card-title">
                           Laporkan Penyalahgunaan
                          </a>
                      </div>
                      <div id="collapseThree" class="card-body collapse" data-parent="#accordion" >
                          <p>1. Pencurian atau Penyalahgunaan Akun MyThings</p>
                          <p>Penggunaan Kartu Kredit tentunya menjadi privasi dari setiap transaksi yang dilakukan di MyThings. Anda perlu memerhatikan daftar transaksi yang telah selesai maupun yang sedang berjalan agar dapat mengetahui dengan jelas proses penggunaan dari kartu kredit Anda.
                          Apabila terdapat penyalahgunaan kartu kredit pada transaksi Anda, dimana Anda merasa tidak menggunakan Kartu Kredit untuk proses transaksi di MyThings silakan lakukan pengajuan laporannya pada Customer Care MyThings.</p>

                          <p>2. Laporan Scam</p>
                          <p>Scam adalah penipuan dengan menggunakan modus penyamaran sebagai pihak tertentu yang bertujuan untuk mendapatkan data atau keuntungan dari target sasaran (korban).
                            Anda perlu memastikan bahwa tidak meemberikan data apapun terkait Akun Anda pada pihak yang tidak Anda kenal maupun yang tidak memiliki keterkaitan pada transaksi Anda di Mythings.Jika ada oknum tertentu yang mengaku sebagai pihak Mythings/bank/pihak lainnya, silakan laporkan ke Customer Care Mythings.</p>


                      </div>
                  </div>    
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">policy 2</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">policy 3</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">policy 4</div>
          </div>

      </div>
    </div>

        
      
      @include('includes.footer')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
