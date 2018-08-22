<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\Controller;


class CreateCategoryController extends Controller
{

	public function __invoke()
	{
		return view('admin.categories.create', [
			'category'   => [],
			'categories' => Category::with('children')->where('parent_id', '0')->get(),
			'delimiter'  => ''
		]);
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @param  \Illuminate\Http\StoreCategoryRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreCategoryRequest $request)
	{

		dd($request);
		$validated = $request->validated();

		Category::create($request->all());

		return redirect()->route('admin.category.index');
	}
}
