<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----  link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --->
    <style>
        .active{
            color: brown;
            font-weight: bold;
        }
    </style>
    
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>
</html>