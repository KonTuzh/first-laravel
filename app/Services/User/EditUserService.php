<?php

namespace App\Services\User;

use App\Repositories\RoleRepositoryInterface;

class EditUserService
{
	protected $repository;

	public function __construct(RoleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		return $this->repository->all();
	}
}