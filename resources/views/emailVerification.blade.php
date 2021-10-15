@extends('layouts.app')

@section('content')


<section class="" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6" style="width: 430px;">
                <div class="form-block mx-auto">
                    <div class="text-center mb-5">
                        <h3 style="font-family:Franklin Gothic; color: #CB652B;">Verify your email</h3>
                    </div>
                    <form action="#" method="post">
                        <center>
                            <p style="font-family: Bahnschrift; font-weight: semiLight;">Please send the 4 digits code sent to:</p>
                            <p style="font-family: Bahnschrift; font-weight: semiLight;">testapp@gmail.com</p>
                        </center>

                        <div class="form-group">
                            <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                            <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                            <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                            <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        </div>


                        <center>
                            <br><a href="#" class="resend-code">
                                <p style="color: #CB652B; text-decoration: underline; font-size: 22px; font-family: Bahnschrift;">Resend The Code</p>
                            </a>

                            <button value="confirm" style="padding: 5px 50px; background-color: #CB652B; border: none; border-radius: 25px; font-family: Gadugi; color: white; font-size: 22px; font-weight: 900;">
                                Confirm
                            </button>

                        </center>



                    </form>
                    <style>
                        input[type=text] {
                            margin: 0 5px;
                            height: 82px;
                            text-align: center;
                            line-height: 80px;
                            font-size: 50px;
                            border: solid 1px #ccc;
                            box-shadow: 0 0 5px #ccc inset;
                            outline: none;
                            width: 20%;
                            transition: all .2s ease-in-out;
                            border-radius: 20px;
                        }
                    </style>
                </div>
            </div>
            <div class="col-md-6">
                <img class="d-inline-block" src="{{url('/')}}/assets/img/gallery/email.png" alt="login" style="margin-left: 170px;" />

            </div>
        </div>
    </div>
</section>
@endsection