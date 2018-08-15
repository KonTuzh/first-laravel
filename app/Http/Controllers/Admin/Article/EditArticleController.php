<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditArticleController extends Controller
{
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Article $category)
	{
		return view('admin.articles.edit');
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Article $article)
	{
		return 'Обновление не реализовано...';
	}
}
