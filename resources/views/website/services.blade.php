@extends('website.layouts.app')

@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img"><img src="public/web/assets/images/page-titles/2.webp" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <span class="pagetitle__subheading">Affordable Price, Certified Forwarders</span>
                    <h1 class="pagetitle__heading">Our Services</h1>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services
    =========================== -->
    @include('website.partials.services')
    <!-- /.Services -->

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
                <h2 class="heading__title">Safe, Reliable & Express Logistic Solutions That Saves Your Time!</h2>
                <p class="heading__desc">We pride ourselves on providing the best transport and shipping services
                  available allover the world. Our skilled personnel, utilising the latest communications, tracking and
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
                <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic solutions to our
                  customers to fit their needs.</p>
              </div><!-- /.heading -->
              <!-- progress 1 -->
              <div class="progress-item">
                <h6 class="progress__title">Warehousing</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 2 -->
              <div class="progress-item">
                <h6 class="progress__title">Air Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 3 -->
              <div class="progress-item">
                <h6 class="progress__title">Ocean Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 4 -->
              <div class="progress-item">
                <h6 class="progress__title">Road Freight</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
              <!-- progress 8 -->
              <div class="progress-item">
                <h6 class="progress__title">Supply Chain</h6>
                <span class="progress__percentage"></span>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                  </div>
                </div><!-- /.progress -->
              </div><!-- /.progress-item  -->
            </div><!-- /.skills -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner 1 -->


    @include('website.partials.map')
@endsection

