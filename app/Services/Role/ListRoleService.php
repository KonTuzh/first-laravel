<?php

namespace App\Services\Role;

use App\Repositories\RoleRepositoryInterface;

class ListRoleService
{
	protected $repository;

	public function __construct(RoleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(int $count)
	{
		return $this->repository->paginate($count);
	}
}