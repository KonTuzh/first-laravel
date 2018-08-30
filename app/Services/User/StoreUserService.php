<?php

namespace App\Services\User;

use App\User;
use App\Repositories\UserRepositoryInterface;

class StoreUserService
{
	protected $repository, $user;

	public function __construct(UserRepositoryInterface $repository, User $user)
	{
		$this->repository = $repository;
		$this->user       = $user;
	}

	public function execute($request)
	{
		$this->user->name      = $request->get('name');
		$this->user->email     = $request->get('email');
		$this->user->password  = bcrypt($request->get('password'));

		try{
			return $result = $this->repository->store($this->user);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка записи в базу данных");
		}
	}
}