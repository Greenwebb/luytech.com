@extends('website.layouts.app')

@section('content')
    <!-- ========================
                       page title
                    =========================== -->
    <section id="page-title" class="page-title page-title-layout4 text-center bg-overlay bg-parallax">
        <div class="bg-img"><img src="public/web/assets/images/page-titles/1.webp" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                    <span class="pagetitle__subheading">Affordable Price, Certified Forwarders</span>
                    <h1 class="pagetitle__heading">About Us </h1>
                </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                      About 2
                    =========================== -->
    <section id="about2" class="about about-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading heading-3 mb-20 pt-60">
                        <span class="heading__subtitle">International freight forwarding specialists</span>
                        <h2 class="heading__title">Millions of people use Luytech</h2>
                        {{-- <p>Luytech is a robust clearing and forwarding company focused on providing efficient and reliable
                            solutions to meet all your logistics needs. In the present globalized world, exploring the
                            intricacies of global exchange can be an overwhelming undertaking. That’s where we come in. We
                            understand that timely and seamless movement of goods is crucial for businesses to thrive, and
                            we are committed to making that happen for you.</p> --}}
                    </div><!-- /.heading -->
                    <ul class="list-items list-items-layout2 list-unstyled mb-30">
                        <li>Transparent Pricing, Environmental Sensitivity</li>
                        <li>24/7 Hours Support, Professional and Qualified</li>
                        <li>Real Time Tracking, Fast & Efficient Delivery</li>
                        <li>Vehicle delivery & Personalised solutions</li>
                    </ul>

                    <a href="{{ route('services') }}" class="btn btn__secondary btn__link btn__underlined mb-20">Find your
                        solution</a>
                </div>
                <br><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-9 col-lg-6">
                    <div class="about__img">
                        <img src="public/web/assets/images/about/1.jpg" alt="about img" class="img-fluid">
                        <div class="counter-item-wrapper counters-white">
                            <div class="counter-item">
                                <div class="counter__icon">
                                    <i class="icon-box"></i>
                                </div>
                                <h4><span class="counter">541</span></h4>
                                <p class="counter__desc">Delivered Vehicles</p>
                            </div>
                        </div><!-- /.counter-item-wrapper-->
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
        
    </section><!-- /.About 2 -->

    <section style="background-color: #201e1c;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-6">
                    <div class="">
                        <img src="{{ asset('/public/image/ceo.png')}}" alt="about img" class="img-fluid">
                        
                    </div><!-- /.about-img -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading heading-3 mb-20 pt-60">
                        <span class="heading__subtitle">Supply Chain Technology & Customized Solutions.</span>
                        <h2 class="heading__title" style="color:#fff; display:flex;gap:4px">Who We Are 
                        <div style="
                            border-bottom:5px solid #FF8700;
                            width:10%;
                        "></div> </h2>
                        <p>Luytech is a robust clearing and forwarding company focused on providing efficient and reliable
                            solutions to meet all your logistics needs. In the present globalized world, exploring the
                            intricacies of global exchange can be an overwhelming undertaking. That’s where we come in. We
                            understand that timely and seamless movement of goods is crucial for businesses to thrive, and
                            we are committed to making that happen for you.</p>
                            <h6 class="" style="color:#fff; display:flex;gap:4px">Vision<div style="
                                border-bottom:5px solid #FF8700;
                                width:5%;
                            "></div> </h6>
                            <p>To be the most customer-centric
                                and trusted company, where
                                customers can be served and have
                                their expectations exceeded..</p>
                            <h6 class="" style="color:#fff; display:flex;gap:4px">Mission<div style="
                                border-bottom:5px solid #FF8700;
                                width:5%;
                            "></div></h6>
                            <p>To provide the most efficient, reliable
                                and affordable services that satisfy
                                customers’ needs and give them a
                                compelling experience.</p>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    
    <section style="padding:8%;" id="blogGrid" class="blog blog-grid pb-60">
        <div class="container">
            <center>
                <div class="col-10">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Our Foundation</span>
                        <h2 class="heading__title">Core Values</h2>
                        <p class="heading__desc">Core business values are the fundamental principles and beliefs that guide
                            a company’s
                            actions, decisions, and behaviour. By upholding these values, we are able to differentiate
                            ourselves from other businesses, shape our culture and this ultimately influence the
                            relationships we build with our clients. Therefore, we ensure that these values are
                            upheld by our employees in every transactions. .</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </center>
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">

                    <div class="core-value-item">
                        <span class="core-value__icon"><img src="public/web/assets/images/icons/1.svg" alt="Collaboration Icon"
                                class="core-value__icon"></span>
                        <h4 class="core-value__title">Integrity</h4>
                        <p class="core-value__desc">By upholding integrity as Luytech we endeavor to act honestly,
                            ethically, and transparently in all business dealings. We maintain
                            high moral standards, being accountable for actions as we serve our
                            clients..</p>
                    </div>



                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">


                    <div class="core-value-item">
                        <span class="core-value__icon"><img src="public/web/assets/images/icons/2.svg" alt="Collaboration Icon"
                                class="core-value__icon"></span>
                        <h4 class="core-value__title">Excellence</h4>
                        <p class="core-value__desc">We endeavour to pursue the highest standards of quality and
                            performance in every aspect of the business. Continuously
                            improving, paying attention to details, and committed to delivering
                            exceptional services in the clearing and forwarding industry. </p>
                    </div>


                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">

                    <div class="core-value-item">
                        <span class="core-value__icon"><img src="public/web/assets/images/icons/3.svg" alt="Collaboration Icon"
                                class="core-value__icon"></span>
                        <h4 class="core-value__title">Collaboration</h4>
                        <p class="core-value__desc">The clearing and forwarding industry is a demanding industry.
                            Without coordinated team work, it can be very challenging to
                            ensure that the client’s products are cleared and delivered on time.
                            Therefore, we ensure that there is proper communication and
                            coordination at all times during the clearing and delivery of your
                            products. </p>
                    </div>


                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog Grid -->
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
                            <p class="heading__desc">We believe that the services, offered by our company, should satisfy
                                the high
                                expectations of our customers. We are dedicated in creating added value for our customers by
                                implementing modern technology in our work. That is why the desire of constant improvement
                                is the
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
                        <p class="color-white mb-20">Providing the best transport and shipping services currently available
                            allover the world. Our skilled personnel, utilising the latest communications, new tracking and
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
    @include('website.partials.projects')<!-- /.projects-carousel -->

    <!-- =====================
                       Clients 1
                    ======================== -->
    {{-- <section id="clients" class="clients clients-1 border-top">
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

    <!-- =========================
                          Testimonial #2
                    =========================  -->
    {{-- <section id="testimonial2" class="testimonial testimonial-2 text-center bg-overlay bg-overlay-grdient-theme pb-90">
        <div class="bg-img"><img src="public/web/assets/images/backgrounds/7.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading  heading-white mb-30">
                        <span class="heading__subtitle color-heading">What Peoples Say!</span>
                        <h2 class="heading__title">Testimonials</h2>
                        <p class="heading__desc">See what our customers have to say about our products, people and
                            services. We
                            are very proud of you all !</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots carousel-dots-white" data-slide="3" data-slide-md="2"
                        data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                        data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__thumb">
                                <img src="public/web/assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Luytech Motors International customer service is some of the
                                    best we
                                    have ever had with ocean forwarders we like to ship as much as possible with you all.
                                </p>
                            </div><!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <p class="testimonial__meta-desc">Mulenga Shona</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->

                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonial2 --> --}}



    <!-- =========================
                          contact 1
                    =========================  -->
    @include('website.partials.map')
@endsection
