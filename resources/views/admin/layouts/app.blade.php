<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Digital Sigma') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<v-app id="app" v-cloak>
    <nav-drawer></nav-drawer>
    <nav-toolbar></nav-toolbar>
    <v-content>
        @yield('content')
    </v-content>
</v-app>

<!-- Scripts -->
<script src="{{ asset('admin/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
