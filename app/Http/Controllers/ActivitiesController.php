<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function showAll($username) {
    	$user = \App\User::whereName($username)->firstOrFail();
    	return $user->activity;
    }
}
