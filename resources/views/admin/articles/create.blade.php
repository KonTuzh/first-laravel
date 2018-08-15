@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Добавление статьи @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Статьи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.article.store')}}" class="form-horizontal" method="POST">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.articles.partials.form')
			
			<input type="hidden" name="created_by" value="{{Auth::id()}}">
		</form>
	</div>
</div>
		
@endsection