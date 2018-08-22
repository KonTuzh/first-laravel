<h1>{{$title}}</h1>
<ol class="breadcrumb">
	<li><a href="{{route('admin.index')}}">Dashboard</a></li>
	<li
	@if ($parent == '0')
		class="active">{{$active}}</li>
	@else
	><a href="{{ $parent }}">{{$parent_title}}</a></li>
		<li class="active">{{$active}}</li>
	@endif
</ol>