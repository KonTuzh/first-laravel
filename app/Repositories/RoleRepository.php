<?php

namespace App\Repositories;

use App\Role;
use App\Repositories\RoleRepositoryInterface;
use App\Http\Requests\StoreRoleRequest;

class RoleRepository implements RoleRepositoryInterface
{
	public function count()
	{
		return Role::count();
	}
	
	public function all()
	{
		return Role::all();
	}

	public function paginate(int $count)
	{
		return Role::orderBy('created_at', 'desc')->paginate($count);
	}

	public function attachPermissions(Role $role, array $permissions)
	{
		return $role->permissions()->attach($permissions);
	}

	public function store(Role $role)
	{
		// throw new \Exception("не буду делать запись в базу данных");
		return $role->save();
	}

	public function update(Role $role)
	{
		$role->save();
		$role->permissions()->detach();

		return $role;
	}

	public function delete(Role $role)
	{
		$role->permissions()->detach();
		
		return $role->delete();
	}
}