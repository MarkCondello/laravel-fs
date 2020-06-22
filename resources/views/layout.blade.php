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
    <div id="app"> 
        <div class="top-bar">
            <div class="top-bar-left">
                <h1><a href="{{ route('home') }}">Laravel From Scratch</a></h1>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
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
    </div>
    <script src="{{ asset('js/bundle.js') }} "></script>
    <script src="{{ asset('js/app.js') }} "></script>  
</body>
</html>
