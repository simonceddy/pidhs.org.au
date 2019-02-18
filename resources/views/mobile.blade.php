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
    <div id="root">
    </div>
<script src="/js/mobileApp.js"></script>
@stack('scripts')
</body>
</html>
