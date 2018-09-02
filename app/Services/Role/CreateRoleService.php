<?php

namespace App\Services\Role;

use App\Repositories\PermissionRepositoryInterface;

class CreateRoleService
{
	protected $repository;

	public function __construct(PermissionRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		return $this->repository->all();
	}
}