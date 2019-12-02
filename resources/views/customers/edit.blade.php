@extends('layouts.app');

@section('title' ,'Adit customer info')


@section('content')

<h1>Edite  {{ $customer->name }}  details</h1>

<form action ="{{route('customers.update' , ['customer' => $customer])}}" method = 'POST' class = "pb-5" enctype="multipart/form-data">
@method('PATCH')
@include('customers.form')
	<button type = 'submit' class = "btn btn-primary"> Save customer </button>
</form>


@endsection
