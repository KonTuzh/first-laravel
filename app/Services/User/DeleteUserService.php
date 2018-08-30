<?php

namespace App\Services\User;

use App\User;
use App\Repositories\UserRepositoryInterface;

class DeleteUserService
{
	protected $repository, $user;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(User $user)
	{
		return $this->repository->delete($user);
	}
}