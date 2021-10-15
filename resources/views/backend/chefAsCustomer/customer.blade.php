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
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{ route('home') }}">
                            <b class="logo-icon">

                                <!-- Dark Logo icon -->
                                <img src="{{url('/')}}/dashboard/images/chef.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <!-- <img src="{{url('/')}}/dashboard/images/logo-icon.png" alt="homepage" class="light-logo" /> -->

                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <!-- <p>Chef Dashboard</p> -->
                                <img src="{{url('/')}}/dashboard/images/HomeChef Dashboard.png" alt="homepage" class="dark-logo" style="height: 20px;" />
                                <!-- Light Logo text -->
                                <img src="{{url('/')}}/dashboard/images/logo-light-text.png" class="light-logo" alt="homepage" />

                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->

                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <style>
            .sidebar-nav {
                padding-top: 7px !important;
            }
        </style>


        <aside class="left-sidebar" data-sidebarbg="skin6" style="background-color: #CB652B;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">

                    <ul id="sidebarnav">
                        <center>
                            <a href="#">
                                <img src="{{url('/')}}/dashboard/images/Clip.png" alt="dashboard_logo" class="dark-logo" />
                            </a>
                        </center>

                        <li class="list-divider"></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{route('status.index')}}" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">My Profile</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">My Orders</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">Favorities</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">Payment Methods</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('chef.address.create') }}" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">Delivery Address</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="ticket-list.html" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">HC Notifications</span>
                            </a>
                        </li>
                        <br><br>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <li class="sidebar-item"><button style="margin-left: 44px;" type="submit" class="sidebar-link sidebar-link" aria-expanded=" false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu"></span>Log Out</button>

                        </form>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
            <footer class="footer text-center text-muted">
                <div class="container-fluid pd-t-0-f ht-100p">
                    <span>Copyright &copy; 2020 <a href="#">Halal Food</a>. Designed by <a href="https://www.einnovention.us/">Einnovention</a> All rights reserved.</span>
                </div>
            </footer>
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

    @yield('page_js')
</body>

</html>