@extends('layout')

@section('title', 'Profile')

@section('main')
	<h2 class="w3-wide w3-center">Hello {{$user->name}}</h2>
	<ul  class="w3-ul w3-border w3-white w3-text-grey">
		@forelse($notes as $note)
			<li class="w3-padding">
				<a href="/notelists/{{$note->note_id}}">
					{{$note->name}}
				</a>
				<form  class=" w3-right "action="/notelists/{{$note->note_id}}" method="post">
					@method("delete")
					@csrf
					<button class="w3-tag w3-red w3-right " type="submit">Delete This Note</button>
				</form>
			</li>
		@empty
			<li class="w3-padding">No Saved Notes</li>
		@endforelse
	</ul>
@endsection
