<?php

namespace App\Services\Article;

use App\Repositories\CategoryRepositoryInterface;

class EditArticleService
{
	protected $repository;

	public function __construct(CategoryRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		return $this->repository->childrenCategories();
	}
}