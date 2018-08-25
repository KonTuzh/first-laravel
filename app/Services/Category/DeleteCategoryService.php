<?php

namespace App\Services\Category;

use App\Repositories\CategoryRepositoryInterface;

class DeleteCategoryService
{
	protected $repository;

	public function __construct(CategoryRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($category)
	{
		return $this->repository->delete($category);
	}
}