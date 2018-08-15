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
		if($slug_article == null){
			return view('blog.category',[
				'category' => $slug_category
			]);
		}
		
		return view('blog.article', [
			'category' => $slug_category,
			'article' => $slug_article
		]);
	}
}
