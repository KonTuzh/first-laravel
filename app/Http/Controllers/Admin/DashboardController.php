<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\DashboardService;

class DashboardController extends Controller
{
	const PERMISSION = 'dashboard.index';
	protected $service;

	public function __construct(DashboardService $service)
	{
		$this->service = $service;
	}
	
	public function __invoke()
	{
		return view('admin.dashboard', [
			'count_categories' => $this->service->countCategories(),
			'count_articles'   => $this->service->countArticles(),
			'count_users'      => $this->service->countUsers(),
			'articles'         => $this->service->lastArticles(5),
			'categories'       => $this->service->lastCategories(5)
		]);
	}
}
