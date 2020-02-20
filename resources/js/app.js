
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// UIKit imports
import UIkit from 'uikit'
import css from 'uikit/dist/css/uikit.css';
import Icons from 'uikit/dist/js/uikit-icons';

// var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
//
// mapboxgl.accessToken = 'pk.eyJ1IjoiamFtaWVtdWZ1IiwiYSI6ImNrMnVocGs0azB6YmMzY3I2YnpzeWFoOWgifQ.0fLFGw1zHa503vbVCHX6vw';
//
// var map = new mapboxgl.Map({
//     container: 'map',
//     style: 'mapbox://styles/mapbox/streets-v11'
// });



// loads the Icon plugin
UIkit.use(Icons);
