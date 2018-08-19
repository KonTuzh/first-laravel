@extends('layouts.default')

@section('meta_title', "Регистрация")
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('register'))
@section('body_class', "register")

@section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="panel register-panel">
				<h2 class="text-center">Регистрация</h2>

				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="control-label">Имя</label>
							<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="control-label">E-Mail</label>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="control-label">Пароль</label>
							<input id="password" type="password" class="form-control" name="password" required>

							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group">
							<label for="password-confirm" class="control-label">Подтверждение пароля</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>

						<div class="form-group">
							<button type="submit" class="button">Регистрация</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
