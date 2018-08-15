@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование категории @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Категории @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.category.update', $category)}}" class="form-horizontal" method="POST">
			<input type="hidden" name="_method" value="put">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.categories.partials.form')
			
		</form>
	</div>
</div>
		
@endsection