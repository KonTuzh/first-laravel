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
    return view('pages.home', [
			'title' => 'First Laravel Project',
			'description' => 'Description',
			'author' => 'author',
			'h1' => 'Main Heading',
			'subtitle' => 'This is the main page of my first site on Laravel',
			'btnText' => 'Update'
		]);
});
