<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Website of the Phillip Island & District Historical Society">
    <title>@yield('title')</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
            background-color: #CCC;
            background-image:url(/storage/muralbg1.jpg);
            background-repeat:no-repeat;
            background-position:center;
            background-attachment:fixed;
            font-family: Arial, Helvetica, sans-serif;
            background-size: cover;
        }

        .bg-default {
            background: rgba(255, 255, 255, 0.9);
        }
    </style>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="outer-container" class="sm:w-11/12 md:w-5/6 lg:w-3/4 w-full min-h-full justify-between mx-auto flex flex-col items-center">
        @include('includes.header')
        <div class="w-full flex md:flex-row flex-col flex-1">
            <div class="sm:w-11/12 md:w-5/6 lg:w-3/4 w-full min-h-full justify-between mx-auto flex flex-col items-center">
                <div class="sidebar-container md:float-left md:absolute md:pin-l ml-3">
                    @include('includes.navbar2')
                </div>
                
                <div class="flex-1 bg-white w-full rounded-lg flex flex-col sm:mb-2">
                    
                    <div class="main-section flex-1 flex flex-col w-full pt-4">
                        {{-- @auth
                            <div class="px-32 border-b-blue mb-4">
                                @include('shared.component.userrow')
                            </div>
                        @endauth --}}
                        <div class="content flex-1 pb-4">
                            @yield('content')
                        </div>
                    </div>
                    <div class="p-4">
                        @include('includes.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/js/app.js"></script>
@stack('scripts')
</body>
</html>
