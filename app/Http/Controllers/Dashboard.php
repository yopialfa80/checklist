<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function User()
    {
        return Auth::user();
    }
	
	
    	
}
