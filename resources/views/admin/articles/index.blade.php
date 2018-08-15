@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Список статей @endslot
			@slot('parent') Dashboard @endslot
			@slot('active') Статьи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- <hr> --}}

	{{-- Create Article Btn --}}
	<div class="row">
		<a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Добавить статью</a>
	</div>

	<hr>

	<div class="row">
		<table class="table table-striped">
			<thead>
				<th>Наименование статьи</th>
				<th>Публикация</th>
				<th>Действие</th>
			</thead>
			<tbody>
				<tr>
					<td>Статья 1</td>
					<td>1</td>
					<td>
						<a class="btn btn-default" href="#"><i class="mdi mdi-table-edit"></i></a>
						<a class="btn btn-default" href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
				<tr>
					<td>Статья 2</td>
					<td>1</td>
					<td>
						<a class="btn btn-default" href="#"><i class="mdi mdi-table-edit"></i></a>
						<a class="btn btn-default" href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
				<tr>
					<td>Статья 3</td>
					<td>1</td>
					<td>
						<a class="btn btn-default" href="#"><i class="mdi mdi-table-edit"></i></a>
						<a class="btn btn-default" href="#"><i class="mdi mdi-delete"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
		
@endsection


