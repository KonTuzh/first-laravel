<?php

namespace App\Repositories;

use App\Article;
use App\Repositories\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
	public function count()
	{
		return Article::count();
	}

	public function all()
	{
		return Article::all();
	}

	public function showOne(string $slug)
	{
		return Article::where('slug', $slug)->first();
	}

	public function paginate(int $count)
	{
		return Article::orderBy('created_at', 'desc')->paginate($count);
	}

	public function lastArticles(int $count)
	{
		return Article::orderBy('created_at', 'desc')->take($count)->get();
	}

	public function publishedArticles(int $count)
	{
		return Article::where('published', 1)->orderBy('created_at', 'desc')->paginate($count);
	}

	public function childrenArticles()
	{
		return Article::with('children')->where('parent_id', '0')->get();
	}

	public function store(Article $article)
	{
		// throw new \Exception("не буду делать запись в базу данных");
		return $article->save();
	}

	public function attachCategories(Article $article, array $categories)
	{
		return $article->categories()->attach($categories);
	}

	public function detachCategories(Article $article)
	{
		return $article->categories()->detach();
	}

	public function update(Article $article)
	{
		// throw new \Exception("не буду обновлять запись в базе данных");
		$article->save();
		$article->categories()->detach();

		return $article;
	}

	public function updateViewed(Article $article)
	{
		$article->save();
	}

	public function delete(Article $article)
	{
		$article->categories()->detach();
		
		return $article->delete();
	}
}