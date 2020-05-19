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

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/font-awesome-animation.min.css',
    'resources/assets/css/pe-icon-7-stroke.css',
    'resources/assets/css/icofont.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/jquery-ui.min.css',
    'resources/assets/css/slick.css',
    'resources/assets/css/slick-theme.css',
    'resources/assets/css/youtube-pop-up.css',
    'resources/assets/css/full-screen-menu.css',
    'resources/assets/css/fractionslider.css',
    'resources/assets/css/component.css',
    'resources/assets/css/lightcase.css',
    'resources/assets/css/slider-360.css',
    'resources/assets/css/amaran.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/skin/default.css',
    'resources/assets/css/responsive.css'
], 'public/assets/css/main.css');
mix.scripts([
    'resources/assets/js/jquery-3.2.1.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/touch.js',
    'resources/assets/js/slick.min.js',
    'resources/assets/js/jquery.countdown.min.js',
    'resources/assets/js/count-up.min.js',
    'resources/assets/js/jquery.waypoints.min.js',
    'resources/assets/js/youtube-jquery.js',
    'resources/assets/js/jquery.fractionslider.min.js',
    'resources/assets/js/masonry.pkgd.min.js',
    'resources/assets/js/jarallax.min.js',
    'resources/assets/js/jarallax-video.min.js',
    'resources/assets/js/lightcase.js',
    'resources/assets/js/threesixty.min.js',
    'resources/assets/js/jquery.amaran.min.js',
    'resources/assets/js/main.js'
], 'public/assets/js/main.js');
mix.copy('resources/assets/fonts', 'public/assets/fonts');
mix.copy('resources/assets/images', 'public/assets/images')
