{{-- @isMobile()
    @include('layouts.mobile')
@else
    @include('layouts.desktop')
@endisMobile --}}

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

        .app {
            margin: 0 auto;
            min-height: 100%;
            width: 95%;
        }

        @media (min-width: 640px) {
            .app {
                width: 88%;
            }
        }

        @media (min-width: 768px) {
            .app {
                width: 80%;
            }
        }

        @media (min-width: 1024px) {
            .app {
                width: 76%;
            }
        }

        @media (min-width: 1280px) {
            .app {
                width: 73%;
            }
        }
    </style>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="app lg:bg-transparent bg-trans-white flex flex-col items-center sm:my-6 my-2 rounded-lg">
        <div class="header-container lg:bg-trans-white flex flex-col items-center w-full rounded-lg mb-6">
            <header class="justify-center m-3">
                <a href="{{route('home')}}"><img src="/storage/logo1.png" alt="Phillip Island & District Historical Society"></a>
            </header>
            <div id="root"></div>
            {{-- @include('partials/navbar') --}}
        </div>
        <div class="flex-1 lg:bg-trans-white w-full rounded-lg flex flex-col">
            <div>
                <div class="sidebar-container lg:float-left lg:ml-3 lg:absolute lg:left-0">
                    @include('partials/sidebar')
                </div>
            </div>

            <div class="main-section flex-1 flex flex-col w-full pt-4">
                @auth
                    <div class="px-32 border-b-blue mb-4">
                        @include('shared.component.userrow')
                    </div>
                @endauth
                <div class="content flex-1 pb-4">
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
