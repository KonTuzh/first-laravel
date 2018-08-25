<?php

namespace App\Repositories;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;

interface CategoryRepositoryInterface
{
	public function all();

	public function paginate(int $count);

	public function lastCategories(int $count);

	public function childrenCategories();

	public function store(StoreCategoryRequest $request);

	public function update(StoreCategoryRequest $request, Category $category);

	public function delete(Category $category);
}