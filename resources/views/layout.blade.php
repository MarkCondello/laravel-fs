<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="about">About</a></li>
    <li><a href="contact">Contact</a></li>
</ul>

@yield('content')
</body>
</html>
