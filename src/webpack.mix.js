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
    .sass('resources/assets/sass/app.scss', 'public/css')
	.scripts([
        'resources/assets/js/pace.min.js',
    	'resources/assets/js/limitless/libraries/jquery.min.js',
    	'resources/assets/js/limitless/libraries/bootstrap.min.js',
    	'resources/assets/js/limitless/app.min.js',
    	'resources/assets/js/limitless/libraries/ripple.min.js',
        'resources/assets/vendor/moment/moment.min.js',
        'resources/assets/js/select2.min.js',
        'resources/assets/js/jgrowl.min.js',
   	],'public/js/backend.js')
    .scripts([
        'resources/assets/vendor/pickadate/picker.js',
        'resources/assets/vendor/pickadate/picker.date.js',
        'resources/assets/vendor/pickadate/picker.time.js',
        'resources/assets/vendor/pickadate/legacy.js',
    ],'public/js/pickadate.js')
    .scripts([
        'resources/assets/js/datepicker.js',
        'resources/assets/js/daterangepicker.js',
    ],'public/js/datepicker.js')
   	.styles([
        'resources/assets/css/limitless/icons/icomoon/styles.css',
        'resources/assets/css/limitless/bootstrap.min.css',
        'resources/assets/css/limitless/core.css',
        'resources/assets/css/limitless/components.min.css',
        'resources/assets/css/limitless/colors.min.css',
    ],'public/css/backend.css')
   	.copyDirectory('resources/assets/fonts/icomoon','public/fonts/icomoon')
   	.copyDirectory('resources/assets/images', 'public/images')
    .copyDirectory('resources/assets/vendor/summernote','public/vendor/summernote')
    .copyDirectory('resources/assets/vendor/datatables','public/vendor/datatables')





   ;
