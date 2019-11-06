<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="{{asset('assets/css/library.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    @yield('css-file')
</head>
<body class="login-page">
    @yield('content')
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/library.min.js')}}"></script>
{{--    demo--}}
@yield('script')
</body>
</html>
