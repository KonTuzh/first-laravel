<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListCategoryController extends Controller
{
	/**
	 * Display a listing of the categories.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke()
	{
		return view('admin.categories.index');
	}
}
