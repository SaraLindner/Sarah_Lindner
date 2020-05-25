<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sarah Lindner- @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        @yield('head')
    </head>
    <body class="p-12">
        @yield('body')
    </body>
</html>
