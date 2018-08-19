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
	 .sass('resources/assets/sass/main.sass', 'public/css/app.css');

mix.sass('resources/assets/admin/sass/app.sass', 'public/css/admin');

mix.copy('resources/assets/admin/js', 'public/js/admin');

mix.copy('resources/assets/images', 'public/images');

mix.browserSync('kontuzh.site');

if (mix.inProduction()) {
	mix.version();
}

