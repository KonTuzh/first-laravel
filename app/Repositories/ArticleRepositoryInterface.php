<?php

namespace App\Repositories;

use App\Article;
use App\Http\Requests\StoreArticleRequest;

interface ArticleRepositoryInterface
{
	public function count();

	public function all();

	public function showOne(string $slug);

	public function paginate(int $count);

	public function lastArticles(int $count);

	public function publishedArticles(int $count);

	public function childrenArticles();

	public function store(StoreArticleRequest $request);

	public function update(StoreArticleRequest $request, Article $article);

	public function updateViewed(Article $article);

	public function delete(Article $article);
}