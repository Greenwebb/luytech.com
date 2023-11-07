@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('public/assets/css/loader.css') !!}
    {!! Html::style('public/plugins/dropify/dropify.min.css') !!}
    {!! Html::style('public/assets/css/pages/profile_edit.css') !!}
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Other Pages')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Quote Reply')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                <li style="display: none;"><span id="currentDate"></span></li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="account-settings-container layout-top-spacing">
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <div class="d-flex mt-2">
                                        <div class="profile-edit-right">
                                            <div class="tab-content" id="v-border-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-border-pills-general" role="tabpanel" aria-labelledby="v-border-pills-general-tab">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                            <div id="preloader" style="display: none;">
                                                                Preloader or Loading Animation...
                                                            </div>
                                                            <form method="POST" action="{{route('reply.send')}}" class="form"  id="replyForm">
                                                                @csrf
                                                                
                                                                <h6>{{__('CUSTOMER INFORMATION')}}</h6>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Full Name')}}</label>
                                                                            <input type="text" class="form-control mb-4" placeholder="{{$q->user->fname.' '.$q->user->lname}}" value="{{$q->user->fname.' '.$q->user->lname}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Phone')}}</label>
                                                                            <input type="text" class="form-control mb-4" placeholder="{{$q->user->phone}}" value="{{$q->user->phone}}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <br>
                                                                <h6>{{__('VEHICLE INFORMATION')}}</h6>
                                                                <hr>
                                                                
                                                                <input type="hidden" name="consignment_id" value="{{$q->id}}">
                                                                @forelse ($q->cars as $c)
                                                                    
                                                                <div style="padding: 2%; gap:2px" class="row">
                                                                    <input type="hidden" name="car_id[]" value="{{$c->id}}">
                                                                    <div class="form-group">
                                                                        <label for="profession">{{__('Car Make')}}</label>

                                                                        <input type="text" class="form-control mb-4" placeholder="{{$c->car_make}}" value="{{$c->car_make}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">{{__('Car Model')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{$c->car_model}}" value="{{$c->car_model}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">{{__('Fuel')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{$c->car_model}}" value="{{$c->fuel}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">{{__('Transmission')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{$c->transmission}}" value="{{$c->transmission}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="profession">{{__('Total')}}</label>
                                                                        <input type="text" class="form-control mb-4" name="car_cost[]" placeholder="" value="">
                                                                    </div>
                                                                </div>
                                                                @empty
                                                                    
                                                                @endforelse
                                                                
                                                                <button class="btn btn-primary">{{__('Send Quote')}}</button>
                                                            </form>
                                                            {{-- <div class="col-xl-3 col-lg-12 col-md-12">
                                                                <div class="upload text-center img-thumbnail">
                                                                    <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ url('assets/img/profile-1.jpg') }}" data-max-file-size="2M" />
                                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> {{__('Upload Picture')}}</p>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-border-pills-about" role="tabpanel" aria-labelledby="v-border-pills-about-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="aboutBio">{{__('Bio')}}</label>
                                                                <textarea class="form-control" placeholder="{{__('Hi')}}Tell something interesting about yourself" rows="10">{{__('I interpret data and turns it into information which can offer ways to improve a business, thus affecting business decisions. I gather information from various sources and interpret patterns and trends – as such a Data Analyst job description should highlight the analytical nature of the role.')}}
                                                                    {{__('My responsibilities include:
                                                                    Interpreting data, analyzing results using statistical techniques.
                                                                    Developing and implementing data analyses, data collection systems.
                                                                    Acquiring data from primary or secondary data sources and maintaining databases.')}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-border-pills-domain" role="tabpanel" aria-labelledby="v-border-pills-domain-tab">
                                                    <div class="row">
                                                        <div class="col-md-12 text-right mb-2">
                                                            <button class="btn btn-primary btn-sm">{{__('Add +')}}</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="platform-div">
                                                                <div class="form-group">
                                                                    <label for="platform-title">{{__('Name')}}</label>
                                                                    <input type="text" class="form-control mb-4" placeholder="{{__('Name')}}" value="{{__('Data Analyst')}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="platform-description">{{__('Description')}}</label>
                                                                    <textarea class="form-control mb-4" placeholder="{{__('Platforms Description')}}" rows="10">{{__('A Data Analyst interprets data and turns it into information which can offer ways to improve a business, thus affecting business decisions. Data Analysts gather information from various sources and interpret patterns and trends – as such a Data Analyst job description should highlight the analytical nature of the role.')}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-border-pills-contact" role="tabpanel" aria-labelledby="v-border-pills-contact-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="country">{{__('Country')}}</label>
                                                                        <select class="form-control">
                                                                            <option>{{__('All Countries')}}</option>
                                                                            <option selected>{{__('United States')}}</option>
                                                                            <option>{{__('Uruguay')}}</option>
                                                                            <option>{{__('Argentina')}}</option>
                                                                            <option>{{__('France')}}</option>
                                                                            <option>{{__('Italy')}}</option>
                                                                            <option>{{__('India')}}</option>
                                                                            <option>{{__('Japan')}}</option>
                                                                            <option>{{__('Turkey')}}</option>
                                                                            <option>{{__('Russia')}}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="address">{{__('Address')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Address')}}" value="" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="location">{{__('Location')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Location')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="phone">{{__('Phone')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Write your phone number here')}}" value="{{__('+1 (000) 125-45854')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="email">{{__('Email')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Write your email here')}}" value="{{__('sara@gmail.com')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="website1">{{__('Website')}}</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Write your website here')}}" value="{{__('www.demowebsite.com')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-border-pills-social" role="tabpanel" aria-labelledby="v-border-pills-social-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-10 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="country">{{__('Select Social Media')}}</label>
                                                                        <select class="form-control">
                                                                            <option>{{__('Github')}}</option>
                                                                            <option>{{__('Slack')}}</option>
                                                                            <option>{{__('Snapchat')}}</option>
                                                                            <option>{{__('Outlook')}}</option>
                                                                            <option>{{__('Google')}}</option>
                                                                            <option>{{__('Wordpress')}}</option>
                                                                            <option>{{__('Gitlab')}}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 pt-1 mb-3">
                                                                    <button class="btn btn-primary">{{__('Add')}}</button>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-linkedin mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-linkedin">
                                                                                        <i class="lab la-linkedin-in font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="{{__('linkedin Username')}}" aria-label="{{__('Username')}}" aria-describedby="linkedin" value="{{__('sara.williams')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-tweet mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-info">
                                                                                        <i class="lab la-twitter font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="{{__('Hi')}}Twitter Username" aria-label="{{__('Hi')}}Username" aria-describedby="tweet" value="{{__('@swilliams')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-insta mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-danger">
                                                                                        <i class="lab la-instagram font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="Github Username" aria-label="{{__('Username')}}" aria-describedby="github" value="{{__('@sara.williams')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-fb mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-facebook">
                                                                                        <i class="lab la-facebook-f font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="{{__('Facebook Username')}}" aria-label="{{__('Username')}}" aria-describedby="fb" value="{{__('sara.williams')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-skype mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-info">
                                                                                        <i class="lab la-skype font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="{{__('Github Username')}}" aria-label="{{__('Username')}}" aria-describedby="github" value="{{__('@sara_williams')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group social-apple mb-3">
                                                                        <div class="input-group-prepend">
                                                                                    <span class="input-group-text bg-dark">
                                                                                        <i class="lab la-apple font-30 text-white"></i>
                                                                                    </span>
                                                                        </div>
                                                                        <input type="text" class="form-control border-0" placeholder="{{__('Github Username')}}" aria-label="{{__('Username')}}" aria-describedby="github" value="{{__('Hi')}}@sara.williams">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-border-pills-education" role="tabpanel" aria-labelledby="v-border-pills-education-tab">
                                                    <div class="col-md-12 text-right mb-2">
                                                        <button class="btn btn-primary">{{__('Add')}}</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="edu-section">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="degree1">{{__('Add')}}x</label>
                                                                        <input type="text" class="form-control mb-4" placeholder="{{__('Add your education here')}}" value="{{__('NIIT')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>{{__('Add')}}x</label>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <select class="form-control mb-4">
                                                                                            <option>{{__('Month')}}</option>
                                                                                            <option>{{__('Jan')}}</option>
                                                                                            <option>{{__('Feb')}}</option>
                                                                                            <option>{{__('Mar')}}</option>
                                                                                            <option>{{__('Apr')}}</option>
                                                                                            <option>{{__('May')}}</option>
                                                                                            <option>{{__('Jun')}}</option>
                                                                                            <option>{{__('Jul')}}</option>
                                                                                            <option>{{__('Aug')}}</option>
                                                                                            <option>{{__('Sep')}}</option>
                                                                                            <option selected="selected">{{__('Oct')}}</option>
                                                                                            <option>{{__('Oct')}}x</option>
                                                                                            <option>{{__('Dec')}}</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <select class="form-control mb-4">
                                                                                            <option>{{__('Year')}}</option>
                                                                                            <option>2020</option>
                                                                                            <option>2019</option>
                                                                                            <option>2018</option>
                                                                                            <option selected="selected">2017</option>
                                                                                            <option>2016</option>
                                                                                            <option>2015</option>
                                                                                            <option>2014</option>
                                                                                            <option>2013</option>
                                                                                            <option>2012</option>
                                                                                            <option>2011</option>
                                                                                            <option>2010</option>
                                                                                            <option>2009</option>
                                                                                            <option>2008</option>
                                                                                            <option>2007</option>
                                                                                            <option>2006</option>
                                                                                            <option>2005</option>
                                                                                            <option>2004</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>{{__('Ending In')}}</label>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 mb-4">
                                                                                        <select class="form-control">
                                                                                            <option>{{__('Month')}}</option>
                                                                                            <option selected="selected">{{__('Jan')}}</option>
                                                                                            <option>{{__('Feb')}}</option>
                                                                                            <option>{{__('Mar')}}</option>
                                                                                            <option>{{__('Apr')}}</option>
                                                                                            <option>{{__('May')}}</option>
                                                                                            <option>{{__('Jun')}}</option>
                                                                                            <option>{{__('Jul')}}</option>
                                                                                            <option>{{__('Aug')}}</option>
                                                                                            <option>{{__('Sep')}}</option>
                                                                                            <option>{{__('Oct')}}</option>
                                                                                            <option>{{__('Nov')}}</option>
                                                                                            <option>{{__('Dec')}}</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <select class="form-control input-sm">
                                                                                            <option>{{__('Year')}}</option>
                                                                                            <option selected="selected">2020</option>
                                                                                            <option>2019</option>
                                                                                            <option>2018</option>
                                                                                            <option>2017</option>
                                                                                            <option>2016</option>
                                                                                            <option>2015</option>
                                                                                            <option>2014</option>
                                                                                            <option>2013</option>
                                                                                            <option>2012</option>
                                                                                            <option>2011</option>
                                                                                            <option>2010</option>
                                                                                            <option>2009</option>
                                                                                            <option>2008</option>
                                                                                            <option>2007</option>
                                                                                            <option>2006</option>
                                                                                            <option>2005</option>
                                                                                            <option>2004</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-border-pills-work" role="tabpanel" aria-labelledby="v-border-pills-work-tab">
                                                    <div class="row">
                                                        <div class="col-md-12 text-right mb-2">
                                                            <button class="btn btn-primary">{{__('Add')}}</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="work-section">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="degree2">{{__('Company Name')}}</label>
                                                                            <input type="text" class="form-control mb-4" placeholder="{{__('Add your work here')}}" value="{{__('Amazon')}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="degree3">{{__('Company Name')}}</label>
                                                                                    <input type="text" class="form-control mb-4" placeholder="{{__('Job Title')}}" value="{{__('Data Analyst')}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="degree4"></label>
                                                                                    <input type="text" class="form-control mb-4" placeholder="{{__('Location')}}" value="{{__('Geneva')}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>{{__('Starting From')}}</label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <select class="form-control mb-4">
                                                                                                <option>{{__('Month')}}</option>
                                                                                                <option>{{__('Jan')}}</option>
                                                                                                <option>{{__('Feb')}}</option>
                                                                                                <option>{{__('Mar')}}</option>
                                                                                                <option>{{__('Apr')}}</option>
                                                                                                <option>{{__('May')}}</option>
                                                                                                <option>{{__('Jun')}}</option>
                                                                                                <option>{{__('Jul')}}</option>
                                                                                                <option>{{__('Aug')}}</option>
                                                                                                <option>{{__('Sep')}}</option>
                                                                                                <option>{{__('Oct')}}</option>
                                                                                                <option>{{__('Nov')}}</option>
                                                                                                <option>{{__('Dec')}}</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <select class="form-control mb-4">
                                                                                                <option>{{__('Year')}}</option>
                                                                                                <option>2020</option>
                                                                                                <option>2019</option>
                                                                                                <option>2018</option>
                                                                                                <option>2017</option>
                                                                                                <option>2016</option>
                                                                                                <option>2015</option>
                                                                                                <option>2014</option>
                                                                                                <option>2013</option>
                                                                                                <option>2012</option>
                                                                                                <option>2011</option>
                                                                                                <option>2010</option>
                                                                                                <option>2009</option>
                                                                                                <option>2008</option>
                                                                                                <option>2007</option>
                                                                                                <option>2006</option>
                                                                                                <option>2005</option>
                                                                                                <option>2004</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>{{__('Ending In')}}</label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6 mb-4">
                                                                                            <select class="form-control">
                                                                                                <option>{{__('Month')}}</option>
                                                                                                <option>{{__('Jan')}}</option>
                                                                                                <option>{{__('Feb')}}</option>
                                                                                                <option>{{__('Mar')}}</option>
                                                                                                <option>{{__('Apr')}}</option>
                                                                                                <option>{{__('May')}}</option>
                                                                                                <option>{{__('Jun')}}</option>
                                                                                                <option>{{__('Jul')}}</option>
                                                                                                <option>{{__('Aug')}}</option>
                                                                                                <option>{{__('Sep')}}</option>
                                                                                                <option>{{__('Oct')}}</option>
                                                                                                <option>{{__('Nov')}}</option>
                                                                                                <option>{{__('Dec')}}</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <select class="form-control input-sm">
                                                                                                <option>{{__('Year')}}</option>
                                                                                                <option>2020</option>
                                                                                                <option>2019</option>
                                                                                                <option>2018</option>
                                                                                                <option>2017</option>
                                                                                                <option>2016</option>
                                                                                                <option>2015</option>
                                                                                                <option>2014</option>
                                                                                                <option>2013</option>
                                                                                                <option>2012</option>
                                                                                                <option>2011</option>
                                                                                                <option>2010</option>
                                                                                                <option>2009</option>
                                                                                                <option>2008</option>
                                                                                                <option>2007</option>
                                                                                                <option>2006</option>
                                                                                                <option>2005</option>
                                                                                                <option>2004</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('replyForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Show the preloader while processing
            document.getElementById('preloader').style.display = 'block';
            
            // Get the form data
            const formData = new FormData(this);

            // Send an Ajax request to the server
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Process the response or handle success
                    // For instance, you can redirect or display a success message

                    // Hide the preloader after successful processing
                    document.getElementById('preloader').style.display = 'none';
                } else {
                    // Handle errors or failed submission
                    // You can display an error message or handle it accordingly

                    // Hide the preloader on error as well
                    document.getElementById('preloader').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Error:', error);

                // Hide the preloader on error
                document.getElementById('preloader').style.display = 'none';
            });
        });
    });
</script>
@push('plugin-scripts')
    {!! Html::script('public/assets/js/loader.js') !!}
    {!! Html::script('public/plugins/dropify/dropify.min.js') !!}
    {!! Html::script('public/assets/js/pages/profile_edit.js') !!}
@endpush

@push('custom-scripts')

@endpush
