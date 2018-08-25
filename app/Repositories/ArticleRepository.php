<?php

namespace App\Repositories;

use App\Article;
use App\Repositories\ArticleRepositoryInterface;
use App\Http\Requests\StoreArticleRequest;

class ArticleRepository implements ArticleRepositoryInterface
{
	public function all()
	{
		return Article::all();
	}

	public function paginate(int $count)
	{
		return Article::paginate($count);
	}

	public function lastArticles(int $count)
	{
		return Article::orderBy('created_at', 'desc')->take($count)->get();
	}

	public function childrenArticles()
	{
		return Article::with('children')->where('parent_id', '0')->get();
	}

	public function store(StoreArticleRequest $request)
	{
		$article = Article::create($request->all());

		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return $article;

	}

	public function update(StoreArticleRequest $request, Article $article)
	{
		// $article->update($request->except('id'));

		$article->title             = $request->get('title');
		$article->slug              = $request->get('slug');
		$article->description_short = $request->get('description_short');
		$article->description       = $request->get('description');
		$article->meta_title        = $request->get('meta_title');
		$article->meta_description  = $request->get('meta_description');
		$article->meta_keyword      = $request->get('meta_keyword');
		$article->published         = $request->get('published');
		$article->modified_by       = $request->get('modified_by');
		$article->save();

		$article->categories()->detach();

		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return $article;
	}

	public function delete(Article $article)
	{
		$article->categories()->detach();
		return $article->delete();
	}
}