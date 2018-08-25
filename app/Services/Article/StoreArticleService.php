<?php

namespace App\Services\Article;

use App\Repositories\ArticleRepositoryInterface;

class StoreArticleService
{
	protected $repository;

	public function __construct(ArticleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request)
	{
		return $this->repository->store($request);
	}
}