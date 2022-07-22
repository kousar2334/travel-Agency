@php
$siteInfo = siteInfo();
@endphp
<aside class="main-sidebar elevation-4 sidebar-dark-maroon">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link navbar-secondary">
        @if ($siteInfo->logo != null)
            <img src="{{ asset('/public') }}/{{ $siteInfo->logo }}" alt="Logo" class="brand-image">
        @else
            <span class="brand-text bangla-font font-weight-light text-center"> {{ $siteInfo->site_name }}</span>
        @endif
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (!empty(Auth::user()->image))
                    <img src="{{ asset(Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{ asset('/public/assets/backend/images/no-image.png') }}" class="img-circle elevation-2"
                        alt="User Image">
                @endif

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ Request::routeIs('admin.dashboard') ? 'active ' : '' }} nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dahboard
                        </p>
                    </a>
                </li>
                <!--Hotel Booking Module-->
                <li class="{{ Request::routeIs(['admin.hotel.bookings']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.hotel.bookings') }}"
                        class="{{ Request::routeIs(['admin.hotel.bookings']) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Hotel Bookings
                        </p>
                    </a>
                </li>
                <!--End Hotel Booking Module-->
                <!-- Air Tickets Module-->
                <li class="{{ Request::routeIs(['admin.air.tickets']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.air.tickets') }}"
                        class="{{ Request::routeIs(['admin.air.tickets']) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>
                            Air Tickets
                        </p>
                    </a>
                </li>
                <!--End  Air Tickets Module-->
                <!-- Package Tour-->
                <li class="{{ Request::routeIs(['admin.tour.package.queries']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.tour.package.queries') }}"
                        class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-suitcase-rolling"></i>
                        <p>
                            Package Tour
                        </p>
                    </a>

                </li>
                <!--End Package Tour Module-->
                <!-- HAJJ & UMRAH -->
                <li class="{{ Request::routeIs(['admin.hajj.queries']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.hajj.queries') }}"
                        class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-mosque"></i>
                        <p>
                            Hajj & Umrah
                        </p>
                    </a>

                </li>
                <!--End  HAJJ & UMRAH  Module-->
                <!-- Student Visa-->
                <li class="{{ Request::routeIs(['admin.visa.student.queries']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.visa.student.queries') }}"
                        class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Student Visa
                        </p>
                    </a>

                </li>
                <!--End Student Visa Module-->
                <!-- Tourist Visa-->
                <li class="{{ Request::routeIs(['admin.visa.tourist.queries']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.visa.tourist.queries') }}"
                        class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-plane-departure"></i>
                        <p>
                            Tourist Visa
                        </p>
                    </a>

                </li>
                <!--End Tourist Visa Module-->
                <!-- Messages Module-->
                <li class="{{ Request::routeIs(['admin.contact.messages']) ? 'menu-open' : '' }} nav-item">
                    <a href="{{ route('admin.contact.messages') }}"
                        class="{{ Request::routeIs(['admin.contact.messages']) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Messages
                        </p>
                    </a>
                </li>
                <!--End  Messages Module-->
                <!-- Tourist Visa-->
                <li
                    class="{{ Request::routeIs(['admin.promotion.deals.edit', 'admin.promotion.deals.add.new', 'admin.promotion.deals', 'admin.promotion.campain.new', 'admin.promotion.campain']) ? 'menu-open' : '' }} nav-item has-treeview">
                    <a href="#" class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Promotions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.promotion.campain') }}"
                                class="{{ Request::routeIs('admin.promotion.campain') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>Campains</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.promotion.deals') }}"
                                class="{{ Request::routeIs('admin.promotion.deals') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>Deals</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="{{ Request::routeIs('') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>Scollings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--End Tourist Visa Module-->
                <!-- Settings Visa-->
                <li
                    class="{{ Request::routeIs(['admin.setting.about.us', 'admin.setting.email', 'admin.setting.general']) ? 'menu-open' : '' }} nav-item has-treeview">
                    <a href="#" class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.general') }}"
                                class="{{ Request::routeIs('admin.setting.general') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.email') }}"
                                class="{{ Request::routeIs('admin.setting.email') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>Email Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="{{ Request::routeIs('') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>Social Accounts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.setting.about.us') }}"
                                class="{{ Request::routeIs('admin.setting.about.us') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--End Settings Module-->
                <!-- Users-->
                <li class="{{ Request::routeIs([]) ? 'menu-open' : '' }} nav-item has-treeview">
                    <a href="#" class="{{ Request::routeIs([]) ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="{{ Request::routeIs('') ? 'active ' : '' }} nav-link">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <p>new</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!--End Users Module-->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
