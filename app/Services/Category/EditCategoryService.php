<?php

namespace App\Services\Category;

use App\Repositories\CategoryRepositoryInterface;

class EditCategoryService
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