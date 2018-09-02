<?php

namespace App\Services\User;

use App\Repositories\UserRepositoryInterface;

class UpdateUserService
{
	protected $repository;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request, $user)
	{
		$user->name   = $request->get('name');
		$user->email  = $request->get('email');

		$request->get('password') == null ?: $user->password = bcrypt($request->get('password'));

		try{
			$result = $this->repository->update($user);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка обновления записи в базе данных");
		}

		if($request->input('roles')){
			$this->repository->attachRole($user, $request->input('roles'));
		}

		return $result;
	}
}