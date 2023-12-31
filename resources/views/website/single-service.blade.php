<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/optime/single-service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 21:26:06 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Luytech Motors &amp; clearing and forwarding
Servicesi">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Luytech Motors &amp; clearing and forwarding
Services</title>
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

    <!-- ========================
       page title 
    =========================== -->


    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">{{ $service }}</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}">services</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $service }}</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     Text Content Section
    ========================= -->
    <section id="textContentSection" class="text-content-section pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Transport Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#" class="active">Air Freight </a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Supply Chain</a></li>
                    <li><a href="#">Packaging Options</a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary">
                <div class="bg-img"><img src="assets/images/sidebar/1.jpg" alt="background"></div>
                <div class="widget__content">
                  <h5>How Can <br> We Help You!</h5>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple
                    and easy communication.</p>
                  <a href="{{route('contact')}}" class="btn btn__primary btn__hover2 btn__block">Schedule An Appointment</a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download bg-theme">
                <h5 class="widget__title color-white">Download Brochures</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__secondary btn__block mb-20">
                    <img src="assets/images/icons/pdf.png" alt="pdf">
                    <span>2023 Brochure</span>
                  </a>
                  <a href="#" class="btn btn__secondary btn__block">
                    <img src="assets/images/icons/pdf.png" alt="pdf">
                    <span>Presentation Brochure</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block mb-40">
                  <h5 class="text__block-title">Overview</h5>
                  <p class="text__block-desc">Our airfreight staff attaches great importance to customizing the
                    booking process for our customers.
                    That’s why we strive to find the air freight solution that best suits your needs. We’ll ask you
                    when the freight is available, what the required delivery date is, and if there’s potential to
                    save on
                    time or cost. Your answers to these and other questions help us decide if you should book the air
                    freight as direct. We'll also see if our sea-air service is a better solution for</p>
                  <p class="text__block-desc">We have more than twenty years of experience. During that time, we’ve
                    become expert in freight transportation by air and all its related services. We work closely with
                    all major airlines around the world. Ongoing negotiations ensure that we always have the cargo
                    space we need and the ability to offer you competitive rates - even during the high season.</p>
                  <p class="text__block-desc">Where possible, we’ll erect and dismantle Unit Load Devices (ULDs),
                    reducing significantly the risk of damage to your shipment and saving you time and expense. We can
                    do this because many of our freight stations have their own ground transportation at or around the
                    airport. </p>
                </div><!-- /.text-block -->
                <div class="row">
                  <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="text__block  mb-40">
                      <h5 class="text__block-title">Stats & Charts</h5>
                      <p class="text__block-desc">Our mix of company-owned and contractor assets allows us to retain
                        optimal levels of control whilst expanding our reach to over 96% of towns in Australia. With
                        40 years of LTL experience, we are now a trusted LTL freight provider for shippers of all
                        sizes and commodity types.</p>
                      <p class="text__block-desc">Our LTL service extends to all states and territories, and includes
                        multiple per-week services to places many others only serve occasionally, including Darwin,
                        Alice Springs, Newman, Mt. Isa, Launceston and Burnie.</p>
                      <p class="text__block-desc">We pride ourselves on providing the best transport and shipping
                        services currently available in Australia. Our skilled personnel, utilising the latest
                        communications, tracking and processing software, combined with decades of experience, ensure
                        all freight is are
                        shipped, trans-shipped and delivered as safely, securely, and promptly as possible.</p>
                    </div><!-- /.text-block -->
                  </div><!-- /.col-lg-7 -->
                  <div class="col-sm-12 col-md-5 col-lg-5">
                    <img src="assets/images/charts/2.png" alt="chart" class="img-fluid mt-50 mb-30">
                  </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
                <div class="text__block">
                  <h5 class="text__block-title">How It Works?!</h5>
                  <p class="text__block-desc">We have more than twenty years of experience. During that time, we’ve
                    become expert in freight transportation by air and all its related services. We work closely with
                    all major airlines around the world. Ongoing negotiations ensure that we always have the cargo
                    space we need and offer you competitive rates.
                  </p>
                </div><!-- /.text-block -->
                <div class="video-banner bg-overlay mb-50">
                  <div class="bg-img"><img src="assets/images/banners/2.jpg" alt="background"></div>
                  <div class="video__btn video__btn-white video__btn-left-bottom">
                    <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                      <span class="video__player-animation"></span>
                      <span class="video__player-animation video__player-animation-2"></span>
                      <span class="video__player-animation video__player-animation-3"></span>
                      <div class="video__player">
                        <i class="fa fa-play"></i>
                      </div>
                    </a>
                  </div>
                </div><!-- /.video -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="text__block">
                  <h5 class="text__block-title">Why Us!</h5>
                  <p class="text__block-desc">We continue to pursue that same vision in today's complex, uncertain
                    world, working every day to earn our customers’ trust! During that time, we’ve become expert in
                    freight transportation by air and all its related services. We work closely with all major
                    airlines around the world.</p>
                </div><!-- /.text-block -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row fancybox-layout2 mb-50">
              <!-- fancybox item #1 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-wallet"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">Transparent Pricing</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #2 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-search"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">Real-Time Tracking</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #3 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-trolley"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">Warehouse Storage</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #4 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-package-6"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">Security For Cargo</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #5 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-payment-method"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">Easy Payment Methods</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #6 -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-call-center"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">24/7 Hours Support</h4>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5>Key Benifits</h5>
                <div id="accordion" class="mb-70">
                  <div class="accordion-item">
                    <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                      <a class="accordion__item-title" href="#">Which Plan Is Right For Me?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse1" class="collapse" data-parent="#accordion">
                      <div class="accordion__item-body">
                        <p>Fully responsive, retina ready & created for all types of devices. York makes sure your
                          website
                          looks equally breathtaking when viewed on all screen resolutions.Fully responsive, retina
                          ready & created for all types of devices. York makes sure your website looks equally
                          breathtaking when viewed on all screen resolutions.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                  <div class="accordion-item">
                    <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                      <a class="accordion__item-title" href="#">Do I have to commit to a contract?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                      <div class="accordion__item-body">
                        <p>Fully responsive, retina ready & created for all types of devices. York makes sure your
                          website
                          looks equally breathtaking when viewed on all screen resolutions.Fully responsive, retina
                          ready
                          & created for all types of devices. York makes sure your website looks equally breathtaking
                          when viewed on all screen resolutions.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                  <div class="accordion-item">
                    <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse3">
                      <a class="accordion__item-title" href="#">What Payment Methods Are Available?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse3" class="collapse show" data-parent="#accordion">
                      <div class="accordion__item-body">
                        <p>Fully responsive, retina ready & created for all types of devices. York makes sure your
                          website looks equally breathtaking when viewed on all screen resolutions.Fully responsive,
                          retina
                          ready & created for all types of devices. York makes sure your website looks equally
                          breathtaking when viewed on all screen resolutions.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <h5>Case Studies</h5>
                <div class="projects-carousel">
                  <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="2" data-slide-sm="1"
                    data-autoplay="true" data-nav="true" data-dots="true" data-space="30" data-loop="true"
                    data-speed="800">
                    <div class="project-item">
                      <div class="project__img">
                        <img src="public/web/assets/images/case-studies/grid/1.jpg" alt="project img">
                        <div class="project__cat">
                          <a href="#">Analystics</a><a href="#">Optimization</a>
                        </div><!-- /.project-cat -->
                      </div><!-- /.project-img -->
                      <div class="project__content">
                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                        <p class="project__desc">We understand that data is the greatest asset when it comes to
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
                        <p class="project__desc">We understand that data is the greatest asset when it comes to
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
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
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
                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                          spend by utilizing an extensive .</p>
                        <a href="#" class="btn btn__secondary btn__link">
                          <span>Read More</span><i class="icon-arrow-right"></i>
                        </a>
                      </div><!-- /.project-content -->
                    </div><!-- /.project-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.projects-carousel -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content Section -->

    <!-- ========================
            Footer
          ========================== -->
    <footer id="footer" class="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
              <div class="footer__newsletter-text">
                <h6>Our Newsletter</h6>
                <p>Sign up for industry news & insights.</p>
              </div><!-- /.footer-newsletter-text -->
            </div><!-- /.col-xl-3-->
            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-7">
              <form class="footer__newsletter-form d-flex flex-wrap">
                <div class="form-group d-flex flex-1 mb-20 mr-1">
                  <input type="text" class="form-control" placeholder="Your Name">
                  <input type="email" class="form-control" placeholder="Your Email Address">
                </div>
                <button class="btn btn__primary btn__hover3 mb-20">Submit Now!</button>
              </form>
            </div><!-- /.col-xl-7 -->
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2">
              <div class="social__icons justify-content-end">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div><!-- /.social-icons -->
            </div><!-- /.col-xl-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="assets/images/logo/logo-small.png" alt="logo" class="footer-logo">
                <p>Our global Optimecs expertise, advanced supply chain technology & customized Optimecs solutions
                  will help you develop and implement successful supply.</p>
                <ul class="contact__list list-unstyled">
                  <li><span>Email:</span><span><a href="https://7oroof.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="753a05011c181035421a071a1a135b161a18">[email&#160;protected]</a></span></li>
                  <li><span>Phone:</span><span>+01234567890</span></li>
                </ul>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Are</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Meet Our Team</a></li>
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">What We Do</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Air Freight</a></li>
                    <li><a href="#">Ocean Freight</a></li>
                    <li><a href="#">Road Freight</a></li>
                    <li><a href="#">Supply Chain</a></li>
                    <li><a href="#">Packaging</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Who We Serve</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Retail & Consumer</a></li>
                    <li><a href="#">Sciences & Healthcare</a></li>
                    <li><a href="#">Industrial & Chemical</a></li>
                    <li><a href="#">Power Generation</a></li>
                    <li><a href="#">Food & Beverage</a></li>
                    <li><a href="#">Oil & Gas</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Quick Links</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Request A Quote</a></li>
                    <li><a href="#">Track & Trace</a></li>
                    <li><a href="#">Find A Location</a></li>
                    <li><a href="#">Global Agents</a></li>
                    <li><a href="#">Help & FAQ</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="footer__copyright">
                <span>&copy; 2019 Optime, with Love by</span>
                <a href="http://themeforest.net/user/7oroof">7oroof.com</a>
              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end">
                  <li><a href="#">Terms & Conditions </a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->

    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
  </div><!-- /.wrapper -->

  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/optime/single-service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 21:26:10 GMT -->
</html>