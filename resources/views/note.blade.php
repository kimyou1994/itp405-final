@extends('layout')

@section('title', 'Take Note')

@section('main')
	<h1>Take Notes</h1>
	<form action="/notelists" method="post">
		@csrf
		<input type = "hidden" name = "url" value = "{{$youtube_id}}" />
		<input type = "hidden" name = "name" value = "{{$title}}" />
		<input type = "hidden" name = "author" value = "{{$author}}" />
		<input type = "hidden" name = "channel" value = "{{$channel}}" />
		<small>{{$errors->first('note')}}</small><br>
		<div style="display:flex;">
			<iframe width="840" height="485" src="{{$youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
			<textarea id="note" name="note" value= "{{old('note')}}" cols = "65" rows = "20" style="resize: none;">Write Note here!</textarea>
		</div>
		<b>{{$title}}</b> by {{$author}} <br>
		Visit author's channel <a href="{{$channel}}" target="_blank">here</a><br>
		@if (Auth::check())
			<button type="submit" class="w3-button ">
				Save This Note
			</button>
		@endif
	</form>

@endsection