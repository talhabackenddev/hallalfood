<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll" style="padding-right: 70px;">

    <div class="container">
        <a class="navbar-brand d-inline-flex" href="{{ url('/') }}" style="align-items: baseline"><img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/logo.png" alt="logo" />
            <h3 style="font-family: Javanese Text; color: #CC652B; padding-left: 10px;">Halal Homemade</h3>
        </a> <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/Line.png" alt="logo" />

        <div class="col-md-4" style=" margin-left: 10px;">
            <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/language.png" alt="logo" style="position: relative;  left: 30px; " />

            <p>English - UK</p>


        </div>
        <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/Line.png" alt="logo" />

        <div class="col-md-6"></div>


    </div>

    <div class="col-md-6">


    </div>

    <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/Line.png" alt="logo" />

    <div class="col-md-2" style="text-align: center;">

        <a href=" {{route('create.homechefreg')}}">
            <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/chef.png" alt="logo" />
            <p>Become HomeChef</p>
        </a>


    </div>

    <div class="col-md-4">

        <ul class="navbar-nav ml-auto">
            <!-- <img class="d-inline-block" src="{{url('/')}}/assets/img/favicons/Line.png" alt="logo" style="margin-right: 10px;" /> -->

            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" style=" background-color: white; color: #CC652B; border: 2px solid #CC652B; padding: 6px 30px;  border-radius: 15px;">{{ __('Login') }}</a>
            </li>
            @endif

            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name }}
                </a>

                <a class="dropdown-item" href=" {{ route('password.change') }}">
                    {{ __('Change Password') }}
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                <!-- <a class="dropdown-item" href="{{ route('logout') }} " style=" background-color: white; color: #CC652B; border: 2px solid #CC652B; padding: 6px 30px;  border-radius: 15px;" onclick="event.preventDefault(); -->
                <a class="dropdown-item" href="{{ route('logout') }} " onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- </div> -->
            </li>
            @endguest
        </ul>
    </div>

</nav>