@extends('website.layouts.app')
@section('content')

<section id="page-title" class="page-title bg-overlay bg-parallax">
    <div class="bg-img"><img src="public/web/assets/images/page-titles/14.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Track & Trace</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Track & Trace</li>
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
          <form>
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
                            <h3 class="badge badge-warning text-lg">Pending</h3>
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
                            <h3 class="badge badge-secondary text-lg">Delivered Completed</h3>
                        @break
                        @default
                            <h3 class="badge badge-light">Invalid</h3>
                        @break
                    @endswitch
                @else
                    <span class="badge badge-default">Cancelled</span>
                @endif 
            </div>
          </form>
        </div><!-- /.col-lg-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Track Shipmeent -->


@endsection