<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link href="/css/style.css" rel="stylesheet">
</head>
<body class="page-not-found">
		<div class="container">
			<a class="header-logo" href="<?=ROOT?>"><img class="img-response" src="<?=ROOT?>images/branding/logo.png" alt="{{ $sitename }}"></a>
			<div class="err"></div>
			<p class="msg"><span>404</span>Такой страницы не существует...<br>Возможно она была удалена или перемещена.</p>
			<p class="msg"><a class="btn" href="<?=ROOT?>">Вернуться на главную</a></p>
		</div>
</body>
</html>