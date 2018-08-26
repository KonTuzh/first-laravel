@foreach ($categories as $category)
	
@if ($category->articles()->count() > 0)

	@if ($category->children->where('published', 1)->count())
		<li>
			<a href="{{ url("/blog/$category->slug") }}">
				{{$category->title}} <i class="mdi mdi-chevron-right"></i>
			</a>
			<ul class="aside-categories">
				@include('blog.layouts.aside_categories', ['categories' => $category->children])
			</ul>
	@else
	<li>
		<a href="{{ url("/blog/$category->slug") }}">{{$category->title}} <i class="mdi mdi-chevron-right"></i></a>
	@endif
	</li>
	
@endif
	
@endforeach