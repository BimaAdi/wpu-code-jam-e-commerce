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
    .postCss('resources/css/search.css', 'public/css/search.css')
    .js('resources/js/components/Home.js', 'public/js/components/Home.js')
    .js('resources/js/components/RakitItemPages.js', 'public/js/components/RakitItemPages.js')
    .js('resources/js/semua_produk/Bootstrap.js', 'public/js/semua_produk/Bootstrap.js')
    .react();
