<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/material-icon.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body>
        @yield('navbar')
        @yield('content')

<script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script  src="{{asset('js/popper.min.js')}}"></script>
<script  src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>