<ol class="breadcrumb">
	<li><a href="{{route('home.index')}}">Главная</a></li>
	<li><a href="{{route('blog.index')}}">Блог</a></li>
	<li
	@if ($parent_slug == '0')
		class="active">{{$active}}</li>
	@else
		><a href="{{ url("/blog/$parent_slug") }}">{{$parent_title}}</a></li>
		<li class="active">{{$active}}</li>
	@endif
</ol>