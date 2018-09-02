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

	@can('create', \App\Article::class)
		<div class="row">
			<a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Новая статья</a>
		</div>
		<hr>
	@endcan

	<div class="row">

		@if ($errors->has('errorDelete'))
			<div class="alert alert-danger" role="alert">{{ $errors->first('errorDelete') }}</div>
		@endif

		@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
		@endif

		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Заголовок / URL</th>
				<th>Статус</th>
				<th>Категории</th>
				<th>Публикация</th>
				<th>Автор</th>
				<th>Дата</th>
				@can('delete', \App\Article::class)<th>Действие</th>@endcan
			</thead>
			<tbody>
				@forelse ($articles as $article)
					@if (!Auth::user()->hasRole('writer') || Auth::user()->id == $article->created_by)
						<tr>
							<td>{{ $numeration++ }}</td>
							<td><a href="{{route('admin.article.edit', $article)}}">{{ $article->title }}</a> <p class="block">/{{ $article->slug }}</p></td>
							@if ($article->status == 'added') <td class="text-secondary">Добавлена</td> @endif
							@if ($article->status == 'checked') <td class="text-success">Принята</td> @endif
							@if ($article->status == 'rejected') <td class="text-danger">Отклонена</td> @endif
							<td>{{ $article->categories()->pluck('title')->implode(', ') }}</td>
							<td>
								@if ($article->published == 0) Черновик	@endif
								@if ($article->published == 1) Опубликовано	@endif
							</td>
							<td>{{ $article->user()->pluck('name')->implode(', ') }}</td>
							<td>{{ $article->created_at }}</td>
							@can('delete', \App\Article::class)
								<td>
									<form class="flex" onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.article.destroy', $article)}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										{{ csrf_field() }}

										<a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="mdi mdi-table-edit"></i></a>

										<button class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
									</form>
								</td>
							@endcan
						</tr>
					@endif
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


