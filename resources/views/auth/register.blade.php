@extends('layouts.app')

@section('content')
<div class="container" style="width: 800px; margin-top:100px; margin-left:400px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="" style="border: 2px solid goldenrod; padding: 20px; width:450px; padding-top:35px; padding-bottom:35px">
                <div class="card-header">
                    <center>  <img src="{{ asset('image/shindi logo xx.png') }}" alt="" style="height: 90px; width: 90px; margin-bottom: 30px"></center>
                  </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end" ><b>{{ __('Name') }}:</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" > <b> {{ __('Email Address') }}:</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" ><b>{{ __('Password') }}:</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" ><b>{{ __('Confirm Password') }}:</b></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <center><button type="submit" class="btn btn-primary" style="width: 150px">
                                    {{ __('Register') }}
                                </button></center>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-top: 15px">
                                <p> <b> Already have an account?</b> </p>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <center><button type="submit" class="btn btn-success" style="width: 150px">
                                <a class="nav-link" href="{{ route('login') }}"> {{ __('Login') }}</a>
                                </button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
