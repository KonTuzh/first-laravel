<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		setlocale(LC_TIME, 'ru_RU.UTF-8');
		\Carbon\Carbon::setLocale('ru');
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$models = array(
			'Category',
			'Article',
			'User',
		);
			
		foreach ($models as $model) {
			$this->app->bind(
				"App\\Repositories\\{$model}RepositoryInterface", 
				"App\\Repositories\\{$model}Repository"
		);
		}
	}
}
