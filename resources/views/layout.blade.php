<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .app-container {
            max-width: 1200px;
            margin: 0 auto;
            min-height: 100%;
        }

        .bg-pidhs {
            background: rgba(255, 255, 255, 0.75);
        }
    </style>
</head>
<body>
    <div class="container flex app-container items-center">
        <div class="">
            <nav class="sidebar pin-l">
                @include('partials/sidebar')
            </nav>
        </div>
        <div class="main-col flex flex-col justify-center bg-pidhs">
            <header class="mid-col justify-center">
                <a href="{{route('home')}}"><img src="/storage/logo1.png"></a>
            </header>
            <nav>
                @include('partials/navbar')
            </nav>
            <div class="row flex">
                <div class="content flex-1">
                    @yield('content')
                </div>
            </div>
            <footer class="flex items-center">
                <div class="flex-1 text-left">
                    <p>Phillip Island and District Historical Society Inc, ABN: 22 720 654 974</p>
                    <p>Site by <a href="https://simoneddy.com.au">Simon Eddy</a> &copy; 2018. <a href="/login">Site Admin</a></p>
                </div>
                <div class="flex-1">
                    <a href="http://www.fluccs.com.au" title="Fluccs" target="_blank"><img class="float-right" id="banner" src="/storage/banner.gif" alt="Fluccs" width="120" height="60"></a>
                </div>

            </footer>
        </div>
    </div>
    {{-- <div class="root-container" id="root-container">
        <div class="row logo justify-center text-center" id="header-container">
            <a href="{{route('home')}}"><img src="/storage/logo1.png"></a>
        </div>
        <div class="row" id="top-navbar-container">
            @include('partials/navbar')
        </div>
        <div class="row f1">
            <div class="col-2" id="sidebar-container">
                @include('partials/sidebar')
            </div>
            <div class="col-10 article" id="content-container">
                @yield('content')
            </div>
        </div>
        <div class="footer-container row space-between">
            <div class="footer-notice f1 justify-left">
                <p>Phillip Island and District Historical Society Inc, ABN: 22 720 654 974</p>
                <p>Site by <a href="https://simoneddy.com.au">Simon Eddy</a> &copy; 2018. <a href="/login">Site Admin</a></p>
            </div>
            <div class="footer-banner f1 text-right">
                <a href="http://www.fluccs.com.au" title="Fluccs" target="_blank"><img class="float-right" id="banner" src="/storage/banner.gif" alt="Fluccs" width="120" height="60"></a>
            </div>
        </div>
    </div>
 --}}
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>
