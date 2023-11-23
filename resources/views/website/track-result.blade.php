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
                @if ($q->product_type == 'vehicle')
                    {{ $q->num_of_vehicles.' Vehicles' }}                 
                @else
                    {{ $q->num_goods.' Products' }}
                @endif
                @if ($q->status !== 2)
                    @switch($q->current_state)
                        @case(1)
                            <span class="badge badge-warning">Pending</span>
                        @break
                        @case(2)
                            <span class="badge badge-info">Quoted</span>
                        @break
                        @case(3)
                            <span class="badge badge-success">Paid</span>
                        @break
                        @case(4)
                            <span class="badge badge-info">Ordered</span>
                        @break
                        @case(5)
                            <span class="badge badge-info">Left Origin</span>
                        @break
                        @case(6)
                            <span class="badge badge-info">At Port</span>
                        @break
                        @case(7)
                            <span class="badge badge-info">Port Cleared</span>
                        @break
                        @case(8)
                            <span class="badge badge-info">At Border</span>
                        @break
                        @case(9)
                            <span class="badge badge-info">Border Cleared</span>
                        @break
                        @case(10)
                            <span class="badge badge-info">Delivery In Transit</span>
                        @break
                        @case(11)
                            <span class="badge badge-secondary">Delivered Completed</span>
                        @break
                        @default
                            <span class="badge badge-light">Invalid</span>
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