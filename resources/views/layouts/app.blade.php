<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Halal Food</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="{{url('/')}}/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="{{url('/')}}/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <link href="{{url('/')}}/assets/css/theme.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  @yield('page_css')

</head>

<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  @yield('content')
  <main class="main" id="top">

    @include('layouts.header')



    @include('layouts.footer')


  </main>

  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->



  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->


  <script src="{{url('/')}}/vendors/%40popperjs/popper.min.js"></script>
  <script src="{{url('/')}}/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="{{url('/')}}/vendors/is/is.min.js"></script>
  <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="{{url('/')}}/vendors/fontawesome/all.min.js"></script>
  <script src="{{url('/')}}/assets/js/theme.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
  <script src="{{url('/')}}/assets/build/js/intlTelInput.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="{{url('/')}}/assets/build/js/intlTelInput-jquery.min.js"></script>

  @yield('page_js')
</body>


<!-- Mirrored from technext.github.io/foodwagon/v1.0.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Sep 2021 12:09:27 GMT -->

</html>