@extends('layouts.default')

@section('meta_title', $category->title)
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('blog.show', $category->slug))
@section('body_class', "category")

@section('content')
	<div class="container">

		<div class="row">
			<h1>{{ $category->title }}</h1>
		</div>

		{{-- breadcrumbs --}}
		<div class="row">
			@component('blog.components.breadcrumb')
				@slot('parent_slug') {{0}} @endslot
				@slot('parent_title') {{0}} @endslot
				@slot('active') {{$category->title}} @endslot
			@endcomponent
		</div>
		
	</div>

	<div class="container">

		@forelse ($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					<h2><a href="{{ route('blog.show', $category->slug).'/'.$article->slug }}">{{ $article->title }}</a></h2>
					<p>{!! $article->description_short !!}</p>
				</div>
			</div>
		@empty
			<h2 class="text-center">Пусто</h2>
		@endforelse

		{{ $articles->links() }}

	</div>
@endsection