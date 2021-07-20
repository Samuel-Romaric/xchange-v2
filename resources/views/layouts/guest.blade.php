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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-gray-900" style="background-image: url('/images/bodybg/bg1.png')">

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
    </div>

    @yield('script')

</body>

</html>