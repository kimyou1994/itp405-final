<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
	public function index() {
		$user = Auth::user()->id;
    	$query = DB::table('notes')
    			->where('user_id', '=', $user);
    	$notes = $query->get();
		return view('admin/profile', [
			'user' => Auth::user(),
			'notes' => $notes
		]);
	}
}
