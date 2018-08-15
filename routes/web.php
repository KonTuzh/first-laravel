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

Route::get('/', function () {
	return view('welcome');
});

Route::group(['prefix'=>'blog', 'namespace'=>'Blog'], function () {
	Route::get('/', 'ListBlogController')->name('blog.index');
	Route::get('/{slug_category}/{slug_article?}', 'ShowBlogController')->name('blog.show');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'DashboardController@dashboard')->name('admin.index');

	Route::group(['prefix'=>'category', 'namespace'=>'Category'], function () {
		Route::get('/', 'ListCategoryController')->name('admin.category.index');
		Route::get('/create', 'CreateCategoryController')->name('admin.category.create');
		Route::post('/', 'CreateCategoryController@store')->name('admin.category.store');
		Route::get('/{category}/edit', 'EditCategoryController')->name('admin.category.edit');
		Route::put('/{category}', 'EditCategoryController@update')->name('admin.category.update');
		Route::delete('/{category}', 'DeleteCategoryController')->name('admin.category.destroy');
	});

	Route::group(['prefix'=>'article', 'namespace'=>'Article'], function () {
		Route::get('/', 'ListArticleController')->name('admin.article.index');
		Route::get('/create', 'CreateArticleController')->name('admin.article.create');
		Route::post('/', 'CreateArticleController@store')->name('admin.article.store');
		Route::get('/{article}/edit', 'EditArticleController')->name('admin.article.edit');
		Route::put('/{article}', 'EditArticleController@update')->name('admin.article.update');
		Route::delete('/{article}', 'DeleteArticleController')->name('admin.article.destroy');
	});
	
});



