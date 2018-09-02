<?php

namespace App\Services\Role;

use App\Role;
use App\Repositories\RoleRepositoryInterface;

class StoreRoleService
{
	protected $repository, $role;

	public function __construct(RoleRepositoryInterface $repository, Role $role)
	{
		$this->repository = $repository;
		$this->role       = $role;
	}

	public function execute($request)
	{
		$this->role->key  = $request->get('key');

		try{
			$result = $this->repository->store($this->role);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка записи в базу данных");
		}

		if($request->input('permissions')){
			$this->repository->attachPermissions($this->role, $request->input('permissions'));
		}

		return $result;
	}
}