@extends('layouts.app')

@section('content')



    <form class="form-signin" action="{{ route('login') }}" method="POST">
       @csrf

      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">  {{ __('Login') }} MyThings</h1>
        <p>Belum punya akun MyThings? Daftar<a href="{!! url('/register'); !!}">&nbspdi sini</a></p>
      </div>

     

      <div class="form-group ">

          <input id="identity" type="identity" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="Email or Username" autofocus>

          @if ($errors->has('identity'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('identity') }}</strong>
              </span>
          @endif
       
      </div>


      {{-- <input type="text" name="email"> --}}

      <div class="form-group">
         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Kata Sandi" required>
          <span toggle="#password"  class="fas fa-eye field-icon toggle-password"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
      </div>


      

      <div class=" clearfix">

      
            <div class="custom-control custom-checkbox float-left mt-2">
              <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label" for="customCheck1"> {{ __('Ingat Saya') }}</label>
            </div>
     
             
          <div class="float-right mb-4 "> 
                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> 
          </div>

      </div>

       <button type="submit" class="btn btn-primary btn-block "> {{ __('Login') }}</button>

     
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>


@endsection
