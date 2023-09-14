<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style type="text/css">
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

    @yield('importcss')
</head>
<body>
    <div id="app">
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
                            <a class="nav-link px-5 active" href="#">
                                <h4>{{ __('HOME') }}</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5" href="#">
                                <h4>{{ __('PROGRAM') }}</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5" href="#">
                                <h4>{{ __('DETAILS') }}</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5" href="#">
                                <h4>{{ __('SPEAKERS') }}</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5" href="#">
                                <h4>{{ __('APLY') }}</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5" href="#">
                                <h4>{{ __('CONTACT') }}</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
            @yield('footer')
        </main>
    </div>
</body>
</html>
