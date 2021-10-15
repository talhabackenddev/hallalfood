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

            @if (requeststatus() == 0 || requeststatus() == 1)
            <ul id="sidebarnav">
                <center>
                    <a href=" {{route('profile.edit')}}">
                        <img src="{{ asset('storage/'. auth()->user()->avatar) }}" style="    height: 100px;
    width: 100px;   clip-path: circle();" alt="dashboard_logo" class="dark-logo" />
                    </a>

                </center>

                <li class="list-divider"></li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{route('status.index')}}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Application Status</span>
                    </a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Publish new offer
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Inbox</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Manage orders</span></a></li>

                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">My offers </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <!-- <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span class="hide-menu"> Wallet
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span class="hide-menu"> Form Grids
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span class="hide-menu"> Checkboxes &
                                    Radios
                                </span></a>
                        </li> -->
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Wallet </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <!-- <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span class="hide-menu"> Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span class="hide-menu"> Dark Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span class="hide-menu">
                                    Sizing Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><span class="hide-menu">
                                    Coloured
                                    Table Layout
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><span class="hide-menu">
                                    Basic
                                    Datatables
                                    Layout
                                </span></a>
                        </li> -->
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Packaging </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <!-- <li class="sidebar-item"><a href="chart-morris.html" class="sidebar-link"><span class="hide-menu"> Morris Chart
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-chart-js.html" class="sidebar-link"><span class="hide-menu"> ChartJs
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-knob.html" class="sidebar-link"><span class="hide-menu">
                                    Knob Chart
                                </span></a>
                        </li> -->
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span class="hide-menu">Vacation mode </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <!-- <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><span class="hide-menu"> Buttons
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><span class="hide-menu"> Modals </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><span class="hide-menu"> Tabs </span></a></li>
                        <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><span class="hide-menu"> Tooltip &
                                    Popover</span></a></li>
                        <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><span class="hide-menu">Notification</span></a></li>
                        <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><span class="hide-menu">Progressbar</span></a></li>
                        <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><span class="hide-menu">Typography</span></a></li>
                        <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><span class="hide-menu">Bootstrap
                                    UI</span></a></li>
                        <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><span class="hide-menu">Breadcrumb</span></a></li>
                        <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><span class="hide-menu">List
                                    Media</span></a></li>
                        <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><span class="hide-menu"> Grid </span></a></li>
                        <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><span class="hide-menu">
                                    Carousel</span></a></li>
                        <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><span class="hide-menu">
                                    Scrollspy</span></a></li>
                        <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><span class="hide-menu"> Toasts</span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><span class="hide-menu"> Spinner </span></a>
                        </li> -->
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" style="background-color: gray ;" href="#" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu">Notifications
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('chef.password.change') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Change Password</span></a></li>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <li class="sidebar-item"><button style="margin-left: 44px;" type="submit" class="sidebar-link sidebar-link" aria-expanded=" false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu"></span>Log Out</button>

                </form>
            </ul>
            @else
            <ul id="sidebarnav">
                <center>
                    <a href=" {{route('profile.edit')}}">
                        <img src="{{ asset('storage/'. auth()->user()->avatar) }}" style="    height: 100px;
    width: 100px;   clip-path: circle();" alt="dashboard_logo" class="dark-logo" />
                    </a>

                </center>

                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('status.index')}}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Application Status</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Publish new offer
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Inbox</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Manage orders</span></a></li>

                <li class="list-divider"></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">My offers </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span class="hide-menu"> Wallet
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span class="hide-menu"> Form Grids
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span class="hide-menu"> Checkboxes &
                                    Radios
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Wallet </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span class="hide-menu"> Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span class="hide-menu"> Dark Basic Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span class="hide-menu">
                                    Sizing Table
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><span class="hide-menu">
                                    Coloured
                                    Table Layout
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><span class="hide-menu">
                                    Basic
                                    Datatables
                                    Layout
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Packaging </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="chart-morris.html" class="sidebar-link"><span class="hide-menu"> Morris Chart
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-chart-js.html" class="sidebar-link"><span class="hide-menu"> ChartJs
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="chart-knob.html" class="sidebar-link"><span class="hide-menu">
                                    Knob Chart
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span class="hide-menu">Vacation mode </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><span class="hide-menu"> Buttons
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><span class="hide-menu"> Modals </span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><span class="hide-menu"> Tabs </span></a></li>
                        <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><span class="hide-menu"> Tooltip &
                                    Popover</span></a></li>
                        <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><span class="hide-menu">Notification</span></a></li>
                        <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><span class="hide-menu">Progressbar</span></a></li>
                        <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><span class="hide-menu">Typography</span></a></li>
                        <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><span class="hide-menu">Bootstrap
                                    UI</span></a></li>
                        <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><span class="hide-menu">Breadcrumb</span></a></li>
                        <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><span class="hide-menu">List
                                    Media</span></a></li>
                        <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><span class="hide-menu"> Grid </span></a></li>
                        <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><span class="hide-menu">
                                    Carousel</span></a></li>
                        <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><span class="hide-menu">
                                    Scrollspy</span></a></li>
                        <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><span class="hide-menu"> Toasts</span></a>
                        </li>
                        <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><span class="hide-menu"> Spinner </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu">Notifications
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('chef.password.change') }}" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu">Change Password
                        </span></a>
                </li>
                <br><br>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('chef.chefAsCustomer') }}" aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Customer mode </span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('chef.password.change') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Change Password</span></a></li>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <li class="sidebar-item"><button style="margin-left: 44px;" type="submit" class="sidebar-link sidebar-link" aria-expanded=" false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu"></span>Log Out</button>

                </form>
                </li>
            </ul>
            @endif
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>