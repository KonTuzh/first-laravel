@extends('admin.layouts.default')

@section('content')

<div class="container">
	<div class="row">
		@component('admin.components.breadcrumb')
			@slot('title') Роли пользователей @endslot
			@slot('parent') {{0}} @endslot
			@slot('parent_title') {{0}} @endslot
			@slot('active') Роли @endslot
		@endcomponent
		<hr>
	</div>

	<div class="row">
		<a href="{{route('admin.user_managment.role.create')}}" class="btn btn-primary pull-right"><i class="mdi mdi-library-plus"></i> Новая роль</a>
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
				<th>Название</th>
				<th>permissions</th>
				<th>Добавлена</th>
				<th>Действия</th>
			</thead>
			<tbody>
				@forelse ($roles as $role)
					
					<tr>
						<td>{{ $numeration++ }}</td>
						<td>{{ $role->id }}</td>
						<td>{{ $role->key }}</td>
						<td>{{ $role->permissions()->pluck('key')->implode(', ') }}</td>
						<td>{{ $role->created_at }}</td>
						<td>
							@can ('isAdmin')
								<form class="flex" onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.user_managment.role.destroy', $role)}}" method="post">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
		
									<a class="btn btn-default" href="{{route('admin.user_managment.role.edit', $role)}}"><i class="mdi mdi-table-edit"></i></a>
		
									<button class="btn"><i class="mdi mdi-delete"></i></button>
								</form>
							@endcan
							
						</td>
					</tr>
				@empty
						<tr>
							<td class="text-center" colspan="3">
								<h2>Ролей нет</h2>
							</td>
						</tr>
				@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						<ul class="pagination pull-right">
							{{ $roles->links() }}
						</ul>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
		
@endsection


