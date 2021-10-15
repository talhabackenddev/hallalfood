@extends('layouts.app')
@section('page_css')
<link rel="stylesheet" href="{{url('/')}}/assets/build/css/intlTelInput.css">
@endsection
@section('content')
<section class="" id="home">
    <div class="container" style="margin-left: 80;">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6" style="width: 430px;">
                <div class="form-block mx-auto">
                    <div class="text-center mb-5">
                        <h3 style="font-family:Franklin Gothic; color: #CB652B;">Create an Account </h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="">

                            <center>
                                <a href="#" class="btn btn-block py-2 btn-google" style="border-radius: 50px;padding: 9px 20px; font-size: 15px; font-family: georgia;padding-right: 82px; background-color:#FAF0EB; color: black; border-color: #CB652B;">
                                    <img class="d-inline-block" src="assets/img/favicons/google.png" alt="google" style="height: 30px;" />
                                    Sign Up with Google</a>

                                <br>
                                <br>
                                <a href="#" class="btn btn-block py-2 btn-facebook" style="border-radius: 50px;padding: 9px 20px;font-size: 15px; font-family: georgia; padding-right: 70px; background-color:#FAF0EB; color: black; border-color: #CB652B;">
                                    <img class="d-inline-block" src="assets/img/favicons/facebook.png" alt="facebook" style="height: 30px;" />
                                    Sign Up with facebook

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
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="first_name">{{ __('First Name') }}</label>
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">{{ __('Last Name') }}</label>
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group first">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="postCode">{{ __('Post Code') }}</label>
                                    <input id="postCode" type="number" class="form-control @error('postCode') is-invalid @enderror" name="postCode" value="{{ old('postCode') }}" required autocomplete="postCode" autofocus>

                                    @error('postCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone">{{ __('Phone No') }}</label>
                                    <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group first">
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="address">{{ __('Address') }}</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('long') }}" required autocomplete="address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-2">
                                    <label for=""></label>
                                    <i class="fa fa-map-marker mt-4" style="font-size:33px;color:#CB652B"></i>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="form-group first">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="street">{{ __('Street') }}</label>
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" autofocus>

                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="city">{{ __('City') }}</label>
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group last mb-3">

                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="d-sm-flex mb-5 align-items-center">

                            </label>
                        </div>

                        <center>
                            <button type="submit" class="btn btn-primary" style="padding: 5px 50px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 22px;  box-shadow: 6px 4px 5px 0px rgb(0 0 0 / 28%); font-weight: 900;">
                                {{ __('Register') }}
                            </button>

                        </center>
                        <br>
                        <div class="row" style="align-items: baseline; margin-top: 10px; ">
                            <div class="col-md-7" style="  text-align: right;">
                                <a href="#"></a>
                                <p>Already have an Account?</p> </a>

                            </div>
                            <div class="col-md-5">
                                <a href="{{ route('login') }}" style="padding: 5px 20px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 12px; font-weight: 900;">Log In</a>
                            </div>
                        </div>


                    </form>
                    <style>
                        input[type=text] {
                            border-radius: 20px;

                        }

                        input[type=number] {
                            border-radius: 20px;

                        }

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
                <img class="d-inline-block" src="assets/img/gallery/login.png" alt="login" style="width: 655px;" />

            </div>
        </div>
    </div>
</section>

@endsection
@section('page_js')
<script>
    var input = document.querySelector("#telephone");
    var iti = window.intlTelInput(input, ({
        separateDialCode: true,

        utilsScript: "{{url('/')}}/assets/build/utils.js",
    }));
    input.addEventListener("countrychange", function() {
        iti.getNumber();
    });
</script>





@endsection