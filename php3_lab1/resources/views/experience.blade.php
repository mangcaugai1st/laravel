<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kinh nghiệm và kỹ năng')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="text-center">
    <p class="text-2xl text-pink-400">Kinh nghiệm và kỹ năng</p>
</div>
<ul class="list-disc">
    <li>C#</li>
    <li>ASP.NET Core</li>
    <li>Angular</li>
    <li>Tailwind CSS</li>
    <li>Bootstrap</li>
    <li>Git</li>
    <li>Vim</li>
</ul>
@stop
</body>
</html>
