@extends('layouts.app')

@section('content')

<section class="" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 style="font-family:Franklin Gothic; color: #CB652B;">Forgot your password?</h3>
              </div>
              <form action="#" method="post">
                <center>
                  <p style="font-family: Bahnschrift; font-size: 20px;">Please check your email inbox and click on the link sent to you so you can reset your password</p>
                </center>
                <div class="row">
                  <div class="col-md-6"style=" text-align: right;">
                   <a href="#"> <p>Link Not Received?</p></a>

                  </div>
                  <div class="col-md-6">
                    <a href="#" class="resend-code"><p style="color: #CB652B; text-decoration: underline; font-size: 18px; font-family: Bahnschrift;"> Resend the link</p> </a>
                  </div>
                </div>
                <br>
              
              </form>
             </div>
          </div>
        <div class="col-md-6">
          <img class="d-inline-block" src="{{url('/')}}/assets/img/gallery/forgot.png" alt="login" style="margin-left: 100px;" />

        </div>
        </div>
      </div>
    </section>


@endsection