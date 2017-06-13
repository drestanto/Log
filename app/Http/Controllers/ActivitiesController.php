<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ActivitiesController extends Controller
{
    public function showAll($username) {
    	$user = \App\User::whereName($username)->firstOrFail();
    	if (Auth::user()->name == $user->name) {
	    	$activities = $user->activity()->with(['user', 'subject'])->get();

	    	return view('activity', compact('activities'));
	    } else return "You are not logged in as " . $username;
    }
}
