<!--header-->
<div class="header">
    <div class="container">
        <div class="header-grids">
            <div class="logo">
                <h1><a href="{{ route('home') }}"><span>BD</span>Travel</a></h1>

            </div>
            <!--navbar-header-->
            <div class="header-dropdown">
                <div class="emergency-grid">
                    <ul>
                        <li>Call Us : </li>
                        <li class="call">+8801773340092</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="nav-top">
            <div class="top-nav">
                <span class="menu"><img src="{{ asset('public/assets/frontend/images/menu.png') }}"
                        alt="" /></span>
                <ul class="nav1">
                    <li class="{{ Request::routeIs(['home']) ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.flight']) ? 'active' : '' }}"><a
                            href="{{ route('frontend.flight') }}">Flights</a></li>
                    <li class="{{ Request::routeIs(['frontend.hotels']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.hotels') }}">Hotels</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.tour.package']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.tour.package') }}">Package Tour</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.hajj']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.hajj') }}">Hajj & Umrah</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.visa.student']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.visa.student') }}">Student Visa</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.visa.tourist']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.visa.tourist') }}"> Tourist Visa</a>
                    </li>
                    <li class="{{ Request::routeIs(['frontend.contact.us']) ? 'active' : '' }}">
                        <a href="{{ route('frontend.contact.us') }}">Contact Us</a>
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="dropdown-grids">
                @if (Auth::guard('user')->check())
                    <div id="loginContainer"><a href="#"
                            id="loginButton"><span>{{ Auth::guard('user')->user()->name }}</span></a>
                        <div id="loginBox">
                            <form id="loginForm" action="{{ route('frontend.user.logout') }}" method="POST">
                                @csrf
                                <input type="submit" id="login" value="Log out">
                            </form>
                        </div>
                    </div>
                @else
                    <div id="loginContainer">
                        <a href="{{ route('frontend.login') }}"><span>Login</span></a>
                    </div>
                @endif
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//header-->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function() {
        $("ul.nav1").slideToggle(300, function() {
            // Animation complete.
        });
    });
</script>
<!-- /script-for-menu -->
