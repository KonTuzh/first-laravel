<header id="header" class="header-site">
	<nav class="navbar navbar-static-top">
		<div class="container-fluid flex">

			<!-- Left Side Of Navbar -->
			<ul class="nav">
				@include('layouts.top_menu', ['categories' => $categories])
			</ul>

			<!-- Branding Image -->
			<a class="logo" href="{{ url('/') }}" title="{{ config('app.name') }}">
				<picture>
					<source srcset="/images/branding/logo.svg" type="image/svg+xml">
					<img class="img-responsive" src="/images/branding/logo.png" alt="{{ config('app.name') }}">
				</picture>
			</a>
	
	
			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-right">
				<!-- Authentication Links -->
				@guest
					<li class="user-auth"><a href="{{ route('login') }}">Вход</a> / <a href="{{ route('register') }}">Регистрация</a></li>
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
				<li class="search-header">
					<i id="search-header-btn" class="mdi mdi-magnify"></i>
					<div class="search-wrapper">
						<div class="container">
							<form class="search-form">
								<input class="form-control" type="search" placeholder="Поиск по сайту..." aria-label="Search">
								<button class="btn" type="submit"><i class="mdi mdi-magnify"></i></button>
							</form>
						</div>
					</div>
				</li>
				<li class="white-list-header">
					<a href="#"><i class="mdi mdi-heart-outline"></i></a>
				</li>
				<li class="cart-header">
					<a href="#"><i class="mdi mdi-cart-outline"></i><span class="counter-number">35</span> <span class="price">$150.50</span></a>
				</li>
			</ul>

		</div>
	</nav>
</header>
