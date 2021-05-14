<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('') }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('modules/css/larapanel.css') }}" rel="stylesheet">

    @yield('style')

</head>
<body class="app sidebar-mini" style="overflow-y: scroll;">
    <div id="app">
        @component('vendor.larapanel.panel.layouts.navbar')
        @endcomponent
        @component('vendor.larapanel.panel.layouts.sidebar')
        @endcomponent
        <main class="app-content">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('modules/js/larapanel.js') }}"></script>
    <script>let baseUrl = "{{ URL::to('/') }}";</script>
    @yield('script')

</body>
</html>
