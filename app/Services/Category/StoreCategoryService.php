<?php

namespace App\Services\Category;

use App\Repositories\CategoryRepositoryInterface;

class StoreCategoryService
{
	protected $repository;

	public function __construct(CategoryRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request)
	{
		return $this->repository->store($request);
	}
}