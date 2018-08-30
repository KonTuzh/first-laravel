<?php

namespace App\Http\Controllers\Admin\UserManagment\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateUserController extends Controller
{
  public function __invoke()
	{
		return view('admin.user_managment.users.create', [
			'user' => []
		]);
	}
}
