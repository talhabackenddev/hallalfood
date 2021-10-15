@extends('admin.layouts.masterLayout')
@section('content')

<section class="" id="home">
    <div class="container" style=" width: 410px;">
        <div class="row align-items-center justify-content-center">
            <div class="form-block mx-auto">
                <div class="text-center mb-5">
                    <br>
                    <h3 style="font-family:Franklin Gothic; color: #CB652B;">Reset your password</h3>
                </div>
                <form method="POST" action="{{ route('admin.password.update') }}">
                    @csrf
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <center>
                        <p style="font-family: Bahnschrift; font-size: 20px; font-weight:100;">Please configure your new password</p>
                    </center>

                    <div class="form-group last mb-3">
                        <input id="current_password" type="password" placeholder="Current Password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current_password">

                        @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-3">
                        <input id="new_password" type="password" placeholder="New new_password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                        @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-3">

                        <input id="new_confirm_password" type="password" placeholder="Re-type your password" class="form-control" name="new_confirm_password" required autocomplete="new_confirm_password">
                    </div>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary" style="padding: 5px 40px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 18px;  box-shadow: 6px 4px 5px 0px rgb(0 0 0 / 28%);font-weight: 900;">
                            {{ __('Reset Password') }}
                        </button>
                    </center>
                    <br>

                </form>
                <style>
                    input[type=password] {
                        border-radius: 20px;

                    }

                    input[type=email] {
                        border-radius: 20px;

                    }
                </style>
            </div>

        </div>
    </div>
</section>

@endsection