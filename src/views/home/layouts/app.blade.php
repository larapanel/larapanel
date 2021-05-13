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
    <link href="{{ mix('css/home.css') }}" rel="stylesheet">
    @yield('style')

</head>

<body>
    <div id="app">
        @component('home.layouts.header')
        @endcomponent
        @yield('content_top')@yield('content')
        @component('home.layouts.footer')
        @endcomponent
    </div>

    <!-- Scripts -->
    <script>let baseUrl = "{{ URL::to('/') }}";</script>
    <script src="{{ mix('js/home.js') }}"></script>

    @yield('script')

    <script>



    </script>

</body>
</html>
