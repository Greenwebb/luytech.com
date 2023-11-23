@extends('website.layouts.app')

@section('content')
    @switch($type)
        @case(1)
            @include('website.partials.service-1');
            @break
        @case(2)
            @include('website.partials.service-2');
            @break
        @case(3)
            @include('website.partials.service-3');
            @break
        @default
            
    @endswitch
@endsection