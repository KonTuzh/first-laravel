<?php

namespace App\Services\User;

use App\Repositories\UserRepositoryInterface;

class EditUserService
{
	protected $repository;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function execute()
	{
		//
	}
}