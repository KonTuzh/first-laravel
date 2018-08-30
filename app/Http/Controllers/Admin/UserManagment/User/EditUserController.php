<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use App\Http\Controllers\Controller;
// use App\Services\User\EditUserService;

class EditUserController extends Controller
{
  // protected $service;

	// public function __construct(EditUserService $service)
	// {
	// 	$this->service = $service;
	// }

	public function __invoke(User $user)
	{
		return view('admin.user_managment.users.edit', [
			'user' => $user
		]);
	}
}
