<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <h1><a href="/">Laravel From Scratch</a></h1>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                 <li><a href="projects">Projects</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="grid-container" style="padding-top: 3rem;">

        <div class="grid-container">
            <div class="grid-x align-center">
                <div class="small-10">
                    @yield('content')

                </div>
            </div>
        </div>

    </div>


</body>
</html>
