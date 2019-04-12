@extends('layout')

@section('title', 'Invoices')

@section('main')
	<form action="/notelists" method="get">
    	<input type="text" name="search">
    	<button type="submit">Search</button>
   		<a href="/" class="btn btn-link">Clear</a>
  	</form>
@endsection