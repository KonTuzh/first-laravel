<?php

namespace App\Services\Admin;

use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;

class DashboardService
{
	protected $category_repository;
	protected $article_repository;

	public function __construct(CategoryRepositoryInterface $category_repository, ArticleRepositoryInterface $article_repository)
	{
		$this->category_repository = $category_repository;
		$this->article_repository = $article_repository;
	}

	public function countCategories()
	{
		return $this->category_repository->count();
	}

	public function lastCategories(int $count)
	{
		return $this->category_repository->lastCategories($count);
	}
	
	public function countArticles()
	{
		return $this->article_repository->count();
	}

	public function lastArticles(int $count)
	{
		return $this->article_repository->lastArticles($count);
	}

}