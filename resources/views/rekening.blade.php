@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Rekening</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{url('simpanrek')}}">
                                @csrf
                                
                                <input type="hidden" name="user_id" value="{{  Auth::user()->id }}">

                                <div class="form-group row">
                                    <label for="bank" class="col-md-4 col-form-label text-md-right">{{ __('Bank') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="bank">
                                            <option value="">Pilih Bank Nomor Rekening</option>
                                            
                                            @foreach($daftar_bank as $bank)
                                            <option value="{{ $bank->nama_bank }}">{{ $bank->nama_bank }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="cabang_bank" class="col-md-4 col-form-label text-md-right">{{ __('Cabang Bank') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="cabang_bank">
                                            <option selected disabled="">Pilih Area yang diinginkan</option>
                                            <option value="Aceh">Aceh</option>
                                            <option value="Bali">Bali</option>
                                            <option value="Banten">Banten</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Jawa Barat">Jawa Barat</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatra Barat">Sumatra Barat</option>
                                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                                            <option value="Sumatra Utara">Sumatra Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>

                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_rek" class="col-md-4 col-form-label text-md-right">{{ __('No Rekening') }}</label>

                                    <div class="col-md-6">
                                        <input id="no_rek" type="number" class="form-control{{ $errors->has('no_rek') ? ' is-invalid' : '' }}" name="no_rek" value="" >
                                    </div>
                                </div>

                                <input type="text" name="email" class="form-control" placeholder="email">

                                <div class="form-group row">
                                    <label for="atas_nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Pemilik Rekening') }}</label>
                                    <div class="col-md-6">
                                        <input id="atas_nama" type="text" class="form-control{{ $errors->has('atas_nama') ? ' is-invalid' : '' }}" name="atas_nama" value="" >
                                    </div>
                                </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>
                    <!-- Modal -->

                    @if ($daftar_transaksi->isEmpty() )

                        <div class="mt-3">
                            <div class="mb-3"><h2>Tidak Ada Nomor Rekening</h2> <br>
                            <button type="button" class="ml-6 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             Tambah Rekening
                            </button> <br><br>
                            </div>

                        </div>

                         
                    @else
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             Tambah Rekening
                        </button> <br><br>

                        @foreach($daftar_transaksi as $transaksi)

                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="row">
                                    @if($transaksi->bank == "BCA")
                                    <div class="col-md-6 border-right mt-4"><img style="width: 250px;" src="logo-bca.png"></div>
                                    @endif

                                    @if($transaksi->bank == "Mandiri")
                                    <div class="col-md-6 border-right mt-4"><img style="width: 250px;" src="logo-mandiri.png"></div>
                                    @endif

                                    @if($transaksi->bank == "BNI")
                                    <div class="col-md-6 border-right mt-4"><img style="width: 250px;" src="logo-bni.png"></div>
                                    @endif

                                    @if($transaksi->bank == "BRI")
                                    <div class="col-md-6 border-right mt-4"><img style="width: 250px;" src="logo-bri.png"></div>
                                    @endif

                                    <div class="col-md-6">
                                        <h4 class="card-title ml-4">{{ $transaksi->no_rek}}</h4>
                                        <h4 class="card-title ml-4">A/N:  {{ $transaksi->atas_nama}}</h4>
                                        <h4 class="card-title ml-4">{{ $transaksi->cabang_bank}}</h4>
                                    </div>
                                </div>
                              </div>
                              <div class="card-footer clearfix">
                                 {{--  <button type="button" class="btn btn-success float-left"><span data-feather="edit"></span> Edit</button> --}}
                                  <a href="{{url('hapus-rekening/'.$transaksi->id)}}" class="btn btn-danger float-right"><span data-feather="trash-2"></span>  Hapus</a>
                              </div>
                            </div>
                        @endforeach
                    @endif

        </div>
    </div>
</div>
@endsection
