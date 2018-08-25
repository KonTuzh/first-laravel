<?php

namespace App\Services\Article;

use App\Repositories\ArticleRepositoryInterface;

class UpdateArticleService
{
	protected $repository;

	public function __construct(ArticleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request, $category)
	{
		return $this->repository->update($request, $category);
	}
}