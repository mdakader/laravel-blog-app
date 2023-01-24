<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/css/swiper.4.3.3.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
@include('components.header')
@yield('content')
@include('sections.sliders.sliders')
@include('components.footer')
<script src="{{asset('assets/js/jquery.3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/swiper.4.3.3.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
