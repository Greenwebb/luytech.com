<header class="header navbar navbar-expand-sm">
    <ul class="navbar-item theme-brand flex-row  text-center">
        <li class="nav-item">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <i class="las la-bars"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-item flex-row ml-md-0 ml-auto">
        <li class="nav-item align-self-center search-animated">
            <i class="las la-search toggle-search"></i>
            <form class="form-inline search-full form-inline search" action="{{ url('/pages/search-result') }}" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder=" {{__('Search here')}}">
                </div>
            </form>
        </li>
       
    </ul>
    <ul class="navbar-item flex-row ml-md-auto">
        <!-- Using Switch option -->
        <!--<li class="nav-item dropdown fullscreen-dropdown">
            <div class="switch-container mb-0 pl-0">
                <label class="switch">
                    <input id="theme-switch" type="checkbox">
                    <span class="slider round primary-switch"></span>
                </label>
                <p class="ml-3 text-dark">Dark</p>
            </div>
        </li>-->
        <li class="nav-item dropdown  fullscreen-dropdown">
            <a class="nav-link night-light-mode"  href="javascript:void(0);">
                <i class="las la-moon"id="darkModeIcon"></i>
            </a>
        </li>
        <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
            <a class="nav-link full-screen-mode" href="javascript:void(0);">
                <i class="las la-compress" id="fullScreenIcon"></i>
            </a>
        </li>
      
        {{-- <li class="nav-item dropdown message-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-envelope"></i>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                <div class="nav-drop is-notification-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-black font-12 strong">{{ __('3 new mails') }}</span>
                            <a class="text-muted font-12" href="#">
                                {{ __('Mark all read') }}
                            </a>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a class="account-item">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ asset('assets/img/profile-11.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Jennifer Queen</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{__('Permission Required')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item marked-read">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-10.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Lara Smith</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{('Invoice needed')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item marked-read">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-9.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Victoria Williamson</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{ __('Account need to be synced') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr class="account-divider">
                            <div class="text-center">
                                <a class="text-primary strong font-13" href="{{ url('/apps/email/inbox') }}">{{ __('View All') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li> --}}
        {{-- <li class="nav-item dropdown notification-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle position-relative" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-bell"></i>
                <div class="blink">
                    <div class="circle"></div>
                </div>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                <div class="nav-drop is-notification-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-black font-12 strong">{{ __('5 Notifications') }}</span>
                            <a class="text-muted font-12" href="#">
                                {{ __('Clear All') }}
                            </a>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a class="account-item" href="{{ url('/apps/ecommerce/orders') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-box font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('2 New orders placed') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{__('10 sec ago')}}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="javascript:void(0)">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-user-plus font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('New User registered') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('5 minute ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/apps/tickets/list') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-grin-beam font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('21 Queries solved') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('1 hour ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="javascript:void(0)">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-cloud-download-alt font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('New update available') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('1 day ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <hr class="account-divider">
                            <div class="text-center">
                                <a class="text-primary strong font-13" href="{{ url('/pages/notifications') }}"> {{__('View All')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li> --}}
    </ul>
    <ul class="navbar-item flex-row">
        {{-- <li class="nav-item dropdown header-setting">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                <i class="las la-sliders-h"></i>
            </a>
        </li> --}}
    </ul>
</header>
