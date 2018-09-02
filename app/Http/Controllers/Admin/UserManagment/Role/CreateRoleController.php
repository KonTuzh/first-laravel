<?php

namespace App\Http\Controllers\Admin\UserManagment\Role;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Role\CreateRoleService;

class CreateRoleController extends Controller
{
	protected $service;

	public function __construct(CreateRoleService $service)
	{
		$this->service = $service;
	}

  public function __invoke()
	{
		return view('admin.user_managment.roles.create', [
			'role'        => [],
			'permissions' => $this->service->execute(),
		]);
	}
}
