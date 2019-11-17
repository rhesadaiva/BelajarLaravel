<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('layout.header')
    </header>

    <ul>
        @section('sidebar')
        <li>HTML</li>
        <li>CSS</li>
        <li>JS</li>
        @show
    </ul>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>