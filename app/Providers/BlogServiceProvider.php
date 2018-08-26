<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->topMenu();
		$this->blogAside();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	
	/**
	 * Top menu for blog
	 */
	public function topMenu()
	{
		View::composer('layouts.header', function ($view) {
			$view->with('categories', [
				[
					'slug'  => '#',
					'title' => 'Велосипеды'
				],
				[
					'slug'  => '#',
					'title' => 'Аксессуары'
				],
				[
					'slug'  => 'blog',
					'title' => 'Блог'
				],
				[
					'slug'  => '#',
					'title' => 'Контакты'
				],
			]);
		});
	}
	
	/**
	 * Aside for blog
	 */
	public function blogAside()
	{
		View::composer('blog.layouts.aside', function ($view) {
			$view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
		});
	}
}
