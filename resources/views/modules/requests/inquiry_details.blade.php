@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('public/assets/css/loader.css') !!}
    {!! Html::style('public/assets/css/apps/mailbox.css') !!}
    {!! Html::style('public/assets/css/elements/tooltip.css') !!}
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area Starts -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"> {{__('Apps')}}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);"> {{__('Email')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Email Details')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                <li style="display: none;"><span id="currentDate"></span></li>
            </ul>
            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <button class="premium-btn">
                        <i class="las la-star"></i>
                        <span>{{__('Premium')}}</span>
                    </button>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area Ends -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card-box email-inbox">
                            
                            <div class="email-right">
                                <div class="email-right-top flex-column align-items-start">
                                    {{-- <div class="email-search-container pl-0">
                                        <div class="mail-options d-flex">
                                            <a title="{{__('Delete')}}" data-placement="bottom"  class="font-19 mr-2 ml-0 pointer pt-1 bs-tooltip"><i class="lar la-trash-alt"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="email-right-bottom">
                                    <div class="mt-4 d-block">
                                        <h5 class="font-18"> {{__('Please resolve these queries before sending quotes')}}</h5>
                                        <hr>
                                        <div class="media mb-3 mt-1">
                                            <div class="media-body">
                                                <small class="float-right"> {{$c->created_at->toFormattedDateString()}}</small>
                                                <h6 class="m-0 font-14"> {{$c->full_name}}</h6>
                                                <small class="text-muted"> {{'From: '.$c->email}}</small>
                                            </div>
                                        </div>
                                        <p> {{__('Hello !')}}</p>
                                        <p> {{$c->contact_message}}</p>
                                    
                                        <p><b> {{__('Warm Regards,')}}</b> <br> {{$c->full_name}}</p>
                                    
                                        <!-- end row-->
                                        <div class="mt-3 text-right">
                                            <a href="mailto:{{$c->email}}" class="btn btn-sm btn-primary mr-2"><i class="mdi mdi-reply mr-1"></i> {{__('Reply')}}</a>
                                            {{-- <a href="" class="btn btn-sm btn-dark"> {{__('Forward')}} <i class="mdi mdi-forward ml-1"></i></a> --}}
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

@push('plugin-scripts')
    {!! Html::script('public/assets/js/loader.js') !!}
    {!! Html::script('public/assets/js/apps/custom-mailbox.js') !!}
@endpush

@push('custom-scripts')

@endpush
