@extends('website.layouts.app')

@section('content')
<style>
       /* Overlay styles */
       #overlay {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8); /* semi-transparent white background */
            z-index: 9999;
        }

        /* Preloader (spinner) styles */
        #preloader {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            left: 50;
            top: 50;
            height: 50px;
            animation: spin 1s linear infinite;
            justify-content: center;
            align-items: center;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
</style>
<div id="overlay">
    <div id="preloader"></div>
</div>
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
                                <a target="_blank" href="{{ asset('/public/docs/Luytech 2023 Profile.pdf')}}" class="btn btn__secondary btn__block mb-20">
                                    <img src="{{ asset('public/web/assets/images/icons/pdf.png') }}" alt="pdf">
                                    <small>Luytech 2023 Profile</small>
                                </a>
                                {{-- <a href="#" class="btn btn__secondary btn__block">
                                    <img src="public/web/assets/images/icons/pdf.png" alt="pdf">
                                    <span>Presentation Brochure</span>
                                </a> --}}
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
    <script>
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('successMsg').style.display = 'none';
        

        function populatePaymentMethod() {
            var serviceTypeSelect = document.getElementById("service_type");
            var paymentMethodSelect = document.getElementById("payMethod");
            var productTypeSelect = document.getElementById("product_type");

            // Clear existing options
            paymentMethodSelect.innerHTML = '<option required="required" selected disabled="disabled">--select--</option>';
            productTypeSelect.innerHTML = '<option required="required" selected disabled="disabled">--select--</option>';

            // Check if "Clearing & Fowarding" is selected
            if (serviceTypeSelect.value === "clearing & forwarding") {
                // Add the option for "Full Payment"
                paymentMethodSelect.innerHTML += '<option selected value="full">Full Payment</option>';
                productTypeSelect.innerHTML += '<option value="vehicle">Vehicle(s)</option><option value="goods">Goods (Products)</option>';
            }else{
                productTypeSelect.innerHTML += '<option selected value="vehicle">Vehicle(s)</option>';
                paymentMethodSelect.innerHTML += '<option value="full">Full Payment</option><option value="installment">Installments</option>';
            }
        }
    </script>
@endsection
