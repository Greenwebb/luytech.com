@extends('website.layouts.app')
@section('content')
<style>
  ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid rgb(255, 153, 0);
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: rgb(255, 115, 0);
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}


</style>
<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img">
      <img src="public/web/assets/images/6.jpg" alt="background">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">#{{$q->tracking_id}} | {{ $q->consignment_type == 'personal' ? $q->user->fname.' '.$q->user->lname : $q->user->fname.' '.$q->company_name }}</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Search Resutls</li>
            </ol>
          </nav>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ======================
     Track Shipmeent
  ========================= -->
  <section id="trackShipmeent" class="track-shipmeent pb-80">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div>
            <div class="mb-4">
                <h4>
                    @if ($q->product_type == 'vehicle')
                        {{ $q->num_of_vehicles.' Vehicles' }}                 
                    @else
                        {{ $q->num_goods.' Products' }}
                    @endif
                </h4>
                @if ($q->status !== 2)
                    @switch($q->current_state)
                        @case(1)
                            <h3 class="badge badge-secondary text-lg">Pending</h3>
                        @break
                        @case(2)
                            <h3 class="badge badge-info">Quoted</h3>
                        @break
                        @case(3)
                            <h3 class="badge badge-success">Paid</h3>
                        @break
                        @case(4)
                            <h3 class="badge badge-info">Ordered</h3>
                        @break
                        @case(5)
                            <h3 class="badge badge-info">Left Origin</h3>
                        @break
                        @case(6)
                            <h3 class="badge badge-info">At Port</h3>
                        @break
                        @case(7)
                            <h3 class="badge badge-info">Port Cleared</h3>
                        @break
                        @case(8)
                            <h3 class="badge badge-info">At Border</h3>
                        @break
                        @case(9)
                            <h3 class="badge badge-info">Border Cleared</h3>
                        @break
                        @case(10)
                            <h3 class="badge badge-info">Delivery In Transit</h3>
                        @break
                        @case(11)
                            <h3 class="badge badge-warning text-lg">Delivered Completed</h3>
                        @break
                        @default
                            <h3 class="badge badge-light">Invalid</h3>
                        @break
                    @endswitch
                @else
                    <span class="badge badge-default">Cancelled</span>
                @endif 
            </div>
          </div>

          @if ($q->status !== 2)
          
          <ol class="progtrckr" data-progtrckr-steps="5">
                
                    <li class="progtrckr-{{ $q->current_state >= 2 ? 'done' : 'todo'}}">Quoted</li>
                    <li class="progtrckr-{{ $q->current_state >= 3 ? 'done' : 'todo'}}">Paid</li>
                    <li class="progtrckr-{{ $q->current_state >= 4 ? 'done' : 'todo'}}">Ordered</li>
                    <li class="progtrckr-{{ $q->current_state >= 5 ? 'done' : 'todo'}}">Left Origin</li>
                    <li class="progtrckr-{{ $q->current_state >= 6 ? 'done' : 'todo'}}">Reached Port</li>
                    <li class="progtrckr-{{ $q->current_state >= 7 ? 'done' : 'todo'}}">Port Cleared</li>
                    <li class="progtrckr-{{ $q->current_state >= 8 ? 'done' : 'todo'}}">Reached Border</li>
                    <li class="progtrckr-{{ $q->current_state >= 9 ? 'done' : 'todo'}}">Port Cleared</li>
                    <li class="progtrckr-{{ $q->current_state >= 10 ? 'done' : 'todo'}}">Delivery In Transit</li>
                    <li class="progtrckr-{{ $q->current_state >= 11 ? 'done' : 'todo'}}">Delivered Completed</li>
            
          </ol>

          @endif
          <br>
          <div class="col-xl-12 col-md-12 mt-4 pt-4">
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
          </div>
          <br>
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
        
        <!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Track Shipmeent -->


@endsection