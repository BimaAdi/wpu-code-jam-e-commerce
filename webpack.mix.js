const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss('resources/css/global.css', 'public/css/global.css')
    .postCss('resources/css/navbar.css', 'public/css/navbar.css')
    .postCss('resources/css/section.css', 'public/css/section.css')
    .postCss('resources/css/hero.css', 'public/css/hero.css')
    .postCss('resources/css/footer.css', 'public/css/footer.css')
    .postCss('resources/css/produk.css', 'public/css/produk.css')
    .js('resources/js/components/Produk.js', 'public/js/components/Produk.js')
    .react();
