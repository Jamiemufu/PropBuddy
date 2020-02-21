<template>
    <div class="uk-background-fixed" :style="{ 'backgroundImage': 'url(' + url + ')' }">
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
                'data': '',
                'token': process.env.MIX_MAPBOX_API_KEY,
                'address': '',
                'url': 'https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/5.3472,54.7617,4.56/1280x500@2x?access_token=pk.eyJ1IjoiamFtaWVtdWZ1IiwiYSI6ImNrMnVocGs0azB6YmMzY3I2YnpzeWFoOWgifQ.0fLFGw1zHa503vbVCHX6vw',
                'long': '',
                'lat': ''
            }
        },
        methods: {
            buildBackground() {
                //generate new url from searched data
                let endpoint = 'https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/';
                let zoom = '10.01/';
                let res = '1280x500@2x';
                let key = '?access_token=' + this.token;
                this.url = endpoint + this.long + ',' + this.lat + ',' + zoom + res + key;
            },
            search(e) {
                let url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + this.address + '.json?access_token=' + this.token;
                axios.get(url)
                    .then((response) => {
                        this.data = response.data.features[0];
                        this.long = this.data.center[0];
                        this.lat = this.data.center[1];
                        this.buildBackground();
                    });
            }
        }
    }
</script>
