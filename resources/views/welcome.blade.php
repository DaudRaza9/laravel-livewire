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
    <body class="antialiased">
     <livewire:comments/>


    </body>
</html>
