<?php

namespace App\Services\Admin;

use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\UserRepositoryInterface;

class DashboardService
{
	protected $category_repository;
	protected $article_repository;
	protected $user_repository;

	public function __construct(CategoryRepositoryInterface $category_repository, ArticleRepositoryInterface $article_repository, UserRepositoryInterface $user_repository)
	{
		$this->category_repository = $category_repository;
		$this->article_repository = $article_repository;
		$this->user_repository = $user_repository;
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

		
	public function countUsers()
	{
		return $this->user_repository->count();
	}
}