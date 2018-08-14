<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// php artisan make:controller Admin/Category/CreateCategoryController --model=Category

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function () {
	Route::get('/', 'DashboardController@dashboard')->name('admin.index');

	Route::group(['prefix'=>'category', 'namespace'=>'Category'], function () {
		Route::get('/', 'ListCategoryController')->name('admin.category.index');
		Route::post('/', 'CreateCategoryController@store')->name('admin.category.store');
		Route::get('/create', 'CreateCategoryController')->name('admin.category.create');
		Route::get('/{category}', 'EditCategoryController')->name('admin.category.edit');
		Route::put('/{category}', 'EditCategoryController@update')->name('admin.category.update');
	});
	
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-home', function () {
    return view('pages.home', [
			'title'       => 'First Laravel Project',
			'description' => 'Description',
			'author'      => 'author',
			'h1'          => 'Main Heading',
			'subtitle'    => 'This is the main page of my first site on Laravel',
			'btnText'     => 'Update'
		]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



