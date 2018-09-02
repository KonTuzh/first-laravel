<?php

namespace App\Repositories;

use App\User;
use App\Http\Requests\StoreUserRequest;

interface UserRepositoryInterface
{
	public function count();

	public function paginate(int $count);

	public function store(User $user);

	public function attachRole(User $user, array $roles);

	public function update(User $user);

	public function delete(User $user);
}