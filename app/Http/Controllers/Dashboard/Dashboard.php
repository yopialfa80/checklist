<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard as Controller;


class Dashboard extends Controller
{
    //
	public function index(){
		
		$data['title']   = 'Welcome to Dashboard!';
		$data['user']    = $this->user();
		
		return view('backend.content.home',compact('data'));
	}

}
