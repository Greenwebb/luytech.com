<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Luytech Motors &amp; clearing and forwarding Servicesi">
    <link href="{{ asset('public/web/assets/images/favicon/favicon.png') }}" rel="icon">
    <title>Luytech Motors &amp; clearing and forwarding</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&amp;display=swap">
    @if (request()->routeIs('request-quote'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{ asset('public/web/assets/cdn.jsdelivr.net/npm/%40mdi/font%404.8.95/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/assets/stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/bd-wizard.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/style.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        @include('website.partials.header')
        <!-- ============================
        Slider
    ============================== -->
        @yield('content') <!-- ========================
            Footer
    ========================== -->
        @include('website.partials.footer')

        @include('website.partials.search')

        <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
    </div><!-- /.wrapper -->

    <script>
        var routes = {
            inquiryStore: '{{ route('inquiry.store') }}',
            packageTrack: '{{ route('package.track') }}',
            quoteStore: '{{ route('quote.store') }}',
            // ... add more routes if needed
        };
    </script>
    @if (request()->routeIs('request-quote'))
        <script src="{{ asset('public/web/assets/code.jquery.com/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('public/web/assets/cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('public/web/assets/js/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/web/assets/js/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('public/web/assets/js/bd-wizard.js') }}"></script>
       
    @endif
    <script src="{{ asset('public/web/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/web/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('public/web/assets/js/main.js') }}"></script>
</body>

</html>
