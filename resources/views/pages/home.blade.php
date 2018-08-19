@extends('layouts.default')

@section('meta_title', "Интернет-магазин CycleShop")
@section('meta_description', "")
@section('meta_keywords', "")
@section('meta_author', "KonTuzh")
@section('canonical', route('home.index'))
@section('body_class', "homepage")

@section('content')

<section class="top-section">
	<div class="container-fluid">
		<div class="row">
			<div class="homepage-first-slider col-lg-6 col-md-12">
				<div id="homepage-first-slider"></div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="row">
					<div class="product-category col-md-12">
						<div class="product-category-item" style="background-image: url(images/thsdblueside_2048x1365.jpg)">
							<p class="label">Велошлем</p>
							<p class="heading">Thousand Helmet</p>
							<a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
					<div class="product-category col-md-6">
						<div class="product-category-item" style="background-image: url(images/50mm-Wheels_White_Front_2048x1365.jpg)">
							<p class="label">Колеса</p>
							<p class="heading">Pure Fix 700C</p>
							<a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
					<div class="product-category col-md-6">
						<div class="product-category-item" style="background-image: url(images/Tektro_Brake-Kit_Black_Front_2048x1365.jpg)">
							<p class="label">Тормоза</p>
							<p class="heading">Pure Cycles</p>
							<a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
</section>

<section class="popular-in-week">
	<div id="popular-product-slider"></div>
</section>

<section class="discounts">
	<div class="container-fluid">
		<div class="row">
			<div class="discounts-image col-md-6">
				<img class="img-responsive" src="/images/products/01.jpg">
			</div>
			<div class="col-md-6 align-self-center">
				<p class="discounts-label">Скидки на аксессуары</p>
				<h2 class="discounts-heading">Прокачай свой байк с максимальной выгодой!</h2>
				<p class="discounts-description">Мы собрали самые лучшие предложения на запчасти и аксессуары, чтобы максимально упростить доработку велосипеда под ваши требования да еще и со скидкой до 70%.</p>
				<a class="button item-link" href="#">Вперед <i class="mdi mdi-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="newsletter">
	<div class="background" style="background-image: url(images/newsletter-bg.jpg)"></div>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-sm-2 newsletter-icon">
				<img class="img-responsive" src="/images/icons/928961.svg">
			</div>
			<div class="newsletter-cta col-sm-4">Подпишись на рассылку <span>и будь в курсе всех новинок и акций</span></div>
			<div class="newsletter-form col-sm-5 offset-sm-1">
					<form class="subscribe-form">
						<input class="form-control" type="email" name="email" placeholder="E-mail">
						<button class="btn" type="submit">Подписаться</button>
					</form>
			</div>
		</div>
	</div>
</section>

<section class="blog">
	<div class="container-fluid">
		<div class="row align-items-center">
			<h2 class="section-heading">Новое в блоге</h2>
			<a class="blog-link" href="{{ route('blog.index') }}">Перейти в блог</a>
		</div>
		<div class="row">

			<a href="#" class="post-link col-md-6">
				<span class="thumbnail" style="background-image: url(images/blog/simon-mumenthaler-206519-unsplash.jpg)"></span>
				<h3 class="title">«Неугоняемый» велосипед родом из Чили поступает в производство</h3>
				<p class="description_short">Порой даже самые лучшие велозамки не могут обеспечить защиту велосипеда от кражи. Чилийские инженеры говорят, что нашли эффективный способ борьбы с велосипедными ворами. Они создали первый в мире «неугоняемый» велосипед.</p>
				<p class="info flex">
					<span class="created_at"><i class="mdi mdi-clock"></i> вчера</span>
					<span class="viewed"><i class="mdi mdi-eye"></i> 86</span>
				</p>
			</a>

			<a href="#" class="post-link col-md-3">
				<span class="thumbnail" style="background-image: url(images/blog/blubel-103318-unsplash.jpg)"></span>
				<h3 class="title">Топ-10 женских велосипедов</h3>
				<p class="description_short">Комфортные велосипеды для женщин часто отличаются широким мягким седлом, большим высоким рулём, низкой рамой...</p>
				<p class="info flex">
					<span class="created_at"><i class="mdi mdi-clock"></i> 23 июля 2018</span>
					<span class="viewed"><i class="mdi mdi-eye"></i> 156</span>
				</p>
			</a>

			<a href="#" class="post-link col-md-3">
				<span class="thumbnail" style="background-image: url(images/blog/nicolas-picard-208276-unsplash.jpg)"></span>
				<h3 class="title">Завершился очередной турнир по BMX Flatland</h3>
				<p class="description_short">Flatland - это направление, которое ещё называют «танцы на велосипеде». Суть дисциплины заключается в том, чтобы...</p>
				<p class="info flex">
					<span class="created_at"><i class="mdi mdi-clock"></i> 15 июля 2018</span>
					<span class="viewed"><i class="mdi mdi-eye"></i> 218</span>
				</p>
			</a>

		</div>
	</div>
</section>

<section class="advantages">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="advantage"><img class="img-responsive" src="/images/icons/411755.svg"> <h5>Цена/качество</h5></div>
				<p>Integer et congue sapien, vel volutpat orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque sit amet feugiat leo. Maecenas tempus facilisis libero, vel dignissim ipsum laoreet ac.</p>
			</div>
			<div class="col-md-4">
				<div class="advantage"><img class="img-responsive" src="/images/icons/411780.svg"> <h5>Доставка по всей России</h5></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quam magna, ornare nec mollis sed, dictum a urna. Fusce eleifend leo iaculis elit euismod porttitor a sit amet elit. Sed congue nisi at dui molestie, et egestas turpis faucibus.</p>
			</div>
			<div class="col-md-4">
				<div class="advantage"><img class="img-responsive" src="/images/icons/411750.svg"> <h5>Оплата и возврат</h5></div>
				<p>Proin nec turpis quis augue imperdiet ultrices quis ac sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce sapien quam, feugiat at auctor ut, mollis sed risus. Vivamus nec molestie sem.</p>
			</div>
		</div>
	</div>
</section>


@endsection