@extends('layouts.default')

@section('title')
	{{ $user->name }} | pick-a-track
@stop

@section('content')
	{{ dd($user); }}
@stop
