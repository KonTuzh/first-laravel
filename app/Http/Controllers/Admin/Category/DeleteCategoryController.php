<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteCategoryController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Category $category)
	{
		$category->delete();

		return redirect()->route('admin.category.index');
	}
}
