@extends('layouts.master')
@section('title', 'Test Page')

@section('content')
	<h1>This is content</h1>
	<p>abc</p>
	@component('button', ['data' => 'this is data'])
		<p>List User</p>
	@endcomponent

	@foreach($listUser as $user)
	<p>{{$user->name}}</p>
	@endforeach
@endsection
