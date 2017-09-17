    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" style="height:100px">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-top:33px">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ URL::asset('/storage/logo/dog_logo.jpeg') }}" class="img-responsive" style="width:128px;height:72px;">
                    </a>
                </div>
               
             
                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="margin-top:25px">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        <li>
                            <a class="btn btn-social-icon btn-twitter" style="color:white;margin: 7px 5px 0 5px;">
                              <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-social-icon btn-facebook" style="color:white;margin: 7px 5px 0 5px;">
                              <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-social-icon btn-instagram" style="color:white;margin: 7px 5px 0 5px;">
                              <span class="fa fa-instagram"></span>
                            </a>
                        </li>                         
                            
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="redirect">FB Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>