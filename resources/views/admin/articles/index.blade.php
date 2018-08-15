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
				<th>URL</th>
				<th>Публикация</th>
				<th>Действие</th>
			</thead>
			<tbody>
				@forelse ($articles as $article)
					<tr>
						<td>{{ $article->title }}</td>
						<td>{{ $article->slug }}</td>
						<td>{{ $article->published }}</td>
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


