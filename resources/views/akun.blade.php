@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">




            {{-- update akun --}}

            <div class="card border-primary" style="margin-bottom: 60px;">
                <div class="card-header ">{{ __('Update Akun') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('users.ubah', $user) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}

                        <div class="form-group row">
                            <label for="id_akun" class="col-md-4 col-form-label text-md-right">{{ __('ID Akun') }}</label>
                            <div class="col-md-6">
                                <input id="id_akun" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ $user->id }}" required disabled="">

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required disabled="">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>
                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Handphone') }}</label>
                            <div class="col-md-6">
                                <input id="no_hp" type="number" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ $user->no_hp }}" >

                                @if ($errors->has('no_hp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail_toko" class="col-md-4 col-form-label text-md-right">{{ __('Detail Toko') }}</label>
                            <div class="col-md-6">
                                <textarea rows="3" class="form-control{{ $errors->has('detail_toko') ? ' is-invalid' : '' }}" name="detail_toko">{{ $user->detail_toko }}</textarea>

                                @if ($errors->has('detail_toko'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('detail_toko') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="detail_toko" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                            <div class="col-md-6">
                                <textarea rows="3" class="form-control{{ $errors->has('lokasi') ? ' is-invalid' : '' }}" name="lokasi">{{ $user->lokasi }}</textarea>

                                @if ($errors->has('lokasi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lokasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <div class="card border-primary " style="margin-bottom: 60px;">
                <div class="card-header ">{{ __('Update Kurir') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('users.ubah2', $user) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}

                        <div class="form-group row">
                            <label for="id_akun" class="col-md-4 col-form-label text-md-right">{{ __('Kurir') }}</label>
                            <div class="col-md-6">
                                
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="kurir_jne" class="custom-control-input" id="customCheck1" value="1">
                                  <label class="custom-control-label" for="customCheck1">JNE</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="kurir_jt" class="custom-control-input" id="customCheck2" value="1">
                                  <label class="custom-control-label" for="customCheck2">J&T Express</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="kurir_pos" class="custom-control-input" id="customCheck3" value="1">
                                  <label class="custom-control-label" for="customCheck3">Pos Indonesia</label>
                                </div>


                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>


                        <div class="form-group row">
                            <div class="col-md-6">
                                
                                Kurir yang Available : 

                                    <br>
                                    @if(!empty($user->kurir_jne)) 
                                    Kurir JNE 

                                    @endif

                                    <br>

                                    @if(!empty($user->kurir_jt))

                                    Kurir J&T

                                    @endif

                                    <br>

                                    @if(!empty($user->kurir_pos))

                                    Kurir Pos

                                    @endif


                            </div>
                        </div>


                    

                </div>
            </div>


            <div class="card border-primary ">
                <div class="card-header ">{{ __('Hapus Akun') }}</div>

                <div class="card-body ">
                
                    <button class="btn btn-primary" data-toggle="modal" data-target="#hapus{{$user->id}}" >Hapus Akun</button>

                    <div class="modal fade" id="hapus{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                Apakah Anda Yakin Mau Hapus Akun {{$user->name}} ?
                          </div>
                          <div class="modal-footer">


                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span data-feather="x-circle"></span> Tidak</button>
                            <a href="{{url('hapus-user/'.$user->id)}}" class="btn btn-succes"><span data-feather="trash-2"></span>  Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div> {{-- end modal --}}

                </div>
            </div>






        </div>
    </div>
</div>
@endsection
