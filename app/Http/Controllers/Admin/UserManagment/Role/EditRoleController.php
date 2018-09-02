<?php

namespace App\Http\Controllers\Admin\UserManagment\Role;

use App\Role;
use App\Http\Controllers\Controller;
use App\Services\Role\EditRoleService;

class EditRoleController extends Controller
{
  protected $service;

	public function __construct(EditRoleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Role $role)
	{

		// $permissions = $this->service->execute();

		// dd($permissions);

		// dd($role->permissions);

		return view('admin.user_managment.roles.edit', [
			'role' => $role,
			'permissions' => $this->service->execute()
		]);
	}
}
