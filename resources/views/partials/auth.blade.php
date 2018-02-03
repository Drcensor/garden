
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top"> 
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Garden') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                         <li><a href="products">Product</a></li>
                            <li><a href="form1">Order Form </a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">contact Us</a></li>
                            <li style="margin-right: 100px"><a href="#">Site Map</a></li>
                        <li>    <a href="form1"><img src="../images/trolly.png"> {{  $baskets }}</a>   </li>
                            <li class="dropdown">
                               
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
    <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
     {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span>
</a>
                                   
                                </a>

                                <ul class="dropdown-menu">
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
                                    <li>

                                        <a href="{{ route('user/accounts') }}">My Account</a>

                                    </li>

                                    <li>

                                        @auth
                        <a href="{{ url('/user') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth

                                    </li>

                                     <li>
                                            <a href="{{ url('user/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                                        </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

      
   
 
       