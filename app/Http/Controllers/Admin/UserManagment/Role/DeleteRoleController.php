<?php

namespace App\Http\Controllers\Admin\UserManagment\Role;

use App\Role;
use App\Http\Controllers\Controller;
use App\Services\Role\DeleteRoleService;

class DeleteRoleController extends Controller
{
  protected $service;

	public function __construct(DeleteRoleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Role $role)
	{
		try{
			$this->service->execute($role);
		} catch (\Exception $exception) {
			return redirect()->route('admin.user_managment.role.index')
											 ->withErrors(['errorDelete' => 'Ошибка удаления']);
		}

		return back()->with('message', 'Роль удалена');
	}
}
