@extends('layouts.app')

@section('content')


<section class="" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6" style="width: 430px;">
                <div class="form-block mx-auto">
                    <div class="text-center mb-5">
                        <h3 style="font-family:Franklin Gothic; color: #CB652B;">Forgot your password?</h3>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{  __('Password reset link sent to your provided e-mail') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <center>
                            <p style="font-family: Bahnschrift; font-weight: semiLight;">Please enter your registered email so we can send you the password reset instructions</p>
                        </center>

                        <div class="form-group first">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-9">
                                <p>Password found?</p>

                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('login') }}" class="resend-code">
                                    <p style="color: #CB652B; text-decoration: underline; font-size: 18px; font-family: Bahnschrift;">Log In</p>
                                </a>
                            </div>


                        </div>
                        <center>
                            
                            <button type="submit" class="btn btn-primary" style="padding: 5px 40px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 18px; box-shadow: 6px 4px 5px 0px rgb(0 0 0 / 28%);font-weight: 900;">
                                    {{ __('Confirm') }}
                                </button>
                        </center>
                    </form>
                   
                </div>
            </div>
            <div class="col-md-6">
                <img class="d-inline-block" src="{{url('/')}}/assets/img/gallery/email.png" alt="login" style="margin-left: 170px;" />

            </div>
        </div>
    </div>
</section>
@endsection