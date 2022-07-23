<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link" target="_blank"><i class="fas fa-globe"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- User manu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <div class="image">
                    @if (!empty(Auth::user()->image))
                        <img src="{{ asset('public') }}/{{ Auth::user()->image }}" class="img-circle elevation-2"
                            width="30px" alt="User Image">
                    @else
                        <img src="{{ asset('/public/assets/backend/images/no-image.png') }}"
                            class="img-size-50 mr-3 img-circle" alt="User Image">
                    @endif

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        @if (!empty(Auth::user()->image))
                            <img src="{{ asset('public') }}/{{ Auth::user()->image }}"
                                class="img-size-50 mr-3 img-circle" alt="User Image">
                        @else
                            <img src="{{ asset('/public/assets/backend/images/no-image.png') }}"
                                class="img-size-50 mr-3 img-circle" alt="User Image">
                        @endif
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

                            </h3>
                            <p class="text-sm">{{ Auth::user()->email }}</p>
                            <a href="{{ route('admin.logout') }}" class="text-sm">
                                <i class="nav-icon fas fa-sign-out-alt"></i>Log out</a>
                        </div>
                    </div>
                    <!-- Message End -->
                </div>
                <div class="dropdown-divider"></div>
            </div>
        </li>

    </ul>
</nav>
