const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    .styles('node_modules/mapbox-gl/dist/mapbox-gl.css', 'public/css/mapbox-gl.css')
    .styles('node_modules/uikit/dist/css/uikit.css', 'public/css/uikit.css');
