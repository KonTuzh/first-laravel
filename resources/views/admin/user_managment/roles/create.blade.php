@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Добавление роли @endslot
			@slot('parent') /admin/user-managment/role @endslot
			@slot('parent_title') Роли @endslot
			@slot('active') Добавление роли @endslot
		@endcomponent
		<hr>
	</div>

	<div class="row">
		<form action="{{route('admin.user_managment.role.store')}}" method="POST">
			{{ csrf_field() }}

			@include('admin.user_managment.roles.partials.form')
			
		</form>
	</div>
</div>
		
@endsection
