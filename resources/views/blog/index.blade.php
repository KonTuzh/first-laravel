@extends('layouts.default')

@section('meta_title', "Блог - интернет-магазин CycleShop")
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('blog.index'))
@section('body_class', "blog")

@section('content')
	<div class="container">

		<div class="row">
			<h1>Блог</h1>
		</div>

		{{-- breadcrumbs --}}
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{route('home.index')}}"><i class="mdi mdi-home"></i></a></li>
				<li class="active">Блог</li>
			</ol>
		</div>
	</div>

	<div class="container">

		@forelse ($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					<h2><a href="{{route('blog.index')}}/{{ $article->categories()->pluck('slug')->implode('/') }}/{{ $article->slug }}">{{ $article->title }}</a></h2>
					<p>{!! $article->description_short !!}</p>
				</div>
			</div>
		@empty
			<h2 class="text-center">Пусто</h2>
		@endforelse

		{{ $articles->links() }}

	</div>
@endsection