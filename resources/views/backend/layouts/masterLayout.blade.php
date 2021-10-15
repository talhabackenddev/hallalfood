<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/dashboard/images/favicon.png">
    <title>Halal Food</title>
    <!-- Custom CSS -->
    <link href="{{url('/')}}/dashboard/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="{{url('/')}}/dashboard/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{url('/')}}/dashboard/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{url('/')}}/dashboard/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @yield('page_css')
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        @include('backend.layouts.header')
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('backend.layouts.sidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">


            <!--**********************************
               Content body start
            ***********************************-->
            <!-- <div class="container-fluid"> -->
            @yield('content')
            <!-- </div> -->
            <!--**********************************
               Content body End
            ***********************************-->

            <!-- footer -->
            @include('backend.layouts.footer')
            <!-- End footer -->

        </div>
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- End Wrapper -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('/')}}/dashboard/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{url('/')}}/dashboard/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{url('/')}}/dashboard/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{url('/')}}/dashboard/dist/js/app-style-switcher.js"></script>
    <script src="{{url('/')}}/dashboard/dist/js/feather.min.js"></script>
    <script src="{{url('/')}}/dashboard/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{url('/')}}/dashboard/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{url('/')}}/dashboard/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="{{url('/')}}/dashboard/extra-libs/c3/d3.min.js"></script>
    <script src="{{url('/')}}/dashboard/extra-libs/c3/c3.min.js"></script>
    <script src="{{url('/')}}/dashboard/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{url('/')}}/dashboard/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{url('/')}}/dashboard/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{url('/')}}/dashboard/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('/')}}/dashboard/dist/js/pages/dashboards/dashboard1.min.js"></script>

    @yeild('page_js')
</body>

</html>