<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('landing.head')
    @yield('styles')
    @stack('plugins-css')
    @stack('css')
</head>
<body>
    @include('landing.menu')
    <div class="super_container">
        @include('landing.top_header')
        @yield('content') 
    </div>
    @include('landing.footer')
    @include('landing.scripts')
</body>
</html>