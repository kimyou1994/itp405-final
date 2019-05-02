@extends('layout')

@section('title', 'Search')

@section('main')
	<div style="height: 700px;">
		<h2 class="w3-wide w3-center">Search Youtube Lecture to Take a Note!</h2>
		<form class="w3-wide w3-center" action="/notelists" method="get">
	    	<input type="text" id ="url" name="url" size="35" placeholder="Paste youtube url here!">
	    	<button class="w3-button" type="submit">Take Note</button>
	   		<a href="/" class="w3-button">Clear</a>
		</form>
	</div>
@endsection