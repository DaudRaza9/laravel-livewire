<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire</title>
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">

        <livewire:styles />
        <livewire:scripts />
    </head>
    <body class="flex justify-center">


        <div class="w-10/12 my-10 flex">
            <div class="w-5/12 rounded border p-2">
                <livewire:tickets/>
            </div>
            <div class="w-7/12 wx-2 rounded border p-2">
                <livewire:comments/>
            </div>
        </div>



    </body>
</html>
