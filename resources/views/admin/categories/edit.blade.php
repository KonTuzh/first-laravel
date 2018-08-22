@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование категории @endslot
			@slot('parent') /admin/category @endslot
			@slot('parent_title') Категории @endslot
			@slot('active') Редактирование категории @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.category.update', $category)}}" method="POST">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="id" value="{{$category->id}}">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.categories.partials.form')
			
		</form>
	</div>
</div>
		
@endsection