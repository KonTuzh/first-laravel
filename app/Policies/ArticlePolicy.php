<?php

namespace App\Policies;

use App\User;
use App\Article;
use App\Http\Controllers\Admin\Article\ListArticleController;
use App\Http\Controllers\Admin\Article\CreateArticleController;
use App\Http\Controllers\Admin\Article\EditArticleController;
use App\Http\Controllers\Admin\Article\UpdateArticleController;
use App\Http\Controllers\Admin\Article\DeleteArticleController;
use Illuminate\Auth\Access\HandlesAuthorization;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ArticlePolicy extends BasePolicy
{
	use HandlesAuthorization;

	public function index(User $user)
	{
		/** @var User $user */
		if (!$user->hasPermission(ListArticleController::PERMISSION)){
			return false;
		}

		return true;
	}
	/**
	 * Determine whether the user can view articles.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Article  $article
	 * @return mixed
	 */
	public function view(User $user, Article $article)
	{
		/** @var User $user */
		if (!$user->hasPermission(EditArticleController::PERMISSION)){
			return false;
		}

		if ($user->hasRole('writer') && $user->id !== $article->created_by) {
			return false;
		}

		return true;
	}

	/**
	 * Determine whether the user can create articles.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		/** @var User $user */
		if (!$user->hasPermission(CreateArticleController::PERMISSION)){
			return false;
		}

		return true;
	}

	/**
	 * Determine whether the user can update the article.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Article  $article
	 * @return mixed
	 */
	public function update(User $user, Article $article)
	{
		/** @var User $user */
		if (!$user->hasPermission(UpdateArticleController::PERMISSION)){
			// return false;
			abort(404);
		}

		if ($user->hasRole('writer') && $user->id !== $article->created_by) {
			return false;
		}

		return true;
	}

	/**
	 * Determine whether the user can delete the article.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Article  $article
	 * @return mixed
	 */
	public function delete(User $user)
	{
		/** @var User $user */
		if (!$user->hasPermission(DeleteArticleController::PERMISSION)){
			return false;
		}

		return true;
	}
}
