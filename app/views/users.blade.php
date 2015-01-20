@extends('layouts.default')

@section('title')
	users | pick-a-track
@stop

@section('content')
	<h1>Users!</h1>
	<p>This view lives in app/views/users.blade.php.</p>
	@foreach($users as $user)
		<p>{{ $user->name }}, {{ $user->email }}</p>
	@endforeach
@stop
