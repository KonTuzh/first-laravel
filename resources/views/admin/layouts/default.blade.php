<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Styles -->
	@yield('styles')
	<link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="logo" href="{{ url('/') }}" title="{{ config('app.name') }}">
						<picture>
							<source srcset="/images/branding/logo.svg" type="image/svg+xml">
							<img class="img-responsive" src="/images/branding/logo.png" alt="{{ config('app.name') }}">
						</picture>
					</a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						<li><a href="{{route('admin.index')}}">Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Блог</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{route('admin.category.index')}}">Категории</a></li>
								<li><a href="{{route('admin.article.index')}}">Статьи</a></li>
							</ul>
						</li>
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@guest
							<li><a href="{{ route('login') }}">Вход</a></li>
							<li><a href="{{ route('register') }}">Регистрация</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											<i class="mdi mdi-logout-variant"></i> Выйти
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/admin/app.js') }}"></script>
	@yield('scripts')
	<script src="{{ asset('js/admin/main.js') }}"></script>
</body>
</html>
