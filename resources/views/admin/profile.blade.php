@extends('layout')

@section('title', 'Profile')

@section('main')
	<h1>Hello {{$user->name}}</h1>
	<div class="row">
		<div class="col-8">
			<a href="/search">Add a note</a>
			<ul>
				@forelse($notes as $note)
					<li style="display:flex">
						<a href="/notelists/{{$note->note_id}}">
							{{$note->name}}
						</a>
						<form action="/notelists/{{$note->note_id}}" method="post">
							@method("delete")
							@csrf
							<button type="submit" class="btn btn-primary">Delete This Note</button>
						</form>
					</li>
				@empty
					<li>No Saved Notes</li>
				@endforelse
			</ul>
		</div>
	</div>
@endsection
