<div class="row">
	<div class="form-group">
		<label for="key">Роль</label>
		<input type="text" autocomplete="off"
					 @if ($errors->has('key')) class="form-control form-error" @else class="form-control" @endif
					 name="key" placeholder="key" value="@if(old('key')){{old('key')}}@else{{$role->key or ""}}@endif">

		@if ($errors->has('key'))
			<div class="form-error-list">{{ $errors->first('key') }}</div>
		@endif
	</div>

	<div class="form-group">
		<label for="permissions">Permissions</label>
		<select name="permissions[]" class="form-control select-multiple-200" multiple>
			@foreach ($permissions as $permission)
				<option value="{{$permission->id or ""}}"
					@isset($role->id)
						@foreach ($role->permissions as $role_permission)
								@if ($permission->id == $role_permission->id)
									selected="selected"
								@endif
						@endforeach
					@endisset
				>{{$permission->key or ""}}</option>
			@endforeach
		</select>
	</div>

</div>

	<hr>

	<input class="btn btn-primary pull-right" type="submit" value="Сохранить">

