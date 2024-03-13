<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sản phẩm')</title>


</head>
<body>
@extends('layouts.userLayout')

@section('content')
    <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-5">
        @foreach($data as $i)
            <a href="/san_pham/{{$i->product_id}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/images/{{$i->product_image}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$i->product_name}}</h5>
                    <div class="flex">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{number_format($i->product_price)}} đ</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Xem chi tiết
                        </button>
                        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 border border-pink-700 rounded">
                            Mua ngay
                        </button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@stop
</body>
</html>
