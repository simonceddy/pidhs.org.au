<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <div class="container bg-white" id="root">
        <div class="row mx-auto" style="width: 100%" id="header">
            <a href="/"><img src="/storage/logo1.png"></a>
        </div>
        <div class="row">
            @include('partials/navbar')
        </div>
        <div class="row">
            <div class="col-2">
                @include('partials/sidebar')
            </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
        <div class="row" id="footer">
            <div class="col-10">
                <p>Phillip Island and District Historical Society Inc, ABN: 22 720 654 974</p>
                <p>Site by <a href="https://simoneddy.com.au">Simon Eddy</a> &copy; 2018. <a href="/login">Site Admin</a></p>
            </div>
            <div class="col-2">
                <a href="http://www.fluccs.com.au" title="Fluccs" target="_blank"><img class="float-right" id="banner" src="/storage/banner.gif" alt="Fluccs" width="120" height="60"></a>
            </div>
        </div>
    </div>

<script src="/js/main_app.js"></script>
@stack('scripts')
</body>
</html>
