@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Список категорий @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Категории @endslot
		@endcomponent
		<hr>
	</div>

	{{-- <hr> --}}

	{{-- Create Category Btn --}}
	<div class="row">
		<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Создать категорию</a>
	</div>

	<hr>

	<div class="row">
		<table class="table table-striped">
			<thead>
				<th>Наименование категории</th>
				<th>Публикация</th>
				<th>Действие</th>
			</thead>
			<tbody>
				<tr>
					<td>Категория 1</td>
					<td>1</td>
					<td>
						<a href="#"><i class="mdi mdi-table-edit"></i></a>
						<a href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
				<tr>
					<td>Категория 2</td>
					<td>1</td>
					<td>
						<a href="#"><i class="mdi mdi-table-edit"></i></a>
						<a href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
				<tr>
					<td>Категория 3</td>
					<td>1</td>
					<td>
						<a href="#"><i class="mdi mdi-table-edit"></i></a>
						<a href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
		
@endsection