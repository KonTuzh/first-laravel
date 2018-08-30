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
		try{
			$this->service->execute($request, $article);
		} catch (\Exception $exception) {
			return redirect()->route('admin.article.index')->withErrors([
				'errorDelete' => $exception->getMessage()
			]);
		}

		return redirect()->route('admin.article.index')->with('message', 'Статья обновлена');
	}
}
