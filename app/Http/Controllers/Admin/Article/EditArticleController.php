<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use App\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Controllers\Controller;

class EditArticleController extends Controller
{
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Article $article)
	{
		return view('admin.articles.edit', [
			'article' => $article,
			'categories' => Category::with('children')->where('parent_id', '0')->get(),
			'delimiter'  => ''
		]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\StoreArticleRequest  $request
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(StoreArticleRequest $request, Article $article)
	{
		$article->update($request->except('id'));

		$article->categories()->detach();
		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return redirect()->route('admin.article.index');
	}
}
