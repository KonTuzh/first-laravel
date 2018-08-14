@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<h1>Admin Dashboard</h1>
		<hr>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Категорий 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Статей 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Пользователей 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Сегодня 0</span></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<a href="#" class="btn btn-block btn-default">Добавить категорию</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Категория первая</h4>
				<p class="list-group-item-text">Кол-во статей</p>
			</a>
		</div>
		<div class="col-sm-6">
			<a href="#" class="btn btn-block btn-default">Добавить статью</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Статья первая</h4>
				<p class="list-group-item-text">Категория</p>
			</a>
		</div>
	</div>
</div>
		
@endsection