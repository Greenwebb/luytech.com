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
                                <li style="color: coral" class="breadcrumb-item active font-bold"><a href="{{ route('quote.show', $q->id) }}">
                                    <b style="color: coral">
                                        <svg style="color: coral" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                        </svg>
                                    </b>
                                </a></li>
                                &nbsp;&nbsp;
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Quote Reply')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                {{-- <li style="display: block;"><span id="currentDate"></span></li> --}}
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
                                                            <div id="preloader" style="display: none; justify-content:center; margin:auto; margin-left:45%">
                                                                <div style="display: block">
                                                                    <img width="40" src="{{ asset('public/image/isloader.gif') }}">
                                                                    <br>
                                                                    <small>Sending quotation, please wait...</small>
                                                                </div>
                                                            </div>
                                                            <div id="quote-update-message" style="color: #fff; padding:1%; padding-top:2%; margin:1%; border-radius:2%; box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px; background-color:rgba(154, 248, 135, 0.532); display:none; color:rgb(103, 170, 2)4, 31); font-size:14px">
                                                                <p>Quote updated successfully!</p>
                                                                <button class="btn btn-danger text-white" onclick="location.reload(true)">Reply Again</button>
                                                            </div>
                                                            <div id="quote-update-message2" style="color: #fff; padding:1%; padding-top:2%; margin:1%; border-radius:2%; box-shadow: rgba(250, 0, 0, 0.2) 0px 18px 50px -10px; background-color:rgb(255, 0, 0); display:none; color:rgb(103, 170, 2)4, 31); font-size:14px">
                                                                <p>Oops.. Quote reply failed</p>
                                                                <button class="btn btn-danger text-white" onclick="location.reload(true)">Reply Again</button>
                                                            </div>
                                                            <br>
                                                            <form method="POST" action="{{route('reply.send')}}" enctype="multipart/form-data" class="form"  id="replyForm">
                                                                @csrf
                                                                
                                                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                                                                  </svg>&nbsp;{{__('CUSTOMER INFORMATION')}}</h6>
                                                                <hr>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Full Name')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$q->user->fname.' '.$q->user->lname}}" value="{{$q->user->fname.' '.$q->user->lname}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Phone')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$q->user->phone}}" value="{{$q->user->phone}}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Email')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$q->user->email}}" value="{{$q->user->email}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Address')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$q->delivering_from}}" value="{{$q->delivering_from ?? 'None'}}">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <br>
                                                                @if ($q->product_type == 'vehicle')
                                                                    <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                                                      </svg>&nbsp;{{__('VEHICLE INFORMATION')}}</h6>
                                                                    <hr>
                                                                    
                                                                    <input type="hidden" name="consignment_id" value="{{$q->id}}">
                                                                    @forelse ($q->cars as $c)
                                                                        
                                                                    <div style="padding: 2%; gap:2px" class="row">
                                                                        <input type="hidden" name="car_id[]" value="{{$c->id}}">
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Car Make')}}</label>

                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->car_make}}" value="{{$c->car_make}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Car Model')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->car_model}}" value="{{$c->car_model}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Fuel')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->car_model}}" value="{{$c->fuel}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Transmission')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->transmission}}" value="{{$c->transmission}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Total')}}</label>
                                                                            <input type="text" class="form-control mb-4" name="car_cost[]" placeholder="" value="">
                                                                        </div>
                                                                    </div>
                                                                    @empty
                                                                    @endforelse
                                                                @else
                                                                    <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
                                                                      </svg>&nbsp;{{__('GOODS INFORMATION')}}</h6>
                                                                    <hr>
                                                                    
                                                                    <input type="hidden" name="consignment_id" value="{{$q->id}}">
                                                                    @forelse ($q->goods as $c)
                                                                        
                                                                    <div style="padding: 2%; gap:2px" class="row">
                                                                        <input type="hidden" name="goods_id[]" value="{{$c->id}}">
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Item')}}</label>

                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->name}}" value="{{$c->name}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Size')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->size}}" value="{{$c->size}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Qty')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->qty}}" value="{{$c->qty}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Other information')}}</label>
                                                                            <input readonly type="text" class="form-control mb-4" placeholder="{{$c->packaging}}" value="{{$c->packaging}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="profession">{{__('Total')}}</label>
                                                                            <input type="text" class="form-control mb-4" name="goods_cost[]" placeholder="" value="">
                                                                        </div>
                                                                    </div>
                                                                    @empty
                                                                    @endforelse
                                                                @endif
                                                                <br>
                                                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                                                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z"/>
                                                                  </svg>&nbsp;{{__('ATTACHMENT')}}</h6>
                                                                <hr>
                                                                <div class="row ">
                                                                    <div class="col-sm-8">
                                                                        <div class="form-group">
                                                                            <label for="fullName">{{__('Upload Quotation')}}</label>
                                                                            <input type="file" name="invoice_file" class="form-control mb-4">
                                                                        </div>
                                                                    </div>
                                                                </div>
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
            event.preventDefault();
            document.getElementById('preloader').style.display = 'block';
            document.getElementById('replyForm').style.display = 'none';
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    document.getElementById('preloader').style.display = 'none';
                    // document.getElementById('replyForm').style.display = 'block';
                    document.getElementById('quote-update-message').style.display = 'block';
                } else {
                    document.getElementById('preloader').style.display = 'none';
                    document.getElementById('quote-update-message2').style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('quote-update-message2').style.display = 'block';
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
