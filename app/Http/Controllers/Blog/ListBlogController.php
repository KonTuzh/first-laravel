<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Article\ListArticleService;

class ListBlogController extends Controller
{
	protected $service;

	public function __construct(ListArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke()
	{
		return view('blog.index', [
			'articles' => $this->service->execute(5)
		]);
	}

}
