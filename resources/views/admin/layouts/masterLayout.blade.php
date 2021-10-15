<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="bootstrap admin panel template,bootstrap admin template premium,bootstrap backend template,bootstrap dashboard template,bootstrap panel template,dashboard admin bootstrap 4,dashboard template bootstrap 4,html css dashboard template,html dashboard template,html web app template,modern admin template,nice admin template,simple bootstrap admin template,simple dashboard html template,simple dashboard template bootstrap,template dashboard bootstrap 4" />

    <!-- Title -->
    <title> Mapro</title>

    <!--- Favicon -->
    <link rel="icon" href="{{asset('admin/img/red-mepro.png')}}" type="image/x-icon" />

    <!--- Icons css -->
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet">

    <!--- Right-sidemenu css -->
    <link href="{{asset('admin/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!--- Custom Scroll bar -->
    <link href="{{asset('admin/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!--- Style css -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('admin/css/style.css')}}">

    <!-- Colors css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('admin/css/colors/color.css')}}">

    <!--- Skinmodes css -->
    <link href="{{asset('admin/css/skin-modes.css')}}" rel="stylesheet">

    <!--- Darktheme css -->
    <link href="{{asset('admin/css/style-dark.css')}}" rel="stylesheet">

    <!--- Sidemenu css -->
    <link rel="stylesheet" href="{{asset('admin/css/single-sidemenu/singlemenu.css')}}">

    <!--  Map css-->
    <link href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!--- Animations css -->
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.css" />
    @yield('page_css')

</head>

<body class="main-body app sidebar-mini">

    <!-- Page -->
    <div class="page">

        <!-- Loader -->
        <div id="global-loader">
            <img src="{{asset('admin/img/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        @include('admin.layouts.sidebar');
        <!-- Main-content -->
        <div class="main-content singlemenu">

            @yield('content')
        </div>
        <!-- Main-content closed -->

        @include('admin.layouts.footer')

    </div>
    <!-- Page closed -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Popper js -->
    <script src="{{asset('admin/plugins/popper/popper.min.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Ionicons js -->
    <script src="{{asset('admin/plugins/ionicons/ionicons.js')}}"></script>

    <!-- Moment js -->
    <script src="{{asset('admin/plugins/moment/moment.js')}}"></script>

    <!-- Sparkline js -->
    <script src="{{asset('admin/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Piety js -->
    <script src="{{asset('admin/plugins/peity/jquery.peity.min.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Internal Flot js-->
    <script src="{{asset('admin/plugins/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>

    <!-- Internal Chart js-->
    <script src="{{asset('admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <!-- Sidemenu js -->
    <script src="{{asset('admin/plugins/side-menu/single-menu.js')}}"></script>

    <!-- Sidebar js -->
    <script src="{{asset('admin/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{asset('admin/plugins/sidebar/sidebar-custom.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{asset('admin/js/p-scroll1.js')}}"></script>

    <!-- Rating js-->
    <script src="{{asset('admin/plugins/rating/jquery.rating-stars.js')}}"></script>
    <script src="{{asset('admin/plugins/rating/jquery.barrating.js')}}"></script>

    <!--- Internal Echart Plugin -->
    <script src="{{asset('admin/plugins/echart/echart.js')}}"></script>

    <!--- Tooltip js -->
    <script src="{{asset('admin/js/tooltip.js')}}"></script>

    <!-- Internal Index js -->
    <script src="{{asset('admin/js/index.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.sampledata.js')}}"></script>
    <script src="{{asset('admin/js/chart.flot.sampledata.js')}}"></script>

    <!-- Custom js -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/130527/qrcode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
    @yield('page_js')

</body>

</html>