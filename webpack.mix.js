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
	 .sass('resources/assets/sass/app.sass', 'public/css');

mix.copy('resources/assets/js/lib', 'public/js/lib');
mix.copy('resources/assets/images', 'public/images');

if (mix.inProduction()) {
	mix.version();
}
