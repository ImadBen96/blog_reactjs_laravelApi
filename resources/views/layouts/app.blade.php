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

    </body>
</html>
