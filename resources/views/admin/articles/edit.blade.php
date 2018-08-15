@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование статьи @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Статьи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.article.update', $article)}}" class="form-horizontal" method="POST">
			<input type="hidden" name="_method" value="put">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.articles.partials.form')
			
			<input type="hidden" name="modified_by" value="{{Auth::id()}}">
		</form>
	</div>
</div>
		
@endsection