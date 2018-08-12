<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('meta')
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link href="/css/materialdesignicons.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
</head>
<body class="@yield('body-class')">
	<section id="main" class="coins-section">
		@yield('content')
	</section>
</body>
</html>