<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CreateCategoryService;

class CreateCategoryController extends Controller
{
	protected $service;

	public function __construct(CreateCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke()
	{
		return view('admin.categories.create', [
			'category'   => [],
			'categories' => $this->service->execute(),
			'delimiter'  => ''
		]);
	}
}
