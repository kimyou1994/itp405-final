<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;

class NoteController extends Controller
{
    public function index(Request $request)
    {
    	$url = $request->query('url');
    	$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
	    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

	    if (preg_match($longUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }

	    if (preg_match($shortUrlRegex, $url, $matches)) {
	        $youtube_id = $matches[count($matches) - 1];
	    }
	    // Get video feed info (xml) from youtube, but only the title | http://php.net/manual/en/function.file-get-contents.php
	    $video_feed = file_get_contents("http://www.youtube.com/oembed?url=".$url."&format=json");

		$data = json_decode($video_feed);
    	return view('note', [
    		'youtube_id' => 'https://www.youtube.com/embed/' . $youtube_id,
    		'author' => $data->author_name,
    		'title' => $data->title,
    		'channel' => $data->author_url
    	]);
    }

    public function note($note_id = null) 
    {
        if ($note_id) {
            $note = DB::table('notes')
                ->where('note_id', '=', $note_id)
                ->first();
        }else {
            return view('/profile');
        }
        return view('display', [
            'youtube_id' => $note->url,
            'author' => $note->author,
            'title' => $note->name,
            'channel' => $note->channel,
            'note' => $note->note,
            'note_id' => $note->note_id
        ]);
    }
    public function store(Request $request) 
    {
        $input = $request->all();
        $validation = Validator::make($input, [
            'note' => 'required|min:5'
        ]);
        if ($validation->fails()) {
            return redirect('/notelists')
                ->withInput()
                ->withErrors($validation);
        }
        DB::table('notes')->insert([
            'name' => $request->name,
            'url' => $request->url,
            'author' => $request->author,
            'channel' => $request->channel,
            'note' => $request->note,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/profile');
    }

    public function delete($note_id = null) 
    {
        if ($note_id)  {
            DB::table('notes')->where('note_id', $note_id)->delete();
        }
        return redirect('/profile');
    }

    public function edit(Request $request, $note_id = null)
    {
        if ($note_id) {
            DB::table('notes')
                ->where('note_id', $note_id)
                ->update(['note' => $request->note]);
        }
        return redirect('/profile');
    }
}
