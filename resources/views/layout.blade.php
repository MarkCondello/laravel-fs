<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app"> 
        <div class="top-bar" data-topbar>
            <div class="top-bar-left">
                <h1><a href="{{ route('home') }}">Project Creator App</a></h1>
            </div>
            <div class="top-bar-right">
   
                <ul class="menu dropdown " data-dropdown-menu >
                <!-- Authentication Links -->
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="#">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest

                    <li><a href="{{ route('projects.index') }}">Projects</a>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('projects.create') }}">Create a project</a>
                            </li>
                        </ul>
                    </li>
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



    <script src="{{ asset('js/vendor.js') }} "></script>
    <script src="{{ asset('js/app.js') }} "></script>  
</body>
</html>
