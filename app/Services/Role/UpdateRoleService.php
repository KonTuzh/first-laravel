<?php

namespace App\Services\Role;

use App\Repositories\RoleRepositoryInterface;

class UpdateRoleService
{
	protected $repository;

	public function __construct(RoleRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute($request, $role)
	{
		$role->key = $request->get('key');

		try{
			$result = $this->repository->update($role);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка обновления записи в базе данных");
		}

		if($request->input('permissions')){
			$this->repository->attachPermissions($role, $request->input('permissions'));
		}

		return $result;
	}
}