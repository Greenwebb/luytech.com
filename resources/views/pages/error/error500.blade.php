@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Error')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Error 500')}}</span></li>
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
        <div class="layout-top-spacing mb-5 mt-5">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">{{__('Oops!')}}</h1>
                        <p class="font-25 mb-4">{{__('nternal Server Error. Please try again after some time.')}}I</p>
                        <a class="btn bg-info text-white">{{__('Back to Home')}}</a>
                    </div>
                    <div class="col-md-5 pr-5 mt-5">
                        <img src="{{ url('assets/img/error-500-1.jpg') }}" width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/loader.js') !!}
@endpush

@push('custom-scripts')

@endpush
