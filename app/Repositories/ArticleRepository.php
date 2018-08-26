<?php

namespace App\Repositories;

use App\Article;
use App\Repositories\ArticleRepositoryInterface;
use App\Http\Requests\StoreArticleRequest;

class ArticleRepository implements ArticleRepositoryInterface
{
	public function count()
	{
		return Article::count();
	}

	public function all()
	{
		return Article::all();
	}

	public function showOne(string $slug)
	{
		return Article::where('slug', $slug)->first();
	}

	public function paginate(int $count)
	{
		return Article::orderBy('created_at', 'desc')->paginate($count);
	}

	public function lastArticles(int $count)
	{
		return Article::orderBy('created_at', 'desc')->take($count)->get();
	}

	public function publishedArticles(int $count)
	{
		return Article::where('published', 1)->orderBy('created_at', 'desc')->paginate($count);
	}

	public function childrenArticles()
	{
		return Article::with('children')->where('parent_id', '0')->get();
	}

	public function store(StoreArticleRequest $request)
	{
		// $article = Article::create($request->all());

		$article = new Article();

		$article->title             = $request->get('title');
		$article->slug              = $request->get('slug');
		$article->description_short = $request->get('description_short');
		$article->description       = $request->get('description');
		$article->meta_title        = $request->get('meta_title');
		$article->meta_description  = $request->get('meta_description');
		$article->meta_keyword      = $request->get('meta_keyword');
		$article->published         = $request->get('published');
		$article->created_by        = $request->get('created_by');

		if ($request->has('thumbnail')) {
			$article->thumbnail = $this->thumbnailUpload($request);
		}

		$article->save();

		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return $article;
	}

	public function update(StoreArticleRequest $request, Article $article)
	{
		// $article->update($request->except('id'));
		$article->title             = $request->get('title');
		$article->slug              = $request->get('slug');
		$article->description_short = $request->get('description_short');
		$article->description       = $request->get('description');
		$article->meta_title        = $request->get('meta_title');
		$article->meta_description  = $request->get('meta_description');
		$article->meta_keyword      = $request->get('meta_keyword');
		$article->published         = $request->get('published');
		$article->modified_by       = $request->get('modified_by');

		if ($request->has('thumbnail')) {
			$article->thumbnail = $this->thumbnailUpload($request);
		}

		$article->save();

		$article->categories()->detach();

		if($request->input('categories')):
			$article->categories()->attach($request->input('categories'));
		endif;

		return $article;
	}

	public function updateViewed(Article $article)
	{
		$article->save();
	}

	public function delete(Article $article)
	{
		$article->categories()->detach();
		
		return $article->delete();
	}

	protected function thumbnailUpload(StoreArticleRequest $request)
	{
		$file = \Image::make($request->file('thumbnail'));
		$path = storage_path('app/public/images/blog/'.$request->get('slug').'.jpg');

		$file->resize(1000, null, function ($constraint) {
			$constraint->aspectRatio();
		});
		
		$file->save($path);

		return $image = \Storage::disk('public')->url('images/blog/'.$request->get('slug').'.jpg');
	}
}