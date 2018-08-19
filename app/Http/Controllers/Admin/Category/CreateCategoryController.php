<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
	 * Get a validator for an incoming creating a new category request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{

		return Validator::make($data, [
			'title'       => 'required|string|max:255',
			'slug'        => ['required', 'unique:categories', 'regex:/(^([a-z-0-9-]+$)/'],
			'parent_id'   => 'integer|max:255',
			'published'   => 'tinyInteger|max:255',
			'created_by'  => 'integer|max:255',
			'modified_by' => 'integer|max:255'
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
