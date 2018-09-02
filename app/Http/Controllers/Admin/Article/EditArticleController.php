<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Article\EditArticleService;

class EditArticleController extends Controller
{
	const PERMISSION = 'article.view';
	protected $service;

	public function __construct(EditArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Article $article, Request $request)
	{
		try{
			$this->authorize('view', $article);
		}catch(\Exception $e){
			return redirect()->route('admin.article.index')
											 ->withErrors(['errorDelete' => $e->getMessage()
			]);
		}
		
		return view('admin.articles.edit', [
			'article'    => $article,
			'categories' => $this->service->execute(),
			'delimiter'  => ''
		]);
	}
}
