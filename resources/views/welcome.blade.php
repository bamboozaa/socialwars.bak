@extends('layouts.app')
@section('title', 'Social Wars Website')

@section('importcss')
    @parent
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/imgchk.css') }}"> --}}

    <style>
        .nav-link {
            color: #f3f3f3;
        }

        .navbar-nav .nav-link.active {
            color: #f3f3f3 !important;
            text-decoration: underline !important;
            text-underline-offset: 10px !important;
            text-decoration-color: #ebc446 !important;
        }

        .navbar-nav .nav-link:hover {
            color: #f3f3f3 !important;
            text-decoration: underline !important;
            text-underline-offset: 10px !important;
            text-decoration-color: #ebc446 !important;
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(235, 196, 70, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
    </style>
@stop

@section('content')

<nav class="navbar navbar-expand-md navbar-light fixed-top shadow-sm py-5">
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-5 active" href="#index">
                        <h4>{{ __('HOME') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5 " href="#program">
                        <h4>{{ __('PROGRAM') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="#">
                        <h4>{{ __('DETAILS') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5 " href="#speakers">
                        <h4>{{ __('SPEAKERS') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5 " href="#aply">
                        <h4>{{ __('APLY') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="{{ url('#contact') }}">
                        <h4>{{ __('CONTACT') }}</h4>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="index">
    <img src="{{ asset('images/230811_Web-SocialWar-5-01.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_A">
</section>
<section>
    <img src="{{ asset('images/230811_Web-SocialWar-5-02.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_B">
</section>
<section>
    <img src="{{ asset('images/230811_Web-SocialWar-5-03.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_C">
</section>
<section>
    <img src="{{ asset('images/230811_Web-SocialWar-5-04.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_D">
</section>
<section>
    <img src="{{ asset('images/230811_Web-SocialWar-5-05.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_E">
</section>
<section id="speakers">
    <img src="{{ asset('images/230811_Web-SocialWar-5-06.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_F">
</section>
<section>
    <img src="{{ asset('images/230811_Web-SocialWar-5-07.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_G">
</section>
<section id="program">
    <img src="{{ asset('images/230811_Web-SocialWar-5-08.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_H">
</section>
<section id="aply">
    <img src="{{ asset('images/230811_Web-SocialWar-5-09.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_9">
</section>

@endsection

@section('footer')
<section id="contact">
    <img src="{{ asset('images/230811_Web-SocialWar-5-10.png') }}" class="img-fluid" alt="230811_Web-SocialWar-01_10">
</section>
@endsection
