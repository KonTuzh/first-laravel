<?php

namespace App\Http\Controllers\Admin\UserManagment\Role;

use App\Http\Controllers\Controller;
use App\Services\Role\ListRoleService;

class ListRoleController extends Controller
{
	protected $service;

	public function __construct(ListRoleService $service)
	{
		$this->service = $service;
	}

  public function __invoke()
	{
		return view('admin.user_managment.roles.index', [
			'numeration' => 1,
			'roles'      => $this->service->execute(10)
		]);
	}
}
