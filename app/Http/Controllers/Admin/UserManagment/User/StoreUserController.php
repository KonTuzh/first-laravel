<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Services\User\StoreUserService;

class StoreUserController extends Controller
{
	protected $service;

	public function __construct(StoreUserService $service)
	{
		$this->service = $service;
	}

  public function __invoke(StoreUserRequest $request)
	{
		try{
			$this->service->execute($request);
		} catch (\Exception $exception) {
			return redirect()->route('admin.user_managment.user.index')->withErrors([
				'errorDelete' => $exception->getMessage()
			]);
		}

		return redirect()->route('admin.user_managment.user.index')->with('message', 'Пользователь добавлен');
	}
}
