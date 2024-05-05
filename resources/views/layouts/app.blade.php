<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- styles for themes -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <!-- styles for themes -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
    <div id="app">
        @include("layouts.header")
        @yield("content")



        @include("layouts.footer")

    </div>


        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"87e224ef1f7b6924","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
    </body>
</html>
