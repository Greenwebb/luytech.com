<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Luytech Motors &amp; clearing and forwarding
Servicesi">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Luytech Motors &amp; clearing and forwarding</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/libraries.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <?php include "components/header.php" ?>
        <!-- ============================
        Slider
    ============================== -->
        <section id="slider1" class="slider slider-1">
            <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
                data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut"
                data-animate-in="fadeIn">
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/1.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Import Your Dream Car today!</h2>
                                    <p class="slide__desc">Import your desired vehicle today at unbeatable prices. Your
                                        dream ride is just a click away.</p>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                                    <a href="{{ route('about') }}" class="btn btn__white">About Us</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/4.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Drive Now, Pay Comfortably!</h2>
                                    <p class="slide__desc">Start your journey with just a 35% deposit of the total
                                        landing cost. Embrace the road ahead.</p>
                                    <a href="{{ route('about') }}" class="btn btn__white mr-30">About Us</a>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2">Our Services</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/5.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Payments on Your Terms!"</h2>
                                    <p class="slide__desc">Diverse and flexible payment plans ranging from 6 to 24
                                        months, tailored to fit your budget.</p>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                                    <a href="{{ route('about') }}" class="btn btn__white">About Us</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Seamless Cargo Solutions!</h2>
                                    <p class="slide__desc">Expertise in efficient clearing, forwarding, and handling of
                                        vehicles and diverse cargo.</p>
                                    <a href="#requestQuoteTabs" class="btn btn__white mr-30">Get Started</a>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2">Our Services</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>
                <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/5.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Beyond Just Delivery! </h2>
                                    <p class="slide__desc">We ensure the safe transportation of your vehicles,
                                        prioritizing punctuality and precision.</p>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                                    <a href="{{ route('about') }}" class="btn btn__white">About Us</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-lg-8 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <!-- <div class="slide-item align-v-h bg-overlay">
                    <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="slide__content">
                                    <h2 class="slide__title">Solutions that meet your needs </h2>
                                    <p class="slide__desc">Through integrated supply chain solutions, our drives
                                        sustainable competitive
                                        advantages to some of the largest companies allover the world.</p>
                                    <a href="#requestQuoteTabs" class="btn btn__white mr-30">Get Started</a>
                                    <a href="{{ route('services') }}" class="btn btn__primary btn__hover2">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div><!-- /.carousel -->
            <!-- /.container -->
        </section><!-- /.slider -->

        <!-- ========================
        Services
    =========================== -->
        <section id="services" class="services pb-90">
            <div class="container">
                <div class="row heading heading-2 mb-40">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <span class="heading__subtitle">Real Solutions, Real Fast!</span>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h2 class="heading__title">Delivering the Best Clearing & Fowarding Solutions.</h2>
                    </div><!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <p class="heading__desc">Our expertise, advanced supply chain technology & customized logistics
                            solutions will help you analyze, develop and implement successful Clearing & Fowarding
                            solutions from end-to-end.</p>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row text-center">

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__icon"><i class="icon-cargo-ship"></i></div>
                            <div class="service__content">
                                <h4 class="service__title">Import & Delivery Of Vehicles</h4>
                                <p class="service__desc">Import top-quality vehicles on flexible payment terms. Deposit
                                    as low as 35% and pay over 6-24 months</p>
                                <a href="#" class="btn btn__white">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__icon"><i class="icon-air-freight"></i></div>
                            <div class="service__content">
                                <h4 class="service__title">Clearing & Forwarding</h4>
                                <p class="service__desc">Seamless port clearance services, ensuring efficient handling
                                    and safe offloading of your goods.</p>
                                <a href="#" class="btn btn__white">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__icon"><i class="icon-truck"></i></div>
                            <div class="service__content">
                                <h4 class="service__title">Vehicle Registration & Insurance</h4>
                                <p class="service__desc">We Ensure hassle-free vehicle registration for a smooth
                                    transition to the roads.</p>
                                <a href="#" class="btn btn__white">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <p class="text__link mb-0">Solutions Save Your Time <a href={{ route('about') }}>Find your solution</a>
                        </p>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Services -->
        <!-- =========================== 
      fancybox Carousel
    ============================= -->
        <section id="fancyboxCarousel"
            class="fancybox-layout4 fancybox-carousel bg-overlay bg-overlay-gradient-secondary-2">
            <div class="bg-img"><img src="assets/images/backgrounds/5.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <span class="heading__subtitle">Our Features</span>
                            <h2 class="heading__title color-white">Why Choose Us!</h2>
                            <p class="heading__desc">We continue to pursue that same vision in today's complex,
                                uncertain world,
                                working every day to earn our customers’ trust!</p>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="carousel owl-carousel carousel-arrows" data-slide="4" data-slide-md="2"
                            data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="20"
                            data-loop="true" data-speed="800">
                            <!-- fancybox item #1 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-wallet"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Transparent Pricing</h4>
                                    <p class="fancybox__desc">International supply chains involves challenging
                                        regulations.</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #2 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-search"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Real-Time Tracking</h4>
                                    <p class="fancybox__desc">We Ensure that Our customers’ consignments are safe &
                                        fully compliant by practices.</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #3 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-trolley"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Car Delivery</h4>
                                    <p class="fancybox__desc">We Deliver Our Clients vehicle consignments all around the
                                        african continent.</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #4 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-package-6"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Security For Cargo</h4>
                                    <p class="fancybox__desc">High security requirements and are certified to local
                                        standards.</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #5 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-payment-method"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Easy Payment Methods</h4>
                                    <p class="fancybox__desc">You can make use the easy payment options, listed below.
                                    </p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #6 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-delivery-4"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Fast & Efficient Delivery</h4>
                                    <p class="fancybox__desc">We enhance our operations by relieving you of the worries.
                                    </p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                            <!-- fancybox item #7 -->
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-wishlist"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title">Personalised solutions</h4>
                                    <p class="fancybox__desc">We continue to pursue that same vision in today's complex
                                        solutions.</p>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <p class="text__link mb-0">Working every day to earn our customers’ trust. <a href="{{ route('contact') }}"
                                class="color-theme">Get Started!</a>
                        </p>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fancybox Carousel -->

        <!-- ========================
        Request Quote Tabs
    =========================== -->
        <section id="requestQuoteTabs" class="request-quote request-quote-tabs p-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="request__form">
                            <nav class="nav nav-tabs">
                                <a class="nav__link active" data-toggle="tab" href="#quote">Request A Quote</a>
                                <a class="nav__link" data-toggle="tab" href="#track">Track & Trace</a>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="quote">
                                    <div class="request-quote-panel">
                                        <div class="request__form-body">
                                            <form id="requestquote" action="">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <h6>Personal Data</h6>
                                                    </div><!-- /.col-lg-12 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                    </div><!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                    </div><!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </div><!-- /.col-lg-6 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <h6 class="mt-5">Consignment Info</h6>
                                                    </div><!-- /.col-lg-12 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group form-group-select">
                                                            <select class="form-control">
                                                                <option selected disabled="disabled">Select Service
                                                                </option>
                                                                <option>Import of motor vehicle</option>
                                                                <option>Clearing and forwarding</option>
                                                                <option>Delivery</option>
                                                                <option>Registration
                                                                <option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Vehicle Make">
                                                        </div>
                                                    </div><!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="number" id="year" name="year"
                                                                class="form-control" min="1900" max="2099"
                                                                placeholder="Year e.g., 2014" required>

                                                        </div>
                                                    </div><!-- /.col-lg-6 -->
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group form-group-select">
                                                            <select class="form-control">
                                                                <option selected disabled>Fuel</option>
                                                                <option>Petrol</option>
                                                                <option>Diesel</option>
                                                                <option>Electric</option>
                                                                <option>Hybrid (Electric & Fuel)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group form-group-select">
                                                            <select class="form-control">
                                                                <option selected disabled>Transmission</option>
                                                                <option>Automatic</option>
                                                                <option>Manual or CVT</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <select class="form-control" name="zambia_provinces"
                                                                id="zambia_provinces">
                                                                <option selected disabled>Select Province</option>
                                                                <option value="Central">Central</option>
                                                                <option value="Copperbelt">Copperbelt</option>
                                                                <option value="Eastern">Eastern</option>
                                                                <option value="Luapula">Luapula</option>
                                                                <option value="Lusaka">Lusaka</option>
                                                                <option value="Muchinga">Muchinga</option>
                                                                <option value="Northern">Northern</option>
                                                                <option value="North-Western">North-Western</option>
                                                                <option value="Southern">Southern</option>
                                                                <option value="Western">Western</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Town">
                                                        </div>
                                                    </div><!-- /.col-lg-6 -->

                                                    <!-- /.col-lg-4 -->
                                                    <div class="col-sm-8 col-md-8 col-lg-8 d-flex flex-wrap">
                                                        
                                                        <div class="form-group input-radio">
                                                            <label class="label-radio">Express Delivery
                                                                <input type="radio" name="radioGroup2">
                                                                <span class="radio-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group input-radio">
                                                            <label class="label-radio">Insurance
                                                                <input type="radio" name="radioGroup2">
                                                                <span class="radio-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group input-radio">
                                                            <label class="label-radio">Packaging
                                                                <input type="radio" name="radioGrou2">
                                                                <span class="radio-indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div><!-- /.col-lg-12 -->
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <button class="btn btn__secondary btn__block">Request A
                                                            Quote</button>
                                                    </div><!-- /.col-lg-12 -->
                                                </div>
                                            </form>

                                        </div><!-- /.request__form-body -->
                                        <div class="widget widget-download bg-theme">
                                            <div class="widget__content">
                                                <h5>Industry<br>Solutions!</h5>
                                                <p>Our Countrywide presence ensures the timeliness, cost efficiency and
                                                    compliance adherence
                                                    required to ensure your production timelines are met.</p>
                                                <a href="#" class="btn btn__secondary btn__hover2 btn__block">
                                                    <span>Download 2019 Brochure</span><i class="icon-arrow-right"></i>
                                                </a>
                                            </div><!-- /.widget__content -->
                                        </div><!-- /.widget-download -->
                                    </div><!-- /.request-quote-panel-->
                                </div><!-- /.tab -->
                                <div class="tab-pane fade" id="track">
                                    <div class="request-quote-panel">
                                        <div class="request__form-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Shipment Type</label>
                                                        <div class="form-group form-group-select">
                                                            <select class="form-control">
                                                                <option>Packaging</option>
                                                                <option>Packaging 1</option>
                                                                <option>Packaging 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tracking Number</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control"
                                                                placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking."></textarea>
                                                        </div>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Fragile
                                                            <input type="radio" name="radioGroup2" checked="">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Express Delivery
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Insurance
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Packaging
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn btn__secondary btn__block">Track & Trace</button>
                                                </div><!-- /.col-lg-12 -->
                                            </div>


                                        </div><!-- /.request__form-body -->
                                        <div class="widget widget-download bg-theme">
                                            <div class="widget__content">
                                                <h5>Industry<br>Solutions!</h5>
                                                <p>Our Countrywide presence ensures the timeliness, cost efficiency and
                                                    compliance adherence
                                                    required to ensure your production timelines are met.</p>
                                                <a href="#" class="btn btn__secondary btn__hover2 btn__block">
                                                    <span>Download 2019 Brochure</span><i class="icon-arrow-right"></i>
                                                </a>
                                            </div><!-- /.widget__content -->
                                        </div><!-- /.widget-download -->
                                    </div><!-- /.request-quote-panel-->
                                </div><!-- /.tab -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.request-form -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Request Quote Tabs -->

        <!-- ========================= 
            Testimonial #1
    =========================  -->
        <section id="testimonial" class="testimonial testimonial-1 text-center pt-80 pb-70">
            <div class="bg-img"><img src="assets/images/backgrounds/2.png" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading mb-50">
                            <span class="heading__subtitle">What Peoples Say!</span>
                            <h2 class="heading__title">Testimonials</h2>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1"
                            data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true"
                            data-space="0" data-loop="true" data-speed="800">
                            <!-- Testimonial #1 -->
                            <div class=" testimonial-item">
                                <div class="testimonial__thumb">
                                    <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">They are the best of the best, and expertly trained
                                        team members who take
                                        the extra step and go the extra mile, all to fulfill our dedicated promise to
                                        deliver innovative and
                                        dynamic solutions to our customers to fit the needs of a rapidly changing global
                                        environment.</p>
                                </div><!-- /.testimonial-content -->
                                <div class="testimonial__meta">
                                    <img src="assets/images/testimonials/signature.png" alt="signature">
                                    <p class="testimonial__meta-desc">The Move Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #2 -->
                            <div class=" testimonial-item">
                                <div class="testimonial__thumb">
                                    <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">Logisti team is the best of the best, and expertly
                                        trained team members
                                        who take the extra step and go the extra mile, all to fulfill our dedicated
                                        promise to deliver
                                        innovative and dynamic solutions to our customers to fit the needs of a rapidly
                                        changing global
                                        environment.</p>
                                </div><!-- /.testimonial-content -->
                                <div class="testimonial__meta">
                                    <img src="assets/images/testimonials/signature.png" alt="signature">
                                    <p class="testimonial__meta-desc">The Move Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                        </div>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonial1 -->

        <!-- =====================
       Clients 1
    ======================== -->
        <section id="clients1" class="clients clients-1 border-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2"
                            data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true"
                            data-speed="700">
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

        <!-- ======================
           banner 3
      ========================= -->
        <section id="banner3" class="banner banner-3 p-0 bg-theme">
            <div class="container-fluid col-padding-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 background-banner bg-overlay">
                        <div class="bg-img"><img src="assets/images/banners/7.jpg" alt="background"></div>
                        <div class="video__btn video__btn-white video__btn-right-center">
                            <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                                <span class="video__player-animation"></span>
                                <span class="video__player-animation video__player-animation-2"></span>
                                <div class="video__player">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </div><!-- /.video -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="inner-padding">
                            <div class="heading heading-3 heading-white mb-50">
                                <h2 class="heading__title">Flexible Pricing Policy <br>& Decades Of Experience!</h2>
                                <p class="heading__desc">We believe that the services, offered by our company, should
                                    satisfy the high
                                    expectations of our customers. We are dedicated in creating added value for our
                                    customers by
                                    implementing modern technology in our work. That is why the desire of constant
                                    improvement is the
                                    driving force behind our transportation business.</p>
                            </div><!-- /.heading -->
                            <div class="counters-white d-flex flex-wrap justify-content-between">
                                <div class="counter-item">
                                    <h4><span class="counter">3,214</span><span>m</span></h4>
                                    <p class="counter__desc">Clients Countrywide</p>
                                </div>
                                <div class="counter-item">
                                    <h4><span class="counter">5,154</span><span>m</span></h4>
                                    <p class="counter__desc">Delivered Goods</p>
                                </div>
                                <div class="counter-item">
                                    <h4><span class="counter">8,845</span><span>m</span></h4>
                                    <p class="counter__desc">Miles Driven</p>
                                </div>
                            </div><!-- /.counters -->
                            <p class="color-white mb-20">Providing the best transport and shipping services currently
                                available
                                allover the world. Our skilled personnel, utilising the latest communications, new
                                tracking and
                                processing software, combined with decades of experience!</p>
                            <img src="assets/images/about/singnture2.png" alt="singnture">
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner 3 -->

        <!-- ======================
           projects Carousel
      ========================= -->
        <section id="projectsCarousel" class="projects-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-50">
                            <span class="heading__subtitle">Latest Case Studies</span>
                            <h2 class="heading__title">Featured Projects</h2>
                            <p class="heading__desc">We presents the following case studies that exemplify the type of
                                solutions and
                                services we are providing across our customer base.</p>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                            data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                            data-loop="true" data-speed="800">
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="public/web/assets/images/case-studies/grid/1.jpg" alt="project img">
                                    <div class="project__cat">
                                        <a href="#">Analystics</a><a href="#">Optimization</a>
                                    </div><!-- /.project-cat -->
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes
                                        to
                                        analyzing and optimizing your supply chain performance.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Read More</span><i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="assets/images/case-studies/grid/2.jpg" alt="project img">
                                    <div class="project__cat">
                                        <a href="#">Warehousing</a><a href="#">Distribution</a>
                                    </div><!-- /.project-cat -->
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                    <p class="project__desc">We understand that data is the greatest asset when it comes
                                        to
                                        analyzing and optimizing your supply chain performance.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Read More</span><i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="assets/images/case-studies/grid/3.jpg" alt="project img">
                                    <div class="project__cat">
                                        <a href="#">Logistics</a><a href="#">Analytics</a>
                                    </div><!-- /.project-cat -->
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes
                                        your overall
                                        spend by utilizing an extensive .</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Read More</span><i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                            <div class="project-item">
                                <div class="project__img">
                                    <img src="assets/images/case-studies/grid/4.jpg" alt="project img">
                                    <div class="project__cat">
                                        <a href="#">Optimization</a><a href="#">Warehousing</a>
                                    </div><!-- /.project-cat -->
                                </div><!-- /.project-img -->
                                <div class="project__content">
                                    <h4 class="project__title"><a href="#">Regulatory Compliance</a></h4>
                                    <p class="project__desc">Cost savings is crucial, innovative technology minimizes
                                        your overall
                                        spend by utilizing an extensive .</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Read More</span><i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.project-content -->
                            </div><!-- /.project-item -->
                        </div><!-- /.carousel -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.projects-carousel -->
        <!-- ======================
           banner 1
      ========================= -->
        <section id="banner1" class="banner banner-1 p-0 bg-gray">
            <div class="container-fluid col-padding-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="inner-padding">
                            <div class="heading heading-3 mb-30">
                                <i class="icon-tag"></i>
                                <span class="heading__subtitle">Affordable Price, Certified Forwarders</span>
                                <h2 class="heading__title">Safe, Reliable & Express Logistic Solutions That Saves Your
                                    Time!</h2>
                                <p class="heading__desc">We pride ourselves on providing the best transport and shipping
                                    services
                                    available allover the world. Our skilled personnel, utilising the latest
                                    communications, tracking and
                                    processing software, combined with decades of experience.</p>
                            </div><!-- /.heading -->
                            <a href="#" class="btn btn__primary">Schedule An Appointment</a>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
                        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
                        <div class="skills skills-panel">
                            <div class="heading mb-30">
                                <h2 class="heading__title">What We Achieved!</h2>
                                <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic
                                    solutions to our
                                    customers to fit their needs.</p>
                            </div><!-- /.heading -->
                            <!-- progress 1 -->
                            <div class="progress-item">
                                <h6 class="progress__title">Warehousing</h6>
                                <span class="progress__percentage"></span>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                        role="progressbar">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-item  -->
                            <!-- progress 2 -->
                            <div class="progress-item">
                                <h6 class="progress__title">Air Freight</h6>
                                <span class="progress__percentage"></span>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"
                                        role="progressbar">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-item  -->
                            <!-- progress 3 -->
                            <div class="progress-item">
                                <h6 class="progress__title">Ocean Freight</h6>
                                <span class="progress__percentage"></span>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"
                                        role="progressbar">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-item  -->
                            <!-- progress 4 -->
                            <div class="progress-item">
                                <h6 class="progress__title">Road Freight</h6>
                                <span class="progress__percentage"></span>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        role="progressbar">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-item  -->
                            <!-- progress 8 -->
                            <div class="progress-item">
                                <h6 class="progress__title">Supply Chain</h6>
                                <span class="progress__percentage"></span>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                        role="progressbar">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-item  -->
                        </div><!-- /.skills -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner 1 -->

        <!-- ======================
      Blog Grid
    ========================= -->
        <section id="blogGrid" class="blog blog-grid pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-50">
                            <span class="heading__subtitle">Insight and Trends</span>
                            <h2 class="heading__title">Recent Articles</h2>
                            <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on
                                insight,
                                industry trends, top news headlines.</p>
                        </div><!-- /.heading -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <!-- Blog Item #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.jpg" alt="blog image">
                                </a>
                            </div><!-- /.entry-img -->
                            <div class="blog__content">
                                <div class="blog__meta">
                                    <div class="blog__meta-cat">
                                        <a href="#">Insights</a><a href="#">Management</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.blog-meta -->
                                <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First
                                        Sale rule!</a></h4>
                                <span class="blog__meta-date">Jan 20, 2019</span>
                                <p class="blog__desc">The trade war currently ensuing between the US and several nations
                                    around the
                                    globe, most fiercely with China, shows no signs of the first set of tariffs levied
                                    against solar...
                                </p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.entry-content -->
                        </div><!-- /.blog-item -->
                    </div><!-- /.col-lg-4 -->
                    <!-- Blog Item #2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/2.jpg" alt="blog image">
                                </a>
                            </div><!-- /.entry-img -->
                            <div class="blog__content">
                                <div class="blog__meta">
                                    <div class="blog__meta-cat">
                                        <a href="#">Warehousing</a><a href="#">Industry</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.blog-meta -->
                                <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility,
                                        control.</a></h4>
                                <span class="blog__meta-date">Oct 18, 2019</span>
                                <p class="blog__desc">Global provider connected products for consumers, and enterprises
                                    Countrywide,
                                    supply chain control is everything, provide visibility and traceability needed
                                    for...</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.entry-content -->
                        </div><!-- /.blog-item -->
                    </div><!-- /.col-lg-4 -->
                    <!-- Blog Item #3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/3.jpg" alt="blog image">
                                </a>
                            </div><!-- /.entry-img -->
                            <div class="blog__content">
                                <div class="blog__meta">
                                    <div class="blog__meta-cat">
                                        <a href="#">Logistics</a><a href="#">Distribution</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.blog-meta -->
                                <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil &
                                        Gas
                                        Logistics?</a></h4>
                                <span class="blog__meta-date">Jan 20, 2019</span>
                                <p class="blog__desc">Our team provides highly skilled & experienced project managers
                                    who know the
                                    intricacies of this vertical and focus on providing innovative solutions in Oil &
                                    Gas sector...</p>
                                <a href="#" class="btn btn__secondary btn__link">
                                    <span>Read More</span><i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.entry-content -->
                        </div><!-- /.blog-item -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog Grid -->

        <!-- ========================= 
            contact 1
      =========================  -->
        <section id="contact1" class="contact contact-1 p-0">
            <div id="map"></div>
            <script src="assets/js/google-map.js"></script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap"
                async defer></script>
            <div class="container">
                <div class="contact-panel contact-panel-2">
                    <div class="contact__panel-header d-flex align-items-center">
                        <h4 class="contact__panel-title">Global Locations</h4>
                    </div>
                    <div id="accordion">
                        <div class="accordion-item">
                            <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                                <a class="accordion__item-title" href="#">London Office</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse1" class="collapse  show" data-parent="#accordion">
                                <div class="accordion__item-body">
                                    <ul class="contact__list list-unstyled">
                                        <li>002 010123456789</li>
                                        <li>Email: <a href="https://7oroof.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="eea28189879d9a87aed9819c818188c08d8183">[email&#160;protected]</a>
                                        </li>
                                        <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                        <li>Hours: Mon-Fri: 8am – 7pm</li>
                                    </ul>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                                <a class="accordion__item-title" href="#">Berlin Office</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse2" class="collapse" data-parent="#accordion">
                                <div class="accordion__item-body">
                                    <ul class="contact__list list-unstyled">
                                        <li>002 010123456789</li>
                                        <li>Email: <a href="https://7oroof.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="82ceede5ebf1f6ebc2b5edf0edede4ace1edef">[email&#160;protected]</a>
                                        </li>
                                        <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                        <li>Hours: Mon-Fri: 8am – 7pm</li>
                                    </ul>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                                <a class="accordion__item-title" href="#">Manchester Office</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse3" class="collapse" data-parent="#accordion">
                                <div class="accordion__item-body">
                                    <ul class="contact__list list-unstyled">
                                        <li>002 010123456789</li>
                                        <li>Email: <a href="https://7oroof.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="98d4f7fff1ebecf1d8aff7eaf7f7feb6fbf7f5">[email&#160;protected]</a>
                                        </li>
                                        <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                        <li>Hours: Mon-Fri: 8am – 7pm</li>
                                    </ul>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                    </div>
                </div><!-- /.contact-panel -->
            </div><!-- /.container -->
        </section><!-- /.contact -->

        <!-- ========================
            Footer
    ========================== -->
        <?php include "components/footer.php" ?>

        <div class="module__search-container">
            <i class="fa fa-times close-search"></i>
            <form class="module__search-form">
                <input type="text" class="search__input" placeholder="Type Words Then Enter">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.module-search-container -->

        <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
    </div><!-- /.wrapper -->

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/optime/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 21:25:30 GMT -->

</html>