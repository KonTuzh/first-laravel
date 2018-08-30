<?php

namespace App\Services\Article;

use App\Repositories\ArticleRepositoryInterface;
use App\Http\Controllers\Admin\Image\UploadImageController;
class UpdateArticleService
{
	protected $repository, $upload;

	public function __construct(ArticleRepositoryInterface $repository, UploadImageController $upload)
	{
		$this->repository = $repository;
		$this->upload     = $upload;
	}

	public function execute($request, $article)
	{
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
			try{
				$url = $this->upload->thumbnail($request->file('thumbnail'), $request->get('slug'));
				$article->thumbnail = $url;
			} catch (\Exception $exception) {
				throw new \Exception("Ошибка сохранения обложки");
			}
		}

		try{
			$result = $this->repository->update($article);
		} catch (\Exception $exception) {
			throw new \Exception("Ошибка обновления статьи в базе данных");
		}

		if($request->input('categories')){
			$this->repository->attachCategories($article, $request->input('categories'));
		}

		return $result;
	}
}