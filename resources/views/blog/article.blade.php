@extends('layouts.default')

@section('meta_title', $article->meta_title)
@section('meta_description', $article->meta_description)
@section('meta_keywords', $article->meta_keywords)
@section('meta_author', "KonTuzh")
@section('canonical', route('blog.show', $category->slug).'/'.$article->slug)
@section('body_class', "blog")

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{ $article->title }}</h1>
				{{-- breadcrumbs --}}
				@component('blog.components.breadcrumb')
				@slot('parent_slug') {{$category->slug}} @endslot
				@slot('parent_title') {{$category->title}} @endslot
				@slot('active') {{$article->title}} @endslot
				@endcomponent
			</div>
		</div>
	</div>

	<div class="container-fluid mt-30">
		<div class="row">
			<div class="article col-sm-9 mb-30">
				<img class="article-thumbnail img-responsive" src="{{ $article->thumbnail }}" alt="{{$article->meta_title}}" />
				<div class="article-meta mt-10">
					<time class="article-meta-item published" pubdate date="{{$article->created_at->format('m/d/y') }}">
						<span itemprop="datePublished"><i class="mdi mdi-clock"></i> {{{$article->created_at->format('d.m.Y')}}}</span>
					</time>
					<div class="article-meta-item viewed"><i class="mdi mdi-eye"></i> {{ $article->viewed }}</div>
				</div>
				<main class="content">{!! $article->description !!}</main>
				<ul class="tag-list">
					<li class="cat">
						<a href="/blog/{{$category->slug}}"><i class="mdi mdi-folder-outline"></i> {{$category->title}}</a>
					</li>
				</ul>
				<div id="comments-div" class="comments-div">
					<div class="comments-div-header">
						<noindex>Комментарии</noindex> <span class="comments-div-header-count"><i class="mdi mdi-comment-multiple-outline"></i> 0</span>
					</div>
					<div class="comments-div-form">
						Comments Form
					</div>
				</div>
			</div>

			{{-- Blog Aside --}}
			@include('blog.layouts.aside')

		</div>		
	</div>
	
	{{-- Blog Newsletter --}}
	@include('blog.layouts.newsletter')

@endsection