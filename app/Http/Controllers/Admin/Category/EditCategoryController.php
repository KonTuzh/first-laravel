<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\EditCategoryRequest;
use App\Http\Controllers\Controller;
use App\Services\Category\EditCategoryService;

class EditCategoryController extends Controller
{
	protected $service;

	public function __construct(EditCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Category $category)
	{
		return view('admin.categories.edit', [
			'category'   => $category,
			'categories' => $this->service->execute(),
			'delimiter'  => ''
		]);
	}
}
