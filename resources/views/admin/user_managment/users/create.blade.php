@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Добавление пользователя @endslot
			@slot('parent') /admin/user-managment/user @endslot
			@slot('parent_title') Пользователи @endslot
			@slot('active') Добавление пользователя @endslot
		@endcomponent
		<hr>
	</div>

	<div class="row">
		<form action="{{route('admin.user_managment.user.store')}}" method="POST">
			{{ csrf_field() }}

			@include('admin.user_managment.users.partials.form')
			
		</form>
	</div>
</div>
		
@endsection
