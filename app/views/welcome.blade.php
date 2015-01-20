@extends('layouts.default')

@section('title')
	welcome to pick-a-track
@stop

@section('style')
	a {
		display: block;
		margin: 25px;
	}

	body {
		margin: 0;
		font-family: 'Georgia', sans-serif;
		text-align: center;
		color: #999;
	}

	h1 {
		font-size: 32px;
		margin: 16px 0 0 0;
	}

	.welcome {
		width: 300px;
		height: 200px;
		margin: 20% auto 0% auto;
	}
@stop

@section('content')
	<div class="welcome">
		<h1>welcome to pick-a-track.</h1>
		<a href="/users">view users</a>
	</div>
@stop
