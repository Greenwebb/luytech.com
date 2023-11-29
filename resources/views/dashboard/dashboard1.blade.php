@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('public/assets/css/loader.css') !!}
    {!! Html::style('public/plugins/apex/apexcharts.css') !!}
    {!! Html::style('public/assets/css/dashboard/dashboard_2.css') !!}
    {!! Html::style('public/plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('public/plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('public/assets/css/elements/tooltip.css') !!}
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
           
            <!-- 4 COLUMNS -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget bg-gradient-danger">
                    <div class="f-100">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-white">
                                    <h5 class="text-white"> {{ __('Pending Requests') }}</h5>
                                    <p class="blink_me text-white mt-1"> {{ $awaiting }} Clients are wating for your prompt response</p>
                                    <ul class="pl-3 mb-0">
                                        <li class="py-1"> {{ $p.' Personal' }}</li>
                                        <li class="py-1"> {{ $b.' Companies' }}</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-spacing">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget">
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-shopping-cart"></i>
                                            </span>
                                </div>
                                <h5 class="font-size-14 mb-0"> {{ __('Quotes') }}</h5>
                            </div>
                            <div class="text-muted mt-3">
                                <h5 class="mb-2"> {{ $quotes }}
                                    {{-- <i class="las la-angle-up text-success-teal"></i> --}}
                                </h5>
                                {{-- <div class="d-flex">
                                    <span class="badge badge-success-teal font-size-12"> {{ __('+ 0.2%') }} </span>
                                    <span class="ml-2 text-truncate"> {{ __('From last month') }}</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget">
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-car"></i>
                                            </span>
                                </div>
                                <h5 class="font-size-14 mb-0"> {{ __('Deliveries') }}</h5>
                            </div>
                            <div class="text-muted mt-3">
                                <h5 class="mb-2"> {{ $delivered }} <p>                                  
                                </h5>
                                {{-- <div class="d-flex">
                                    <span class="badge badge-danger font-size-12"> {{ __('- 5.4%') }} </span>
                                    <span class="ml-2 text-truncate"> {{ __('From last month') }}</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget">
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-user"></i>
                                            </span>
                                </div>
                                <h5 class="font-size-14 mb-0"> {{ __('Customers') }}</h5>
                            </div>
                            <div class="text-muted mt-3">
                                <h5 class="mb-2"> {{ $users - 1 }}
                                    {{-- <i class="las la-angle-up text-success-teal"></i> --}}
                                </h5>
                                {{-- <div class="d-flex">
                                    <span class="badge badge-success-teal font-size-12"> {{ __('+ 25%') }} </span>
                                    <span class="ml-2 text-truncate"> {{ __('From last month') }}</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget top-welcome">
                    <div class="f-100">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="media">
                                    {{-- <div class="mr-3">
                                        <img src="{{asset('assets/img/profile-1.jpg')}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                    </div> --}}
                                    <div class="align-self-center media-body">
                                        <div class="text-muted">
                                            <p class="mb-2 text-primary"> {{ __('Welcome to your dashboard') }}</p>
                                            <h5 class="mb-1"> {{ __('Hello, Admin') }}</h5>
                                            <p class="mb-0"> {{ __('System Admin') }}, 
                                                <p class="current-date">
                                                    <span id="currentDate"></span>
                                                </p>
                                                <a class="btn" href="{{ route('index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5"/>
                                                    <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0z"/>
                                                  </svg>&nbsp;Website</a>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="align-self-center col-lg-5">
                                <div class="text-lg-center mt-4 mt-lg-0">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>
                                                <p class="text-muted text-truncate mb-2"> {{ __('Pending') }}</p>
                                                <h5 class="mb-0"> {{ $awaiting }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <p class="text-muted text-truncate mb-2"> {{ __('Replied') }}</p>
                                                <h5 class="mb-0"> {{$replied }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <p class="text-muted text-truncate mb-2"> {{ __('Shipping') }}</p>
                                                <h5 class="mb-0"> {{ $shipping }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <p class="text-muted text-truncate mb-2"> {{ __('Contacts') }}</p>
                                                <h5 class="mb-0"> {{ $contacts }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Useful --}}
                            <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                {{-- <button class="btn btn-primary">
                                    {{ __('Settings') }}
                                </button>
                                <button class="btn btn-info mt-2">
                                    {{ __('My Chat') }}
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget dashboard-table">
                    <div class="widget-heading">
                        <h5 class=""> {{__('Payout History')}}</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><div class="th-content"> {{__('Client')}}</div></th>
                                    <th><div class="th-content"> {{__('Payouts')}}</div></th>
                                    <th><div class="th-content"> {{__('Status')}}</div></th>
                                    <th><div class="th-content"> {{__('Action')}}</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> {{__('Johnson & Johnson')}}</td>
                                    <td> {{__('$2,189')}}</td>
                                    <td><span class="badge outline-badge-info"> {{__('Processing')}} </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="{{__('Edit')}}"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="{{__('Delete')}}"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> {{__('UC Corporation')}}</td>
                                    <td> {{__('$9,189')}}</td>
                                    <td><span class="badge outline-badge-warning"> {{__('Pending')}} </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="{{__('Edit')}}"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="{{__('Delete')}}"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> {{__('Web-o-Soft')}}</td>
                                    <td> {{__('$2,189')}}</td>
                                    <td><span class="badge outline-badge-success-teal"> {{__('Completed')}} </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="{{__('Edit')}}"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="{{__('Delete')}}"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> {{__('Sun Pharma')}}</td>
                                    <td> {{__('$12,189')}}</td>
                                    <td><span class="badge outline-badge-warning"> {{__('Pending')}} </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="{{__('Edit')}}"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="{{__('Delete')}}"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> {{__('Sandisko')}}</td>
                                    <td> {{__('$19,189')}}</td>
                                    <td><span class="badge outline-badge-info"> {{__('Processing')}} </span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="{{__('Edit')}}"><i class="las la-pen"></i></a>
                                            <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="{{__('Delete')}}"><i class="las la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget dashboard-table">
                    <div class="widget-heading">
                        <h5 class=""> {{__('Seller Targets')}}</h5>
                        <div class="dropdown custom-dropdown-icon">
                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span> {{__('Options')}}</span> <i class="las la-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);"> {{__('Mail')}}</a>
                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);"> {{__('Print')}}</a>
                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);"> {{__('Download')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><div class="th-content"> {{__('Seller Info')}}</div></th>
                                    <th><div class="th-content"> {{__('Progress')}}</div></th>
                                    <th><div class="th-content"> {{__('Sales')}}</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="{{ url('assets/img/profile-6.jpg') }}" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                            <p class="mb-0"> {{__('Connor Mcguere')}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-warning"> {{__('29.56%')}}</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="{{ url('assets/img/profile-5.jpg') }}" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                            <p class="mb-0"> {{__('Johny Borja')}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-success-teal" role="progressbar" style="width: 92.89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-success-teal"> {{__('92.89%')}}</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="{{ url('assets/img/profile-3.jpg') }}" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                            <p class="mb-0"> {{__('Dingo Hernandes')}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 65.01%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-info"> {{__('62.01%')}}</span></td>
                                </tr>
                                <tr class="border-bottom border-light">
                                    <td>
                                        <div class="d-flex align-center">
                                            <img src="{{ url('assets/img/profile-13.jpg') }}" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                            <p class="mb-0"> {{__('Kristopher Benny')}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress br-30">
                                            <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 15.28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="text-danger"> {{__('15.28%')}}</span></td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="font-13 text-center mt-4 mb-1 text-muted">
                                <a class="text-primary" href="javascript:void(0);"> {{__('Click here')}}</a> {{__('to see the full seller list')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- 4 COLUMNS END-->
            {{-- <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget quick-category bg-blue p-3">
                    <div class="quick-category-head">
                                <span class="quick-category-icon text-blue bg-white">
                                    <i class="las la-file-alt"></i>
                                </span>
                        <div class="ml-2">
                            <h6>{{__('Invoice')}}</h6>
                            <p>{{__('about sales')}}</p>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>15</h3>
                                <span>80%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Remaining')}}</p>
                        </div>
                        <hr>
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>5</h3>
                                <span>20%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Sent')}}</p>
                        </div>
                        <hr>
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>20</h3>
                                <span>100%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Total Invoice')}}</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5>{{__('Network Information')}}</h5>
                        <div class="ml-auto">
                            <i class="las la-shield-alt top-right-icon"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content login-info">
                        <p>{{__('Last Login: ')}} <span>21 July 2021</span> at 3:07 PM</p>
                        <p>IPv4: <span>66.29.194.121</span> <img src="{{asset('assets/img/flag/zm-flag.png')}}" height="20px" width="20px" alt="flag"> Zambia</p>
                        <p>IPv6 : <span>2430:3060:90d:1e68:c945:d12f:6a5d:cc7a</span></p>
                        <p>ISP: <span>Spectrum</span></p>
                        <p>Chrome/9.1.2 (Macintosh, Intel Mac OS X)</p>
                        <a href="javascript:void(0)" class="text-blue strong pt-3">{{__('View Full History')}}</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget quick-category bg-orange p-3">
                    <div class="quick-category-head">
                                <span class="quick-category-icon text-orange bg-white">
                                    <i class="las la-chart-area"></i>
                                </span>
                        <div class="ml-2">
                            <h6>{{__('Stats')}}</h6>
                            <p>{{__('about projects')}}</p>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>5</h3>
                                <span>30%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Ongoing')}}</p>
                        </div>
                        <hr>
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>1</h3>
                                <span>90%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Almost Complete')}}</p>
                        </div>
                        <hr>
                        <div class="single-qc-cte">
                            <div class="d-flex align-items-center mb-1">
                                <h3>7</h3>
                                <span>100%</span>
                            </div>
                            <p class="font-13 text-white mb-0">{{__('Completed')}}</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget pb-1">
                    <div class="quick-category-head">
                                <span class="quick-category-icon text-white bg-info">
                                    <i class="las la-chart-bar"></i>
                                </span>
                        <div class="ml-2">
                            <h6 class="text-info">{{__('Project Completion')}}</h6>
                            <p class="text-info">{{__('Last 8 months')}}</p>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div class="tabcontent">
                                <div id="taskStatistics"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5>{{__('Current Projects')}}</h5>
                    </div>
                    <hr>
                    <div class="widget-content login-info">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="p-3 br-6 border border-light">
                                    <h6 class="text-info strong mb-1">
                                        {{__('Umbrella Corporation')}}
                                    </h6>
                                    <p class="text-muted font-12 mb-4">{{__('Website Development')}}</p>
                                    <div class="d-flex align-items-center mb-4 flex-wrap">
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-success-teal font-11">5</span>
                                            <a class="ml-2 font-12">{{__('Done')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-warning font-11">3</span>
                                            <a class="ml-2 font-12">{{__('Progress')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-danger font-11">2</span>
                                            <a class="ml-2 font-12">{{__('Pending')}}</a>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-success-teal" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="p-3 br-6 border border-light">
                                    <h6 class="text-info strong mb-1">
                                        {{__('Share Team')}}
                                    </h6>
                                    <p class="text-muted font-12 mb-4">{{__('CRM Management')}}</p>
                                    <div class="d-flex align-items-center mb-4 flex-wrap">
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-success-teal font-11">10</span>
                                            <a class="ml-2 font-12">{{__('Done')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-warning font-11">10</span>
                                            <a class="ml-2 font-12">{{__('Progress')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-danger font-11">10</span>
                                            <a class="ml-2 font-12">{{__('Pending')}}</a>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-success-teal" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 mb-2">
                                <div class="p-3 br-6 border border-light">
                                    <h6 class="text-info strong mb-1">
                                        {{__('Urban Living')}}
                                    </h6>
                                    <p class="text-muted font-12 mb-4">{{__('App Development')}}</p>
                                    <div class="d-flex align-items-center mb-4 flex-wrap">
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-success-teal font-11">6</span>
                                            <a class="ml-2 font-12">{{__('Done')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center mr-4 mb-2">
                                            <span class="badge badge-warning font-11">2</span>
                                            <a class="ml-2 font-12">{{__('Progress')}}</a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-danger font-11">2</span>
                                            <a class="ml-2 font-12">{{__('Pending')}}</a>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mb-1">
                                        <div class="progress-bar bg-success-teal" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('public/assets/js/loader.js') !!}
    {!! Html::script('public/plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('public/plugins/flatpickr/flatpickr.js') !!}
    {!! Html::script('public/assets/js/dashboard/dashboard_2.js') !!}
@endpush

@push('custom-scripts')

@endpush
