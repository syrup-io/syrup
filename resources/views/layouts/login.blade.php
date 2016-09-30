<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <meta name="robots" content="noindex">
        @yield('meta')

        <title>@yield('title', 'Syrup')</title>
        <!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"> -->

        <!-- CSS -->
        <style>
            @import 'https://fonts.googleapis.com/css?family=Raleway';
        </style>
        <link href="{{ elixir('css/frontend.css') }}" rel="stylesheet">
        @yield('styles')

    </head>


    <body class="circuit-grid">
        <div id="main">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ elixir('js/frontend.js') }}"></script>
        @yield('scripts')

    </body>
</html>
