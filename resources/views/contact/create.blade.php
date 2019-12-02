@extends('layouts.app');

@section('title' , 'Contact Us')


@section('content')

@if(! session()->has('message'))
<h1>contact us</h1>

<form action="/contact" method = "POST">
<div class="form-group">
		<label for="name">name </label>
		<input type="text" name = "name" value = "{{old('name') }}" class = "form-control">
	</div>
	<div>{{ $errors->first('name')}}</div>

	<div class="form-group">
		<label for="email">email </label>
		<input type="text" name = "email" value = "{{old('email')}}" class = "form-control">
	</div>
	<div>{{ $errors->first('email')}}</div>

	<div class="form-group">
		<label for="message">message </label>
		<textarea id="message" name = "message" col = '30' row = '10' class = "form-control">{{old('message')}}</textarea>
		<div>{{ $errors->first('message')}}</div>

	</div>
	@csrf
	<button type = "submit" class ="btn btn-primary">Send message</button>
</form>
@endif

@endsection