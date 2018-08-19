@extends('layouts.default')

@section('meta_title', $article->meta_title)
@section('meta_description', $article->meta_description)
@section('meta_keywords', $article->meta_keywords)
@section('meta_author', "KonTuzh")
@section('canonical', route('blog.show', $category->slug).'/'.$article->slug)
@section('body_class', "article")

@section('content')
	<div class="container">

		<div class="row">
			<h1>{{ $article->title }}</h1>
		</div>

		{{-- breadcrumbs --}}
		<div class="row">
			@component('blog.components.breadcrumb')
				@slot('parent_slug') {{$category->slug}} @endslot
				@slot('parent_title') {{$category->title}} @endslot
				@slot('active') {{$article->title}} @endslot
			@endcomponent
		</div>
		
	</div>

	<div class="container">
		<div class="row">
			<div class="content col-sm-12">
				{!! $article->description !!}
			</div>
		</div>		
	</div>
@endsection