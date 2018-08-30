<?php

namespace App\Services\Article;

use App\Article;
use App\Repositories\ArticleRepositoryInterface;
use App\Http\Controllers\Admin\Image\UploadImageController;

class StoreArticleService
{
	protected $repository, $article, $upload;

	public function __construct(ArticleRepositoryInterface $repository, Article $article, UploadImageController $upload)
	{
		$this->repository   = $repository;
		$this->upload       = $upload;
		$this->article      = $article;
	}

	public function execute($request)
	{
		$this->article->title              = $request->get('title');
		$this->article->slug               = $request->get('slug');
		$this->article->description_short  = $request->get('description_short');
		$this->article->description        = $request->get('description');
		$this->article->meta_title         = $request->get('meta_title');
		$this->article->meta_description   = $request->get('meta_description');
		$this->article->meta_keyword       = $request->get('meta_keyword');
		$this->article->published          = $request->get('published');
		$this->article->created_by         = $request->get('created_by');

		if ($request->has('thumbnail')) {
			try{
				$url = $this->upload->thumbnail($request->file('thumbnail'), $request->get('slug'));
				$this->article->thumbnail = $url;
			} catch (\Exception $exception) {
				throw new \Exception("Ошибка сохранения обложки");
			}
		}

		try{
			$result = $this->repository->store($this->article);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка записи статьи в базу данных");
		}

		if($request->input('categories')){
			$this->repository->attachCategories($this->article, $request->input('categories'));
		}

		return $result;
	}
}