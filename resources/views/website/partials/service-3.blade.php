<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="https://images.pexels.com/photos/7363128/pexels-photo-7363128.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">Vehicle Registration & Insurance</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vehicle Registration & Insurance</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- ======================
 Text Content Section
========================= -->
<section id="textContentSection" class="text-content-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4">
        <aside class="sidebar mb-30">
            <div class="widget widget-categories">
                <h5 class="widget__title">Our Services</h5>
                <div class="widget-content">
                    <ul class="list-unstyled">
                    <li><a href="{{ route('service.detail', 1)}}">Import & Delivery Of Vehicles</a></li>
                    <li><a href="{{ route('service.detail', 2)}}">Clearing & Forwarding </a></li>
                    <li><a href="{{ route('service.detail', 3)}}" class="active">Vehicle Registration & Insurance</a></li>
                    </ul>
                </div>
            </div>
          <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary">
            <div class="bg-img"><img src="{{asset('public/assets/images/sidebar/1.jpg')}}" alt="background"></div>
            <div class="widget__content">
              <h5>How Can <br> We Help You!</h5>
              <p>We understand the importance approaching each work integrally and believe in the power of simple
                and easy communication.</p>
              <a href="{{route('contact')}}" class="btn btn__primary btn__hover2 btn__block">Schedule An Appointment</a>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-help -->
          {{-- <div class="widget widget-download bg-theme">
            <h5 class="widget__title color-white">Download Brochures</h5>
            <div class="widget__content">
              <a href="#" class="btn btn__secondary btn__block mb-20">
                <img src="assets/images/icons/pdf.png" alt="pdf">
                <span>2020 Brochure</span>
              </a>
              <a href="#" class="btn btn__secondary btn__block">
                <img src="assets/images/icons/pdf.png" alt="pdf">
                <span>Presentation Brochure</span>
              </a>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-download --> --}}
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-12 col-md-12 col-lg-8">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="text__block">
              <h5 class="text__block-title">Vehicle
                & Delivery of Vehicles Registration & Insurance</h5>
              <p class="text__block-desc">In an effort to ensure a stress free process
                from the moment you order your vehicle
                to the moment you are able to drive it
                on public roads, we also provide vehicle
                registration and insurance services
                with RATSA and Interpol. The following
                proceed is undertaken;</p>
            </div><!-- /.text-block -->
            {{-- <div class="video-banner bg-overlay mb-50">
              <div class="bg-img"><img src="{{ asset('public/assets/images/banners/2.jpg')}}" alt="background"></div>
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
            </div><!-- /.text-block --> --}}
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
       <!-- /.row -->
        {{-- <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <img src="public/web/assets/images/charts/1.png" alt="chart" class="img-fluid mb-50">
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row --> --}}
        <!-- /.row -->
        <div class="row fancybox-layout2 mb-50">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__content">
                <h4 class="fancybox__title">Customs Clearance Certificate: Issued
                    by the Zambia Revenues Authority
                    (ZRA).</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__content">
                <h4 class="fancybox__title">
                    Vehicle Registration: Issued by The
                    Road Transport and Safety Agency
                    (RTSA)
                </h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__content">
                <h4 class="fancybox__title">
                    Interpol Motor Vehicle Clearance:
                    issued by Zambia Police
                </h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__content">
                <h4 class="fancybox__title">
                    Application for Motor Vehicle License
                    (“Road Tax”): Payment of fees
                    prescribed in order to obtain the
                    permission to use the vehicle on
                    Zambia national roads and obtain the
                    Motor vehicle license.
                </h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__content">
                <h4 class="fancybox__title">
                    Apply for Safety Inspection (“Road
                    Fitness Test”): This inspection is
                    necessary if the vehicle is to be
                    allowed to drive on public roads. 
                </h4>
              </div>
            </div>
          </div>
          
          
        </div><!-- /.row -->
        {{-- <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h5>Key Benifits</h5>
            <div id="accordion" class="mb-50">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>Fully responsive, retina ready & created for all types of devices. York makes sure your
                      website
                      looks equally breathtaking when viewed on all screen resolutions.Fully responsive, retina
                      ready
                      & created for all types of devices. York makes sure your website looks equally breathtaking
                      when
                      viewed on all screen resolutions.</p>
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
                      when
                      viewed on all screen resolutions.</p>
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
                      website
                      looks equally breathtaking when viewed on all screen resolutions.Fully responsive, retina
                      ready
                      & created for all types of devices. York makes sure your website looks equally breathtaking
                      when
                      viewed on all screen resolutions.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row --> --}}
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="cta cta-banner bg-overlay">
              <div class="bg-img">
                <img src="assets/images/banners/4.jpg" alt="background">
              </div>
              <h2 class="cta__title">Reliable & Express Logistic Solutions!!</h2>
              <p class="cta__desc">Competitive advantages to some of the largest companies allover the world.</p>
              <a href="{{ route('contact') }}" class="btn btn__white">contact us</a>
            </div><!-- /.cta -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.Text Content Section -->