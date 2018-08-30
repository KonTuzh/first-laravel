@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование пользователя @endslot
			@slot('parent') /admin/user-managment/user @endslot
			@slot('parent_title') Пользователи @endslot
			@slot('active') Редактирование пользователя @endslot
		@endcomponent
		<hr>
	</div>

	<div class="row">
		<form action="{{route('admin.user_managment.user.update', $user)}}" method="POST">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="id" value="{{$user->id}}">
			{{ csrf_field() }}

			@include('admin.user_managment.users.partials.form')
			
		</form>
	</div>
</div>
		
@endsection
