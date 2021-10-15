@extends('layouts.app')
@section('page_css')
<link rel="stylesheet" href="{{url('/')}}/assets/build/css/intlTelInput.css">
@endsection

@section('content')

<section class="py-5 overflow-hidden banner bg-primary" id="home">
    <div class="container-fluid">
        <div class="row flex-center">
            <div class="col-md-5 col-lg-7 order-0 order-md-1 mt-8 mt-md-0">
                <a class="" href="#!" style="margin-top: -230px;">
                    <img class="img-fluid" src="{{url('/')}}/assets/img/gallery/Group1216.png" alt="hero-header" />
                </a>
            </div>
            <div class="form-column col-lg-5 col-md-12 col-sm-12 py-8 text-md-start text-center">
                <div class="default-form contact-form" style=" width: 530px;">
                    <div class="title">
                        <h1 style="font-family: Rockwell; text-align:center; color:#CB652B; font: size 20px; padding-top:0px;">Earn money doing what you enjoy!</h1>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('homechefreg')}}" method="post" id="email-form" style="color: #707070; margin-left: 40px; margin-right: 20px; padding-top:10px;">
                        @csrf
                        <div class="row mid-spacing" style="width: 515px;">
                            <div class="form-group mb-0 col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="first_name" class="first_name" placeholder="">
                                <label>First name</label>

                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="last_name" class="last_name" placeholder="">
                                <label>Last Name</label>

                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" class="form-control" name="email" class="email" placeholder="">
                                <label>Email</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                <label>Phone</label>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <input type="text" class="form-control" name="refBy" class="" placeholder="">
                                <label>Reffer By</label>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="NUMBER" class="form-control" name="postCode" class="number" placeholder="">
                                <label>Postal Code</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="NUMBER" class="form-control" name="refCode" class="number" placeholder="">
                                <label>Refferral Code (Optional)</label>
                            </div>
                            <div class="form-group col-lg-10 col-md-10 col-sm-12">
                                <input type="text" class="form-control" name="address" class="" placeholder="">
                                <label>Address</label>

                            </div>
                            <div class="form-group col-lg-2 col-md-2 col-sm-12" style="margin-left: -11px;">
                                <i class="fa fa-map-marker" style="font-size:33px;color:#CB652B"></i>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="street" class="street" placeholder="">
                                <label>Street</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="city" class="number" placeholder="">
                                <label>City</label>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <input type="text" class="form-control" name="cuisine" class="" placeholder="">
                                <label>Choose your Cusinies</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="Password" class="form-control" name="password" class="Password" placeholder="">
                                <label>Password</label>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="Password" class="form-control" name="password_confirmation" class="Password" placeholder="">
                                <label>Re-enter Password</label>
                            </div>
                            <div class="form-group col-lg-8 col-md-7 col-sm-12">
                                <p style="font-size: 16px; font-weight:600; color:#505050;">Do you already hava a food handling certificate?</p>
                                <p style="font-size: 14px; color:#505050;  margin-top: -15px;">If not, dont worry! we will support you get once</p>
                            </div>
                            <div class="form-group col-lg-4 col-md-5 col-sm-12">
                                <input type="radio" id="html" name="certificate" value="1">
                                  <span>Yes</span>
                                  <input type="radio" id="css" name="certificate" value="0">
                                  <span>No</span>
                            </div>
                            <div class="d-grid gap-3 col-lg-12 col-md-12 col-sm-12 col-sm-auto"><button class="btn btn-danger" type="submit" style="font-size: 25px; background-color:#CB652B; border-radius:20px; border-color:#CB652B; font-family:Rockwell;">Register</button>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <p style="color:#505050;">By clicking on submit, you agree on our <u>terms of service</u> as well as our<u> privacy policy</u></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->

<!-- ============================================-->
<!-- <section> begin ============================-->
<section style="padding-top: 2.0rem;">
    <div class="container">

        <div class="row justify-content-center g-0">
            <div class="col-lg-12">
                <div class="row" style="margin-top: -30px;">
                    <div class="col-lg-2" style="margin-left: -82px;">
                        <img src="{{url('/')}}/assets/img/gallery/group.png" alt="" style=" height: 321px; margin-top: -9px;">

                    </div>
                    <div class="col-lg-10 text-center mx-auto mb-md-5 mt-4" style=" width: 1030px;">
                        <u style="color: #CC652B;">
                            <h2 style="font-family: Sitka Small; color:#707070; font-weight:300;">What is Halal Homemade</h2>
                        </u>
                        <p style="line-height: 2rem; margin-left: -81px; font-size: 17px; font-family:Goudy Old Style; text-align: initial;">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>
                        <p style="line-height: 2rem; margin-left: -81px; font-size: 17px;font-family:Goudy Old Style; text-align: initial;">Dummy text is text that is used in the publishing industry or by web designers</p><br><br>
                        <u style="color: #CC652B;">
                            <h2 style="font-family: Sitka Small; color:#707070; font-weight:300;">You Control Everything</h2>
                        </u>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- end of .container-->
</section>

<section style="background-color: #F8F8F8;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="col-xs-12 col-sm-4 col-lg-10 margin-bottom-30">
                    <div class="col-xs-12">
                        <h4 style="font-family: Goudy Old Style; color:#707070;">Your dish, your price</h4>
                        <p style="font-size: 17px; font-family:Goudy Old Style; text-align: justify;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-10 margin-bottom-30">
                    <div class="col-xs-12">
                        <h4 style="font-family: Goudy Old Style; color:#707070;">Control your schedule</h4>
                        <p style="font-size: 17px; font-family:Goudy Old Style; text-align: justify;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-10 margin-bottom-30">
                    <div class="col-xs-12">
                        <h4 style="font-family: Goudy Old Style; color:#707070;">Simplified pick-up and delivery</h4>
                        <p style=" font-size: 17px; font-family:Goudy Old Style; text-align: justify;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 text-center">
                <img src="{{url('/')}}/assets/img/gallery/2.png" alt="" style="width: 470px; padding-top:30px;">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <u style="color: #CC652B;">
                <h2 style="font-family: Sitka Small; color:#707070; font-weight:300; text-align:center; margin-bottom:50px;">Halal Homemade Benifits</h2>
            </u>
            <div class="col-xs-12 col-lg-6">
                <div class="col-xs-12 no-padding margin-bottom-30">
                    <div class="col-xs-12">
                        <h4 style="font-family: Segoe UI; color:#707070;">Right tools for you business growth</h4>
                        <p class="text-justify" style="font-family: Segoe UI;color: #707070;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content</p>
                    </div>
                </div>
            </div>
            <div class="row col-xs-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-lg-1">
                    <img src="{{url('/')}}/assets/img/gallery/line.png" alt="" style="height: 378px; margin-left: -63px; margin-top: 30px;">
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-7" style=" margin-left: -60px;">
                    <div class="col-xs-12 col-sm-4 col-lg-12 no-padding margin-bottom-20 row">
                        <div class="col-xs-12 col-lg-12">
                            <h5 style="font-family: Segoe UI; color:#707070;">A dedicated webpage</h5>
                            <p class="text-justify" style="font-family: Segoe UI; color: #707070;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-12 no-padding margin-bottom-20 row">
                        <div class="col-xs-12 col-lg-10">
                            <h5 style="font-family: Segoe UI; color:#707070;">inteligent sheduling</h5>
                            <p class="text-justify" style="font-family: Segoe UI; color: #707070;">Wummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content Wummy text is text that is used in the publishing industry or by web designers</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-12 no-padding margin-bottom-20 row">
                        <div class="col-xs-12 col-lg-10">
                            <h5 style="font-family: Segoe UI; color:#707070;">integrated chat function </h5>
                            <p class="text-justify" style="font-family: Segoe UI; color: #707070;">ummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' contentWummy text is text that is used in the publishing industry</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-12 no-padding margin-bottom-20 row">
                        <div class="col-xs-12 col-lg-10">
                            <h5 style="font-family: Segoe UI; color:#707070;">payment processing</h5>
                            <p class="text-justify" style="font-family: Segoe UI; color: #707070;">dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 center">
                    <img src="{{url('/')}}/assets/img/gallery/1.png" alt="" style=" height: 70%;">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-0">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-12 text-center ">
                <div class="row pb-5">
                    <u style="color: #CC652B;">
                        <h2 style="font-family: Sitka Small; color:#707070; font-weight:300; text-align:center; margin-bottom:-10px;">No Hidden fees</h2>
                    </u>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-12 my-4">
                <div class="text-center m-3">

                    <span class="dot"><img src="{{url('/')}}/assets/img/gallery/icon1.png" style="width: 50px;    padding-top: 15px;"></span>


                    <h5 style="font-family: Segoe UI; color:#707070; margin-bottom:20px;">No fees to join <br> Halal-Homemade</h5>
                    <p class="mb-md-0">dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-12 my-4">
                <div class="text-center m-3">

                    <span class="dot"><img src="{{url('/')}}/assets/img/gallery/icon2.png" style="width: 45px;    padding-top: 10px;"></span>


                    <h5 style="font-family: Segoe UI; color:#707070; margin-bottom:20px;">Everything is about transperancy</h5>
                    <p class="mb-md-0 text-center" style="font-family: Segoe UI; ">dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content</p>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>
<style>
    .dot {
        height: 90px;
        width: 90px;
        background-color: #F5F5F5;
        border-radius: 50%;
        display: inline-block;
    }

    .form-group>label {
        top: -57px;
        left: 18px;
        position: relative;
        background-color: white;
        padding: 0px 5px 0px 5px;
        font-size: 0.9em;
    }
</style>

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