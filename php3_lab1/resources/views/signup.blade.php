<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Đăng ký')</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div class="mb-auto">
    <div class="flex justify-center items-center gap-4 md:mt-40">
        <form class="w-full max-w-sm" (ngSubmit)="Register()">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Tên đăng nhập
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input [(ngModel)]="user.username"
                           class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           id="inline-full-name" type="text" name="username">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Mật khẩu
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input [(ngModel)]="user.password"
                           class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           id="inline-password" type="password" name="password">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Nhập lại mật khẩu
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input [(ngModel)]="user.password1"
                           class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           id="inline-password1" type="password" name="password1">
                </div>
            </div>
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <p>&nbsp;</p>
                </div>
                <div class="md:w-2/3">
                    <a href="/login" class="text-blue-700 hover:text-blue-500">Bạn đã có tài khoản?</a>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Đăng ký
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
</body>
</html>
