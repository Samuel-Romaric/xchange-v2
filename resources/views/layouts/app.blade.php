<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    @yield('css')
</head>

<body class="font-sans antialiased" style="background-image: url('/images/bodybg/bg1.png')">

    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow py-2">
            {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> --}}
            {{-- {{ $header }} --}}
            @include('layouts.partials._nav')
            {{-- </div> --}}
        </header>

        @yield('content')

    </div>

    @include('layouts.partials.footer')

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    @yield('script')
    @include('flashy::message')
</body>

</html>