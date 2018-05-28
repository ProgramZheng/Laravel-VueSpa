<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>My Apps</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script>
        var laravel = "{!! asset('/') !!}";
    </script>
</head>
<body>
    <div id="app">
        <router-link to="/home">Home</router-link>
        <router-link to="/about">About</router-link>
        <router-link to="/data">Data</router-link>

        <router-view></router-view>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>