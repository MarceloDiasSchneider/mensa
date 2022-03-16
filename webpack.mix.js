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

mix
    .alias({ '@': 'resources/src'})
    .js('resources/js/app.js', 'public/js')
    // Vue Js
    // Dashboard
    .js('resources/src/js/dashboard/auth.js', 'public/js/dashboard/')
    .js('resources/src/js/dashboard/sidebar.js', 'public/js/dashboard/')
    .js('resources/src/js/dashboard/calendar.js', 'public/js/dashboard/')
    .js('resources/src/js/dashboard/dishes.js', 'public/js/dashboard/')
    // Menu composition
    .js('resources/src/js/menu-composition.js', 'public/js/')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
