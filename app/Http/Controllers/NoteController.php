<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		// xml to object | http://php.net/manual/en/function.simplexml-load-string.php
		//$video_obj = simplexml_load_string($video_feed);
		// Get the title string to a variable
		//$video_str = $video_obj->entry->title;
		$data = json_decode($video_feed);
    	return view('note', [
    		'url' => 'https://www.youtube.com/embed/' . $youtube_id,
    		'author' => $data->author_name,
    		'title' => $data->title,
    		'channel' => $data->author_url
    	]);
    }
}
