<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <link rel="icon" href="{{asset('/assets/images/obraz-plus.ico')}}">
</head>
<body>

<header>
    <nav class="header">
        <img src="{{ asset('assets/images/obraz-plus.png') }}" width="75">
        <div class="material"><a href="/materials">Материалы</a></div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>

</footer>
</body>
</html>
