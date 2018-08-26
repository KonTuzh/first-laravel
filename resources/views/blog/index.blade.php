@extends('layouts.default')

@section('meta_title', "Блог - интернет-магазин CycleShop")
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('blog.index'))
@section('body_class', "blog")

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1>Велосипедный блог</h1>
				{{-- breadcrumbs --}}
				<ol class="breadcrumb">
					<li><a href="{{route('home.index')}}">Главная</a></li>
					<li class="active">Блог</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="container-fluid mt-30">
		<div class="row">
			<div class="col-sm-9">
				<div class="row articles">
					@forelse ($articles as $article)
						<a href="{{route('blog.index')}}/{{ $article->categories()->pluck('slug')->implode('/') }}/{{ $article->slug }}" class="post-link col-md-4 mb-30">
							<span class="thumbnail" style="background-image: url({{ $article->thumbnail }})"></span>
							<h3 class="title">{{ $article->title }}</h3>
							<p class="description_short">{!! $article->description_short !!}</p>
							<p class="info flex">
								<span class="created_at"><i class="mdi mdi-clock"></i> {{ $article->created_at->diffForHumans() }}</span>
								<span class="viewed"><i class="mdi mdi-eye"></i> {{ (int) $article->viewed }}</span>
							</p>
						</a>
					@empty
						<h2 class="text-center">Пусто</h2>
					@endforelse
					{{ $articles->links() }}
				</div>
			</div>

			{{-- Blog Aside --}}
			@include('blog.layouts.aside')

		</div>
	</div>

	{{-- Blog Newsletter --}}
	@include('blog.layouts.newsletter')

@endsection