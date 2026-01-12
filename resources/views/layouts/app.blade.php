<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GSM') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    <meta name="google-site-verification" content="twSuAGijpL-dNw844otseUYg4hCKlwg_noeApn7RKTA" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link href="{{ url('/css/aos.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/mix-manifest.json') }}">
    <link rel="mask-icon" href="{{ url('/img/safari-pinned-tab.svg') }}" color="#f23838">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
    <link href="{{ asset('/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link rel=“stylesheet” href=“https://use.typekit.net/dge3xwh.css“>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app"></div>
        @include('inc.header')
        @yield('content')
        @include('inc.footer')
    </div>
    <!-- Core Javascripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Vendor Javascripts -->
    <script src="{{ asset('/js/rellax.min.js') }}"></script>
    <script src="{{ asset('/js/typed.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('/js/aos.js') }}"></script>
    <!-- Theme Javascripts -->
    <script src="{{ asset('/js/theme.min.js') }}"></script>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    @include('cookie-consent::index')
</body>
</html>
