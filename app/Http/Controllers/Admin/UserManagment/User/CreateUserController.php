<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\User\EditUserService;

class CreateUserController extends Controller
{
	protected $service;

	public function __construct(EditUserService $service)
	{
		$this->service = $service;
	}
	
  public function __invoke()
	{
		return view('admin.user_managment.users.create', [
			'user'  => [],
			'roles' => $this->service->execute()
		]);
	}
}
