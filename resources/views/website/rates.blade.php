@extends('website.layouts.app')
@section('content')
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ route('index') }}">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item with-dropdown">
                <a href="{{ route('index') }}" class="dropdown-toggle nav__item-link active">Home</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="{{ route('index') }}" class="nav__item-link">Home Main</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-modern.php" class="nav__item-link">Home Moderm</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-classic.php" class="nav__item-link">Home classic</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href={{ route('about') }} class="dropdown-toggle nav__item-link">Company</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href={{ route('about') }} class="nav__item-link">About Us</a></li>
                  <!-- /.nav-item -->
                  {{-- <li class="nav__item"><a href="{{ route('whyus') }}" class="nav__item-link">Why Choose Us</a></li> --}}
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="leadership-team.php" class="nav__item-link">Leadership Team</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="global-locations.php" class="nav__item-link">Global Locations</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="gallery.php" class="nav__item-link">Our Gallery</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="careers.php" class="nav__item-link">careers</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>Transport Services</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Warehousing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Air Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Ocean Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Road Freight</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Supply Chain</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-service.php">Packaging</a></li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <h6>Industry Solutions</h6>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Retail &
                              Consumer</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Sciences &
                              Healthcare</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Industrial &
                              Chemical</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Power
                              Generation</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Food &
                              Beverage</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="single-industry.php">Oil & Gas</a></li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="blog-grid.php" class="dropdown-toggle nav__item-link">News & Media</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="blog-grid.php" class="nav__item-link">blog grid</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="blog-single-post.php" class="nav__item-link">blog single post</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="case-studies.php" class="nav__item-link">case studies</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="case-studies-single.php" class="nav__item-link">case study Single</a>
                  </li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="{{ route('request-quote') }}" class="nav__item-link">request a quote</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="track-shipment.php" class="nav__item-link">track and trace</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="find-location.php" class="nav__item-link">find Location</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="rates.php" class="nav__item-link">Rates & Pricing</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="faqs.php" class="nav__item-link">help and faqs</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{ route('contact') }}" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-modules">
            <ul class="modules__wrapper d-flex align-items-center list-unstyled">
              <li>
                <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
              </li>
              <li class="d-none d-lg-block">
                <a href="{{ route('request-quote') }}" class="module__btn btn__request btn">
                  <span>Request A Quote</span><i class="icon-arrow-right"></i>
                </a>
              </li>
              <li>
                <div class="dropdown">
                  <button class="module__btn dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                    <span>En</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="langDrobdown">
                    <a class="dropdown-item" href="#">
                      <img src="assets/images/flags/united-states.png" alt="us"><span>Us</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <img src="assets/images/flags/germany.png" alt="germany"><span>germany</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul><!-- /.modules-wrapper -->
          </div><!-- /.navbar-modules -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Rates & Pricing</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Fetures</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rates</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      fancybox Layout 1
    ============================= -->
    <section id="fancyboxLayout1" class="fancybox-layout1 pb-50">
      <div class="container">
        <div class="row">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-wallet"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Transparent Pricing</h4>
                <p class="fancybox__desc">International supply chains involves challenging regulations.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-search"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Real-Time Tracking</h4>
                <p class="fancybox__desc">Ensure customers’ supply chains are fully compliant by practices.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-trolley"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Warehouse Storage</h4>
                <p class="fancybox__desc">Depending on your product, we provide warehouse activities.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-package-6"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Security For Cargo</h4>
                <p class="fancybox__desc">High security requirements and are certified to local standards.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-payment-method"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Easy Payment Methods</h4>
                <p class="fancybox__desc">You can make use the easy convenient payment options, listed below.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-call-center"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">24/7 Hours Support</h4>
                <p class="fancybox__desc">Logistics operations by relieving you of the worries associated with freight
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #7 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-delivery-4"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Fast & Efficient Delivery</h4>
                <p class="fancybox__desc">We enhance our logistics operations by relieving you of the worries.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <!-- fancybox item #8 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-wishlist"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Personalised solutions</h4>
                <p class="fancybox__desc">We continue to pursue that same vision in today's complex solutions.</p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.fancybox Layout1 -->

    <!-- =========================
      Pricing 
      =========================== -->
    <section id="pricing1" class="pricing pricing-1">
      <div class="pricing-bg bg-parallax bg-overlay bg-overlay-secondary">
        <div class="bg-img">
          <img src="assets/images/backgrounds/1.jpg" alt="background">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">Unbeatable Rates</span>
              <h2 class="heading__title color-white">Pricing Plans</h2>
              <p class="heading__desc color-white">We presents the following case studies that exemplify the type of
                solutions and services we are providing across our customer base.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- pricing item #1-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div class="pricing__header">
                <h5 class="pricing__title">Starter</h5>
                <p class="pricing__desc">For small business</p>
                <div class="pricing__price">
                  <span class="pricing__currency">$</span>50<span class="pricing__time">Per Month</span>
                </div>
              </div><!--  Pricing header  -->
              <div class="pricing__content">
                <ul class="pricing__list list-unstyled">
                  <li>Five Brand Monitors</li>
                  <li>Five Keyword Monitors</li>
                  <li>Basic Quota </li>
                  <li>PDF reports</li>
                  <li>Full Social Profiles</li>
                  <li>500 Search Results </li>
                </ul>
              </div><!-- /.Pricing-content  -->
              <a class="btn btn__secondary btn__block" href="#">Purchase Now</a>
            </div>
          </div><!-- /.pricing-item -->
          <!-- pricing item #2-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div class="pricing__header">
                <h5 class="pricing__title">Basic</h5>
                <p class="pricing__desc">For larger companies.</p>
                <div class="pricing__price">
                  <span class="pricing__currency">$</span>70<span class="pricing__time">Per Month</span>
                </div>
              </div><!--  Pricing header  -->
              <div class="pricing__content">
                <ul class="pricing__list list-unstyled">
                  <li>Five Brand Monitors</li>
                  <li>Five Keyword Monitors</li>
                  <li>Basic Quota </li>
                  <li>PDF reports</li>
                  <li>Full Social Profiles</li>
                  <li>500 Search Results </li>
                </ul>
              </div><!-- /.Pricing-content  -->
              <a class="btn btn__primary btn__hover3 btn__block" href="#">Purchase Now</a>
            </div>
          </div><!-- /.pricing-item -->
          <!-- pricing item #3-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div class="pricing__header">
                <h5 class="pricing__title">Advanced Plan</h5>
                <p class="pricing__desc">For bigger enterprises.</p>
                <div class="pricing__price">
                  <span class="pricing__currency">$</span>90<span class="pricing__time">Per Month</span>
                </div>
              </div><!--  Pricing header  -->
              <div class="pricing__content">
                <ul class="pricing__list list-unstyled">
                  <li>Five Brand Monitors</li>
                  <li>Five Keyword Monitors</li>
                  <li>Basic Quota </li>
                  <li>PDF reports</li>
                  <li>Full Social Profiles</li>
                  <li>500 Search Results </li>
                </ul>
              </div><!-- /.Pricing-content  -->
              <a class="btn btn__secondary btn__block" href="#">Purchase Now</a>
            </div>
          </div><!-- /.pricing-item -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing1 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients" class="clients clients-1 pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Join Us Today</span>
              <h2 class="heading__title">Our Partners</h2>
              <p class="heading__desc">Our skilled personnel, utilising the latest communications, tracking and
                processing software, combined with decades of experience! Through integrated supply chain solutions,
                Logisti drives sustainable competitive advantages to some of Australia's largest companies.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="assets/images/clients/9.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/10.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/12.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/13.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    @endsection