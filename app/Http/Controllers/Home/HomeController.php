<?php

namespace App\Http\Controllers\Home;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  	public function index()
  	{
		$currUser = Auth::user();
    	return Inertia::render('Dashboard/home')->with(['currUser' => $currUser]);
  	}
}
