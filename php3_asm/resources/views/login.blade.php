<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Đăng nhập')</title>
</head>
<body>
@extends('layouts.userLayout')
@section('content')
    <div class="flex justify-center items-center gap-4">
        <form class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Tên đăng nhập
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input name="username"
                           class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           id="inline-full-name" type="text">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Mật khẩu
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input name="password"
                           class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                           id="inline-password" type="password">
                </div>
            </div>
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <p>&nbsp;</p>
                </div>
                <div class="md:w-2/3">
                    <a href="/dang_ky" class="text-blue-700 hover:text-blue-500">Bạn chưa có tài khoản?</a>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-pink-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Đăng nhập
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop
</body>
</html>
