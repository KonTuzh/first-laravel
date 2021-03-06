@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<h1>Dashboard</h1>
		<hr>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><a class="label label-primary" href="{{route('admin.category.index')}}">Категорий: {{ $count_categories }}</a></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><a class="label label-primary" href="{{route('admin.article.index')}}">Статей: {{ $count_articles }}</a></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Пользователей: {{ $count_users }}</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Посещений: 0</span></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<a href="{{route('admin.category.create')}}" class="btn btn-block btn-default">Добавить категорию</a>
			@forelse ($categories as $category)
				<a href="{{route('admin.category.edit', $category)}}" class="list-group-item">
					<h4 class="list-group-item-heading">{{ $category->title }}</h4>
					<p class="list-group-item-text"><i class="mdi mdi-file-outline"></i> Статей: {{ $category->articles()->count() }}</p>
				</a>
			@empty
				<p class="text-center" colspan="3">Пусто</p>
			@endforelse
		</div>
		<div class="col-sm-6">
			<a href="{{route('admin.article.create')}}" class="btn btn-block btn-default">Добавить статью</a>
			@forelse ($articles as $article)
				<a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
					<h4 class="list-group-item-heading">{{ $article->title }}</h4>
					<p class="list-group-item-text"><i class="mdi mdi-folder-outline"></i> {{ $article->categories()->pluck('title')->implode(', ') }}</p>
				</a>
			@empty
				<p class="text-center" colspan="3">Пусто</p>
			@endforelse
		</div>
	</div>
</div>
		
@endsection