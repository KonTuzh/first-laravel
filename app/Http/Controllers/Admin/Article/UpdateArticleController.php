<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\Services\Article\UpdateArticleService;
use App\Http\Requests\StoreArticleRequest;

class UpdateArticleController extends Controller
{
  protected $service;

	public function __construct(UpdateArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(StoreArticleRequest $request, Article $article)
	{
		$this->service->execute($request, $article);

		return redirect()->route('admin.article.index');
	}
}
