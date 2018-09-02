<?php namespace App\Policies;

use App\User;

abstract class BasePolicy
{
	public function before(User $user)
	{
		if ($user->isAdmin()) {
			return true;
		}
	}
}
