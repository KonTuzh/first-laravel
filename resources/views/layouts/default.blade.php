<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>@yield('meta_title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="@yield('meta_author')">
	<meta name="description" content="@yield('meta_description')">
	<meta name="keywords" content="@yield('meta_keywords')">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ff42ed"> <!-- Custom Browsers Color Start -->
	<link rel="canonical" href="@yield('canonical')">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app" class="@yield('body_class')">
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
