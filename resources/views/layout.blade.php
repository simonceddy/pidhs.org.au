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
            
            <div class="main-section flex-1 flex flex-col w-full pt-4">
                @auth
                    <div class="px-32 border-b-blue mb-4">
                        @include('shared.component.userrow')
                    </div>
                @endauth
                <div class="content flex-1 px-32 pb-4">
                    @yield('content')
                </div>
            </div>
            <div>
                @include('partials/footer')
            </div>
        </div>
    </div>
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>
