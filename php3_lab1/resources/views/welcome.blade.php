<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Trang chủ')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="text-center">
    <p class="text-2xl text-pink-400">Trang chủ</p>
</div>
<p class="text-blue-500">Đây là lab 1 của môn PHP3 - WEB4013</p>
@stop
</body>
</html>
