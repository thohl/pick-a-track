@extends('layouts.default')

@section('title')
	users | pick-a-track
@stop

@section('style')
		th, td {
			background-color: #dedede;
			padding: 8px 25px;
		}
@stop

@section('content')
	<h1>Users!</h1>
	<p>This view lives in app/views/users.blade.php.</p>
	<table>
		<tr><th>ID</th><th>Name</th><th>Email Address</th></tr>
		@foreach($users as $user)
			<tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
		@endforeach
	</table>
@stop
