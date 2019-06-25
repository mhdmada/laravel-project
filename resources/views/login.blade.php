@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8"></div>

  {{ __('Login') }}
    <form class="form-signin" action="{{ route('login') }}">
       @csrf

      <div class="text-center mb-4">
        <img class="mb-4" src="logo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Masuk MyThings</h1>
        <p>Belum punya akun MyThings? Daftar<a href="{!! url('/register'); !!}">&nbspdi sini</a></p>
      </div>

     

      <div class="form-group ">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

       
      </div>

      <div class="form-group">
         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Kata Sandi" required>
          <span toggle="#password"  class="fas fa-eye field-icon toggle-password"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

      </div>


      

      <div class="clearfix">
          <div class="custom-control custom-checkbox float-left mt-2">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                <label class="custom-control-label" for="customCheck1">{{ __('Ingat Saya') }}</label>
          </div>
          <div class="float-right mb-4"><a href="#" class="btn btn-link ">Lupa Kata Sandi</a>  </div>
      </div>

       <button type="submit" class="btn btn-primary btn-block ">
                                    {{ __('Login') }}
                                </button>

      <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
      </a>


      <button class="btn btn-lg btn-primary btn-block " type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>

    </div>

    </div>
</div>
@endsection
