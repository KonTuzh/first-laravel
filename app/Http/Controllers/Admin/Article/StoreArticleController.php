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
		try{
			$this->service->execute($request);
		} catch (\Exception $exception) {
			return redirect()->route('admin.article.index')->withErrors([
				'errorDelete' => $exception->getMessage()
			]);
		}

		return redirect()->route('admin.article.index')->with('message', 'Статья добавлена');
	}
}
