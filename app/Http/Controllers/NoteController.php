<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
    	return view('note', [
    		'url' => $request->query('search')
    	]);
    }
}
