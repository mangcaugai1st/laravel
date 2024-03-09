<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Dự án')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="text-center">
    <p class="text-2xl text-pink-400">Dự án</p>
</div>
<div class="container mx-auto">
    <ul class="list-disc">
        <li>Dự án website bán hoa lan viết bằng ASP.Net Core Web API và Angular (<a href="https://github.com/mangcaugai1st/Orchid.git" target="_blank">https://github.com/mangcaugai1st/Orchid.git</a>)</li>
        <li>Blog cá nhân được viết bằng ASP.Net Core MVC (<a href="https://github.com/mangcaugai1st/myFirstASP.NetProject.git" target="_blank">https://github.com/mangcaugai1st/myFirstASP.NetProject.git</a>)</li>
    </ul>
</div>
@stop
</body>
</html>

