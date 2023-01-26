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

mix.js('resources/js/app.js', 'public/js').combine([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/javaScript.js',
    'resources/assets/js/modal.js',
    
    ], 'public/js/vendor.js')
    .combine([    
        'resources/assets/css/bootstrap.css',
        // 'resources/assets/awesome/css/font-awesome.min.css',
        'resources/assets/css/style.css',

    ], 'public/css/vendor.css');
   
