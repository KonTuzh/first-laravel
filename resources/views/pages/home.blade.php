<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
	<meta name="description" content="{{ $description }}">
	<meta name="author" content="{{ $author }}">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link href="/css/app.css" rel="stylesheet">
</head>
<body class="homepage">
	<section id="top" class="coins-section">
		<div class="container">
			<div class="row">
				<h1>{{ $h1 }}</h1>
				<p class="subtitle">{{ $subtitle }}</p>
				<a class="btn" href="/">{{ $btnText }}</a>
			</div>
		</div>
		<div class="count-particles" id="particles-js">
			<span class="js-count-particles"></span>
		</div>
	</section>

	<script src="/js/lib/jquery.js" type="text/javascript"></script>
	<script src="/js/lib/particles.js" type="text/javascript"></script>
	<script src="js/app.js" type="text/javascript"></script>
</body>
</html>