<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Phillip Island & District Historical Society Online Exhibitions" }}</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="app flex flex-col min-h-full w-full px-2">
        @include('exhibition.layout.partials.header')
        @auth
            <div class="px-32 border-b-blue mb-4">
                @include('shared.component.userrow')
            </div>
        @endauth
        <div class="flex-1">
            @yield('content')
        </div>
        <div>
            @include('partials/footer')
        </div>
    </div>
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>