<?php

namespace App\Repositories;

use App\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Http\Requests\StoreCategoryRequest;

class CategoryRepository implements CategoryRepositoryInterface
{
	public function all()
	{
		return Category::all();
	}

	public function paginate(int $count)
	{
		return Category::paginate($count);
	}

	public function lastCategories(int $count)
	{
		return Category::orderBy('created_at', 'desc')->take($count)->get();
	}

	public function childrenCategories()
	{
		return Category::with('children')->where('parent_id', '0')->get();
	}

	public function store(StoreCategoryRequest $request)
	{
		return Category::create($request->all());
	}

	public function update(StoreCategoryRequest $request, Category $category)
	{
		return $category->update($request->except('id'));
	}

	public function delete(Category $category)
	{
		return $category->delete();
	}
}