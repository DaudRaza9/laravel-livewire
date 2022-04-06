<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Livewire</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">

    <livewire:styles/>
    <livewire:scripts/>
{{--    <script src="{{asset('js/app.js')}}"></script>--}}
</head>
<body class="flex flex-wrap justify-center">

    <div class="flex w-full justify-between px-4 bg-purple-900 text-white">
        <a class="mx-3 py-4" href="/">Home</a>
        <div class="py-4">
            <a class="mx-3" href="/login">Login</a>
            <a class="mx-3" href="/register">Register</a>
        </div>

    </div>
    <div class="my-10 w-full flex justify-center">
        @yield('content')
    </div>



</body>
</html>




