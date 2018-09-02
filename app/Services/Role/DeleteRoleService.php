<?php

namespace App\Services\Role;

use App\Role;
use App\Repositories\RoleRepositoryInterface;

class DeleteRoleService
{
	protected $repository;

	public function __construct(RoleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute(Role $role)
	{
		return $this->repository->delete($role);
	}
}