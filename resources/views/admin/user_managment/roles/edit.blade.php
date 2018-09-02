@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование роли @endslot
			@slot('parent') /admin/user-managment/role @endslot
			@slot('parent_title') Роли @endslot
			@slot('active') Редактирование роли @endslot
		@endcomponent
		<hr>
	</div>

	<div class="row">
		<form action="{{route('admin.user_managment.role.update', $role)}}" method="POST">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="id" value="{{$role->id}}">
			{{ csrf_field() }}

			@include('admin.user_managment.roles.partials.form')
			
		</form>
	</div>
</div>
		
@endsection
