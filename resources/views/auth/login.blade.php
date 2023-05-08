@extends('layouts.app')

@section('content')

<div class="container" style="width: 800px; margin-top:140px; margin-left:600px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="" style="border: 2px solid goldenrod; padding: 20px; width:450px; padding-top:35px; padding-bottom:35px">
                <div class="card-header">
                  <center>  <img src="{{ asset('image/shindi logo xx.png') }}" alt="" style="height: 90px; width: 90px; margin-bottom: 30px"></center>
                </div>

                <div class="card-body" >

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <label for="email" class="col-md-4 col-form-label text-md-end" ><b>{{ __('Email Address') }}:</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><b>{{ __('Password') }}:</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" >
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                <button type="submit" class="btn btn-primary">  <a class="nav-link" href="{{ route('register') }}">  {{ __('Register') }}</a></button>


                            </div>
                        </div>
                        <div aria-rowcount="row mb-0" style="margin-top: 10px">
                            <div class="col-md-8 offset-md-4">

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection
