<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Meta as Controller;

class Home extends Controller
{
    //
	public function index(){			
		$data['title']  = 'Selamat Datang';
		$data = array_merge($this->meta(), $data) ;
	    $data = array_merge($this->slider(), $data) ;
	 
		return view('frontend.content.home',compact('data'));	
	}
}
