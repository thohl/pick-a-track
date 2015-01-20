<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
			@yield('title')
		</title>
		<style>
			body {
				font-size: 20px;
			}
			@yield('style')
		</style>
	</head>
	<body>
		@yield('content')
	</body>
</html>
