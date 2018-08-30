<?php

namespace App\Repositories;

use App\Article;

interface ArticleRepositoryInterface
{
	public function count();

	public function all();

	public function showOne(string $slug);

	public function paginate(int $count);

	public function lastArticles(int $count);

	public function publishedArticles(int $count);

	public function childrenArticles();

	public function store(Article $article);

	public function attachCategories(Article $article, array $categories);

	public function detachCategories(Article $article);

	public function update(Article $article);

	public function updateViewed(Article $article);

	public function delete(Article $article);
}