@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Создание категории @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Категории @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.category.store')}}" class="form-horizontal" method="POST">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.categories.partials.form')
			
		</form>
	</div>
</div>
		
@endsection