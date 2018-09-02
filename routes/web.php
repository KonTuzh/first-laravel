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
	return view('pages.home');
})->name('home.index');

// Route::get('/phpinfo', function () { phpinfo(); });

Route::group(['prefix'=>'blog', 'namespace'=>'Blog'], function () {
	Route::get('/', 'ListBlogController')->name('blog.index');
	Route::get('/{slug_category}/{slug_article?}', 'ShowBlogController')->name('blog.show');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'DashboardController')->name('admin.index');

	Route::group(['prefix'=>'category', 'namespace'=>'Category'], function () {
		Route::get('/', 'ListCategoryController')->name('admin.category.index');
		Route::get('/create', 'CreateCategoryController')->name('admin.category.create');
		Route::post('/', 'StoreCategoryController')->name('admin.category.store');
		Route::get('/{category}/edit', 'EditCategoryController')->name('admin.category.edit');
		Route::put('/{category}', 'UpdateCategoryController')->name('admin.category.update');
		Route::delete('/{category}', 'DeleteCategoryController')->name('admin.category.destroy');
	});

	Route::group(['prefix'=>'article', 'namespace'=>'Article'], function () {
		Route::get('/', 'ListArticleController')->name('admin.article.index')->middleware('can:list-article');
		Route::get('/create', 'CreateArticleController')->name('admin.article.create')->middleware('can:create-article');
		Route::post('/', 'StoreArticleController')->name('admin.article.store')->middleware('can:create-article');
		Route::get('/{article}/edit', 'EditArticleController')->name('admin.article.edit'); //->middleware('can:view,article');
		Route::put('/{article}', 'UpdateArticleController')->name('admin.article.update')->middleware('can:update,article');
		Route::delete('/{article}', 'DeleteArticleController')->name('admin.article.destroy')->middleware('can:delete,article');
	});

	Route::group(['prefix'=>'user-managment', 'namespace'=>'UserManagment', 'middleware' => ['can:isAdmin']], function () {
		Route::group(['prefix'=>'user', 'namespace'=>'User'], function () {
			Route::get('/', 'ListUserController')->name('admin.user_managment.user.index');
			Route::get('/create', 'CreateUserController')->name('admin.user_managment.user.create');
			Route::post('/', 'StoreUserController')->name('admin.user_managment.user.store');
			Route::get('/{user}/edit', 'EditUserController')->name('admin.user_managment.user.edit');
			Route::put('/{user}', 'UpdateUserController')->name('admin.user_managment.user.update');
			Route::delete('/{user}', 'DeleteUserController')->name('admin.user_managment.user.destroy');
		});
		Route::group(['prefix'=>'role', 'namespace'=>'Role'], function () {
			Route::get('/', 'ListRoleController')->name('admin.user_managment.role.index');
			Route::get('/create', 'CreateRoleController')->name('admin.user_managment.role.create');
			Route::post('/', 'StoreRoleController')->name('admin.user_managment.role.store');
			Route::get('/{role}/edit', 'EditRoleController')->name('admin.user_managment.role.edit');
			Route::put('/{role}', 'UpdateRoleController')->name('admin.user_managment.role.update');
			Route::delete('/{role}', 'DeleteRoleController')->name('admin.user_managment.role.destroy');
		});
	});
	
});



