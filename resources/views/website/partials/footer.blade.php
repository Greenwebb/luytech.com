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
              <a href="https://web.facebook.com/LuytechMotors"><i class="fa fa-facebook"></i></a>
              {{-- <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a> --}}
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
              <img width="120px" src="public/web/assets/images/logo/logo-light.png" alt="logo" class="footer-logo">
              <p>Luytech is a robust clearing and forwarding company focused on providing efficient and reliable solutions to meet all your logistics needs.</p>
              <ul class="contact__list list-unstyled">
                <li><span>Email:</span><span><a href="mailto:info@luytechzm.com" class="__cf_email__" data-cfemail="ade2ddd9c4c0c8ed9ac2dfc2c2cb83cec2c0">info@luytechzm.com</a></span></li>
                <li><span>Phone:</span><span><a href="tel: +260760904072">+260760904072</a></span></li>
                <li><span>Sales:</span><span><a href="tel: +260760904072">+260976138062</a></span></li>
                <li><span>Support:</span><span><a href="tel: +260760904072">+260955344022</a></span></li>
              </ul>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-4 footer__widget footer__widget-nav">
            <h6 class="footer__widget-title">Who We Are</h6>
            <div class="footer__widget-content">
              <nav>
                <ul class="list-unstyled">
                  <li><a href="{{ route('about') }}">About Us</a></li>
                  {{-- <li><a href="#">Meet Our Team</a></li> --}}
                  {{-- <li><a href="#">Success Stories</a></li> --}}
                  <li><a href="{{ route('contact') }}">Contacts</a></li>
                  {{-- <li><a href="#">Careers</a></li> --}}
                </ul>
              </nav>
            </div><!-- /.footer-widget-content -->
          </div><!-- /.col-lg-2 -->
       
          <div class="col-6 col-sm-6 col-md-3 col-lg-4 footer__widget footer__widget-nav">
            <h6 class="footer__widget-title">Quick Links</h6>
            <div class="footer__widget-content">
              <nav>
                <ul class="list-unstyled">
                  <li><a href="{{ route('request-quote') }}">Request A Quote</a></li>
                  <li><a href="{{ route('tracker.index') }}">Track & Trace</a></li>
                  <li><a href="{{ route('contact') }}">Find A Location</a></li>
                  {{-- <li><a href="#">Global Agents</a></li> --}}
                  <li><a href="{{ route('faqs') }}">Help & FAQ</a></li>
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
              <span>&copy; 2023 Luytech Motors, All rights reserved.</span>
              <a href="http://www.greenwebbtech.com/"><t style="color:rgba(26, 170, 38, 0.933);">Green</t>webb</a>
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