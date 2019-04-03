<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="/css/tailwind.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="app flex flex-col items-center">
        <div class="bg-default flex flex-col items-center w-full rounded-lg my-6">
            <header class="justify-center m-3">
                <a href="{{route('home')}}"><img src="/storage/logo1.png"></a>
            </header>
            @include('partials/navbar')
        </div>
        <div class="flex-1 bg-default w-full rounded-lg flex flex-col">
            <div>
                <div class="sidebar-container float-left absolute pin-l ml-3">
                    @include('partials/sidebar')
                </div>
            </div>
            <div class="main-section flex-1 flex flex-col w-full">
                <div class="content flex-1 px-8 py-4">
                    @yield('content')
                </div>
            </div>
            <div class="">
                @include('partials/footer')
            </div>
        </div>
    </div>

    <!-- <div class="container flex flex-col app-container items-center">
        <div class="row flex flex-col top-row bg-pidhs justify-center items-center">
            <header class="justify-center">
                <a href="{{route('home')}}"><img src="/storage/logo1.png"></a>
            </header>
            <nav>
                @include('partials/navbar')
            </nav>
        </div>
        <div class="flex">
            <div class="">
                <nav class="sidebar pin-l">
                    @include('partials/sidebar')
                </nav>
            </div>
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
    </div> -->
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>
