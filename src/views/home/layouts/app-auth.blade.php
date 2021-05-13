<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('modules/css/larapanel.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body class="rtl">

    <div id="app">
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <div class="lockscreen-content">
            <div class="lock-box">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>let baseUrl = "{{ URL::to('/') }}";</script>
    <script src="{{ asset('modules/js/larapanel.js') }}"></script>
    @yield('script')

</body>
</html>
