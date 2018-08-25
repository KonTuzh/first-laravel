<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\Controller;
use App\Services\Category\UpdateCategoryService;

class UpdateCategoryController extends Controller
{
	protected $service;

	public function __construct(UpdateCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke(StoreCategoryRequest $request, Category $category)
	{
		$this->service->execute($request, $category);

		return redirect()->route('admin.category.index');
	}
}
