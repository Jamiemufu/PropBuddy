<template>
    <div class="uk-section uk-padding-remove">
        <div class="uk-container uk-padding-remove" uk-parallax="opacity: 0,1; x: -50, 0; viewport: 0.5;">
            <h1>Average Rent for Area</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                'address': '',
                // we already have lat/lng from backgroundImage
                'mapKey': process.env.MIX_MAPBOX_API_KEY,
                'url':
                    'https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/5.3472,54.7617,4.56/1280x550@2x?access_token=pk.eyJ1IjoiamFtaWVtdWZ1IiwiYSI6ImNrMnVocGs0azB6YmMzY3I2YnpzeWFoOWgifQ.0fLFGw1zHa503vbVCHX6vw',
                'long': '',
                'lat': ''
            }
        }
    }
</script>
