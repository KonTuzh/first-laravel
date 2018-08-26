<?php

namespace App\Services\Blog;

use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;

class ShowBlogService
{
	protected $category_repository;
	protected $article_repository;

	public function __construct(CategoryRepositoryInterface $category_repository, ArticleRepositoryInterface $article_repository)
	{
		$this->category_repository = $category_repository;
		$this->article_repository = $article_repository;
	}

	public function showArticlesCategory(string $slug, int $count)
	{
		if(!$category = $this->category_repository->getCategory($slug)){
			throw new \Exception('Категория не найдена');
		}

		return [
			'category' => $category,
			'articles' => $this->category_repository->getArticlesCategory($category, $count)
		];
	}

	public function showArticle(string $slug_category, string $slug_article)
	{
		if(!$category = $this->category_repository->getCategory($slug_category)){
			throw new \Exception('Категория не найдена');
		}

		if(!$article = $this->article_repository->showOne($slug_article)){
			throw new \Exception('Статья не найдена');
		}

		$viewed = $article->viewed;
		$article->viewed = (int)$viewed + 1;

		$this->article_repository->updateViewed($article);

		return [
			'category' => $category,
			'article' => $article
		];
	}
}