@extends('layout')

@section('title', 'Take Note on')

@section('main')
	<h1>Take Notes</h1>
	<div>
		<iframe width="840" height="485" src="{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<textarea cols = "65" rows = "20" style="resize: none;"></textarea>
	</div>
	<b>{{$title}}</b> by {{$author}} <br>
	Visit author's channel <a href="{{$channel}}" target="_blank">here</a>
@endsection