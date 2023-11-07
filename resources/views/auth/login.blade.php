@extends('layout.master-auth')

@push('plugin-styles')
    {!! Html::style('public/assets/css/loader.css') !!}
    {!! Html::style('public/assets/css/authentication/auth_2.css') !!}
@endpush

@section('content')
    <!-- Main Body Starts -->
    <div class="login-two">
        <div class="container-fluid login-two-container">
            <div class="row main-login-two">
                <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block p-0">
                    <div class="login-bg">
                        <div class="left-content-area">
                            <img src="https://luytech.greenwebbtech.com/public/web/assets/images/logo/logo-dark.png" class="logo"/>
                            <div>
                                <h2>{{__('Administration Use')}}</h2>
                                <p>{{__('Vehicle shipping management system')}}</p>
                                {{-- <a class="btn mt-4" href="{{ route('index') }}" type="button">{{__('Learn More')}}</a> --}}
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <a class="font-13 text-white mr-3">{{__('Find us: ')}}</a>
                                <a class="font-13 text-white mr-3" href="https://web.facebook.com/LuytechMotors/?_rdc=1&_rdr">{{__('Facebook')}}</a>
                                {{-- <a class="font-13 text-white mr-3" href="javascript:void(0)">{{__('Twitter')}}</a> --}}
                                <a class="font-13 text-white mr-3" href="javascript:void(0)">{{__('Linked In')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                    <form class="login-two-start" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h6 class="right-bar-heading px-3 mt-2 text-dark text-center font-30 text-uppercase">{{__('Login')}}</h6>
                        <p class="text-center text-muted mt-1 mb-3 font-14">{{__('Please Log into your account')}}</p>
                        <div class="login-two-inputs mt-5">
                            <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{__('Username')}}"/>
                            <i class="las la-user-alt"></i>
                        </div>
                        <div class="login-two-inputs mt-4">
                            <input  id="password" type="password" name="password" required autocomplete="current-password" placeholder="{{__('Password')}}"/>
                            <i class="las la-lock"></i>
                        </div>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="login-two-inputs  mt-4 check">
                            <div class="box">
                                <input id="one"  name="remember" type="checkbox">
                                <span class="check"></span>
                                <label for="one">{{__('Remember me')}}</label>
                            </div>
                        </div>
                        <div class="login-two-inputs pl-3 mt-5 text-center d-flex">
                            <button type="submit" class="ripple-button ripple-button-warning w-100 btn-login ml-3 mr-3" type="button">
                                <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                </div>
                                {{__('Login')}}
                            </button>
                            {{-- <a class="btn btn-sm btn-outline-primary btn-login w-100 ml-3 mr-3" href="{{url('/authentications/style2/signup')}}" type="button">
                                {{__('Signup')}}
                            </a> --}}
                        </div>
                        {{-- <div class="mt-4 text-center font-12 strong">
                            <a href="{{url('/authentications/style2/forgot-password')}}" class="text-primary">{{__('Forgot your Password ?')}}</a>
                        </div>
                        <div class="login-two-inputs mt-4">
                            <div class="find-us-container">
                                <p class="find-us text-center">{{__('Continue With')}}</p>
                            </div>
                        </div>
                        <div class="login-two-inputs social-logins mt-4">
                            <div class="social-btn"><a href="javascript:void(0)" class="fb-btn"><i class="lab la-facebook-f"></i></a></div>
                            <div class="social-btn"><a href="javascript:void(0)" class="twitter-btn"><i class="lab la-twitter"></i>
                                </a></div>
                            <div class="social-btn"><a href="javascript:void(0)" class="google-btn"><i class="lab la-google-plus"></i>
                                </a></div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('public/assets/js/loader.js') !!}
    {!! Html::script('public/assets/js/libs/jquery-3.6.0.min.js') !!}
    {!! Html::script('public/plugins/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('public/assets/js/authentication/auth_2.js') !!}
@endpush

@push('custom-scripts')

@endpush
