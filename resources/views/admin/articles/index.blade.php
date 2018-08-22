@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Список статей @endslot
			@slot('parent') {{0}} @endslot
			@slot('parent_title') {{0}} @endslot
			@slot('active') Список статей @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Create Article Btn --}}
	<div class="row">
		<a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Новая статья</a>
	</div>

	<hr>

	<div class="row">
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Заголовок</th>
				<th>URL</th>
				<th>Категории</th>
				<th>Публикация</th>
				<th>Дата</th>
				<th>Действие</th>
			</thead>
			<tbody>
				@forelse ($articles as $article)
					
					<tr>
						<td>{{ $numeration++ }}</td>
						<td>{{ $article->title }}</td>
						<td>{{ $article->slug }}</td>
						<td>{{ $article->categories()->pluck('title')->implode(', ') }}</td>
						<td>
							@if ($article->published == 0) Черновик	@endif
							@if ($article->published == 1) Опубликовано	@endif
						</td>
						<td>
							{{ $article->created_at }}
						</td>
						<td>
							<form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.article.destroy', $article)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								{{ csrf_field() }}
	
								<a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="mdi mdi-table-edit"></i></a>
	
								<button class="btn"><i class="mdi mdi-delete"></i></button>
							</form>
						</td>
					</tr>
				@empty
						<tr>
							<td class="text-center" colspan="3">
								<h2>Статей нет</h2>
							</td>
						</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						<ul class="pagination pull-right">
							{{ $articles->links() }}
						</ul>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
		
@endsection


