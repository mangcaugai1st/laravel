<html>
    <head>
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="flex flex-col h-screen">
            <div>
                @section('header')
                @include('layouts/header')
                @show
            </div>
            <div class="mb-auto">
                <div class="container mx-auto">
                    @yield('content')
                </div>
            </div>
            <div>
                @section('footer')
                @include('layouts/footer')
                @show
            </div>
        </div>
    </body>
</html>
