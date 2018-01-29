let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
mix.js('resources/assets/js/cookielawinfo.js', 'public/js')


.sass('resources/assets/sass/app.scss', 'public/css'); 

mix.sass('resources/assets/sass/main.scss', 'public/css');
mix.sass('resources/assets/sass/multizoom.scss', 'public/css');
mix.sass('resources/assets/sass/product.scss', 'public/css');
mix.sass('resources/assets/sass/formMedia.scss', 'public/css');