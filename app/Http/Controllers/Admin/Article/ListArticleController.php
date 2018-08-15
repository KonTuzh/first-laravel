<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListArticleController extends Controller
{
	/**
	 * Display a listing of the articles.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke()
	{
		return view('admin.articles.index');
	}
}
