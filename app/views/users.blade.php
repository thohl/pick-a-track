<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>users | pick-a-track</title>
</head>
<body>
	<h1>Users!</h1>
	<p>This view lives in app/views/users.blade.php.</p>
	@foreach($users as $user)
		<p>{{ $user->name }}, {{ $user->email }}</p>
	@endforeach
</body>
</html>
