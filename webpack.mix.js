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
//Ajouter par bootstrap
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css/tailwind.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')])
    .sass('resources/sass/app.scss', 'public/css')
