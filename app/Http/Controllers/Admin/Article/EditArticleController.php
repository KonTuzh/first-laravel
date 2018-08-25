<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\Services\Article\EditArticleService;

class EditArticleController extends Controller
{
	protected $service;

	public function __construct(EditArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Article $article)
	{
		return view('admin.articles.edit', [
			'article'    => $article,
			'categories' => $this->service->execute(),
			'delimiter'  => ''
		]);
	}
}
