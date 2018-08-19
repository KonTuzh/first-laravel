<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}
	
	//Dashboard
	public function dashboard()
	{
		return view('admin.dashboard', [
			'count_categories'   => Category::count(),
			'count_articles'   => Article::count(),
			'articles'   => Article::lastArticles(5),
			'categories' => Category::lastCategories(5)
		]);
	}
}
