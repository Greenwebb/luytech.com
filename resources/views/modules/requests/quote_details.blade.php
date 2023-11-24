@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('public/assets/css/loader.css') !!}
    {!! Html::style('public/plugins/jquery-ui/jquery-ui.min.css') !!}
    {!! Html::style('public/assets/css/elements/tooltip.css') !!}
    {!! Html::style('public/assets/css/apps/ecommerce.css') !!}
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Apps')}}</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="apps_ecommerce.html">{{__('Ecommerce')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Order Details')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                <li style="display: none;"><span id="currentDate"></span></li>
            </ul>
            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <a href="{{route('quote.delete', $q->id)}}" class="premium-btn btn-danger p-2">
                        <i class="las la-trash"></i>
                        <span>{{__('Delete')}}</span>
                    </a>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area Ends -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="">
                    <div class="widget-content searchable-container grid">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-box">
                                    <h5 class="header-title mb-3">{{__('Track Your Order')}}</h5>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <h6 class="mt-0">{{__('Order ID:')}}</h6>
                                                <p>{{'#'.$q->order_number ?? 'None'}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <h6 class="mt-0">{{__('Tracking ID:')}}</h6>
                                                <p>{{$q->tracking_id ?? 'None'}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="track-order-list">
                                        <ul class="list-unstyled">
                                            <li class="{{ $q->current_state >= 2 ? 'completed' : '' }}">
                                                @if( $q->current_state == 1)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Quote Requested')}}</h6>
                                                <p class="text-muted font-12">{{$q->created_at->toFormattedDateString()}}  </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 3 ? 'completed' : '' }}">
                                                @if( $q->current_state == 2)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Quoted')}}</h6>
                                                {{-- <p class="text-muted font-12">{{$q->cars[0]->updated_at->toFormattedDateString()}} </p> --}}
                                            </li>
                                            <li class="{{ $q->current_state >= 4 ? 'completed' : '' }}">
                                                @if( $q->current_state == 3)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Paid & Unordered')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 5 ? 'completed' : '' }}">
                                                @if( $q->current_state == 4)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Ordered')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 6 ? 'completed' : '' }}">
                                                @if( $q->current_state == 5)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Left Origin')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 7 ? 'completed' : '' }}">
                                                @if( $q->current_state == 6)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Arrived at Port')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 8 ? 'completed' : '' }}">
                                                @if( $q->current_state == 7)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Port Cleared')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 9 ? 'completed' : '' }}">
                                                @if( $q->current_state == 8)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Arrived at Border')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 10 ? 'completed' : '' }}">
                                                @if( $q->current_state == 9)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('Border Cleared')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li class="{{ $q->current_state >= 11 ? 'completed' : '' }}">
                                                @if( $q->current_state == 10)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13">{{__('In Transit to be Delivered')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}} </p>
                                            </li>
                                            <li>
                                                @if( $q->current_state >= 11)
                                                <span class="active-dot dot"></span>
                                                @endif
                                                <h6 class="mt-0 mb-1 font-13"> {{__('Delivered & Completed')}}</h6>
                                                <p class="text-muted font-12">{{__('Not yet')}}</p>
                                            </li>
                                        </ul>
                                        <div style="display: flex; gap:2%">
                                            @switch($q->current_state)
                                                @case(1)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.reply', $q->id) }}" class="btn btn-sm btn-primary">{{__('Reply to Quote')}}</a>
                                                    </div>
                                                    @break
                                                @case(2)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.shipped', $q->id) }}" class="btn btn-sm btn-primary">{{__('Mark as Paid')}}</a>
                                                    </div>
                                                    @break
                                                @case(3)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.ordered', $q->id) }}" class="btn btn-sm btn-primary">{{__('Mark as Ordered')}}</a>
                                                    </div>
                                                    @break
                                                @case(4)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.left.origin', $q->id) }}" class="btn btn-sm btn-primary">{{__('Mark as Left Origin')}}</a>
                                                    </div>
                                                    @break
                                                @case(5)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.arrived.port', $q->id) }}" class="btn btn-sm btn-primary">{{__('Mark as Arrived at Port')}}</a>
                                                    </div>
                                                    @break
                                                @case(6)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.port.cleared', $q->id) }}" class="btn btn-sm btn-warning">{{__('Mark as Port Cleared')}}</a>
                                                    </div>
                                                    @break
                                                @case(7)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.arrived.border', $q->id) }}" class="btn btn-sm btn-warning">{{__('Mark as Arrived at Border')}}</a>
                                                    </div>
                                                    @break
                                                @case(8)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.border.cleared', $q->id) }}" class="btn btn-sm btn-warning">{{__('Mark as Border Cleared')}}</a>
                                                    </div>
                                                    @break
                                                @case(9)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.intransit', $q->id) }}" class="btn btn-sm btn-warning">{{__('Mark as In Transit for Delivery')}}</a>
                                                    </div>
                                                    @break
                                                @case(10)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.delivered', $q->id) }}" class="btn btn-sm btn-success">{{__('Mark as Delivered & Completed')}}</a>
                                                    </div>
                                                    @break
                                                @default
                                                    
                                            @endswitch

                                            @switch($q->status)
                                                @case(0)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.cancel', $q->id) }}" class="btn btn-sm btn-default">{{__('Cancel Quote')}}</a>
                                                    </div>
                                                    @break
                                                @case(1)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.cancel', $q->id) }}" class="btn btn-sm btn-default">{{__('Cancel Quote')}}</a>
                                                    </div>
                                                    @break
                                                @case(2)
                                                    <div class="text-center mt-4">
                                                        <a href="{{ route('quote.activate', $q->id) }}" class="btn btn-sm btn-warning">{{__('Activate Quote')}}</a>
                                                    </div>
                                                    @break
                                                @case(3)
                                                    {{-- Un operable --}}
                                                    <div class="text-center mt-4">
                                                        <a href="#hooray" class="btn btn-sm btn-info">{{__('Complete Successfully')}}</a>
                                                    </div>
                                                @default
                                                    
                                            @endswitch
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-box order-detail-table">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <p class="mt-0">{{__('Consignment Type:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->consignment_type}}</b></span></p>
                                                @if($q->consignment_type != 'personal')
                                                <p class="mt-0">{{__('Company Name:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->company_name}}</b></span></p>
                                                @endif
                                                <p class="mt-0">{{__('Service Type:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->service_type}}</b></span></p>
                                                <p class="mt-0">{{__('Product Type:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->product_type}}</b></span></p>
                                                @if ($q->product_type == 'vehicle')
                                                    <p class="mt-0">{{__('Number of Vehicles:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->num_of_vehicles}}</b></span></p>
                                                @else
                                                    <p class="mt-0">{{__('Number of Goods:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->num_goods}}</b></span></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <p class="mt-0">{{__('Payment Method:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->payment_method}}</b></span></p>
                                                @if ($q->payment_method != 'full')
                                                    <p class="mt-0">{{__('Number of Installments:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->num_installments}}</b></span></p>
                                                @endif
                                                @if ($q->service_type != 'importing')
                                                    <p class="mt-0">{{__('Clearing:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->clearing_from}}</b></span></p>
                                                @endif
                                                <p class="mt-0">{{__('Delivering From:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->delivering_from}}</b></span></p>
                                                <p class="mt-0">{{__('Delivery Town:')}} <span style="text-transform: capitalize; color:slateblue;"><b>{{$q->delivery_town}}</b></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <h5 class="header-title mb-3">{{__('Items from Order #'.$q->order_number)}}</h5>
                                    <div class="table-responsive">
                                        @if ($q->product_type == 'vehicle')
                                        <table class="table table-bordered table-centered mb-0">
                                            <thead class=" bg-info">
                                            <tr>
                                                <th>{{__('Make')}}</th>
                                                <th>{{__('Model')}}</th>
                                                <th>{{__('Fuel')}}</th>
                                                <th>{{__('Transmission')}}</th>
                                                <th>{{__('Car Year')}}</th>
                                                <th>{{__('Total')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($q->cars as $car)
                                            <tr>
                                                <td scope="row"><b>{{$car->car_make}}</b></td>
                                                <td>{{$car->car_model}}</td>
                                                <td>{{$car->fuel}}</td>
                                                <td>{{$car->transmission}}</td>
                                                <td>{{$car->car_year}}</td>
                                                <td>{{$car->cost ?? 0}}</td>
                                            </tr>
                                            @empty
                                            @endforelse
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th scope="row" colspan="3" class="text-right">{{__('Grand Total :')}}</th>
                                                <td>
                                                    <div class="strong text-success-teal">{{$q->cars->sum('cost')}}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        @else
                                        <table class="table table-bordered table-centered mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>{{__('Item Name')}}</th>
                                                <th>{{__('Size')}}</th>
                                                <th>{{__('Quantity')}}</th>
                                                <th>{{__('Packaging')}}</th>
                                                <th>{{__('Total')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($q->goods as $g)
                                            <tr>
                                                <td scope="row"><b>{{$g->name}}</b></td>
                                                <td>{{$g->size}}</td>
                                                <td>{{$g->qty}}</td>
                                                <td>{{$g->packaging}}</td>
                                                <td>{{$g->cost ?? 0}}</td>
                                            </tr>
                                            @empty
                                            @endforelse
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th scope="row" colspan="3" class="text-right">{{__('Grand Total :')}}</th>
                                                <td>
                                                    <div class="strong text-success-teal">{{$q->goods->sum('cost')}}</div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        @endif
                                    </div>
                                </div>
                                
                                @if ($q->message != null)
                                <div class="card-box order-details-box">
                                    <p class="header-title mb-3">{{ $q->message }}</p>
                                </div>
                                @endif
                                @if ($q->file != null)
                                <div class="card-box order-details-box">
                                    <p class="header-title mb-3">Attachment 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z"/>
                                          </svg>
                                    </p>
                                    <a href="{{ asset('public/storage/uploads/'.$q->file) }}" target="_blank">{{ $q->file }}</a>
                                </div>
                                @endif
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="card-box order-details-box">
                                    <h5 class="header-title mb-3">{{__('Billing Information')}}</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <p class="mb-2 font-13"><span class="font-weight-semibold mr-2">{{__('Payment Type:')}}</span> {{__('Debit Card')}}</p>
                                            <p class="mb-2 font-13"><span class="font-weight-semibold mr-2">{{__('Card Type:')}}</span> {{__('Mastercard 1234')}}</p>
                                            <p class="mb-2 font-13"><span class="font-weight-semibold mr-2">{{__('Valid Date:')}}</span> {{__('12/2030')}}</p>
                                            <p class="mb-0 font-13"><span class="font-weight-semibold mr-2">{{__('CVV:')}}</span> {{__('xxx')}}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-box order-details-box">
                                    <h6 class="header-title mb-3">{{__('Delivery Info')}}</h6>
                                    <div class="text-center">
                                        <i class="las la-truck font-25 text-light-black"></i>
                                        <h5><b>{{__('Delivery Company')}}</b></h5>
                                        <p class="mb-1 font-13"><span class="font-weight-semibold">{{__('Order ID :')}}</span> {{__('SK898789')}}</p>
                                        <p class="mb-0 font-13"><span class="font-weight-semibold">{{__('Payment Mode :')}}</span> {{__('Card')}}</p>
                                    </div>
                                </div>
                            </div> --}}
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
    {!! Html::script('public/assets/js/apps/ecommerce.js') !!}
@endpush

@push('custom-scripts')

@endpush
