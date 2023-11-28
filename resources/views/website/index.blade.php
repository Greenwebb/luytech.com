@extends('website.layouts.app')

@section('content')
<section id="slider1" class="slider slider-1">
    <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
        data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut"
        data-animate-in="fadeIn">
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="public/web/assets/images/sliders/1.jpg" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">Import Your Dream Car today!</h2>
                            <p class="slide__desc">Import your desired vehicle today at unbeatable prices. Your
                                dream ride is just a click away.</p>
                            <a href="{{ route('request-quote') }} " class="btn btn__primary btn__hover2 mr-30">Get Started</a>
                            <a href="{{ route('services') }}" class="btn btn__white">Our Services</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="public/web/assets/images/sliders/4.jpg" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">Drive Now, Pay Comfortably!</h2>
                            <p class="slide__desc">Start your journey with just a 35% deposit of the total
                                landing cost. Embrace the road ahead.</p>
                            <a href={{ route('about') }} class="btn btn__white mr-30">About Us</a>
                            <a href="{{ route('contact') }}" class="btn btn__primary btn__hover2">Contact Us</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="public/web/assets/images/sliders/3.jpg" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">Payments on Your Terms!</h2>
                            <p class="slide__desc">Diverse and flexible payment plans ranging from 6 to 24
                                months, tailored to fit your budget.</p>
                            <a href="{{ route('services') }}" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                            <a href={{ route('request-quote') }} class="btn btn__white">Get a Quote</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="public/web/assets/images/sliders/5.jpg" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">Seamless Cargo Solutions!</h2>
                            <p class="slide__desc">Expertise in efficient clearing, forwarding, and handling of
                                vehicles and diverse cargo.</p>
                            <a href="{{ route('request-quote') }}" class="btn btn__white mr-30">Get Started</a>
                            <a href="{{ route('services') }}" class="btn btn__primary btn__hover2">Our Services</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="public/web/assets/images/sliders/6.jpg" alt="slide img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="slide__content">
                            <h2 class="slide__title">Beyond Just Delivery! </h2>
                            <p class="slide__desc">We ensure the safe transportation of your vehicles,
                                prioritizing punctuality and precision.</p>
                            <a href="{{ route('request-quote') }}" class="btn btn__primary btn__hover2 mr-30">Get Started</a>
                            <a href={{ route('services') }} class="btn btn__white">Our Services</a>
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        
        
        
    </div><!-- /.carousel -->
    <!-- /.container -->
</section><!-- /.slider -->

<!-- ========================
Services
=========================== -->
@include('website.partials.services')


@include('website.partials.tracker')
<!-- /.Services -->
<!-- =========================== 
fancybox Carousel
============================= -->
<section id="fancyboxCarousel"
    class="fancybox-layout4 fancybox-carousel bg-overlay bg-overlay-gradient-secondary-2">
    <div class="bg-img"><img src="public/web/assets/images/backgrounds/5.jpg" alt="background"></div>
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
                
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Request Quote Tabs -->

<!-- ========================= 
    Testimonial #1
=========================  -->
<section id="testimonial" class="testimonial testimonial-1 text-center pt-80 pb-70">
    <div class="bg-img"><img src="public/web/assets/images/backgrounds/2.png" alt="background"></div>
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
                            <img src="public/web/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__content">
                            <p class="testimonial__desc">
                                They are the best of the best, and expertly trained team members who take
                                the extra step and go the extra mile, all to fulfill our dedicated promise to
                                deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                environment.
                            </p>
                        </div><!-- /.testimonial-content -->
                        <div class="testimonial__meta">
                            {{-- <p class="testimonial__meta-desc">The Move Inc</p> --}}
                        </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                    <!-- Testimonial #2 -->
                    <div class=" testimonial-item">
                        <div class="testimonial__thumb">
                            <img src="public/web/assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__content">
                            <p class="testimonial__desc">
                                The Luytech team is the best of the best, and expertly trained team members
                                who take the extra step and go the extra mile, all to fulfill our dedicated
                                promise to deliver innovative and dynamic solutions to customers to fit the needs of a rapidly
                                changing global environment.</p>
                        </div><!-- /.testimonial-content -->
                        <div class="testimonial__meta">
                            
                            {{-- <p class="testimonial__meta-desc">The Move Inc</p> --}}
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
{{-- <section id="clients1" class="clients clients-1 border-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2"
                    data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true"
                    data-speed="700">
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/9.png" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/10.png" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/11.png" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/12.png" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/13.png" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="public/web/assets/images/clients/11.png" alt="client"></a>
                    </div><!-- /.client -->
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.clients 1 --> --}}

<!-- ======================
   banner 3
========================= -->
<section id="banner3" class="banner banner-3 p-0 bg-theme">
    <div class="container-fluid col-padding-0">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 background-banner bg-overlay">
                <div class="bg-img"><img src="public/web/assets/images/banners/7.jpg" alt="background"></div>
                {{-- <div class="video__btn video__btn-white video__btn-right-center">
                    <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                        <span class="video__player-animation"></span>
                        <span class="video__player-animation video__player-animation-2"></span>
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div><!-- /.video --> --}}
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
                            <h4><span class="counter">103</span><span>m</span></h4>
                            <p class="counter__desc">Clients Countrywide</p>
                        </div>
                        <div class="counter-item">
                            <h4><span class="counter">775</span><span>m</span></h4>
                            <p class="counter__desc">Delivered Goods</p>
                        </div>
                        <div class="counter-item">
                            <h4><span class="counter">6,845</span><span>m</span></h4>
                            <p class="counter__desc">Miles Driven</p>
                        </div>
                    </div><!-- /.counters -->
                    <p class="color-white mb-20">Providing the best transport and shipping services currently
                        available
                        allover the world. Our skilled personnel, utilising the latest communications, new
                        tracking and
                        processing software, combined with decades of experience!</p>
                    <img src="public/web/assets/images/about/singnture2.png" alt="singnture">
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner 3 -->

<!-- ======================
   projects Carousel
========================= -->
@include('website.partials.projects')
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
                    <a href="{{route('contact')}}" class="btn btn__primary">Schedule An Appointment</a>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
                <div class="bg-img"><img src="public/web/assets/images/banners/1.jpg" alt="background"></div>
                <div class="skills skills-panel">
                    <div class="heading mb-30">
                        <h2 class="heading__title">What We Achieved!</h2>
                        <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic
                            solutions to our
                            customers to fit their needs.</p>
                    </div><!-- /.heading -->
                    <!-- progress 1 -->
                    <div class="progress-item">
                        <h6 class="progress__title">Vehicle Deliveries</h6>
                        <span class="progress__percentage"></span>
                        <div class="progress">
                            <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                role="progressbar">
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.progress-item  -->
                    <!-- progress 2 -->
                    <div class="progress-item">
                        <h6 class="progress__title">Clearing And Fowarding</h6>
                        <span class="progress__percentage"></span>
                        <div class="progress">
                            <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"
                                role="progressbar">
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.progress-item  -->
                    <!-- progress 3 -->
                    <div class="progress-item">
                        <h6 class="progress__title">Imports</h6>
                        <span class="progress__percentage"></span>
                        <div class="progress">
                            <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"
                                role="progressbar">
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.progress-item  -->
                    <!-- progress 4 -->
                    <div class="progress-item">
                        <h6 class="progress__title">Insuranced Vehicles</h6>
                        <span class="progress__percentage"></span>
                        <div class="progress">
                            <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                role="progressbar">
                            </div>
                        </div><!-- /.progress -->
                    </div><!-- /.progress-item  -->
                    <!-- progress 8 -->
                    <div class="progress-item">
                        <h6 class="progress__title">Fully Registratered Consignments</h6>
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

<!-- ========================= 
    contact 1
=========================  -->
<section id="contact1" class="contact contact-1 p-0">
    @include('website.partials.map')
</section><!-- /.contact -->

@endsection
