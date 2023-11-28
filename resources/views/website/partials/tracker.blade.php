<section id="requestQuoteTabs" class="request-quote request-quote-tabs p-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="request__form">
                    <nav class="nav nav-tabs">
                        {{-- <a class="nav__link active" data-toggle="tab" href="#quote">Request A Quote</a> --}}
                        <a class="nav__link active" data-toggle="tab" href="#track">Track & Trace</a>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="quote">
                            <div class="request-quote-panel">
                                <div class="request__form-body">
                                    <form id="requestquote" action="">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h6>Personal Data</h6>
                                            </div><!-- /.col-lg-12 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h6 class="mt-5">Consignment Info</h6>
                                            </div><!-- /.col-lg-12 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option selected disabled="disabled">Select Service
                                                        </option>
                                                        <option>Import of motor vehicle</option>
                                                        <option>Clearing and forwarding</option>
                                                        <option>Delivery</option>
                                                        <option>Registration
                                                        <option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Vehicle Make">
                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="number" id="year" name="year"
                                                        class="form-control" min="1900" max="2099"
                                                        placeholder="Year e.g., 2014" required>

                                                </div>
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option selected disabled>Fuel</option>
                                                        <option>Petrol</option>
                                                        <option>Diesel</option>
                                                        <option>Electric</option>
                                                        <option>Hybrid (Electric & Fuel)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option selected disabled>Transmission</option>
                                                        <option>Automatic</option>
                                                        <option>Manual or CVT</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="zambia_provinces"
                                                        id="zambia_provinces">
                                                        <option selected disabled>Select Province</option>
                                                        <option value="Central">Central</option>
                                                        <option value="Copperbelt">Copperbelt</option>
                                                        <option value="Eastern">Eastern</option>
                                                        <option value="Luapula">Luapula</option>
                                                        <option value="Lusaka">Lusaka</option>
                                                        <option value="Muchinga">Muchinga</option>
                                                        <option value="Northern">Northern</option>
                                                        <option value="North-Western">North-Western</option>
                                                        <option value="Southern">Southern</option>
                                                        <option value="Western">Western</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Town">
                                                </div>
                                            </div><!-- /.col-lg-6 -->

                                            <!-- /.col-lg-4 -->
                                            <div class="col-sm-8 col-md-8 col-lg-8 d-flex flex-wrap">
                                                
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Express Delivery
                                                        <input type="radio" name="radioGroup2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Insurance
                                                        <input type="radio" name="radioGroup2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Packaging
                                                        <input type="radio" name="radioGrou2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                            </div><!-- /.col-lg-12 -->
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <button class="btn btn__secondary btn__block">Request A
                                                    Quote</button>
                                            </div><!-- /.col-lg-12 -->
                                        </div>
                                    </form>

                                </div><!-- /.request__form-body -->
                                <div class="widget widget-download bg-theme">
                                    <div class="widget__content">
                                        <h5>Industry<br>Solutions!</h5>
                                        <p>Our Countrywide presence ensures the timeliness, cost efficiency and
                                            compliance adherence
                                            required to ensure your production timelines are met.</p>
                                        <a href="#" class="btn btn__secondary btn__hover2 btn__block">
                                            <span>Download 2019 Brochure</span><i class="icon-arrow-right"></i>
                                        </a>
                                    </div><!-- /.widget__content -->
                                </div><!-- /.widget-download -->
                            </div><!-- /.request-quote-panel-->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade show active" id="track">
                            <div class="request-quote-panel">
                                <div class="request__form-body">
                                    <form action="{{route('tracker.search')}}" method="POST"  class="row">
                                        {{-- <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Shipment Type</label>
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option>Packaging</option>
                                                        <option>Packaging 1</option>
                                                        <option>Packaging 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- /.col-lg-12 --> --}}
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Tracking Number</label>
                                                <div class="form-group">
                                                    <textarea name="tracker_id" class="form-control"
                                                        placeholder="Enter the tracking number for consignment here."></textarea>
                                                </div>
                                            </div>
                                        </div><!-- /.col-lg-12 -->
                                            {{-- <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Fragile
                                                        <input type="radio" name="radioGroup2" checked="">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Express Delivery
                                                        <input type="radio" name="radioGroup2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Insurance
                                                        <input type="radio" name="radioGroup2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Packaging
                                                        <input type="radio" name="radioGroup2">
                                                        <span class="radio-indicator"></span>
                                                    </label>
                                                </div>
                                            </div><!-- /.col-lg-12 --> --}}
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button type="submit" class="btn btn__secondary btn__block">
                                                Track & Trace
                                            </button>
                                        </div><!-- /.col-lg-12 -->
                                    </form>


                                </div><!-- /.request__form-body -->
                                <div class="widget widget-download bg-theme">
                                    <div class="widget__content">
                                        <h2 style="color: #fff">Track<br>& Trace!</h2>
                                        <p>Welcome to our Track & Trace service. 
                                            To check the current status of your shipment, 
                                            please enter your tracking number.</p>
                                        {{-- <a href="#" class="btn btn__secondary btn__hover2 btn__block">
                                            <span>Download 2019 Brochure</span><i class="icon-arrow-right"></i>
                                        </a> --}}
                                    </div><!-- /.widget__content -->
                                </div><!-- /.widget-download -->
                            </div><!-- /.request-quote-panel-->
                        </div><!-- /.tab -->
                    </div><!-- /.tab-content -->
                </div><!-- /.request-form -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>