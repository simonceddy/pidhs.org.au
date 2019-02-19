const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

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

mix./* js('resources/js/app.js', 'public/js')
   .react('resources/js/exhibitions.js', 'public/js')
   .js('resources/js/editor/editor.js', 'public/js')
   . react('resources/js/mobileApp/mobileApp.js', 'public/js')
   .*/sass('resources/sass/index.scss', 'public/css/app.css')
   /* .postCss('resources/css/tailwind.css', 'public/css', [
       tailwindcss('./tailwind.js')
   ]) */;
