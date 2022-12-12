<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>
    <link href='/css/style.css' rel='stylesheet'>

</head>
<body>

<header>
    @yield('head')
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>