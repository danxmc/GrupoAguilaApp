<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body class='bg'>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
</body>
</html>
