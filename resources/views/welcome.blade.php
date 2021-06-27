<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS4 London</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=" stylesheet" href="{{ asset('css/grid.min.css') }}">
    <link rel=" apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!--  -->

<body>
    <div id="app">
        <mainapp></mainapp>
    </div>
    <script>
        (function() {
            window.Laravel = {
                csrfToken: '{{ csrf_token() }}'
            };
            @if(Auth::check())
            window.authUser = {!!Auth::user() !!}
            @else
            window.authUser = false
            @endif
        })();
    </script>
</body>

<script src="/js/app.js"></script>
<script src="//unpkg.com/vue-plain-pagination@0.2.1"></script>

</html>