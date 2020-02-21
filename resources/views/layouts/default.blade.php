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
{{--This needs a massive refactor and is just a base--}}
{{--header section--}}
<header>
    @include('includes.nav')
</header>

{{--hero main search section--}}
{{--first section--}}
<div class="uk-background-fixed" style="background-image: url('https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/-2.1707,52.5699,17.01/1280x550@2x?access_token={{env('MAPBOX_API_KEY')}}')">
    <div class="skew-cs"></div>
    <div class="colour-block first-block main-search">
        {{-- section and container in here--}}
        <div class="uk-section uk-padding-remove">
            <div class="uk-container uk-padding-remove uk-text-center">
                <h1>Enter your postcode or address</h1>
                <form class="uk-search uk-search-large">
                    <input class="uk-search-input uk-text-center" type="search" placeholder="Search ..." autofocus id="main-search">
                </form>
            </div>
        </div>
    </div>
    <div class="skew-fe"></div>
</div>
{{--summary--}}
<div class="white-block white-block-first">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove" uk-parallax="opacity: 0,1; x: 50, 0; viewport: 0.5; media: @xl;">
            <div class="uk-text-right">
                <h1>Summary from results return via API's</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
        </div>
        <div class="uk-container uk-padding-remove uk-margin-large" uk-parallax="opacity: 0,1; x: -50, 0; viewport: 0.4; media: @xl;">
            <div class="uk-text-left">
                <h1>Summary from results return via API's</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
        </div>
    </div>
</div>
{{--third section--}}
<div class="skew-c"></div>
<div class="colour-block">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove" uk-parallax="opacity: 0,1; x: -50, 0; viewport: 0.5;">
            <h1>Average Rent for Area</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</div>
{{--fourth section--}}
<div class="skew-cc"></div>
<div class="white-block">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove uk-text-right" uk-parallax="opacity: 0,1; x: 50, 0; viewport: 0.5;">
            <h1>Average House Prices and Sales</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</div>
{{--fifth section--}}
<div class="skew-c"></div>
<div class="colour-block">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove" uk-parallax="opacity: 0,1; x: -50, 0; viewport: 0.5;">
            <h1>Crime Stats for Area</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</div>
{{--sixth section--}}
<div class="skew-cc"></div>
<div class="white-block">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove uk-text-right" uk-parallax="opacity: 0,1; x: 50, 0; viewport: 0.5;">
            <h1>Weather risk/flooding</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</div>
{{--seventh section--}}
<div class="skew-c"></div>
<div class="colour-block">
    {{-- section and container in here--}}
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove" uk-parallax="opacity: 0,1; x: -50, 0; viewport: 0.5;">
            <h1>Demographics</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</div>
{{--scripts--}}
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
