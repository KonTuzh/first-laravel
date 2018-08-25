<?php

namespace App\Services\Category;

use App\Repositories\CategoryRepositoryInterface;

class UpdateCategoryService
{
	protected $repository;

	public function __construct(CategoryRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request, $category)
	{
		return $this->repository->update($request, $category);
	}
}