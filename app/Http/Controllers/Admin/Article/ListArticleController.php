<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Article\ListArticleService;

class ListArticleController extends Controller
{
	protected $service;

	public function __construct(ListArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke()
	{
		return view('admin.articles.index', [
			'numeration' => 1,
			'articles' => $this->service->execute(10)
		]);
	}
}
