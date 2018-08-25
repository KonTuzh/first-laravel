<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Controllers\Controller;
use App\Services\Category\DeleteCategoryService;

class DeleteCategoryController extends Controller
{
	protected $service;

	public function __construct(DeleteCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Category $category)
	{
		try{
			$this->service->execute($category);
		} catch (\Exception $exception) {
			return redirect()->route('admin.category.index')->withErrors([
				'errorDelete' => 'Ошибка удаления категории'
			]);
		}

		return redirect()->route('admin.category.index');
	}
}
