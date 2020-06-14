<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link rel="stylesheet" href="{{asset('css/app.css')}} ">
 		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Title</title>
    </head>
	<body>
       <div class="grid-container">
            <header>
                @yield('header')
            </header>
            <main id="main" class="grid-x grid-margin-x grid-padding-x">
                @yield('content')
            </main>
            <footer>

            </footer>
       </div>
       <script src="{{asset('js/bundle.js')}} "></script>
       <script src="{{asset('js/app.js')}} "></script>
	</body>
</html>