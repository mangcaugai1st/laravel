<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Thông tin')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="text-center">
    <p class="text-2xl text-pink-400">Thông tin cá nhân</p>
</div>
<div>
    <p>Họ và tên: Đinh Minh Khoa</p>
    <p>MSSV: PS27060</p>
</div>
@stop
</body>
</html>
