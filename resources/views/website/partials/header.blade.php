<header id="header" class="header header-transparent" style="background: transparent">
    <nav class="navbar navbar-expand-lg sticky-navbar">
      <div class="container">
        <a class="navbar-brand logos" href="{{ route('index') }}">
          @if (request()->routeIs('tracker.index') || request()->routeIs('request-quote') || request()->routeIs('tracker.search'))
            <img width="120" src="public/web/assets/images/logo/logo-dark.png" class="logo-light" alt="logo">
            <img src="public/web/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          @else
            <img src="public/web/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="public/web/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          @endif
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav ml-auto ">
            <li class="nav__item">
              <a href="{{ route('index') }}" class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} dropdown-toggle nav__item-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
              
            </li><!-- /.nav-item -->
            <li class="nav__item">
              <a href={{ route('about') }} class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} dropdown-toggle nav__item-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
        
              <!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item">
              <a href="{{ route('services') }}" class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} dropdown-toggle nav__item-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
             
            </li><!-- /.nav-item -->

            <li class="nav__item">
              <a href="{{ route('faqs') }}" class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} dropdown-toggle nav__item-link {{ request()->routeIs('faqs') ? 'active' : '' }}">FAQs</a>
             
            </li><!-- /.nav-item -->
           
      
            <li class="nav__item">
              <a href="{{ route('contact') }}" class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} nav__item-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
            </li><!-- /.nav-item -->
          </ul><!-- /.navbar-nav -->
        </div><!-- /.navbar-collapse -->
        <div class="navbar-modules">
          <ul class="modules__wrapper d-flex align-items-center list-unstyled">
            <li>
              <a href="#" class="{{ (request()->routeIs('tracker.index') || request()->routeIs('tracker.search') || request()->routeIs('request-quote')) ? 'text-dark' : '' }} module__btn module__btn-search"><i class="fa fa-search"></i></a>
            </li>
            <li class="d-none d-lg-block">
              <a href="{{ route('request-quote') }}" class="module__btn btn__request btn">
                <span>Request A Quote</span><i class="icon-arrow-right"></i>
              </a>
            </li>
          
          </ul><!-- /.modules-wrapper -->
        </div><!-- /.navbar-modules -->
      </div><!-- /.container -->
    </nav><!-- /.navabr -->
  </header><!-- /.Header -->
