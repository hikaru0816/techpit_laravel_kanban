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

mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/button.scss', 'public/css')
    .sass('resources/sass/card_edit.scss', 'public/css')
    .sass('resources/sass/card_new.scss', 'public/css')
    .sass('resources/sass/card_show.scss', 'public/css')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/list_edit.scss', 'public/css')
    .sass('resources/sass/list_new.scss', 'public/css')
    .sass('resources/sass/sign_in.scss', 'public/css')
    .sass('resources/sass/sign_up.scss', 'public/css')
    .sass('resources/sass/top.scss', 'public/css');
