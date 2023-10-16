<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Griezmann">
    <title>@yield('titulo','Registro')</title>
    @include('layouts.auth.css')
    @yield('style')
    @include('layouts.css')
</head>
<body>
    @yield('content')  
    @include('layouts.auth.css')
    @include('layouts.auth.scripts') 
</body>
</html>