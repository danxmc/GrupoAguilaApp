<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('layouts.partials.head')
    </head>
    <body background="{{ asset('images/login-bg.jpg') }}">
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    </body>
</html>

