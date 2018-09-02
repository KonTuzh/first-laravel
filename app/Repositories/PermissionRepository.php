<?php

namespace App\Repositories;

use App\Permission;
use App\Repositories\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
	public function all()
	{
		return Permission::all();
	}

	public function paginate(int $count)
	{
		return Permission::orderBy('created_at', 'desc')->paginate($count);
	}
}