let mix = require('laravel-mix');
/*mix.disableNotifications();*/

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

mix.js('resources/assets/js/app.js', 'public/js');



mix.sass('resources/assets/sass/app.scss', 'public/css'); 

mix.sass('resources/assets/sass/main.scss', 'public/css');
mix.sass('resources/assets/sass/multizoom.scss', 'public/css');
mix.sass('resources/assets/sass/product.scss', 'public/css');
mix.sass('resources/assets/sass/formMedia.scss', 'public/css');
mix.sass('resources/assets/sass/company.scss', 'public/css');
mix.sass('resources/assets/sass/admin.scss', 'public/css');