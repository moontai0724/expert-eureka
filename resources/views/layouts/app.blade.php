<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"/>
    <meta name="X-CSRF-Token" content="{{ csrf_token() }}"/>
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <style>
        body {
            background-color: rgba(255, 255, 255, 0.2);
            background-image: url("{{ asset("img/background.jpeg") }}");
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: overlay;
        }
    </style>
</head>

<body>
<h1 class="title">{{ config('app.name', 'Laravel') }}</h1>
@yield('content')
</body>

</html>
