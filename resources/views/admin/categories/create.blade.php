@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Создание категории @endslot
			@slot('parent') /admin/category @endslot
			@slot('parent_title') Категории @endslot
			@slot('active') Создание категории @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.category.store')}}" method="POST">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.categories.partials.form')
			
		</form>
	</div>
</div>
		
@endsection
