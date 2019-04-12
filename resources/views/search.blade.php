@extends('layout')

@section('title', 'Invoices')

@section('main')
	<form action="/notelists" method="get">
    	<input type="text" id ="url" name="url">
    	<button type="submit">Take Note</button>
   		<a href="/" class="btn btn-link">Clear</a>
  	</form>
@endsection