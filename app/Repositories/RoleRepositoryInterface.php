<?php

namespace App\Repositories;

use App\Role;

interface RoleRepositoryInterface
{
	public function count();

	public function all();

	public function paginate(int $count);

	public function attachPermissions(Role $role, array $permissions);

	public function store(Role $role);

	public function update(Role $role);

	public function delete(Role $role);
}