<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\Controller;

class EditCategoryController extends Controller
{
	public function __invoke(Category $category)
	{
		return view('admin.categories.edit', [
			'category'   => $category,
			'categories' => Category::with('children')->where('parent_id', '0')->get(),
			'delimiter'  => ''
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\StoreCategoryRequest  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update(StoreCategoryRequest $request, Category $category)
	{
		$category->update($request->except('id'));

		return redirect()->route('admin.category.index');
	}
}
