<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Category\ListCategoryService;

class ListCategoryController extends Controller
{
	protected $service;

	public function __construct(ListCategoryService $service)
	{
		$this->service = $service;
	}

	public function __invoke()
	{
		return view('admin.categories.index', [
			'numeration' => 1,
			'categories' => $this->service->execute(10)
		]);
	}
}
