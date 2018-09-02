<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		'App\Model' => 'App\Policies\ModelPolicy',
		'App\Article' => 'App\Policies\ArticlePolicy',
	];

	/**
	 * Register any authentication / authorization services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerPolicies();

		Gate::define('list-article', '\App\Policies\ArticlePolicy@index');
		Gate::define('create-article', '\App\Policies\ArticlePolicy@create');
		Gate::define('isAdmin', '\App\Policies\ArticlePolicy@before');
	}
}
