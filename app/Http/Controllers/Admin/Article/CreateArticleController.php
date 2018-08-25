<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Services\Article\CreateArticleService;

class CreateArticleController extends Controller
{
	protected $service;

	public function __construct(CreateArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke()
	{
		return view('admin.articles.create', [
			'article'    => [],
			'categories' => $this->service->execute(),
			'delimiter'  => ''
		]);
	}
}
