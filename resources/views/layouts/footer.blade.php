<footer id="footer" class="footer-site">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<a class="logo" href="{{ url('/') }}" title="{{ config('app.name') }}">
				<picture>
					<source srcset="/images/branding/logo.svg" type="image/svg+xml">
					<img class="img-responsive" src="/images/branding/logo.png" alt="{{ config('app.name') }}">
				</picture>
			</a>
			<div class="footer-contacts">
				<div class="row">
						<i class="mdi mdi-clock"></i>
						<p><span>Режим работы:</span> Пн-Сб с 10:00 до 20:00 <span>Воскресенье выходной</span></p>
				</div>

				<div class="row">
						<i class="mdi mdi-phone"></i>
						<p><span>Телефон:</span> 8(800)000-00-00 <span>Звонок бесплатнтый</span></p>
				</div>

				<div class="row">
						<i class="mdi mdi-email-outline"></i>
						<p><span>E-mail:</span> info@cycle.shop</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="footer-nav-heading">Категории</div>
			<nav class="navbar">
				<ul class="footer-nav">
					<li><a href="#">Велосипеды</a></li>
					<li><a href="#">Аксессуары</a></li>
					<li><a href="#">Комплектующие</a></li>
					<li><a href="#">Экипировка</a></li>
					<li><a href="#">Распродажа</a></li>
					<li><a href="#">Каталог</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="footer-nav-heading">Информация</div>
			<nav class="navbar">
				<ul class="footer-nav">
					<li><a href="#">Оплата и доставка</a></li>
					<li><a href="#">О магазине</a></li>
					<li><a href="#">Гарантии</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="{{ route('blog.index') }}">Блог</a></li>
					<li><a href="#">Карта сайта</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="footer-nav-heading">Личный кабинет</div>
			<nav class="navbar">
				<ul class="footer-nav">
					<li><a href="#">Личный кабинет</a></li>
					<li><a href="#">История заказов</a></li>
					<li><a href="#">Избранное</a></li>
					<li><a href="#">Новостная рассылка</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="row footer-bottom">
		<div class="col-md-6">
			<address>Cycle.Shop © 2018 Разработал <a title="Konstantin Tuzhikov" target="_blank" href="https://vk.com/kontuzh">KonTuzh</a> в рамках изучения Laravel.</address>
		</div>
	</div>
</div>
</footer>