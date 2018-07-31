<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>三溫暖</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
    <div id="app">
        <router-link to="/home">Home</router-link>
        <router-link to="/video">Video</router-link>
        <router-link to="/data">初任人員平均經常性薪資</router-link>
        <router-link to="/movie">電影</router-link>
        <div></div>
        <router-view></router-view>
    </div>
    <iframe id="video" width="854" height="480" src="https://www.youtube.com/embed/2p4MpT-VgSo" frameborder="0"></iframe>
    <script src="js/app.js"></script>
</body>
</html>