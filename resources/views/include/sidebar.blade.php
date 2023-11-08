<nav id="sidebar">
    @include('include.logo')
    <div class="multiple-options">
       <a href="{{ route('dashboard') }}"><button type="button" class="dropdown-toggle" >
            <i class="las la-tachometer-alt font-25"></i><span class="text">{{__('Dashboard')}}</span> <div><i class="las la-angle-up"></i><i class="las la-angle-down"></i></div>
        </button></a> 
      
    </div>
    <ul class="list-unstyled menu-categories" id="accordionExample">

        <li class="menu">
            <a href="#app"  data-active="{{ is_active_route(['apps/*']) }}" data-toggle="collapse" aria-expanded="{{ is_active_route(['apps/*']) }}" class="dropdown-toggle">
                <div class="">
                    <i class="lab la-medapps"></i>
                    <span>{{__('Requests')}}</span>
                </div>
                <div>
                    <i class="las la-angle-down sidemenu-down-icon"></i>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled show" id="app" data-parent="#accordionExample">
                {{-- <li class=" {{ active_class(['order-inquiries']) }}">
                    <a data-active="{{ is_active_route(['order-inquiries']) }}" href="{{ route('request.orders') }}">Order Requests </a>
                </li> --}}
                <li class=" {{ active_class(['quote-inquiries']) }}">
                    <a data-active="{{ is_active_route(['quote-inquiries']) }}" href="{{ route('request.quote') }}"> Quote Inquiries </a>
                </li>
                <li class=" {{ active_class(['apps/chat']) }}">
                    <a data-active="{{ is_active_route(['contact-inquiries']) }}" href="{{ route('request.inquiries') }}"> Contact Inquiries </a>
                </li>
                
                
            </ul>
            
        </li>
        
        
        
    </ul>
    <div class="used-space">
        <h6>{{__('Used Space')}}</h6>
        <p>{{__('Last updated on 05:12 pm')}}</p>
        <div class="used-count">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p>{{__('25% Used')}}</p>
        </div>
    </div>
    <ul class="navbar-item theme-account flex-row  text-center">
        <li class="nav-item dropdown user-profile-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span>
                                <img src="https://play-lh.googleusercontent.com/W3VsSBWwRkgu3VU4vz0AHItfbhGKlYbgqLXJAihtr-QYgMO1A3g9_eyrAbqOxANa7qc" alt="avatar">
                                @auth 
                                <span class="font-12 ml-2">{{auth()->user()->fname.' '.auth()->user()->lname}}</span>
                                @else
                                Administrator
                                @endauth
                            </span>
                <span class="d-flex flex-column font-10">
                                <i class="las la-angle-up"></i>
                                <i class="las la-angle-down"></i>
                            </span>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="nav-drop is-account-dropdown">
                    <div class="inner">
                        <div class="nav-drop-header mb-2 px-2">
                            <span class="text-primary font-13">{{__('Welcome Admin !')}}</span>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            {{-- <a id="profile-link" class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <div class="media-left">
                                        <div class="image">
                                            <img class="rounded-circle avatar-xs" src="{{asset('assets/img/profile-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-content ml-2">
                                        <h6 class="font-12 mb-0 strong">{{__('John')}}</h6>
                                    </div>
                                    <div class="media-right">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <i class="las la-user font-20"></i>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{__('My Account')}}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/timeline') }}">
                                <div class="media align-center">
                                    <i class="las la-briefcase font-20"></i>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{__('My Activity')}}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('authentications/style3/locked') }}">
                                <div class="media align-center">
                                    <i class="las la-lock font-20"></i>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{__('Lock Screen')}}</h6>
                                    </div>
                                </div>
                            </a> --}}
                            <a class="account-item"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <div class="media align-center">
                                    <i class="las la-sign-out-alt font-20"></i>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong ">{{__('Logout')}}</h6>
                                    </div>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
