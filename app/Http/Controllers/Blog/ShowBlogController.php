<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowBlogController extends Controller
{
	public function __invoke($slug_category, $slug_article = null)
	{
		$category = Category::where('slug', $slug_category)->first();

		if($slug_article == null){
			return view('blog.category',[
				'category' => $category,
				'articles' => $category->articles()->published(1)->paginate(10)
			]);
		}

		$article = Article::where('slug', $slug_article)->first();

		if(!$article){
			return abort(404);
		}
		
		return view('blog.article', [
			'category' => $category,
			'article'  => $article
		]);
	}
}
