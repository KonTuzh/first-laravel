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

/*-- Frontend --*/
mix.js('resources/assets/js/app.js', 'public/js')
	 .sass('resources/assets/sass/main.sass', 'public/css/app.css');


/*-- Admin --*/
mix.js('resources/assets/admin/js/app.js', 'public/js/admin')
	 .js('resources/assets/admin/js/main.js', 'public/js/admin')
	 .sass('resources/assets/admin/sass/app.sass', 'public/css/admin')
	 .copy('resources/assets/admin/css', 'public/css/admin')
	 .copy('resources/assets/admin/js/lib', 'public/js/admin');

mix.copy('resources/assets/images', 'public/images');

mix.browserSync('kontuzh.site');

if (mix.inProduction()) {
	mix.version();
}

