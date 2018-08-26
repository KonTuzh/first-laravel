@foreach ($categories as $category)
		<li class="dropdown">
			<a href="{{ url("/" . $category['slug']) }}">{{$category['title']}}</a>
		</li>
@endforeach