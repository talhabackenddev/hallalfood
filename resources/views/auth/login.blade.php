@extends('layouts.app')

@section('content')


<section class="" id="home">
    <div class="container" style="margin-left: 80;">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6" style="width: 430px;">
                <div class="form-block mx-auto">
                    <div class="text-center mb-5">
                        <h3 style="font-family:Franklin Gothic; color: #CB652B;">Login to your Account </h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="">

                            <center>
                                <a href="{{route('login.google')}}" class="btn btn-block py-2 btn-google" style="border-radius: 50px;padding: 9px 20px; font-size: 15px; font-family: georgia;padding-right: 82px; background-color:#FAF0EB; color: black; border-color: #CB652B;">
                                    <img class="d-inline-block" src="assets/img/favicons/google.png" alt="google" style="height: 30px;" />
                                    Login with Google</a>

                                <br>
                                <br>
                                <a href="{{route('login.facebook')}}" class="btn btn-block py-2 btn-facebook" style="border-radius: 50px;padding: 9px 20px;font-size: 15px; font-family: georgia; padding-right: 70px; background-color:#FAF0EB; color: black; border-color: #CB652B;">
                                    <img class="d-inline-block" src="assets/img/favicons/facebook.png" alt="facebook" style="height: 30px;" />
                                    Login with facebook

                                </a>
                        </div>
                        <br>
                        <div style="float:left; width: 44%;">
                            <hr />
                        </div>
                        <div style="float:right; width: 44%;">
                            <hr />
                        </div>
                        <p style="font-size: 22px; font-weight: normal;">&nbsp;OR</p>
                        <br>

                        </center>
                        <div class="form-group first">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-sm-flex mb-5 align-items-center">

                            </label>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #CB652B;     margin-left: -35px; text-decoration: underline;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary" style="padding: 2px 50px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 23px;    box-shadow: 6px 4px 5px 0px rgb(0 0 0 / 28%); font-weight: 900;">
                                {{ __('Log in') }}
                            </button>

                        </center>
                        <br>
                        <div class="row" style="align-items: baseline; margin-top: 10px; ">
                            <div class="col-md-7" style="  text-align: right;">
                                <a href="#"></a>
                                <p>Dont have an Account yet?</p> </a>

                            </div>
                            <div class="col-md-5">
                                <!-- <input type="submit" value="Sign Up" > -->
                                <a href="{{ route('register') }}" style="padding: 5px 20px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 12px; font-weight: 900;">Sign Up</a>

                            </div>
                        </div>


                    </form>
                    <style>
                        input[type=email] {
                            border-radius: 20px;

                        }

                        input[type=password] {
                            border-radius: 20px;

                        }

                        label {
                            font-weight: 600 !important;
                        }
                    </style>
                </div>
            </div>
            <div class="col-md-6" style="margin-left: 100px;">
                <img class="d-inline-block" src="{{url('/')}}/assets/img/gallery/login.png" alt="login" style="width: 655px;" />

            </div>
        </div>
    </div>
</section>
@endsection