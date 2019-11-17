<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HR Management</title>
    <link rel="stylesheet" href="{{asset('assets/css/library.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    @yield('css-file')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('partials.navbar')
    @include('partials.sidebar')
    @yield('content')
    @include('partials.control-sidebar')
</div>
@include('partials.footer')
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/library.min.js')}}"></script>
@yield('script')
</body>
</html>
