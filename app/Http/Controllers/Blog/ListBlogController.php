<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListBlogController extends Controller
{
	public function __invoke()
	{
		return view('blog.index', [
			'articles' => Article::orderByCreated()->paginate(10)
		]);
	}

}
