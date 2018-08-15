<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateCategoryController extends Controller
{
	/**
	 * Show the form for creating a new category.
	 *
	 * @return \Illuminate\Http\Response
	 */
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
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		Category::create($request->all());

		return redirect()->route('admin.category.index');
	}
}
