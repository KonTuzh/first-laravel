<?php

namespace App\Services\Article;

use App\Repositories\ArticleRepositoryInterface;

class DeleteArticleService
{
	protected $repository;

	public function __construct(ArticleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($article)
	{
		return $this->repository->delete($article);
	}
}