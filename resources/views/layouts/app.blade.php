<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ananta</title>
    <link rel="icon" href="{{ asset('img/ananta.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/user.js') }}" defer></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
    @if(Request::is('login','herbs','home'))
    @include('layouts/header_secondary')
    @else
    @include('layouts/header_main')
    @endif
    @yield('content')
    @include('layouts/footer')
</body>

</html>
