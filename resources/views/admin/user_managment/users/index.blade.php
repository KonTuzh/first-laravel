@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Список пользователей @endslot
			@slot('parent') {{0}} @endslot
			@slot('parent_title') {{0}} @endslot
			@slot('active') Пользователи @endslot
		@endcomponent
		<hr>
	</div>

	{{-- Create Article Btn --}}
	<div class="row">
		<a href="{{route('admin.user_managment.user.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Новый пользователь</a>
	</div>

	<hr>

	<div class="row">

		@if ($errors->has('errorDelete'))
			<div class="alert alert-danger" role="alert">{{ $errors->first('errorDelete') }}</div>
		@endif

		@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
		@endif

		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>ID</th>
				<th>Имя</th>
				<th>Email</th>
				<th>Роль</th>
				<th>Регистрация</th>
				<th>Действия</th>
			</thead>
			<tbody>
				@forelse ($users as $user)
					
					<tr>
						<td>{{ $numeration++ }}</td>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->roles()->pluck('key')->implode(', ') }}</td>
						<td>
							{{ $user->created_at }}
						</td>
						<td>
							<form class="flex" onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
	
								<a class="btn btn-default" href="{{route('admin.user_managment.user.edit', $user)}}"><i class="mdi mdi-table-edit"></i></a>
	
								<button class="btn"><i class="mdi mdi-delete"></i></button>
							</form>
						</td>
					</tr>
				@empty
						<tr>
							<td class="text-center" colspan="3">
								<h2>Это странно, но здесь пусто...</h2>
							</td>
						</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						<ul class="pagination pull-right">
							{{ $users->links() }}
						</ul>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
		
@endsection


