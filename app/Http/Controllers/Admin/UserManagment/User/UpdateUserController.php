<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use App\Http\Requests\EditUserRequest;
use App\Http\Controllers\Controller;
use App\Services\User\UpdateUserService;

class UpdateUserController extends Controller
{
	protected $service;

	public function __construct(UpdateUserService $service)
	{
		$this->service = $service;
	}

	public function __invoke(EditUserRequest $request, User $user)
	{
		try{
			$this->service->execute($request, $user);
		} catch (\Exception $exception) {
			return redirect()->route('admin.user_managment.user.index')
											 ->withErrors(['errorDelete' => $exception->getMessage()]);
		}

		return redirect()->route('admin.user_managment.user.index')->with('message', 'Запись обновлена');
	}
}
