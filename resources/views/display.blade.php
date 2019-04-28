@extends('layout')

@section('title', 'Saved Note')

@section('main')
	<h1>{{$title}}</h1>
	<div style="display:flex;">
		<iframe width="840" height="485" src="{{$youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
		<p style="padding-left: 10px">{{$note}}</p>
	</div>
	<small class="text-danger">{{$errors->first('note')}}</small>
	<b>{{$title}}</b> by {{$author}} <br>
	Visit author's channel <a href="{{$channel}}" target="_blank">here</a><br>
	<button type="button" onclick="" class="btn btn-primary">
		Edit This Note
	</button>

@endsection