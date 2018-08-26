@extends('admin.layouts.default')

@section('styles')
	<link href="{{ asset('js/admin/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование статьи @endslot
			@slot('parent') /admin/article @endslot
			@slot('parent_title') Статьи @endslot
			@slot('active') Редактирование статьи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Category --}}
	<div class="row">
		<form action="{{route('admin.article.update', $article)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="id" value="{{$article->id}}">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.articles.partials.form')
			
			<input type="hidden" name="modified_by" value="{{Auth::id()}}">
		</form>
	</div>
</div>
		
@endsection

@section('scripts')
	<script src="{{ asset('js/admin/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('js/admin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
	<script src="{{ asset('js/admin/dropify.min.js') }}"></script>
@endsection