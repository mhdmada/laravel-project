@extends('layouts.app')

@section('content')



    <div class="container">
      <div class="py-5 text-center">
        <h2>Tambah Wanted List Product Baru</h2>
      </div>

      <form action="{{ url('simpanwantedproduct') }}" method="POST" enctype="multipart/form-data" >
      @csrf


      <div class="row justify-content-md-center" >
          <div class="col-md-10 mb-3">
          @if (count($errors) > 0)
             <div class = "alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                   @endforeach
                </ul>
             </div>
          @endif
       </div>


        <div id="tambahprodukvue" class="col-md-10 order-md-2 ">

          <div class="info-produk">
          <h5 class="mb-3">Informasi Produk</h5><hr>

            <input type="text" name="nama_supplier" value="{{ Auth::user()->name}}" hidden>

            <div class="mb-3">
              <label for="username">Nama Produk <span data-feather="info" data-toggle="tooltip" data-placement="top" title="Nama produk harus termasuk merek, model dan fitur penting produk. Jika Anda menggunakan kata pencarian yang tidak sesuai, produk Anda berpotensi untuk disembunyikan oleh sistem."></span></label>
                <input v-model="productname" :maxlength="maxinput" type="text" class="form-control" id="firstName" placeholder="masukkan nama produk" name="nama_produk" value="{{ old('nama_produk') }}">
                <small id="" class="form-text text-muted pull-right"><font  v-text="productname.length"></font> / 100</small>
            </div>

            <div class="mb-3">
              <label for="username">Kategori <span class="badge badge-info">wajib</span></label>
                <select v-model="kategori1" @change="kategoriAktif = 1" name="kategori" id="kategori" class="form-control dynamic" data-dependent="kategori1">
                 <option value="" >Pilih Kategori</option>
                  @foreach ($categories as $kategori)
                          <option value="{{ $kategori->kategori}}">{{ $kategori->kategori}}</option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3" >
              <label for="username">Sub Kategori 1</label>
                 <select v-model="kategori2" @change="kategoriAktif = 2" name="kategori1" id="kategori1" class="form-control dynamic" data-dependent="kategori2" >
                 <option value="" >-------------------------</option>
                </select>
            </div>

             <div class="mb-3">
              <label for="username">Sub Kategori 2</label>
                  <select v-model="kategori3" @change="kategoriAktif = 3" name="kategori2" id="kategori2" class="form-control">
                 <option value="" >------------------------</option>
                </select>
            </div>


          </div>



{{-- ============================================================================================================================================================ --}}

          <div class="info-produk">


            <h5 class="mb-3">Distribusi</h5><hr>

            <div class="mb-3">
              <label for="username">Saluran distribusi penjualan <span class="badge badge-info">wajib</span></label><br>
              <div class="custom-control custom-radio custom-control-inline">
                <input v-model="distribusi" type="radio" id="digitalmarket" name="status_barang" class="custom-control-input" value="Digital Mall">
                <label class="custom-control-label" for="digitalmarket">Digital Mall</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline">
                <input v-model="distribusi" type="radio" id="tradisionalmarket" name="status_barang" class="custom-control-input" value="Tradisional Market">
                <label class="custom-control-label" for="tradisionalmarket">Tradisional Market</label>
              </div>
            </div>


            <!-- will show after click digital mall -->
              <div class="muncul" v-if="distribusi === 'Digital Mall'">

                <div class="custom-control custom-radio custom-control-inline">
                  <input v-model="statusdigital" type="radio" id="branded" name="jenis_status_barang" class="custom-control-input" value="Branded">
                  <label class="custom-control-label" for="branded">Branded</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input v-model="statusdigital" type="radio" id="nonbranded" name="jenis_status_barang" class="custom-control-input" value="Non Branded">
                  <label class="custom-control-label" for="nonbranded">Non Branded</label>
                </div>

                 <div class="custom-control custom-radio custom-control-inline">
                  <input v-model="statusdigital" type="radio" id="intermediary" name="jenis_status_barang" class="custom-control-input" value="Intermediary">
                  <label class="custom-control-label" for="intermediary">Intermediary</label>
                </div>

                <br><br>
              </div>


              <!-- will show after click Branded' && distribusi-->
              <div class="muncul" v-if="statusdigital === 'Branded' && distribusi === 'Digital Mall' ">
                   <select class="form-control" name="brand">
                    <option disabled selected>Pilih Brand</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                  </select>
                  <br>
              </div>  

              <!-- will show after click Non Branded' && distribusi-->
              <div class="muncul" v-if="statusdigital === 'Non Branded' && distribusi === 'Digital Mall' ">
                  <input type="text" class="form-control" name="brand" placeholder="Masukkan Merk Non Branded" >
                  <br>
              </div>

              <!-- will show after click Intermediary-->
              <div class="muncul" v-if="statusdigital === 'Intermediary' && distribusi === 'Digital Mall' ">
                  <input type="text" class="form-control" name="brand" placeholder="Masukkan Intermediary" >
                  <br>
              </div>



              <!-- will show after click Tradisional Market -->
              <div class="muncul" v-if="distribusi === 'Tradisional Market'">
                  <select class="form-control" name="jenis_status_barang">
                    <option disabled selected>Pilih Tradisional Market</option>
                    <option value="Beras">Beras</option>
                    <option value="Daging Ayam">Daging Ayam</option>
                    <option value="Daging Sapi">Daging Sapi</option>
                    <option value="Telur Ayam">Telur Ayam</option>
                    <option value="Bawang Merah">Bawang Merah</option>
                    <option value="Bawang Putih">Bawang Putih</option>
                    <option value="Cabai Merah">Cabai Merah</option>
                    <option value="Cabai Rawit">Cabai Rawit</option>
                    <option value="Minyak Goreng">Minyak Goreng</option>
                    <option value="Gula Pasir">Gula Pasir</option>
                  </select>
                  <br>
              </div>

          </div>




          <div class="info-produk">
            <h5 class="mb-3">Deskripsi Produk</h5><hr>

            <div class="mb-3">
              <label for="username">Deskripsi</label>
               <textarea  v-model="description" :maxlength="maxdesc"  class="form-control" rows="10" name="deskripsi" ></textarea>
               <small id="" class="form-text text-muted pull-right"><font v-text="description.length"></font> / 2000</small>
            </div>
          </div>

          <input  hidden type="text" name="tanggal_expired" value="{{ Carbon::now()->addDays( $limithari->limit_hari ) }}">

          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Product</button>


          </form>

        </div>

      </div>


      <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

      @include('includes.footer')
    </div>

@endsection
