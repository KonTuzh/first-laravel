<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\Http\Controllers\Controller;
use App\Services\User\ListUserService;

class ListUserController extends Controller
{
	protected $service;

	public function __construct(ListUserService $service)
	{
		$this->service = $service;
	}

  public function __invoke()
	{
		return view('admin.user_managment.users.index', [
			'numeration' => 1,
			'users'      => $this->service->execute(10)
		]);
	}
}
