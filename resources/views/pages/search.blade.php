@extends('layouts.default')
@section('content')

    <div id="app">

        <main-search></main-search>

         {{--overview component--}}
        <div class="white-block white-block-first">
            <overview></overview>
        </div>

        <div class="skew-c"></div>

        <div class="colour-block">
            <rent></rent>
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
    </div>
@endsection
