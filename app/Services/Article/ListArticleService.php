<?php

namespace App\Services\Article;

use App\Repositories\ArticleRepositoryInterface;

class ListArticleService
{
	protected $repository;

	public function __construct(ArticleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(int $count)
	{
		return $this->repository->paginate($count);
	}
}