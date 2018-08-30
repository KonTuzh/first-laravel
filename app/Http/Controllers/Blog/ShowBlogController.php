<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Blog\ShowBlogService;

class ShowBlogController extends Controller
{
	protected $service;

	public function __construct(ShowBlogService $service)
	{
		$this->service = $service;
	}

	public function __invoke(Request $request, $slug_category, $slug_article = null)
	{
		$user = $request->user();

		// dd($user->hasRole('admin'));

		if($slug_article == null){
			try {
				$data = $this->service->showArticlesCategory($slug_category, 10);
			}catch(\Exception $exception){
				return abort(404);
			}

			return view('blog.category', $data);
		}else{
			try {
				$data = $this->service->showArticle($slug_category, $slug_article);
			}catch(\Exception $exception){
				return abort(404);
			}
			
			return view('blog.article', $data);
		}

		
	}
}
