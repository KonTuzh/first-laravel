<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use App\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Controllers\Controller;

class CreateArticleController extends Controller
{
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke()
	{
		return view('admin.articles.create', [
			'article'    => [],
			'categories' => Category::with('children')->where('parent_id', '0')->get(),
			'delimiter'  => ''
		]);
	}
	/**
	 * Store a newly created category in storage.
	 *
	 * @param  \Illuminate\Http\StoreArticleRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreArticleRequest $request)
	{
		$article = Article::create($request->all());

		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return redirect()->route('admin.article.index');
	}
}
