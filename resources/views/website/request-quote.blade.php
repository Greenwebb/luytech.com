@extends('website.layouts.app')

@section('content')
    <!-- ========================
           page title
        =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="public/web/assets/images/page-titles/14.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Request A Quote</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Request A Quote</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
           Request Quote
        ========================= -->
    <section id="requestQuote" class="request-quote pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar mb-30">
                       
                        <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary">
                            <div class="bg-img"><img src="public/web/assets/images/sidebar/1.jpg" alt="background"></div>
                            <div class="widget__content">
                                <h5>How Can <br> We Help You!</h5>
                                <p>We understand the importance approaching each work integrally and believe in the power of
                                    simple
                                    and easy communication.</p>
                                <a href="#" class="btn btn__primary btn__hover2 btn__block">Schedule An
                                    Appointment</a>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-help -->
                        <div class="widget widget-download bg-theme">
                            <h5 class="widget__title color-white">Download Brochures</h5>
                            <div class="widget__content">
                                <a href="#" class="btn btn__secondary btn__block mb-20">
                                    <img src="public/web/assets/images/icons/pdf.png" alt="pdf">
                                    <span>2020 Brochure</span>
                                </a>
                                <a href="#" class="btn btn__secondary btn__block">
                                    <img src="public/web/assets/images/icons/pdf.png" alt="pdf">
                                    <span>Presentation Brochure</span>
                                </a>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-download -->

                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                <div style="background: #f59141;" class="col-sm-12 col-md-12 col-lg-8">
                    @include('website.partials.wizard')
                    
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Request Quote -->

    <!-- =========================
                contact 1
    =========================  -->
    @include('website.partials.map')
@endsection
