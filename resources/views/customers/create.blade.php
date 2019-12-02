@extends('layouts.app');

@section('title' ,' Add new customer')


@section('content')

<h1>Add new customer</h1>

<form action ='/customers' method = 'POST' class = "pb-5" enctype="multipart/form-data">
@include('customers.form')
	<button type = 'submit' class = "btn btn-primary"> Add customer </button>
</form>


@endsection
