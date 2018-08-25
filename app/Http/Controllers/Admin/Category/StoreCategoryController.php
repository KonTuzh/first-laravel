<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\Controller;
use App\Services\Category\StoreCategoryService;

class StoreCategoryController extends Controller
{
	protected $service;

	public function __construct(StoreCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke(StoreCategoryRequest $request)
	{
		$this->service->execute($request);

		return redirect()->route('admin.category.index');
	}
}
