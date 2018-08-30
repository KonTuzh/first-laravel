<?php

namespace App\Repositories;

use App\User;
use App\Repositories\UserRepositoryInterface;
use App\Http\Requests\StoreUserRequest;

class UserRepository implements UserRepositoryInterface
{
	public function count()
	{
		return User::count();
	}

	public function paginate(int $count)
	{
		return User::orderBy('created_at', 'desc')->paginate($count);
	}

	public function store(User $user)
	{
		// throw new \Exception("не буду делать запись в базу данных");
		return $user->save();
	}

	public function update(User $user)
	{
		return $user->save();
	}

	public function delete(User $user)
	{
		return $user->delete();
	}
}