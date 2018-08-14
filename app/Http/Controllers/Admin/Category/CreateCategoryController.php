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
		return view('admin.categories.create');
	}

	/**
	 * Store a newly created category in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		return 'Сохранение не реализовано...';
	}
}
