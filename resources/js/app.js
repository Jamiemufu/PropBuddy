
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'
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
Vue.component('main-search', require('./components/MainSearch.vue').default);
Vue.component('overview', require('./components/Overview.vue').default);
Vue.component('rent', require('./components/Rent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        PulseLoader
    }
});

// UIKit imports
import UIkit from 'uikit'
import css from 'uikit/dist/css/uikit.css';
import Icons from 'uikit/dist/js/uikit-icons';

// let mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
//
// mapboxgl.accessToken = 'pk.eyJ1IjoiamFtaWVtdWZ1IiwiYSI6ImNrMnVocGs0azB6YmMzY3I2YnpzeWFoOWgifQ.0fLFGw1zHa503vbVCHX6vw';
//
// let map = new mapboxgl.Map({
//     container: 'map',
//     style: 'mapbox://styles/mapbox/streets-v11'
// });



// loads the Icon plugin
UIkit.use(Icons);

// nav vars
let nav = document.getElementById('full-nav');
let navToggle = document.getElementById('open-nav');
let navClose = document.getElementById('full-nav-close');
let navList = document.getElementById('nav-list');
let navSearch = document.getElementById('nav-search');
let mainSearch = document.getElementById('main-search');
let navFullSearch =  document.getElementById('nav-full-search');

navToggle.addEventListener('click', function () {
    openNav();

});

navClose.addEventListener('click', function() {
    closeNav();
});

function openNav() {
    nav.classList.toggle('nav-width-100');
    navList.classList.toggle('nav-width-100');
    setTimeout(function () {
        navSearch.classList.toggle('nav-show');
        navList.classList.toggle('nav-show');
    }, 300);

}

function closeNav() {
    navSearch.classList.toggle('nav-show');
    navList.classList.toggle('nav-show');
    setTimeout(function () {
        nav.classList.toggle('nav-width-100');
        navList.classList.toggle('nav-width-100');
    }, 300);

}
