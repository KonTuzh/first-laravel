@extends('layouts.default')

@section('meta_title', "Авторизация")
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('login'))
@section('body_class', "login")

@section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="login-panel">
				<h2 class="text-center">Авторизация</h2>

				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label id="label-email" for="email" class="control-label">E-Mail</label>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif

						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label id="label-password" for="password" class="control-label">Пароль</label>
							<input id="password" type="password" class="form-control" name="password" required>

							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif

						</div>

						<div class="form-group">
							<label class="checkbox-group" for="checkbox">Запомнить меня
								<input id="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							</label>
						</div>
						

						<div class="form-group">
							<button type="submit" class="button">Войти</button>
							<a class="btn link-reset" href="{{ route('password.request') }}">Забыли пароль?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
