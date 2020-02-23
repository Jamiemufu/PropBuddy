<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--styles--}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('/css/mapbox-gl.css')}}">
    {{--end styles--}}
    <title>Property Pal</title>
</head>
<body>

    {{--header section--}}
    <header>
        @include('includes.nav')
    </header>

    {{--first section--}}

    <div class="main">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>
    {{--scripts--}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
