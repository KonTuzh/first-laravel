<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateArticleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
		public function __invoke()
		{
			return view('admin.articles.create');
		}
		/**
		 * Store a newly created category in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			return 'Сохранение не реализовано...';
		}
}
