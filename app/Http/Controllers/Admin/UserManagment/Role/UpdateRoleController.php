<?php

namespace App\Http\Controllers\Admin\UserManagment\Role;

use App\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Controllers\Controller;
use App\Services\Role\UpdateRoleService;

class UpdateRoleController extends Controller
{
	protected $service;

	public function __construct(UpdateRoleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(StoreRoleRequest $request, Role $role)
	{
		try{
			$this->service->execute($request, $role);
		} catch (\Exception $exception) {
			return redirect()->route('admin.user_managment.role.index')
											 ->withErrors(['errorDelete' => $exception->getMessage()]);
		}

		return redirect()->route('admin.user_managment.role.index')->with('message', 'Запись обновлена');
	}
}
