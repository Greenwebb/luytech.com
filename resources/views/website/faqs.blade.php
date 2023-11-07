@extends('website.layouts.app')

@section('content')
  
    <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="public/web/assets/images/page-titles/3.webp" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Frequently Asked Questions</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Features</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       FAQ
    ========================= -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary">
                <div class="bg-img"><img src="public/web/assets/images/sidebar/1.jpg" alt="background"></div>
                <div class="widget__content">
                  <h5>How Can <br> We Help You!</h5>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple
                    and easy communication.</p>
                  <a href="#" class="btn btn__primary btn__hover2 btn__block">Schedule An Appointment</a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download bg-theme">
                <h5 class="widget__title color-white">Download Brochures</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__secondary btn__block mb-20">
                    <img src="public/web/assets/images/icons/pdf.png" alt="pdf">
                    <span>2023 Brochure</span>
                  </a>
                  <a href="#" class="btn btn__secondary btn__block">
                    <img src="public/web/assets/images/icons/pdf.png" alt="pdf">
                    <span>Company Profile</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->

            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div id="accordion">
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion__item-title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>The right plan depends on your specific needs and requirements. Explore our plans to find the one that best suits your goals and budget.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse4">
                  <a class="accordion__item-title" href="#">What if I pick the wrong Vehicle?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>No worries! You can easily upgrade, switch plans at any time to better align with your changing needs.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                  <a class="accordion__item-title" href="#">Any contracts or commitments?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>We offer flexibility in signign contracts, allowing you to choose the commitment that works for you.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              
             
             
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse8">
                  <a class="accordion__item-title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse8" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>We provide various payment options, including credit cards, bank transfers, Cash & Mobile transactions and other secure methods. Choose the one that is most convenient for you.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
          
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse10">
                  <a class="accordion__item-title" href="#">When should I receive my Shipment?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse10" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often you will have to provide sensitive information online or
                      over the internet.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse11">
                  <a class="accordion__item-title" href="#">How do I cancel my Shipment?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse11" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often you will have to provide sensitive information online or
                      over the internet.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse12">
                  <a class="accordion__item-title" href="#"> What is Removal in Transit (RIT) and does Luytech provide this service?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse12" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>RIT refers to the movement of goods through a country without customs duties. Yes, Luytech provides Removal in Transit services for neighboring countries like Zimbabwe, DRC, and Malawi.
                    </p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
             
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse14">
                  <a class="accordion__item-title" href="#">If I have questions, where can I find answers?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse14" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>With any financial product that you buy, it is important that you know you are getting the
                      best advice from a reputable company as often you will have to provide sensitive information
                      online or over the internet.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse15">
                  <a class="accordion__item-title" href="#">What happens to my consignment if I cancel?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse15" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>If you cancel after shipment, your order will not be processed. If cancellation occurs before shipment, refer to our return policy for guidance.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse16">
                  <a class="accordion__item-title" href="#">Is my Shipment safe?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse16" class="collapse" data-parent="#accordion">
                  <div class="accordion__item-body">
                    <p>With any financial product that you buy, it is important that you know you are getting the
                      best advice from a reputable company as often you will have to provide sensitive information
                      online or over the internet.</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- / #accordion -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->
   
  @endsection