<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use App\Http\Controllers\Controller;
use App\Services\User\DeleteUserService;

class DeleteUserController extends Controller
{
  protected $service;

	public function __construct(DeleteUserService $service)
	{
		$this->service = $service;
	}

	public function __invoke(User $user)
	{
		try{
			$this->service->execute($user);
		} catch (\Exception $exception) {
			return redirect()->route('admin.user_managment.user.index')->withErrors([
				'errorDelete' => 'Ошибка удаления'
			]);
		}

		return back()->with('message', 'Пользователь удален');
	}
}
