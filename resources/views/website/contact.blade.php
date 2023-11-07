@extends('website.layouts.app')

@section('content')
   
    <section id="googleMap" class="google-map p-0">
      @include('website.partials.map')
     
      
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact 3
    =========================== -->
    <section id="contact3" class="contact contact-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Our Locations</span>
              <h2 class="heading__title">Contact Us</h2>
              <p class="heading__desc">We understand the importance of approaching each work integrally and believe in
                the power of simple and easy communication.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <form method="POST"  action="{{ route('inquiry.store') }}" id="contactForm">
              @csrf
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" id="contact-name" name="full_name"
                      placeholder="Full Name" required></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="email" class="form-control" id="contact-email"
                      name="email" placeholder="Email" required></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                      name="phone" required></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Province"
                      id="contact-province" name="province" required></div>
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Request Details" id="contact-message"
                      name="contact_message" required></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                  <button type="submit" class="btn btn__secondary btn__hover3 btn__block">Submit Request</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 3 -->


@endsection
