@extends('layout')

@section('title', 'Take Note on')

@section('main')
	<h1>Take Notes</h1>
	<div>
		<iframe width="840" height="485" src="{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<textarea cols = "70" rows = "20" style="resize: none;"></textarea>
	</div>
@endsection