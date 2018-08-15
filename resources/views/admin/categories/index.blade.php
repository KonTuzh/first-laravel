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

	{{-- Create Category Btn --}}
	<div class="row">
		<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Создать категорию</a>
	</div>

	<hr>

	<div class="row">
		<table class="table table-striped">
			<thead>
				<th>Наименование категории</th>
				<th>URL</th>
				<th>Публикация</th>
				<th>Действие</th>
			</thead>
			<tbody>
				@forelse ($categories as $category)
					<tr>
						<td>{{ $category->title }}</td>
						<td>{{ $category->slug }}</td>
						<td>{{ $category->published }}</td>
						<td>
							<form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.category.destroy', $category)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								{{ csrf_field() }}
	
								<a class="btn btn-default" href="{{route('admin.category.edit', $category)}}"><i class="mdi mdi-table-edit"></i></a>
	
								<button class="btn"><i class="mdi mdi-delete"></i></button>
							</form>
						</td>
					</tr>
				@empty
						<tr>
							<td class="text-center" colspan="3">
								<h2>Категорий нет</h2>
							</td>
						</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						<ul class="pagination pull-right">
							{{ $categories->links() }}
						</ul>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
		
@endsection