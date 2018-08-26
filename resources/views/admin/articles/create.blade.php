@extends('admin.layouts.default')

@section('styles')
	<link href="{{ asset('js/admin/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin/dropify.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Добавление статьи @endslot
			@slot('parent') /admin/article @endslot
			@slot('parent_title') Статьи @endslot
			@slot('active') Добавление статьи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Form Create Article --}}
	<div class="row">
		<form action="{{route('admin.article.store')}}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.articles.partials.form')
			
			<input type="hidden" name="created_by" value="{{Auth::id()}}">
		</form>
	</div>
</div>
		
@endsection

@section('scripts')
	<script src="{{ asset('js/admin/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('js/admin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
	<script src="{{ asset('js/admin/dropify.min.js') }}"></script>
@endsection