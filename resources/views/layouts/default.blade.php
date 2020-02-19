<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/mapbox-gl.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="map">
    </div>

    <div class="uk-container">
        <div class="uk-card uk-card-body uk-card-primary">
            <h3 class="uk-card-title">Example headline</h3>

            <button class="uk-button uk-button-default" uk-tooltip="title: Hello World">Hover</button>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
