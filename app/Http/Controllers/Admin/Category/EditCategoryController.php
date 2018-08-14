<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditCategoryController extends Controller
{
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	// public function __invoke(Category $category)
	public function __invoke($category)
	{
		return view('admin.categories.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	// public function update(Request $request, Category $category)
	public function update($category)
	{
		return 'Обновление не реализовано...';
	}
}
