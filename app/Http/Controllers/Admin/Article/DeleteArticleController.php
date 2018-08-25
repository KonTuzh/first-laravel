<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Article\DeleteArticleService;

class DeleteArticleController extends Controller
{
	protected $service;

	public function __construct(DeleteArticleService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Article $article)
	{
		try{
			$this->service->execute($article);
		} catch (\Exception $exception) {
			return redirect()->route('admin.article.index')->withErrors([
				'errorDelete' => 'Ошибка удаления статьи'
			]);
		}

		return redirect()->route('admin.article.index');
	}
}
