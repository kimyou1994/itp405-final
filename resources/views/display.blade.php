@extends('layout')

@section('title', 'Saved Note')

@section('main')
	<h1>{{$title}}</h1>
	<form action="/notelists/{{$note_id}}" method="post">
		@csrf
		@method('patch')
		<div style="display:flex;">
			<iframe width="840" height="485" src="{{$youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
			<textarea id="note" name="note" value= "{{old('note')}}" cols = "65" rows = "20" style="resize: none;">{{$note}}</textarea>
		</div>
		<small class="text-danger">{{$errors->first('note')}}</small>
		<b>{{$title}}</b> by {{$author}} <br>
		Visit author's channel <a href="{{$channel}}" target="_blank">here</a><br>
		<button type="submit"  class="w3-button">
			Edit This Note
		</button>
	</form>
@endsection