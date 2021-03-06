<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/tasks') }}">Tasks First</a>
            <a href="{{ url('/taskSeconds') }}">Tasks Second</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif
<div class="content">
    <div class="title m-b-md">
        {{ config('app.name') }}
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">First List</div>
        <div class="col-6">Second List</div>
    </div>
    <div class="row">
        <div class="col-6">Third List</div>
        <div class="col-6">Fourth List</div>
    </div>
</div>
</body>
</html>
