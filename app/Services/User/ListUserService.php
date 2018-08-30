<?php

namespace App\Services\User;

use App\Repositories\UserRepositoryInterface;

class ListUserService
{
	protected $repository;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(int $count)
	{
		return $this->repository->paginate($count);
	}
}