@foreach ($categories as $category)
	
	@if ($category->children->where('published', 1)->count())
		<li class="dropdown">
			<a class="dropdown-toggle" href="{{ url("/blog/$category->slug") }}">
				{{$category->title}} <i class="mdi mdi-chevron-down"></i>
			</a>
			<ul class="dropdown-menu">
				@include('layouts.top_menu', ['categories' => $category->children])
			</ul>
	@else
		<li class="dropdown">
			<a href="{{ url("/blog/$category->slug") }}">{{$category->title}}</a>
	@endif
		</li>
@endforeach