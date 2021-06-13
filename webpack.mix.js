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
    .postCss('resources/css/semua_produk.css', 'public/css/semua_produk.css')
    .postCss('resources/css/detail_produk.css', 'public/css/detail_produk.css')
    .postCss('resources/css/rakit.css', 'public/css/rakit.css')
    .postCss('resources/css/search.css', 'public/css/search.css')
    .js('resources/js/Home/Bootstrap.js', 'public/js/Home/Bootstrap.js')
    .js('resources/js/semua_produk/Bootstrap.js', 'public/js/semua_produk/Bootstrap.js')
    .js('resources/js/rakit_laptop/Bootstrap.js', 'public/js/rakit_laptop/Bootstrap.js')
    .react();
