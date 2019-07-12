<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('layouts.partials.head')
    </head>
    <body>
    @include('layouts.partials.nav')
    <div style="padding-bottom: 60px;"></div>
    @yield('content')
    <div style="padding-top: 10px;"></div>
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    </body>
</html>