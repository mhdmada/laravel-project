@extends('layouts.app')

@section('content')



    <div class="container">
      <div class="py-5 text-center">
        <h2>Tambah Wanted List Jasa Baru</h2>
      </div>

      <form action="{{ url('simpanwantedjasa') }}" method="POST" enctype="multipart/form-data" >
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
          <h5 class="mb-3">Informasi Jasa</h5><hr>

            <input type="text" name="nama_supplier" value="{{ Auth::user()->name}}" hidden>

            <div class="mb-3">
              <label for="username">Nama Jasa <span data-feather="info" data-toggle="tooltip" data-placement="top" title="Nama produk harus termasuk merek, model dan fitur penting produk. Jika Anda menggunakan kata pencarian yang tidak sesuai, produk Anda berpotensi untuk disembunyikan oleh sistem."></span></label>
                <input v-model="productname" :maxlength="maxinput" type="text" class="form-control" id="firstName" placeholder="masukkan nama jasa" name="nama_jasa" value="{{ old('nama_produk') }}">
                <small id="" class="form-text text-muted pull-right"><font  v-text="productname.length"></font> / 100</small>
            </div>

            <div class="mb-3">
              <label for="username">Kategori <span class="badge badge-info">wajib</span></label>
                <select v-model="kategorijasa1" @change="kategoriAktifJasa = 1" name="kategori" id="kategori" class="form-control dynamic2" data-dependent="kategori1">
                 <option value="">Pilih Kategori</option>
                  @foreach ($categories as $kategori) 
                        <option value="{{ $kategori->kategori}}">{{ $kategori->kategori}}</option>
                  @endforeach
                </select>
            </div>

            <div class="mb-3" >
              <label for="username">Sub Kategori 1</label>
                 <select v-model="kategorijasa2" @change="kategoriAktifJasa = 2" name="kategori1" id="kategori1" class="form-control dynamic2" data-dependent="kategori2" >
                 <option value="" disabled selected >-------------------------</option>
                </select>
            </div>   

             <div class="mb-3">
              <label for="username">Sub Kategori 2</label>
                  <select v-model="kategorijasa3" @change="kategoriAktifJasa = 3" name="kategori2" id="kategori2" class="form-control">
                 <option value="" disabled selected >------------------------</option>
                </select>
            </div>  


          </div>



{{-- ============================================================================================================================================================ --}}

        


          <div class="info-produk">
            <h5 class="mb-3">Deskripsi Jasa</h5><hr>

            <div class="mb-3">
              <label for="username">Deskripsi</label>
               <textarea  v-model="description" :maxlength="maxdesc"  class="form-control" rows="10" name="deskripsi" ></textarea>
               <small id="" class="form-text text-muted pull-right"><font v-text="description.length"></font> / 2000</small>
            </div>
          </div>

          <input hidden type="text" name="tanggal_expired" value="{{ Carbon::now()->addDays(3) }}">

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit"><span data-feather="plus"></span> Tambah Jasa</button>


          </form>

        </div>

      </div>


      <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

      @include('includes.footer')
    </div>

@endsection
