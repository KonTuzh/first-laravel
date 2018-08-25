<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Controllers\Controller;
use App\Services\Article\StoreArticleService;

class StoreArticleController extends Controller
{
  protected $service;

	public function __construct(StoreArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(StoreArticleRequest $request)
	{
		$this->service->execute($request);

		return redirect()->route('admin.article.index');
	}
}
