<?php

namespace App\Services\Category;

use App\Repositories\CategoryRepositoryInterface;

class ListCategoryService
{
	protected $repository;

	public function __construct(CategoryRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(int $count)
	{
		return $this->repository->paginate($count);
	}
}