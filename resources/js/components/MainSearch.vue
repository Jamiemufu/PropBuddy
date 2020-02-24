<template>
    <div class="main-search-background" :style="{ 'backgroundImage': 'url(' + url + ')' }" @change="backgroundUpdate">
        <div class="skew-cs"></div>
        <div class="colour-block first-block main-search">
            <!--section and container in here-->
            <div class="uk-section uk-padding-remove">
                <div class="uk-container uk-padding-remove uk-text-center">
                    <h1>Enter your postcode or address</h1>
                    <form class="uk-search uk-search-large" autocomplete="off" @submit.prevent="">
                        <input class="uk-search-input uk-text-center" type="search" placeholder="Search ..." autofocus id="main-search" value="" @keyup.enter="search" v-model="address" name="address">
                    </form>
                </div>
            </div>
        </div>
        <div class="skew-fe"></div>
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
        },
        methods: {
            buildBackground() {
                //generate new url from searched data
                let endpoint = 'https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/';
                let zoom = '13.01/';
                let res = '1280x550@2x';
                let mapKey = '?access_token=' + this.mapKey;
                this.url = endpoint + this.long + ',' + this.lat + ',' + zoom + res + mapKey;
                console.log(url);
            },
            backgroundUpdate() {
                //todo: Spinner while loading?
            },
            search() {
                let url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + this.address + '.json?access_token=' + this.mapKey;
                axios.get(url)
                    .then((response) => {
                        console.log(response);
                        this.data = response.data.features[0];
                        this.long = this.data.center[0];
                        this.lat = this.data.center[1];
                        this.buildBackground();
                    })
                    .catch((error)=> {
                        console.log(error);
                    })
            },
        }
    }
</script>
