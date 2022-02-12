<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="font-sans antialiased">

        <div class="content-wrapper d-flex">
            @include("components.sidebar")
            <div class="content">
                @include("components.header")
                <!-- content -->
                
                @yield("content")
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield("js")
    </body>
</html>
