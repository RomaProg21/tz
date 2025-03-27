<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!--! [Start] nxl-head-mobile-toggler !-->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--! [Start] nxl-head-mobile-toggler !-->
            <!--! [Start] nxl-navigation-toggle !-->
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            <!--! [End] nxl-navigation-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu-toggle !-->
            <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">

            </div>
            <!--! [End] nxl-lavel-mega-menu-toggle !-->

            <!--! [End] nxl-lavel-mega-menu !-->
        </div>
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">


                <div class="nxl-h-item d-none d-sm-flex">
                    <div class="full-screen-switcher">
                        <a href="javascript:void(0);" class="nxl-head-link me-0" onclick="$('body').fullScreenHelper('toggle');">
                            <i class="feather-maximize maximize"></i>
                            <i class="feather-minimize minimize"></i>
                        </a>
                    </div>
                </div>

                {{-- <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <i class="feather-clock"></i>
                        <span class="badge bg-success nxl-h-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-timesheets-menu">
                        <div class="d-flex justify-content-between align-items-center timesheets-head">
                            <h6 class="fw-bold text-dark mb-0">Timesheets</h6>
                            <a href="javascript:void(0);" class="fs-11 text-success text-end ms-auto" data-bs-toggle="tooltip" title="Upcomming Timers">
                                <i class="feather-clock"></i>
                                <span>3 Upcomming</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-column timesheets-body">
                            <i class="feather-clock fs-1 mb-4"></i>
                            <p class="text-muted">No started timers found yes!</p>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Started Timer</a>
                        </div>
                        <div class="text-center timesheets-footer">
                            <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">Alls Timesheets</a>
                        </div>
                    </div>
                </div> --}}
                <div class="dropdown nxl-h-item" id="notifications">

                        <notifications>

                        </notifications>

                </div>
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="{{asset('images/avatar/1.png')}}" alt="user-image" class="img-fluid user-avtar me-0">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('images/avatar/1.png')}}" alt="user-image" class="img-fluid user-avtar">
                                <div>
                                    <h6 class="text-dark mb-0">{{Auth::user()->name}} <span class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                    <span class="fs-12 fw-medium text-muted">{{Auth::user()->email}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="d-flex">
                            <button type="submit" class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                           <i class="feather-log-out"></i>
                                                           Выйти
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>