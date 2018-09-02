<?php

namespace App\Repositories;

use App\Permission;

interface PermissionRepositoryInterface
{
	public function all();

	public function paginate(int $count);
}