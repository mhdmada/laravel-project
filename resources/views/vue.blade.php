<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>

         <form method="POST" action="{{url('simpanbank')}}">
                                    @csrf
        <div id="tambahprodukvue" style="padding-top: 80px;">

        

           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-header">Example Component</div>

                            <div class="card-body">
                                

                                 <select v-model="kategori1" @change="kategoriAktif = 1" style="margin:23px;">
                                      <option value="">------------pilih-------------</option>
                                      <option value="Busana Anak"  >Busana Anak</option>
                                </select>
                              
                                <select v-model="kategori2" @change="kategoriAktif = 2">
                                      <option value="" >------------pilih-------------</option>
                                      <option value="Celana Pria"  >Celana Pria</option>
                                </select>

                              
                               <div v-if="kategoriAktif === 1 && kategori1 === 'Busana Anak'" style="color:red; margin:23px;" >
                                   
                                    
                                    <div class="form-group row">
                                        <label for="nama_bank" class="col-md-4 col-form-label text-md-right">{{ __('Nama Bank') }}</label>
                                        <div class="col-md-6">
                                            <input id="nama_bank" type="text" class="form-control{{ $errors->has('nama_bank') ? ' is-invalid' : '' }}" name="nama_bank" placeholder="Silahkan isi nama bank" >
                                        </div>
                                    </div>

                                </div>

                               
                                
                                <div v-if="kategoriAktif === 2 && kategori2 === 'Celana Pria'" style="color:blue; margin:23px;">
                                    <div class="form-group row">
                                        <label for="nama_bank" class="col-md-4 col-form-label text-md-right">{{ __('Nama Bank 2') }}</label>
                                        <div class="col-md-6">
                                            <input id="nama_bank" type="text" class="form-control{{ $errors->has('nama_bank') ? ' is-invalid' : '' }}" name="nama_bank" placeholder="Silahkan isi nama bank" >
                                        </div>
                                    </div>
                                </div>

                                 <button class="btn btn-primary" type="submit">go</button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

         



        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>