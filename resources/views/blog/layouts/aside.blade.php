<aside class="col-sm-3">

	<div class="aside-item">
		<a href="#"><img class="img-responsive" src="/images/banners/banner300x600.jpg" alt=""></a>
	</div>

	<div class="aside-item p-20">
		<div class="aside-heading">Категории</div>
		<ul class="aside-categories">
			@include('blog.layouts.aside_categories', ['categories' => $categories])
		</ul>
	</div>

</aside>