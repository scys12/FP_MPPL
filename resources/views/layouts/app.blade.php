<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Primalangga') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>
<body style="height: 100%;min-height:100vh;position: relative;">
    <div id="app" style="height:100%;" class="pb-5" style="background: url(https://cdn2.hubspot.net/hubfs/2828691/New%20BO/top-background-1.svg)">
        @auth
            @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superadmin'))
                @include('layouts.useradmin')
            @elseif(Auth::user()->hasRole('teacher'))
                @include('layouts.userteacher')
            @else
                @include('layouts.userlayout')
            @endif
        @endauth
        @guest
            @include('layouts.userlayout')
        @endguest        
    </div>
    <footer class="footer mt-auto py-3 bg-dark" style="position:absolute;bottom:0;height:50px;width:100%;clear:both;">
        <div class="container">
          <span class="text-white">Copyright©2020 Primalangga. All Rights Reserved</span>
        </div>
    </footer>
</body>
</html>
