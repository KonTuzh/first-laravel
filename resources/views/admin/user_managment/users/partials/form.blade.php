<div class="row">
	<div class="form-group col-md-6">
		<label for="name">Имя</label>
		<input type="text" autocomplete="off"
					 @if ($errors->has('name')) class="form-control form-error" @else class="form-control" @endif
					 name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name or ""}}@endif">

		@if ($errors->has('name'))
			<div class="form-error-list">{{ $errors->first('name') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
		<label for="email">Email</label>
		<input type="email" autocomplete="off"
					 @if ($errors->has('email'))	class="form-control form-error" @else class="form-control" @endif
					 name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email or ""}}@endif" required>
		
		@if ($errors->has('email'))
			<div class="form-error-list">{{ $errors->first('email') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
		<label for="password">Пароль</label>
		<input type="password" autocomplete="off"
					 @if ($errors->has('password'))	class="form-control form-error" @else class="form-control" @endif
					 name="password" placeholder="******">
		
		@if ($errors->has('password'))
			<div class="form-error-list">{{ $errors->first('password') }}</div>
		@endif
	</div>

	<div class="form-group col-md-6">
		<label for="password_confirmation">Подтверждение пароля</label>
		<input type="password" autocomplete="off"
					 @if ($errors->has('password'))	class="form-control form-error" @else class="form-control" @endif
					 name="password_confirmation" placeholder="******">
		
		@if ($errors->has('password_confirmation'))
			<div class="form-error-list">{{ $errors->first('password_confirmation') }}</div>
		@endif
	</div>

	<div class="form-group col-md-12">
		<label for="roles">Назначить роль пользователю</label>
		<select name="roles[]" class="form-control select-multiple-200" multiple>
			@foreach ($roles as $role)
				<option value="{{$role->id or ""}}"
					@isset($user->id)
						@foreach ($user->roles as $user_role)
								@if ($role->id == $user_role->id)
									selected="selected"
								@endif
						@endforeach
					@endisset
				>{{$role->key or ""}}</option>
			@endforeach
		</select>
	</div>

</div>

	<hr>

	<input class="btn btn-primary pull-right" type="submit" value="Сохранить">

