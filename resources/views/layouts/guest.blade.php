<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name') }} </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @hasSection ('css') @yield('css') @endif

</head>

<body class="">

    <div class="min-h-screen flex flex-col justify-between">
        {{-- {{ $slot }} --}}
        <div>
            @include('layouts.navigation')
            <!-- Page Content -->
            @yield('content')
        </div>
        <div>
            @include('layouts.partials.footer')
        </div>

        <button id="myBtn" title="Go to top">
            <x-heroicon-o-chevron-up class="h-4 w-4" />
        </button>

    </div>

    {{-- <div id="preloader"></div> --}}
    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

    @yield('script')

</body>

</html>