@extends('layout')

@section('title', 'Profile')

@section('main')
	<h1>Hello {{$user->name}}</h1>
	<div class="row">
		<div class="col-12">
			<a href="/playlists/new">Add a note</a>
			<ul>
				@forelse($notes as $note)
					<li>
						<a href="/notes/{{$note->note_id}}">
							{{$note->name}}
						</a>
					</li>
				@empty
					<li>No Saved Notes</li>
				@endforelse
			</ul>
		</div>
	</div>
@endsection
