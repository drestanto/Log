<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function showAll($username) {
    	$user = \App\User::whereName($username)->firstOrFail();
    	$activities = $user->activity()->with(['user', 'subject'])->get();

    	return view('activity', compact('activities'));
    }
}
