<?php

namespace App\Http\Controllers\Admin\Article;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteArticleController extends Controller
{
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Article $article)
	{
		echo 'Удаление не реализовано... переадресация через 5 секунд';

		sleep(5);

		return redirect()->route('admin.article.index');
	}
}
